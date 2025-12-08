<?php

$action = $_GET['action'] ?? '/';

match ($action) {
    '/'         => (new HomeController)->index(),
    'detail'    => (new DetailController)->show(),
    'cate'      => (new HomeController)->cate(),
    'search'    => (new HomeController)->search(),
    'login'     => (new HomeController())->login(),
    'register'  => (new HomeController())->register(),
};