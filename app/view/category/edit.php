<?php include 'app/view/shares/header.php'; ?>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card p-4">
            <h2 class="fw-bold mb-4">
                Sửa danh mục
            </h2>
            <form action="/webbanhang/Category/update"
                  method="POST">
                <input type="hidden"
                       name="id"
                       value="<?= $category->id ?>">
                <div class="mb-3">
                    <label class="form-label">
                        Tên danh mục
                    </label>
                    <input type="text"
                           name="name"
                           class="form-control"
                           value="<?= $category->name ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Mô tả
                    </label>
                    <textarea name="description"
                              rows="5"
                              class="form-control"><?= $category->description ?></textarea>
                </div>
                <button class="btn btn-primary">
                    Cập nhật
                </button>
            </form>
        </div>
    </div>
</div>

<?php include 'app/view/shares/footer.php'; ?>