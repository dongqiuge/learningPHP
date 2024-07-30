<?php
// config/config.php - 项目配置文件，负责配置数据库连接信息

// 数据库主机
const DB_HOST = 'localhost';
// 数据库用户名
const DB_USER = 'root';
// 数据库密码
const DB_PASS = 'cptbtptp';
// 数据库名称
const DB_NAME = 'product';

// 数据库连接
try {
    // 创建 PDO 实例并设置错误模式
    $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // 捕获异常并输出异常信息
    die('数据库连接失败: ' . $e->getMessage());
}