<?php include 'app/view/shares/header.php'; ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold">
        Danh sách danh mục
    </h2>
    <a href="/webbanhang/Category/add"
       class="btn btn-success">
        + Thêm danh mục
    </a>
</div>

<div class="card p-4">
    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Tên danh mục</th>
                <th>Mô tả</th>
                <th width="180">Hành động</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($categories as $category): ?>
            <tr>
                <td><?= $category->id ?></td>
                <td>
                    <?= $category->name ?>
                </td>
                <td>
                    <?= $category->description ?>
                </td>
                <td>
                    <a href="/webbanhang/Category/edit/<?= $category->id ?>"
                       class="btn btn-warning btn-sm">
                        Sửa
                    </a>
                    <a href="/webbanhang/Category/delete/<?= $category->id ?>"
                       class="btn btn-danger btn-sm"
                       onclick="return confirm('Bạn có chắc chắn muốn xóa?')">
                        Xóa
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include 'app/view/shares/footer.php'; ?>