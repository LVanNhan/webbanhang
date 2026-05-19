<?php include 'app/view/shares/header.php'; ?>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card p-4">

            <h2 class="fw-bold mb-4">Thêm sản phẩm</h2>

            <?php if (!empty($errors)): ?>
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        <?php foreach($errors as $error): ?>
                            <li><?= $error ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <form action="/webbanhang/Product/save" method="POST" enctype="multipart/form-data">

                <div class="mb-3">
                    <label class="form-label">Tên sản phẩm</label>
                    <input type="text" name="name"
                           class="form-control <?= isset($errors['name']) ? 'is-invalid' : '' ?>"
                           value="<?= isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '' ?>">
                    <?php if(isset($errors['name'])): ?>
                        <div class="invalid-feedback"><?= $errors['name'] ?></div>
                    <?php endif; ?>
                </div>

                <div class="mb-3">
                    <label class="form-label">Mô tả</label>
                    <textarea name="description" rows="4"
                              class="form-control <?= isset($errors['description']) ? 'is-invalid' : '' ?>"><?= isset($_POST['description']) ? htmlspecialchars($_POST['description']) : '' ?></textarea>
                    <?php if(isset($errors['description'])): ?>
                        <div class="invalid-feedback"><?= $errors['description'] ?></div>
                    <?php endif; ?>
                </div>

                <div class="mb-3">
                    <label class="form-label">Giá (VNĐ)</label>
                    <input type="number" name="price"
                           class="form-control <?= isset($errors['price']) ? 'is-invalid' : '' ?>"
                           value="<?= isset($_POST['price']) ? htmlspecialchars($_POST['price']) : '' ?>">
                    <?php if(isset($errors['price'])): ?>
                        <div class="invalid-feedback"><?= $errors['price'] ?></div>
                    <?php endif; ?>
                </div>

                <div class="mb-3">
                    <label class="form-label">Hình ảnh</label>
                    <input type="file" name="image" class="form-control" accept="image/*">
                </div>

                <div class="mb-3">
                    <label class="form-label">Danh mục</label>
                    <select name="category_id"
                            class="form-control <?= isset($errors['category']) ? 'is-invalid' : '' ?>">
                        <option value="">-- Chọn danh mục --</option>
                        <?php foreach($categories as $category): ?>
                            <option value="<?= $category->id ?>"
                                <?= (isset($_POST['category_id']) && $_POST['category_id'] == $category->id) ? 'selected' : '' ?>>
                                <?= $category->name ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <?php if(isset($errors['category'])): ?>
                        <div class="invalid-feedback"><?= $errors['category'] ?></div>
                    <?php endif; ?>
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="fa-solid fa-floppy-disk me-1"></i> Lưu sản phẩm
                </button>
                <a href="/webbanhang/Product" class="btn btn-secondary ms-2">Hủy</a>

            </form>
        </div>
    </div>
</div>

<?php include 'app/view/shares/footer.php'; ?>
