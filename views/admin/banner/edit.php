<form class="form-inline" action="<?= BASE_URL_ADMIN . '&action=update-banner' ?>" method="POST" enctype="multipart/form-data">
    <div class="mt-3 mb-3">
        <label class="form-label">Banner 1 :</label>
        <input type="file" name="banner1" class="form-control">
        <img src="<?= BASE_ASSETS_UPLOADS . $banner['banner1'] ?>" alt="" width="100px" height="100px" class="cursor-pointer">
    </div>
    <div class="mt-3 mb-3">
        <label class="form-label">Banner 2 :</label>
        <input type="file" name="banner2" class="form-control">
        <img src="<?= BASE_ASSETS_UPLOADS . $banner['banner2'] ?>" alt="" width="100px" height="100px" class="cursor-pointer">
    </div>
    <div class="mt-3 mb-3">
        <label class="form-label">Banner 3 :</label>
        <input type="file" name="banner3" class="form-control">
        <img src="<?= BASE_ASSETS_UPLOADS . $banner['banner3'] ?>" alt="" width="100px" height="100px" class="cursor-pointer">
    </div>
    <button class="btn btn-primary">
        Lưu
    </button>
</form>