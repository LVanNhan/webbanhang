<?php include 'app/view/shares/header.php'; ?>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card p-4">
            <h2 class="fw-bold mb-4">
                Thêm danh mục
            </h2>
            <form action="/webbanhang/Category/save"
                  method="POST">
                <div class="mb-3">
                    <label class="form-label">
                        Tên danh mục
                    </label>
                    <input type="text"
                           name="name"
                           class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Mô tả
                    </label>
                    <textarea name="description"
                              rows="5"
                              class="form-control"></textarea>
                </div>
                <button class="btn btn-primary">
                    Lưu danh mục
                </button>
            </form>
        </div>
    </div>
</div>

<?php include 'app/view/shares/footer.php'; ?>