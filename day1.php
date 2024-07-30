<?php

// 1、变量的定义
// 2、数据类型
// 3、常量
// 4、条件判断
// 5、循环
// 6、数组


// 字符串类型的变量
$string = "Hello World";

// 整数类型的变量
$int = 10;

// 浮点数类型的变量
$float = 10.5;

// 布尔类型的变量
$bool = true; // false

// 数组类型的变量
$array = [1, 2, 3, 4, 5];

// 空类型的变量
$null = null;

// 对象类型的变量
class Person {
    public $name = "张三";
    public $age = 20;
}

// var_dump($string, $int, $float, $bool, $array, $null);

define("PI", 3.1415926);

// echo PI;

# 条件判断

// if 语句
$int = 1;

if ($int > 5) {
    echo "大于 5";
} else {
    echo "小于或等于 5";
}

$age = 1;
if ($age < 18 && $age > 0) {
    echo "未成年";
} elseif ($age < 30) {
    echo "青年";
} else {
    echo "中年";
}

if ($age < 18 || $age > 60) {
    echo "未成年或者老年";
}

echo "\n";
echo "======switch 语句=======";
echo "\n";
// switch 语句
$day = "周一";

switch($day){
    case "周一":
        echo "星期一";
        break;
    case "周二":
        echo "星期二";
        break;
    case "周三":
        echo "星期三";
        break;
    default:
        echo "未知";
}

# 循环

# for 循环
echo "\n";
echo "======for 循环=======";
echo "\n";

// $i++ 等同于 $i = $i + 1

for ($i = 0; $i < 10; $i++) {
    echo "\n";
    // if ($i == 3) {
    //     continue;
    // }
    // if ($i == 5) {
    //     break;
    // }
    echo $i;
}

# while 循环
echo "\n";
echo "======while 循环=======";
echo "\n";

$i = 0;
while ($i < 10) {
    echo "\n";
    echo $i;
    $i++;
}

echo "\n";

while (true) {
    echo "\n";
    echo "无限循环";
    break;
}

# PHP 中的判断运算符
// && 并且
// a = 1 && b = 2

// || 或者
// a = 1 || b = 2

# do while 循环
echo "\n";
echo "======do while 循环=======";
echo "\n";

$i = 0;
do {
    echo "\n";
    echo $i;
    var_dump("");
    $i++;
} while ($i < 10);

# foreach 循环
echo "\n";
echo "======foreach 循环=======";
echo "\n";

$names = ["张三", "李四", "王五"];
foreach ($names as $value) {
    echo "\n";
    if ($value == "李四") {
        $value = "李四改名了";
    }
    echo '名字：' . $value;
}

// 数组
// 索引数组
$names = array("张三", "李四", "王五");
$color = ["red", "green", "blue"];
echo "\n";
$color[0] = "yellow";
echo $color[0];

// 关联数组
$age = ["张三" => "180CM", "李四" => 30, "王五" => 40];
$product = ["name" => "iPhone 12", "price" => 6999, "color" => "red"];
echo "\n";
$product["name"] = "iPhone 16";
// echo $product["name"];

// 多维数组
$products = [
    ["name" => "iPhone 12", "price" => 6999, "color" => "red"],
    ["name" => "iPhone 13", "price" => 7999, "color" => "green"],
    ["name" => "iPhone 14", "price" => 8999, "color" => "blue"]
];

echo "\n";
echo "====== 多维数组 ======";
echo "\n";
// echo $products[0]["name"];

foreach ($products as &$product) {
    $product["price"] = $product["price"] + 1000;
}

// PHP 自带的数组函数
echo "\n";
echo "====== 数组函数 ======";
echo "\n";

// count() 获取数组的长度
$users = ["张三", "李四"];
$string = "abcdsfhjkshdfksdfhjklshdfkjshfkjshjkldhsjkldhfjkshdfjklahsjkdfh";
echo count($users);
echo "\n";
echo strlen($string);

// array_merge() 合并数组
$names = ["张三", "李四"];
$colors = ["red", "green"]; 

$merge = ["张三", "李四", "red", "green"];

$merge = array_merge($names, $colors);
echo "\n";
var_dump($names);
var_dump($merge);

// sort() 对数组进行排序
$numbers = [3, 1, 2, 5, 4];
sort($numbers);
echo "\n";
var_dump($numbers);

// rsort() 对数组进行倒序排序
rsort($numbers);
echo "\n";
var_dump($numbers);

echo "\n";
print_r($numbers);

// array_push() 向数组中添加元素
array_push($numbers, 6);
echo "\n";