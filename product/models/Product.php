<?php
// models/Product.php - 商品模型，负责商品相关的数据库操作

require_once '../database/db.php';

class Product
{
    /**
     * @var Database|null 数据库连接实例
     */
    private $conn;

    /**
     * 构造函数，实例化数据库连接
     */
    public function __construct()
    {
        $this->conn = Database::getInstance()->getConnection();
    }

    /**
     * 添加商品的方法
     */
    public function addProduct(){

    }

    /**
     * 获取所有商品的方法
     */
    public function getAllProducts(){

    }

    /**
     * 根据 ID 获取商品的方法
     */
    public function getProductById()
    {
        
    }

    /**
     * 更新商品的方法
     */
    public function updateProduct()
    {
        
    }

    /**
     * 删除商品的方法
     */
    public function deleteProduct()
    {
        
    }
}