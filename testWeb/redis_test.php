<?php
/**
 * Created by PhpStorm.
 * User: sxx
 * Date: 2017/8/3
 * Time: 11:53
 */
//echo 'ok';
$redis=new Redis();
$isok=$redis->connect('127.0.0.1','6379');

//string实例
//$redis->set('key','hello');
//$redis->append('key',' World!');
//echo $redis->get('key');
//echo $redis->type('key');
//echo $redis->echo('will close...');
//$redis->close();
//list实例
//存储数据到列表中
//if($redis->exists("tutorial-list")){
//    $redis->delete("tutorial-list");
//}
//$redis->lpush("tutorial-list", "Redis");
//$redis->lpush("tutorial-list", "Mongodb");
//$redis->lpush("tutorial-list", "Mysql");
//$arList = $redis->lrange("tutorial-list", 0 ,-1);
//print_r($arList);
//

//
//$store=1000;
//$res=$redis->lLen('goods_store');
//echo $res."\r\n";
//$count=$store-$res;
//for($i=0;$i<$count;$i++){
//    $redis->lpush('goods_store',1);
//}
//echo $redis->llen('goods_store');
//$redis->lPop('goods_store');
//echo $redis->llen('goods_store');
//$redis->delete('goods_store');

//$data= $redis->lPop('users');
//$redis->delete('goods_store_1');
echo $redis->llen('seckill_free_num_1');
echo $redis->llen('seckill_use_num_1');
//$redis->delete('users_1');
//echo $redis->sCard('users_1');
//echo $redis->lLen('user_1');
//$len=$redis->sMembers('users');
//$is_exist=$redis->sIsMember('users',100);
//$is_delete=$redis->sRem('users',100);
//var_dump($len);
//var_dump($data) ;































