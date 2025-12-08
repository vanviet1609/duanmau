<h5>Top 5 sản phẩm được xem nhiều nhất</h5>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Ảnh</th>
            <th>Tên sản phẩm</th>
            <th>View Count</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($mostViewProduct as $prd): ?>
            <tr>
                <td><?= $prd["id"] ?></td>
                <td>
                    <img src="<?= BASE_ASSETS_UPLOADS . $prd['img'] ?>" alt="" width="40px" height="40px" class="cursor-pointer">
                </td>
                <td><?= $prd['name'] ?></td>
                <td><?= $prd['view_count'] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
<h5>Top 5 từ khóa được tìm kiếm nhiều nhất</h5>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Từ khóa</th>
            <th>Số lượt tìm kiếm</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($mostSearch as $search): ?>
            <tr>
                <td><?= $search["content"] ?></td>
                <td><?= $search['total'] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>