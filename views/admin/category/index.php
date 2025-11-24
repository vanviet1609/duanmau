<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Category ID</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $cate): ?>
        <tr>
            <td><?= $cate["id"] ?></td>
            <td><?= $cate['name'] ?></td>
            <td><?= $cate['description'] ?></td>
            <td><?= $cate['category_id'] ?></td>
            <td>
                <button type="button" class="btn btn-primary">Xem</button>
                <button type="button" class="btn btn-warning">Sửa</button>
                <button type="button" class="btn btn-danger">Xóa</button>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>