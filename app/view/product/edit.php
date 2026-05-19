<?php include 'app/view/shares/header.php'; ?>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card p-4">

            <h2 class="fw-bold mb-4">Sửa sản phẩm</h2>

            <form action="/webbanhang/Product/update" method="POST" enctype="multipart/form-data">

                <input type="hidden" name="id" value="<?= $product->id ?>">
                <input type="hidden" name="image_current" value="<?= htmlspecialchars($product->image) ?>">

                <div class="mb-3">
                    <label class="form-label">Tên sản phẩm</label>
                    <input type="text" name="name" class="form-control"
                           value="<?= htmlspecialchars($product->name) ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Mô tả</label>
                    <textarea name="description" rows="4"
                              class="form-control"><?= htmlspecialchars($product->description) ?></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Giá (VNĐ)</label>
                    <input type="number" name="price" class="form-control"
                           value="<?= $product->price ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Hình ảnh hiện tại</label>
                    <?php if($product->image): ?>
                        <div class="mb-2">
                            <img src="/webbanhang/<?= htmlspecialchars($product->image) ?>"
                                 width="150" class="rounded border">
                        </div>
                    <?php else: ?>
                        <p class="text-muted small">Chưa có ảnh</p>
                    <?php endif; ?>
                    <label class="form-label">Thay ảnh mới (để trống nếu không đổi)</label>
                    <input type="file" name="image" class="form-control" accept="image/*">
                </div>

                <div class="mb-3">
                    <label class="form-label">Danh mục</label>
                    <select name="category_id" class="form-control">
                        <?php foreach($categories as $category): ?>
                            <option value="<?= $category->id ?>"
                                <?= $product->category_id == $category->id ? 'selected' : '' ?>>
                                <?= $category->name ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="fa-solid fa-floppy-disk me-1"></i> Cập nhật sản phẩm
                </button>
                <a href="/webbanhang/Product" class="btn btn-secondary ms-2">Hủy</a>

            </form>
        </div>
    </div>
</div>

<?php include 'app/view/shares/footer.php'; ?>
