<?php
/**
 * Created by PhpStorm.
 * User: sxx
 * Date: 2017/10/18
 * Time: 10:58
 */
class MyRedis{
    static function connect($sql){
        if($sql=='redis'){
            $redis=new Redis();
            $redis->connect('127.0.0.1','6379');
            return $redis;
        }
    }
}