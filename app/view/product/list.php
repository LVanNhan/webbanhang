<?php include 'app/view/shares/header.php'; ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold">Danh sách sản phẩm</h2>
    <a href="/webbanhang/Product/add" class="btn btn-success">+ Thêm sản phẩm</a>
</div>

<div class="row">
<?php foreach($products as $product): ?>
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">

            <?php if($product->image): ?>
                <img src="/webbanhang/<?= htmlspecialchars($product->image) ?>"
                     class="card-img-top"
                     style="height: 300px; object-fit: cover;">
            <?php else: ?>
                <div style="height:300px; background:#f0f0f0; display:flex; align-items:center; justify-content:center;">
                    <i class="fa-solid fa-image fa-3x text-muted"></i>
                </div>
            <?php endif; ?>

            <div class="card-body d-flex flex-column">
                <h5 class="card-title"><?= htmlspecialchars($product->name) ?></h5>
                <p class="text-muted"><?= htmlspecialchars($product->description) ?></p>
                <p><strong>Danh mục:</strong> <?= htmlspecialchars($product->category_name) ?></p>
                <h4 class="text-danger"><?= number_format($product->price) ?> đ</h4>

                <div class="mt-auto">
                    <a href="/webbanhang/Product/show/<?= $product->id ?>" class="btn btn-primary btn-sm">Chi tiết</a>
                    <a href="/webbanhang/Product/edit/<?= $product->id ?>" class="btn btn-warning btn-sm">Sửa</a>
                    <a href="/webbanhang/Product/delete/<?= $product->id ?>"
                       class="btn btn-danger btn-sm"
                       onclick="return confirm('Bạn chắc chắn muốn xóa?')">Xóa</a>
                </div>
            </div>

        </div>
    </div>
<?php endforeach; ?>
</div>

<?php include 'app/view/shares/footer.php'; ?>
