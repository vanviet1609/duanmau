<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Ảnh</th>
            <th>Tên sản phẩm</th>
            <th>Danh mục</th>
            <th>Mô tả</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $prd): ?>
        <tr>
            <td><?= $prd["id"] ?></td>
            <td>
                <img src="<?= BASE_ASSETS_UPLOADS. $prd['img'] ?>" alt="" width="100px" height="100px" class="cursor-pointer">
            </td>
            <td><?= $prd['name'] ?></td>
            <td><?= $prd['cat_name'] ?></td>
            <td><?= $prd['description'] ?></td>
            <td><?= $prd['price'] ?></td>
            <td><?= $prd['quantity'] ?></td>
            <td>
                <button type="button" class="btn btn-primary">Xem</button>
                <button type="button" class="btn btn-warning">Sửa</button>
                <button type="button" class="btn btn-danger">Xóa</button>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>