<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Is main</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $user): ?>
        <tr>
            <td><?= $user["id"] ?></td>
            <td><?= $user['username'] ?></td>
            <td><?= $user['email'] ?></td>
            <td><?= $user['password'] ?></td>
            <td><?= $user['is_main'] ?></td>
            <td>
                <button type="button" class="btn btn-primary">Xem</button>
                <button type="button" class="btn btn-warning">Sửa</button>
                <button type="button" class="btn btn-danger">Xóa</button>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>