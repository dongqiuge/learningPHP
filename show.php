<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>商品详情</title>
    <style>
        .container {
            background-color: #fff;
            max-width: 600px;
            margin: 20px auto;
            padding: 2em;
            border: 1px solid #dee2e6;
            border-radius: 1em;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        img {
            max-width: 100%;
            border-radius: 0.5em;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 5px;
            font-size: 16px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>商品详情</h1>
    <p><strong>名称:</strong> <?= htmlspecialchars($product['name']); ?></p>
    <p><strong>价格:</strong> <?= (float)$product['price']; ?></p>
    <p><strong>描述:</strong> <?= htmlspecialchars($product['description']); ?></p>
    <p><strong>图片:</strong></p>
    <img src="<?= htmlspecialchars($product['image']); ?>" alt="<?= htmlspecialchars($product['name']); ?>">
    <div style="margin-top: 20px;">
        <a class="btn" href="index.php?controller=Product&action=update&id=<?= $product['id']; ?>">更新</a>
        <a class="btn" href="index.php?controller=Product&action=index">返回商品列表</a>
    </div>
</div>
</body>
</html>