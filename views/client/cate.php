<h3 class="mt-3"><?= $thisCate['name'] ?></h3>
<div class="row">
    <!-- Box san pham -->
    <?php foreach ($catePrd as $prd): ?>
        <div class="col-3">
            <div class="border rounded mb-4">
                <div class="bg-light d-flex justify-content-center align-items-center" style="height: 400px;">
                    <img src="<?= BASE_ASSETS_UPLOADS . $prd['img'] ?>" alt="" class="mw-100 mh-100">
                </div>
                <!-- Hien thi noi dung san pham -->
                <div class="p-2 d-flex align-items-center justify-content-around">
                    <div>
                        <a href="<?= BASE_URL . '?action=detail&id=' . $prd['id'] ?>">
                            <h5><?= $prd['name'] ?></h5>
                        </a>
                        <span class="fw-bold">
                            <?= $prd['price'] ?>
                        </span>
                    </div>
                    <button class="btn btn-danger">
                        Mua ngay
                    </button>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>