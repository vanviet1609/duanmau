<?php

$action = $_GET['action'] ?? '/';

match ($action) {
    '/'         => (new ProductController)->dashboard(),
    //Product Route
    'list-product' => (new ProductController())->index(),
    'delete-product' => (new ProductController())->delete(),
    'show-product' => (new ProductController())->show(),
    'edit-product' => (new ProductController())->edit(),
    'update-product' => (new ProductController())->update(),
    'create-product' => (new ProductController())->create(),
    'store-product' => (new ProductController())->store(),
    //Category Route
    'list-category' => (new CategoryController())->index(),
    'create-cate'=> (new CategoryController())->create(),
    'store-cate'=>(new CategoryController())->store(),
    'delete-cate'=>(new CategoryController())->delete(),
    'show-cate'=>(new CategoryController())->show(),
    'update-cate'=> (new CategoryController())->update(),
    'edit-cate'=>(new CategoryController())->edit(),

    //Comment Route
    'list-comment' => (new CommentController())->index(),
    //User Route
    'list-user' => (new UserController())->index(),
    //Banner Route
    'banner' => (new BannerController())->index(),
    'edit-banner' => (new BannerController())->edit(),
    'update-banner'=> (new BannerController())->update(),
    //Thống kê
    'statistic' => (new StatisticController())->index(),
};
