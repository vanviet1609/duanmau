<a href="<?= BASE_URL_ADMIN . '&action=create-product' ?>" class="btn btn-success">Them san pham</a>
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
        <?php foreach ($data as $prd): ?>
            <tr>
                <td><?= $prd["id"] ?></td>
                <td>
                    <img src="<?= BASE_ASSETS_UPLOADS . $prd['img'] ?>" alt="" width="100px" height="100px" class="cursor-pointer">
                </td>
                <td><?= $prd['name'] ?></td>
                <td><?= $prd['cat_name'] ?></td>
                <td><?= $prd['description'] ?></td>
                <td><?= $prd['price'] ?></td>
                <td><?= $prd['quantity'] ?></td>
                <td>
                    <a href="<?= BASE_URL_ADMIN . '&action=show-product' . $prd['id'] ?>" class="btn btn-primary">Xem</a>
                    <a href="<?= BASE_URL_ADMIN . '&action=edit-product' . $prd['id'] ?>" class="btn btn-warning">Sửa</a>
                    <a href="<?= BASE_URL_ADMIN . '&action=delete-product&id=' . $prd['id'] ?>"
                        class="btn btn-danger"
                        onclick="return confirm('Xac nhan xoa ?')">
                        Xóa
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>