<?php
/**
 * Created by PhpStorm.
 * User: sxx
 * Date: 2017/10/17
 * Time: 10:12
 */
require_once('common.php');
//
$userid=$_REQUEST['userid'];
$sku=$_REQUEST['sku'];
$res=common::getFree($sku,$userid);
if($res['result']==true){
    //加入到数据库（生成订单）
    //链接数据库
    $con=mysqli_connect('127.0.0.1','root','root','test');
    $orderid=$res['data']['orderid'].'_seckill_'.$res['data']['index'];
    $res= $con->query("INSERT INTO `order` (orderid,userid,`time`,sku,`status`) VALUES ('".$orderid."','".$userid."','".date('Y-m-d H:i:s',time())."','".$sku."','add')");
    //添加数据库失败
    if(!$res){
        common::returnFree($sku,$res['data']['index']);
        print('生成订单失败');
    }
    else{
        print('抢购成功'.$orderid);
    }

}
else{
    print($res['message']);
}



