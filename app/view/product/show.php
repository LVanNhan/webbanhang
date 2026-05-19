<?php include 'app/view/shares/header.php'; ?>

<div class="row">
    <div class="col-md-5">
        <div class="card p-3">
            <?php if($product->image): ?>
                <img src="/webbanhang/<?= htmlspecialchars($product->image) ?>"
                     class="img-fluid rounded">
            <?php else: ?>
                <div style="height:300px; background:#f0f0f0; display:flex; align-items:center; justify-content:center;">
                    <i class="fa-solid fa-image fa-3x text-muted"></i>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="col-md-7">
        <div class="card p-4 h-100">
            <h2 class="fw-bold"><?= htmlspecialchars($product->name) ?></h2>
            <h3 class="text-danger mb-4"><?= number_format($product->price) ?> đ</h3>
            <p><?= htmlspecialchars($product->description) ?></p>
            <p><strong>Danh mục:</strong> <?= htmlspecialchars($product->category_name ?? '') ?></p>
            <a href="/webbanhang/Product" class="btn btn-secondary mt-3">Quay lại</a>
        </div>
    </div>
</div>

<?php include 'app/view/shares/footer.php'; ?>
