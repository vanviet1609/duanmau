<form class="form-inline" action="<?= BASE_URL_ADMIN . '&action=update-cate' ?>" method="POST" enctype="multipart/form-data">

    <div class="mt-3 mb-3">
        <label class="form-label">Tên :</label>
        <input type="text" name="name" class="form-control" value="<?= $cate['name'] ?>" disabled>
    </div>
    <div class="mt-3 mb-3">
        <label class="form-label">Mô tả :</label>
        <input type="text" name="description" class="form-control" value="<?= $cate['description'] ?>" disabled>
    </div>
    <button class="btn btn-primary" disabled>
        Lưu
    </button>
</form>