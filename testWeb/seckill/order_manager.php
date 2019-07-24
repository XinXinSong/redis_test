<?php
/**
 * Created by PhpStorm.
 * User: sxx
 * Date: 2017/10/17
 * Time: 14:39
 */
require_once('common.php');
//该操作是用户进行支付时执行此操作，该操作业务逻辑为：
$orderid=$_REQUEST['orderid'];
$sku=$_REQUEST['sku'];
$index=$_REQUEST['index'];
//此处支付调用
//支付成功后调用
common::deleteUse($sku,$index);


