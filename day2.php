<?php

$string = "Hello";

// echo strlen($string); // 5

$var = strlen($string);

var_dump($var);

$password = "123456";

$passwordLength = strlen($password);

var_dump($passwordLength);

if ($passwordLength < 6) {
    echo "密码长度不能小于 6 位";
} elseif($passwordLength > 16){
    echo "密码长度不能大于 16 位";
}else{
    echo "密码长度符合要求";
}

$string = "Hello World";
// 将字符串转换为小写
$lowerString = strtolower($string);
echo "\r\n";
var_dump($lowerString);

// 将字符串转换为大写
$upperString = strtoupper($lowerString);
var_dump($upperString);

// strpos() 函数用于在字符串内查找一个字符或一段指定的文本。
$string = "Hello World";
$position = strpos($string, "W");
echo "\r\n";
var_dump($position);

// substr() 函数用于返回字符串的一部分。
$substring = substr($string, $position);
echo "\r\n";
var_dump($substring);

// lustormstout@gmail.com
// lustormstout@outlook.com
$email = "abc@gmail.com";

// 获取邮箱的域名
$domain = substr($email, strpos($email, "@") + 1);
var_dump($domain);

// 练习题
// 请大家用 strpos() 函数和 substr() 函数获取这个 URL 的域名
// $url = "http://www.google.com/users/index.html";

// str_replace() 函数用于在字符串中替换一个字符或一段字符。

$string = "Hello World";

$newString = str_replace("World", "PHP", $string);

var_dump($newString);

// php 的运算符 + - * / %
$num1 = 10;
$num2 = 3;
$result = $num1 + $num2;
var_dump($result);

$result = $num1 - $num2;
var_dump($result);

$result = $num1 * $num2;
var_dump($result);

$result = $num1 / $num2;
var_dump($result);

$result = $num1 % $num2;
var_dump($result);

$a = 10;
var_dump($a); // 10   
$a = 20;
var_dump($a); // 20

// 复合运算符
$a = 10;
// $a += 5; // $a = $a + 5;
$a = $a + 5;
var_dump($a); // 15

// 对比运算符
$a = 10;
$b = 10;
// $a == $b
var_dump($a == $b); // false

if ($a == $b) {
    echo "a 等于 b";
} else {
    echo "a 不等于 b";
}

// === 
$a = 10;
$b = "10";

echo "\r\n";

var_dump(gettype($a)); // int
var_dump(gettype($b)); // string

var_dump($a == $b); // true
var_dump($a === $b); // false
if ($a === $b) {
    echo "a 全等于 b";
} else {
    echo "a 不全等于 b";
}

// != 不等于 <> 不等于
$a = 10;
$b = 20;
var_dump($a != $b); // true

if ($a != $b) {
    echo "a 不等于 b";
} else {
    echo "a 等于 b";
}

// !== 不全等于
// > 大于 < 小于 >= 大于等于 <= 小于等于

// 逻辑运算符
// && 与 || 或 ! 非
echo "\r\n";
$a = true;
$b = true;
$c = true;
var_dump($a && $b); // false

$a = false;
$b = false;
var_dump($a || $b || $c); // true

$a = true;
var_dump(!$a); // false


// 函数
// 函数是一段封装好的代码，可以重复使用。
// 函数的定义

echo "\r\n";
echo "======================== 函数 ========================";
echo "\r\n";

// 函数的定义
// 例：计算商品的总价
function totalPrice($price = 100, $num = 1)
{
    return $price * $num;
}

// 函数的调用
$price = 100;
$num = 2;
$total = totalPrice($price, $num);
var_dump($total);

// 变量的作用域
// 全局变量
// 局部变量
$aOutTest = 10; // 全局变量

function test()
{
    $bInTest = 20; // 局部变量
    // var_dump('这是函数内部打印的 $aOutTest = ' . $aOutTest); // 报错
    var_dump('这是函数内部打印的 $bInTest = ' . $bInTest);
    
    // return $bInTest;
}

// $bInTest = test();
test();

var_dump('这是函数外部打印的 $aOutTest = ' . $aOutTest);
var_dump('这是函数外部打印的 $bInTest = ' . $bInTest); // 报错

// 匿名函数
$test = function () {
    var_dump("这是一个匿名函数");
};

$test();

// 类和对象
// 类是对象的模板，对象是类的实例。
// 类的定义

class animal
{
    // 属性修饰符 public protected private
    // public 公共的，任何地方都可以访问
    // protected 受保护的，只能在类的内部和子类中访问
    // private 私有的，只能在类的内部访问

    // 属性
    public $name;
    public $age;
    public $color;

    public $type;

    // 构造函数 __construct() 是 PHP 的一个构造函数，当一个对象被创建时调用。

    public function __construct($type)
    {
        $this->type = $type;
    }

//    public function __init()
//    {
//
//    }
    
    // 方法
    public function eat()
    {
        var_dump($this->name . "在吃东西");
        var_dump("吃东西");
    }
    
    // 方法
    public function sleep()
    {
        var_dump("睡觉");
    }
}

class dog extends animal
{
    public function bark()
    {
        var_dump("汪汪汪");
    }
}

class cat extends animal
{
    public function mew()
    {
        var_dump("喵喵喵");
    }
}

echo "\r\n";
echo "=========================";
echo "\r\n";

//$animal = new animal("动物");

// 实例化对象
$dog = new dog("狗");
$dog->name = "旺财";
var_dump($dog->name);
$dog->eat();
$dog->sleep();
$dog->bark();

echo "\r\n";
echo "=========================";
echo "\r\n";

$cat = new cat("猫");
$cat->name = "咪咪";
var_dump($cat->name);
$cat->eat();
$cat->sleep();
$cat->mew();

// 练习题
// 请大家定义一个汽车类，汽车有属性：品牌、颜色、价格，汽车有方法：启动、加速、刹车、停止。
// 子类：轿车、卡车，轿车有方法：开窗、放音乐，卡车有方法：装货、卸货。
// 或者是其他的类，大家可以自由发挥。


// 接口，接口是一种规范，规定了类应该实现哪些方法。
// 接口的定义
interface CarInterface
{
    public function start();
    public function speedUp();
    public function brake();
    public function stop();
}

// 类的实现
class Car implements CarInterface
{
    public function start()
    {
        var_dump("启动");
    }

    public function speedUp()
    {
        var_dump("加速");
    }

    public function brake()
    {
        var_dump("刹车");
    }

    public function stop()
    {
        var_dump("停止");
    }
}

$car = new Car();
$car->start();

echo "\r\n";
echo "=========================";
echo "\r\n";


// 魔术方法
// __call() 方法在对象中调用一个不可访问方法时被调用。

class Magic
{
    public function __call($name, $arguments)
    {
        var_dump($name);
        var_dump($arguments);
    }
}

$magic = new Magic();
$magic->test("Hello", "World");

echo "\r\n";
echo "=========================";
echo "\r\n";

// __get() 方法用于从不可访问属性读取数据。
// __set() 方法用于写入不可访问属性。

class Magic2
{
    private $data = [];
    // ['name' => '张三']

    public function __get($name)
    {
        // $name = "name"
        return $this->data[$name];
    }

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }
}

//$array = [];
//$array["name"] = "张三";
//$array["age"] = 20;
//// ['name' => '张三', 'age' => 20];
//var_dump($array);
//die;

$magic2 = new Magic2();
$magic2->name = "张三";
var_dump($magic2->name);

