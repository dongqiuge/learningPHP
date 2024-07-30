<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>商品列表</title>
    <link rel="stylesheet" href="public/css/style.css">
    <script src="public/js/script.js"></script>
</head>
<body>
<div class="container">
    <header>
        <h1>商品列表</h1>
        <a href="index.php?controller=Product&action=add" class="btn add-btn">添加商品</a>
    </header>
    <div class="main-content">
        <table>
            <thead>
            <tr>
                <th>商品名称</th>
                <th>价格</th>
                <th>描述</th>
                <th>图片</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <?php if (isset($products) && count($products) > 0): ?>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?= htmlspecialchars($product['name']); ?></td>
                        <td><?= (float)$product['price']; ?></td>
                        <td class="description-cell"><?= htmlspecialchars($product['description']); ?></td>
                        <td><img src="<?= htmlspecialchars($product['image']); ?>"
                                 alt="<?= htmlspecialchars($product['name']); ?>"></td>
                        <td class="actions-cell">
                            <a href="index.php?controller=Product&action=show&id=<?= $product['id']; ?>"
                               class="btn small-btn">查看</a>
                            <a href="index.php?controller=Product&action=update&id=<?= $product['id']; ?>"
                               class="btn small-btn">更新</a>
                            <a href="javascript:void(0);" onclick="deleteProduct(<?= $product['id']; ?>)"
                               class="btn small-btn">删除</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">没有商品。</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- 弹窗模板 -->
<div id="deleteModal">
    <p>商品删除成功。</p>
</div>

</body>
</html>