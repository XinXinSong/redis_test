<!DOCTYPE html>
<html xml:lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="description" content="网页描述">
</head>
<body>
<!--预定义变量-->
<!--预定义变量$_POST 小计算器案例-->
<?php
//echo 'Hello!';
phpinfo();
//if(!empty($_POST)){
//    $data1=$_POST['data1'];
//    $data2=$_POST['data2'];
//    $type=$_POST['type'];
//    if($type=="+"){
//        $res=$data1+$data2;
//    }
//    if($type=="-"){
//        $res=$data1-$data2;
//    }
//    if($type=="*"){
//        $res=$data1*$data2;
//    }
//    if($type=="/"){
//        $res=$data1/$data2;
//    }
//}else{
//    $data1='';
//    $data2='';
//    $type="+";
//    $res='';
//}
?>
<!--当action为空字符串时，为提交到本页面-->
<form action="" method="post">
<!--    <input type="text" name="data1" value="--><?php //echo $data1;?><!--"/>-->
<!--    <select name="type">-->
<!--        <option value="+" --><?php //if($type=='+'){echo "selected='selected'";} ?><!-- >+</option>-->
<!--        <option value="-" --><?php //if($type=='-'){echo "selected='selected'";} ?><!-- >-</option>-->
<!--        <option value="*" --><?php //if($type=='*'){echo "selected='selected'";} ?><!-- >*</option>-->
<!--        <option value="/" --><?php //if($type=='/'){echo "selected='selected'";} ?><!-- >/</option>-->
<!--    </select>-->
<!--    <input type="text" name="data2" value="--><?php //echo $data2;?><!--"/>-->
<!--    <input type="submit" value="="/>-->
<!--    <input type="text" value="--><?php //echo $res;?><!--"/>-->
<!--    </br>-->
    <!-- reset按钮不是清空，是将标签数值重置到默认值-->
<!--    <input type="reset" value="重置" />-->
</form>

<!--预定义变量$_GET 代表用户通过get 方式提交的数据，有4种get形式：-->
<!--
形式1：
<form action="目标" method="get">
   <input type="text" name="data1"/>
    <input type="submit" value="提交"/>
</form>
形式2：
<a href="目标文件.php?参数名1=参数1&参数名2=参数2">链接文字</a>
形式3：
<script>
   location href="目标文件.php?参数名1=参数1&参数名2=参数2";
</script>
说明：通过js技术实现的页面跳转，跟a标签的连接功能完全一致
形式4：
<script>
   location.assign="目标文件.php?参数名1=参数1&参数名2=参数2";
</script>
形式5：
<?php //
//header("location:目标文件.php?参数名1=参数1&参数名2=参数2");
//?>
-->

<!--预定义变量$_REQUEST：同时存储了$_POST和$_REQUEST的数据合集
-->

<!--预定义变量$_SERVER：代表在一次浏览网页的过程中浏览器端的一些信息或服务器端的一些信息
注意：这种信息，随着不同的页面呵不同的服务器以及不同的时刻都可能是不同的；
要求:大约有30个左右的信息，我们只要知道其中5个左右，
    主要有：
    $_SERVER['REMOTE_IP']:获取访问者ip地址
    $_SERVER['SERVER_IP']:获取服务器的ip地址
    $_SERVER['SERVER_NAME']:获取访问者ip地址
    $_SERVER['REMOTE_IP']:获取服务器的名字，其实就是站点设置中的servername
    $_SERVER['DOCUMENT_ROOT']:获取站点的真是物理地址，其实就是站点设置中的documentroot
    $_SERVER['PHP_SELF']:获取当前网页的地址，不含域名部分
    $_SERVER['SCRIPT_FILENAME']:获取当前网页的地址的物理路径
    $_SERVER['QUERY_STRING']:获取当前网页地址中的所有get数据（就是？号后面部分），是一个整体字符串
-->
<?php
//echo "<pre>";
//print_r($_SERVER);
//echo "</pre>";
//echo "<table border='1'>";
//foreach($_SERVER as $key=>$value){
//    echo "<tr>";
//    echo "<td>$key</td>";
//    echo "<td>$value</td>";
//    echo "</tr>";
//}
//echo "</table>";
?>

<!--预定义变量$_GLOBALS :也是一个重复性数据（$_REQUEST也是重复性数据），它存储了我们自己定义的所有“全局变量”。
例如：
$v1=1;//定义了一个全局变量
此时，就有了一个这样的数据：$_GLOBAL['v1'],值为1
这个变量用于在局部范围不能使用全局变量的时候，有需要全局变量的值，此时可以用它来取全局变量的值。
-->

<!--常量：定义需大写-->
<?php
////常量定义语法1:
//define("A",1);
////常量的取值
//echo "</br>常量A的值是：".A;
////定义形式2：
//const B=2;
//echo "</br>常量B的值是：".B;
////取值形式：
//$d= constant('B')+constant('A');
//echo "</br>".$d;
////判断常量是否存在
//if(define("C")){
//    echo "常量C已存在！";
//}else{
//    echo "常量C不存在！";
//}
?>
<!--
预定义常量
//M_PI:圆周率的常量值
//PHP_OS:php运行所在的操作系统
//PHP_VERSION:php的版本号
//PHP_INT_MAX:php中的最大整数值
//......

魔术常量
常量的形式，但没有常量的“恒常”的含义。其值是有变化的
_FILE_:当前网页所在的文件
_DIR_：当前网页所在的文件夹
_LINE_：代表这个常量所在的行号
-->

<!--数据类型
总体划分：8种：
1.基本类型（标量类型）：
1.1整数 int,integer：
3种写法：
$n=123//10进制;dec
$n=0123//8进制；oct
$n=0x123//16进制；hex
$n=0b1010//2进制；bin
进制转换：分2种
1）十进制转化为其他三种进制
2）其他三种进制转化为十进制
-->
<?php
//$n=4;
//$s1=decbin($n);
//$s2=decoct($n);
//$s3=dechex($n);
//
//echo "</br>".$n."的二进制形式为:".$s1;
//echo "</br>".$n."的八进制形式为:".$s2;
//echo "</br>".$n."的十六进制形式为:".$s3;
?>
<!--
1.2浮点数 float,double,real
2种写法：
常规写法 $v1=123.456；
科学计数法 $v2=123.456E3 //含义为123.456乘以10的3次方，虽然结果是123456，但仍然是浮点数；
浮点数使用的细节
1)浮点数不应进行大小比较
  因为数字，最终的表示形式都是2进制
  绝大多数浮点数的2进制形式不能完全表达准确，最终只能”以很高的精度接近理论值“
  浮点数比较是不可靠的
  说明：php的输出做了一些处理，js的输出是真实情况
-->
<?php
//$v1=8.1;
//if($v1/3==2.7){
//    echo $v1."/3等于2.7";
//}else{
//    echo $v1."/3不等于2.7";
//}
//echo "</br>php中".$v1."/3等于".($v1/3);
?>
<script>
//    document.write("</br>js中8.1/3等于"+(8.1/3))
</script>
<!--
2）小数转二进制：乘以2并顺序取整数部分
3）当整数运算结果超出整数范围后，会自动转化为浮点数

1.3字符串 string
$str1="内容。。。";
$str2='内容。。。';
$str3=<<<"标识符A"
内容。。。
标识符A;
$str4=<<<'标识符A'
内容。。。
标识符A;
-->
<?php
//单引号字符串
//需要或者可以识别的转义字符:\\,\'
//实际上在单引号字符串中只有最后一个\才需要转义
//$str1='\apple\'Pen\\';
//echo $str1;
//双引号字符串
//需要或者可以识别的转义字符:\\,\",\n（换行）,\r（回车）,\t（tab键）,\$(表示“$”符，取消了其在双引号字符串中的“变量起始含义”)
//实际上在双引号字符串中只有最后一个\才需要转义
//$str2="Apple\"Pen\nPen\"Apple\$str2\\";
//echo $str2;
//双引号定界符字符串
//标识符为自己取得类似常量名的名称
//该字符串的结束一行只能出现该标识符本身和分号
//需要或者可以识别的转义字符:\\,\n（换行）,\r（回车）,\t（tab键）,\$(表示“$”符，取消了其在双引号字符串中的“变量起始含义”)
//$str3=<<<"A"
//apple"\nPen;
//A;
//echo $str3;
//单引号定界符字符串
//标识符为自己取得类似常量名的名称
//该字符串的结束一行只能出现该标识符本身和分号
//没有转义符(是什么直接输出什么)
//$str3=<<<'A'
//apple'\nPen;
//A;
//echo $str3;
?>
<!--
1.4布尔类型 bool,boolean
true,false
-->
<?php
//$v1=123;
//if($v1){ //对一个变量的直接判断的语法(0,0.0,null,"","0",array(),false,未定义变量 为假)
//    echo "\$v1是真,其值为{$v1}";
//}else{
//    echo "\$v1是假";
//}
?>
<!--
2.复合类型
数组 array
对象 object
3.特殊类型
空类型 null 这种类型只有一个数据，null
资源类型 resource
-->

<!--类型转换
1.自动转换
$v1=1+"2";//3
$v2="1"+"2";//3
$v3=1+"2abc";//3
$v4="1"+"2abc";//3
$v5="1abc"+"2def";//3
$v6="1abc"+"def2";//1
$v7="abc1"+"def2";//0 //只识别字符串前面的数字
$v8="1"+true;//2
$v9="1"+false;//1
2.强制转换:是一个简单的语法
形式：（目标类型）数据；
含义：将该数据转换为设定的目标类型；
通常的转换目标为：int,float,string,bool,array,object;
上述强制类型转换，并不改变变量本身数据或类型
-->
<?php
//$s1=123;
//echo "</br>$1为：";var_dump($s1);
//$s2=(float)$s1;
//echo "</br>$2为：";var_dump($s2);
//$s3=(string)$s1;
//echo "</br>$3为：";var_dump($s3);
//$s4=settype($s1,"bool");
//echo "</br>$4为：";var_dump($s4);
//echo "</br>$1为：";var_dump($s1);

//有关类型的系统函数
//var_dump():
//getType($变量名):
//setType($变量名,"目标类型"):
//isset(),empty(),unset()
//is_XX($变量名)
  //is_int($x):
  //is_float($x):
  //is_string($x):
  //is_numeric($x):数字
  //is_scalar($x):标量
?>

<!--
运算符
1.算数运算符：+ - * / %
针对数字进行运算
将不是数字的数据自动转换为数字
其中取余运算，只针对整数进行元算，如果不是整数会自动截取整数
2.自增自减（字符型的字母也可以自增自减）

-->

<!--
常见不同类型（标量类型）数据之间的比较规律：
1.如果比较的数据中，有布尔值，转为布尔值比较，布尔值比较只有一个规则：true>false
2.否则，如果有数字值就转为数字比较：常规比较
3.否则，如果两边都是纯数字字符串，转为数字比较
4.否则，就按字符串比较(对两边的字符串，一个一个从前往后去除字符并进行比较，谁“先大”，结果就是谁大)
-->
<?php
//var_dump("abc">true);//false:有布尔值，优先转变为布尔值
//var_dump(3>"12abc");//false:没有布尔值，有数字值，转变为数字值比较
//var_dump("3">"12");//false
//var_dump("3">"12abc");//true
//var_dump("abc">"e");//false
//var_dump("abc">"ab123");//true
?>

<!--
位运算符
基础规定：
1.位：就是二进制数字的每一个“位”，一个整数数字由32个位构成
2.位运算符是仅仅针对整数进行的运算
3.位运算符有如下几个：
  &:按位与；
  |:按位或：
  ~：按位非：按位取反
  ^:按位异或
4：
   &基本规则
       1&1==>>1
       1&0==>>0
       0&0==>>0
       0&1==>>0
   |基本规则
       1|1==>>1
       1|0==>>1
       0|0==>>0
       0|1==>>1
   ~基本规则
       ~1==>>0
       ~0==>>1
   ^基本规则：相同为0 不同为1
       1^1==>>0
       0^0==>>0
       0^1==>>1
5.整数的按位与运算
形式：
    $n1 & $n2 ;//n1,n2是2个任意整数
含义：
    将该2个整数的二进制数字形式（注意，都是32位）的每一个对应位上的数字进行基本按位与运算之后的结果

6.位运算符的应用实例：管理一组事物的开关状态
开关状态：现实中很多数据都是只有两种结果，对应的其实就是布尔类型的值
-->
<?php
//假设有5个灯泡需要管理，需要实现以下功能
//1.可以任意指定一个灯泡的当前状态
//2.可以打开指定的任意一个灯泡
//3.可以关闭指定的任意一个灯泡

////首先，需要设定对应的5个灯泡
//define("D1",1); //对应二进制：00000001
//define("D2",2); //对应二进制：00000010
//define("D3",4); //对应二进制：00000100
//define("D4",8); //对应二进制：00001000
//define("D5",16);//对应二进制：00010000
////然后定义个变量，该变量就代表5个灯泡的“任意组合状态”值
//$state=11; //其对应二进制为：  00001010，此时表示第二和第四个灯亮
////需求1：输出灯泡1的状态
////if($state & D1){
////    echo "<br/> 灯泡1是亮的";
////}else{
////    echo "<br/> 灯泡1是灭的";
////}
//ShowAll();
////所有灯的状态显示
//function ShowAll(){
//    echo "<p>";
//    for($i=1;$i<=5;$i++){
//        $s="D".$i;
//        if($GLOBALS['state']&constant($s)){
//            echo "<br/> 灯泡".$i."是亮的";
//        }else{
//            echo "<br/> 灯泡".$i."是灭的";
//        }
//    }
//    echo "</p>";
//}
?>
<!--
数组运算符：
+:数组联合，数组串联：将+右边数组合并到+左边数组的后边得到一个新数组，如果有重复键，则以左边的为主
==：如果两个数组具有相同的键名和键值（可以顺序和类型不同），则返回true
!= <>
===：如果两个数组具有相同的键名和键值（并且可以顺序和类型相同同），则返回true
!==

错误控制运算符@
通常用在数据库连接的地方
$link=@mysql_connect("数据库服务器地址","用户名","密码");
作用是：如果该连接失败，则屏蔽该失败的错误提示


运算符的优先级：
括号最优先，赋值最落后
先乘除后加减
大致：单目运算符>算术运算符>比较运算符>逻辑运算符（除了“非”运算符）


控制脚本执行顺序
die(字符串)/exit(字符串)
输出该字符串后，立即停止php的执行，包括后续的其他所有php和html代码部分
exit同样功能，可以不输出字符串
sleep($n):停止运行指定的秒数，等待过了指定的秒数后悔继续运行
-->
<?php
//echo("</br>A");
//die("</br>终止");
//echo("</br>B");
//echo("</br>C");
//echo("</br>当前时间：".date('Y-m-d H:m:s'));
//sleep(5);
//echo("</br>当前时间：".date('Y-m-d H:m:s'));
?>
<!--
文件加载：
include,require,include_once,require_once
使用形式完全一样，含义几乎一样，
只是在加载失败时是否重复加载这种情况有所不同
文件加载的路径问题：
相对路径：相对于当前网页文件所在位置定位某个被加载的文件位置，主要依赖
         ./:表示当前位置，即当前网页文件所在的位置（目录）
         ../:表示上一级位置，即当前网页文件所在位置的上一级目录位置
         include "./page.php" //当前网页文件所在位置的目录下的page.php文件
绝对路径：

文件载入和执行过程详解：
1.从include语句处退出php脚本模式（进入HTML代码模式）
2.载入include语句所设定的文件中的代码，并执行之（如同在当前文件中一样）
3.退出html模式，执行之后的php代码

4个载入文件语句的区别
include:载入文件失败时，报一个“提示错误”，然后继续执行后续代码,不判断是否重复载入
require：载入文件失败时，报错立即终止执行，不判断是否重复载入
通常，require用于在程序中，后续的代码依赖于载入的文件的时候
include_once和require_once同上

在被载入文件中return语句的作用
一个载入语句，如果载入成功，其实是有返回值的，为1；如果载入失败，则返回false
（虽然通常不使用返回值）$v1=include "";
但，被载入文件有return语句，有另外的机制和作用
1.return语句此时的作用是终止载入过程--该return语句的后续被载入文件的代码不再载入
2.return语句也可以用于被载入文件载入时返回一个数据，形式 return XX数据

错误分类
语法错误：
运行时错误：程序语法无错后，运行程序过程中遇到的错误，
          分3种：
          提示性错误：
          警告性错误：
          致命错误：
逻辑错误：

错误分级：
php语言中，将各种错误进行了不同级别的分类归纳
-->






























</body>
</html>
