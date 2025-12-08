<table class="table table-striped">
    <thead>
        <tr>
            <th>Banner 1</th>
            <th>Banner 2</th>
            <th>Banner 3</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <img src="<?= BASE_ASSETS_UPLOADS . $banner['banner1'] ?>" alt="" width="100px" height="100px" class="cursor-pointer">
            </td>
            <td>
                <img src="<?= BASE_ASSETS_UPLOADS . $banner['banner2'] ?>" alt="" width="100px" height="100px" class="cursor-pointer">
            </td>
            <td>
                <img src="<?= BASE_ASSETS_UPLOADS . $banner['banner3'] ?>" alt="" width="100px" height="100px" class="cursor-pointer">
            </td>
            <td>
                <a href="<?= BASE_URL_ADMIN . '&action=edit-banner'?>" class="btn btn-warning">Sửa</a>
            </td>
        </tr>
    </tbody>
</table>