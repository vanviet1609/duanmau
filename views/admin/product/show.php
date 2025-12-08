<form class="form-inline" action="<?= BASE_URL_ADMIN . '&action=update-product&id='.$prd['id'] ?>" method="POST" enctype="multipart/form-data">

    <div class="mt-3 mb-3">
        <label class="form-label">Tên :</label>
        <input type="text" name="name" class="form-control" value="<?= $prd['name'] ?>" disabled>
    </div>
    <div class="mt-3 mb-3">
        <label class="form-label">Danh mục :</label>
        <select name="category_id" class="form-control" disabled>
            <!-- <option value="" class="form-control">Danh mục 1</option>
            <option value="" class="form-control">Danh mục 2</option> -->
            <?php foreach ($categories as $cat): ?>
                <option
                    value="<?= $cat['id'] ?>"
                    <?= ($cat['id'] == $prd['category_id']) ? 'selected' : '' ?>>
                    <?= $cat['name'] ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mt-3 mb-3">
        <label class="form-label">Mô tả :</label>
        <input type="text" name="description" class="form-control" value="<?= $prd['description'] ?>" disabled>
    </div>
    <div class="mt-3 mb-3">
        <label class="form-label">Giá :</label>
        <input type="number" name="price" class="form-control" value="<?= $prd['price'] ?>" disabled>
    </div>
    <div class="mt-3 mb-3">
        <label class="form-label">Số lượng :</label>
        <input type="number" name="quantity" class="form-control" value="<?= $prd['quantity'] ?>" disabled>
    </div>
    <div class="mt-3 mb-3">
        <label class="form-label">Ảnh :</label>
        <br>
        <img src="<?= BASE_ASSETS_UPLOADS . $prd['img'] ?>" alt="" width="100px" height="100px" class="cursor-pointer">
    </div>
    <button class="btn btn-primary" disabled>
        Lưu
    </button>
</form>