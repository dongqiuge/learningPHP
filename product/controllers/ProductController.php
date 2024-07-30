<?php
// controllers/ProductController.php - 商品控制器，负责商品相关操作

require_once '../models/Product.php';

class ProductController
{
    /**
     * @var Product 商品模型
     */
    private $productModel;

    /**
     * 构造函数，实例化商品模型
     */
    public function __construct()
    {
        $this->productModel = new Product();
    }

    public function index()
    {

    }

    public function detail()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }

    public function add()
    {

    }

    private function uploadImage()
    {

    }

    public function purchase()
    {
        
    }

    public function handlePurchase()
    {
        
    }
}