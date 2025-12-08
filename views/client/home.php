<div id="carouselExampleIndicators" class="carousel slide" style="height: 500px;">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner h-100">
        <div class="carousel-item active">
            <img src="<?= BASE_ASSETS_UPLOADS . $banner['banner1'] ?>" class="d-block w-100 h-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?= BASE_ASSETS_UPLOADS . $banner['banner2'] ?>" class="d-block w-100 h-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?= BASE_ASSETS_UPLOADS . $banner['banner3'] ?>" class="d-block w-100 h-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- Het slide -->
<!-- Khu vuc san pham -->
<!-- sp moi -->
<h3 class="mt-3">Sản phẩm mới</h3>
<div class="row">
    <!-- Box san pham -->
    <?php foreach ($top4Lastest as $prd): ?>
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
                            <?= $prd['price'] ?> đ
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
<!-- end sp moi -->
<!-- sp yeu thich -->
<h3 class="mt-3">Sản phẩm yêu thích</h3>
<div class="row">
    <!-- Box san pham -->
    <?php foreach($top4View as $prd): ?>
    <div class="col-3">
        <div class="border rounded mb-4">
            <div class="bg-light d-flex justify-content-center align-items-center" style="height: 400px;">
                <img src="<?= BASE_ASSETS_UPLOADS . $prd['img'] ?>" alt="" class="mw-100 mh-100">
            </div>
            <!-- Hien thi noi dung san pham -->
            <div class="p-2 d-flex align-items-center justify-content-around">
                <div>
                    <a href="<?= BASE_URL . '?action=detail&id=' . $prd['id']?>"><h5><?= $prd['name'] ?></h5></a>
                    <span class="fw-bold">
                        <?= $prd['price'] . ' đ'?>
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
<!-- end sp yeu thich -->