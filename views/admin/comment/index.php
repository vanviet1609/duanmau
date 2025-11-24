<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>User</th>
            <th>Product</th>
            <th>Content</th>
            <th>Status</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $cmt): ?>
        <tr>
            <td><?= $cmt["id"] ?></td>
            <td><?= $cmt['user_name'] ?></td>
            <td><?= $cmt['prd_name'] ?></td>
            <td><?= $cmt['content'] ?></td>
            <td><?= $cmt['status'] ?></td>
            <td>
                <button type="button" class="btn btn-primary">Xem</button>
                <button type="button" class="btn btn-warning">Sửa</button>
                <button type="button" class="btn btn-danger">Xóa</button>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>