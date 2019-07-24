<?php
/**
 * Created by PhpStorm.
 * User: sxx
 * Date: 2017/10/18
 * Time: 11:17
 */
require_once('MyRedis.php');
class common{
    static protected $redisConnect;
    static protected $validity_time = 10; // 有效期 5分钟
    /* 获取redis链接 */
    static public function getRedis(){
        if(empty(self::$redisConnect)){
            self::$redisConnect = MyRedis::connect('redis');
        }
        return self::$redisConnect;
    }
    /* 设置--初始化  该方法不要轻易调用，只有当设置秒杀活动商品时调用*/
    public static function setSeckillRedisKey($free_key, $use_key, $total_num){

        $redis = self::getRedis();
        $redis->delete($free_key);
        $redis->delete($use_key);

        for ($i=0; $i < $total_num; $i++) {
            $redis->rPush($free_key, 1);
        }
    }
    /* 获取空闲抢购*/
    static public function getFree($sku,$uid){
        $redis = self::getRedis();
        if(!$redis->exists('seckill_free_num_'.$sku)&&!$redis->exists('seckill_use_num_'.$sku)){
            return array('result' => false, 'message' => '抢购信息:该商品没有参与秒杀');
        }
        if(empty($uid)){
            return array('result' => false, 'message' => '抢购信息:用户ID不能为空');
        }
        //从空闲队列中取出一个
        $result=$redis->lPop('seckill_free_num_'.$sku);
        if($result){
            $orderid=self::get_orderno();
            // 添加使用数量
            $index = $redis->rPush('seckill_use_num_'.$sku, json_encode(array('uid' => $uid, 'time' => time(),'order'=>$orderid))) - 1;
            return array('result' => true, 'message' => '恭喜您，抢购成功','data'=>array('index'=>$index,'orderid'=>$orderid));
        }else{
            return array('result' => false, 'message' => '抢购信息:被抢光啦');
        }
    }

    /***
     * 归还空闲抢购(当未支付并且超时支付)
     * @param $sku
     * @param $index
     */
    static public function returnFree($sku,$index){
        $redis = self::getRedis();
        if(!$redis->exists('seckill_free_num_'.$sku)&&!$redis->exists('seckill_use_num_'.$sku)){
            return array('result' => false, 'message' => '抢购信息:该商品没有参与秒杀');
        }
        //取出要归还位置的用户
        $use_value=$redis->lGet('seckill_use_num_'.$sku,$index);
        if(!empty($use_value)){
            //删除占用位置
            $redis->lRem('seckill_use_num_'.$sku,$use_value,1);
            //归还空闲位置
            $redis->rPush('seckill_free_num_'.$sku,1);
            return array('result' => true, 'message' => '剔除成功','data'=>$index);
        }else{
            return array('result' => false, 'message' => '不存在索引','data'=>$index);
        }
    }


    /* 定时更新秒杀商品入口人数 */
    static public function poling_set_seckill_redis(){

        //去数据库中查询所有参与这个时间段内秒杀活动的商品sku
        $con=mysqli_connect('127.0.0.1','root','root','test');
        //测试数据
        $seckill_skus=[1];
        $redis = self::getRedis();
        foreach($seckill_skus as $seckill_sku){

            if($redis->exists('seckill_use_num_'.$seckill_sku)){

                $user_list=$redis->lRange('seckill_use_num_'.$seckill_sku,0,-1);
                foreach($user_list as $uk=>$uv){
                    $data = json_decode($uv, true);

                    if(time() - $data['time'] > self::$validity_time){
                        $result=self::returnFree($seckill_sku,$uk);

                        if($result['result']==true){
                            //删除订单
                            $res=$con->query("UPDATE `order` set `status`='delete' where orderid='".$data['order']."_seckill_".$uk."'");
                        }
                    }
                }
            }

        }
    }

    static public function get_orderno(){
        $i = rand(0,99999);
        if(99999==$i){
            $i=0;
        }
        $i++;
        $order_id = date('ymdHi').str_pad($i,5,'0',STR_PAD_LEFT);

        return $order_id;
    }

}