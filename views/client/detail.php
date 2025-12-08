<div class="container">
    <div class="row">
        <div class="col-3">
            <div class="p-3">
                <img src="<?= BASE_ASSETS_UPLOADS . $prd['img'] ?>" alt="" width="100%" height="250px">
            </div>
        </div>
        <div class="col-9">
            <div class="p-3">
                <h3 class="text-primary"><?= $prd['name'] ?></h3>

                <p class="fw-semibold text-danger fs-4">
                    Giá: <?= $prd['price'] ?> đ
                </p>
                <small>Số lượng còn: <?= $prd['quantity'] ?></small>
                <hr>
                <form class=" mt-5 d-flex items-center" action="<?= BASE_URL ?>" method="get">
                    <input type="hidden" name="action" value="client-add-to-cart-products">
                    <input type="hidden" name="id" value="<?= $prd['id'] ?>">
                    <div class="me-4">
                        <input type="number" class="form-control " width="100px" placeholder="Số lượng" style="width: 100px;" value="1" min="1" max="<?= $prd['quantity'] ?>" name="quantity">
                    </div>
                    <?php if (isset($_SESSION['userLogin'])): ?>
                        <button type="submit" class="btn btn-danger">Thêm vào giỏ hàng</button>
                    <?php else: ?>
                        <button type="button" class="btn btn-danger" prd-bs-toggle="modal" prd-bs-target="#modalLogin">
                            Thêm vào giỏ hàng
                        </button>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <div class="p-3 mt-4">
                <h3>Mô tả sản phẩm</h3>
                <p><?= $prd['description'] ?></p>
            </div>
            <div class="p-3 mt-4">
                <h3>Sản phẩm liên quan</h3>
                <div class="row g-4">
                    <?php foreach ($listOtherProduct as $prd): ?>
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
                <?php if ($listComment): ?>
                    <div class="p-3 mt-4">
                        <h3>Bình luận sản phẩm</h3>
                        <div class="row g-4">
                            <?php foreach ($listComment as $cmt): ?>
                                <small><?= $cmt['user_name'] ?></small>
                                <p> Nội dung bình luận: <?= $cmt['content'] ?></p>
                            <?php endforeach;  ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
