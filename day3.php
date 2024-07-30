<?php

// ./ 代表当前目录
// ./day2.php 代表当前目录下的day2.php文件

// / 代表根目录

// ../ 代表上一级目录

// 1. __FILE__ 代表当前文件的路径
var_dump(__FILE__);

var_dump(__LINE__);

var_dump(__DIR__);

function getUserInfo()
{
    var_dump(__FUNCTION__);

    return [
        'name' => 'zhangsan',
        'age' => 18,
    ];
}

getUserInfo();

class User
{
    public function getUserInfo()
    {
        var_dump(__METHOD__);

        return [
            'name' => 'lisi',
            'age' => 20,
        ];
    }

    public function getClassName()
    {
        var_dump(__CLASS__);
    }
}

$user = new User();
$user->getUserInfo();
$user->getClassName();

// 超全局变量
// $_GET $_POST $_REQUEST $_COOKIE $_SESSION $_FILES $_SERVER

$_GET['name'] = 'zhangsan';
var_dump($_GET);
//var_dump($_POST);
//var_dump($_REQUEST);
//var_dump($_COOKIE);
//var_dump($_SESSION);
//var_dump($_FILES);
//var_dump($_SERVER);

var_dump(strlen('hello'));

$string = ' hello ';
var_dump($string);
var_dump(trim($string));

$string = 'hello';
$stringSplit = str_split($string, 2);
// ['he', 'll', 'o']
print_r($stringSplit);

// 数组处理函数
$arr = [1, 2, 3, 4, 5];
$arr2 = [6, 7, 8, 9, 10];
var_dump(array_merge($arr, $arr2));

$stringArr1 = ['apple', 'banana', 'orange'];
$stringArr2 = ['a', 'b', 'c'];
var_dump(array_merge($stringArr1, $stringArr2));

$arrNeedPush = [1, 2, 3, 4, 5];
array_push($arrNeedPush, 9, 10, 11, 12, 13);
var_dump($arrNeedPush);

$colorArr = ['red', 'green', 'blue', 'yellow','zhangsan'];
var_dump(in_array('red', $colorArr));
if (in_array('zhangsan', $colorArr)) {
    var_dump('zhangsan 今天来上课了');
}else {
    var_dump('zhangsan 今天没来上课');
}

$colorArr = ['red', 'green', 'blue', 'yellow'];
var_dump(array_slice($colorArr, 0, 2));
echo '====================' . PHP_EOL;
var_dump(array_search('blue', $colorArr));
var_dump($colorArr[array_search('blue', $colorArr)]);

$arr = ['a', 'b', 'c', 'd', 'e'];
var_dump(array_reverse($arr));

$userInfo = ['name' => 'zhangsan', 'age' => 18];
var_dump(array_keys($userInfo)); // ['name', 'age']
var_dump(array_values($userInfo)); // ['zhangsan', 18]

// array_merge() array_push() in_array() array_reverse() array_keys() array_values()

$string = "如果 PHP 认为 filename 指定的是一个本地文件，将尝试在该文件上打开一个流。该文件必须是 PHP 可以访问的，因此需要确认文件访问权限允许该访问。如果激活了 open_basedir 则会应用进一步的限制。";

var_dump(file_exists('./a.txt'));

if(file_exists('./a.txt')) {
    $content = file_get_contents('a.txt');
    var_dump($content);

    file_put_contents('a.txt', $string, FILE_APPEND);

    unlink('a.txt');
}else {
    var_dump('文件不存在');
}

$float = round(3.1415926, 3);
var_dump($float);

$arr = [1, 2, 3, 4, 5];
var_dump(array_sum($arr));
var_dump(min($arr));
var_dump(max($arr));

//var_dump(rand(1, 33));
// Mersenne Twister 算法
var_dump(mt_rand(1, 33)); // 推荐使用这个方法来获取随机数，效率更高

// 时间处理函数
var_dump(time());
var_dump(date('Y-m-d H:i:s', 1721787176));

$date = "2024-07-24 10:12:56";
var_dump(strtotime($date));

// JSON
$arr = ['name' => 'zhangsan', 'age' => 18];
$json = json_encode($arr);
var_dump($json);

var_dump(json_decode($json, true));

// php 判空函数

$x = null;  // empty 会返回true isset 会返回false is_null 会返回true
$y = '';    // empty 会返回true isset 会返回true  is_null 会返回false
$z = 0;     // empty 会返回true
$a = false; // empty 会返回true isset 会返回true is_null 会返回false
$b = [];    // empty 会返回true
$c = '0';   // empty 会返回true
$d = 'false';   // empty 会返回false
$e = 'null';    // empty 会返回false

var_dump(empty($e));
var_dump(isset($y));
var_dump(is_null($x));
var_dump(isset($f)); // 不会报错，只会返回false
//var_dump($f); // 会报错

$userInfo = ['name' => 'zhangsan', 'age' => null];
if (!is_null($userInfo['name'])) {
    var_dump('姓名是：' . $userInfo['name']);
}else {
    var_dump('请先设置姓名');
}

if(is_null($userInfo['age'])) {
    var_dump('请先设置年龄');
}else {
    var_dump('年龄是：' . $userInfo['age']);
}











