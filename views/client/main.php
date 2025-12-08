<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title ?? 'Home' ?></title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        a {
            color: #000;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-xxl bg-light">
        <div class="container-fluid d-flex justify-content-between">
            <ul class="navbar-nav d-flex flex-row">
                <li class="nav-item me-3">
                    <a class="nav-link text-uppercase" href="<?= BASE_URL ?>"><b>Home</b></a>
                </li>

                <?php foreach ($cate as $c): ?>
                    <li class="nav-item me-3">
                        <a class="nav-link text-uppercase" href="<?= BASE_URL . '?action=cate&id=' . $c['id'] ?>">
                            <b><?= $c['name'] ?></b>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>

            <div class="d-flex align-items-center">
                <!-- SEARCH -->
                <form class="d-flex me-3" action="<?= BASE_URL ?>" method="GET">
                    <input type="hidden" name="action" value="search">
                    <input
                        class="form-control me-2"
                        type="search"
                        name="keyword"
                        placeholder="Tìm sản phẩm..."
                        style="min-width: 250px;">
                </form>

                <!-- LOGIN BUTTON -->
                <?php if (!isset($_SESSION['userLogin'])): ?>
                    <a href="<?= BASE_URL ?>?action=login">
                        Đăng nhập
                    </a>
                <?php endif; ?>

                <!-- USER MENU -->
                <?php if (isset($_SESSION['userLogin'])): ?>
                    <div class="dropdown">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <?= $_SESSION['userLogin']['name'] ?>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <?php if ($_SESSION['userLogin']['role'] == '1'): ?>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>?action=admin-dashboard">Trang admin</a></li>
                            <?php endif; ?>
                            <li><a class="dropdown-item" href="<?= BASE_URL ?>?action=logout">Logout</a></li>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </nav>


    <div class="container">
        <h1 class="mt-3 mb-3"><?= $title ?? '' ?></h1>

        <div class="row">
            <?php
            if (isset($view)) {
                require_once PATH_VIEW . $view . '.php';
            }
            ?>
        </div>
    </div>

</body>

</html>