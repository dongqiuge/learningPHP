<?php
// database/db.php - 数据库连接文件，采用单例模式管理数据库连接

require_once '../config/config.php';

class Database
{
    /**
     * @var null 保存实例的静态成员变量
     */
    private static $instance = null;

    /**
     * @var null 数据库连接
     */
    private $conn;


    /**
     * 构造函数，私有化，防止直接在外部创建对象
     */
    private function __construct()
    {
        global $db;
        $this->conn = $db;
    }

    /**
     * @return Database|null 返回数据库连接实例
     */
    public function getInstance()
    {
        if(!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    /**
     * @return null 获取数据库连接的公共方法
     */
    public function getConnection()
    {
        return $this->conn;
    }
}