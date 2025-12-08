<a href="<?= BASE_URL_ADMIN . '&action=create-cate' ?>" class="btn btn-success w-auto">Thêm danh mục</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $cate): ?>
            <tr>
                <td><?= $cate["id"] ?></td>
                <td><?= $cate['name'] ?></td>
                <td><?= $cate['description'] ?></td>
                <td>
                    <a href="<?= BASE_URL_ADMIN . '&action=show-cate&id=' . $cate['id'] ?>"
                        class="btn btn-primary">
                        Xem
                    </a>
                    <a href="<?= BASE_URL_ADMIN . '&action=edit-cate&id=' . $cate['id'] ?>"
                        class="btn btn-warning">
                        Sửa
                    </a>
                    <a href="<?= BASE_URL_ADMIN . '&action=delete-cate&id=' . $cate['id'] ?>"
                        class="btn btn-danger"
                        onclick="return confirm('Xac nhan xoa ?')">
                        Xóa
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>