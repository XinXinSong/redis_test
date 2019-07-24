<?php
/**
 * Created by PhpStorm.
 * User: sxx
 * Date: 2017/10/16
 * Time: 16:20
 */
require_once('common.php');
//将要参与秒杀活动的商品放入redis队列中
$sku=$_REQUEST['sku'];
//echo $sku;
$active_store=$_REQUEST['store'];
//echo $active_store;
//$redis=new Redis();
//$isok=$redis->connect('127.0.0.1','6379');
//$res=$redis->lLen('goods_store'.'_'.$sku);
//$count=$active_store-$res;
//for($i=0;$i<$count;$i++){
//    $redis->lpush('goods_store'.'_'.$sku,1);
//}
//echo $redis->lLen('goods_store'.'_'.$sku);

common::setSeckillRedisKey("seckill_free_num_".$sku,"seckill_use_num_".$sku,$active_store);








