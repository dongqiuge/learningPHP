<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>更新商品</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
<div class="container">
    <div class="main-content">
        <form action="index.php?controller=Product&action=update&id=<?= $product['id']; ?>" method="post"
              enctype="multipart/form-data">
            <h1 style="text-align: center; width: 100%;">更新商品</h1>
            <div>
                <label for="name">商品名称:</label>
                <input type="text" id="name" name="name" value="<?= htmlspecialchars($product['name']); ?>" required>
            </div>
            <div>
                <label for="price">价格:</label>
                <input type="number" id="price" name="price" value="<?= (float)$product['price']; ?>" required min="0"
                       step="0.01"> <!-- 设置最小值为0.01 -->
            </div>
            <div>
                <label for="description">描述:</label>
                <textarea id="description" name="description" required
                          rows="5"><?= htmlspecialchars($product['description']); ?></textarea> <!-- 设置固定行数 -->
            </div>
            <div>
                <label for="image">图片:</label>
                <input type="file" id="image" name="image">
                <img src="<?= htmlspecialchars($product['image']); ?>" alt="当前图片">
            </div>
            <div>
                <button type="submit">提交</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>