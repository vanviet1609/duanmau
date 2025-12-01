<?php

$action = $_GET['action'] ?? '/';

match ($action) {
    '/'         => (new ProductController)->dashboard(),
    //Product Route
    'list-product' => (new ProductController())->index(),
    'delete-product' => (new ProductController())->delete(),
    'show-product' => (new ProductController())->index(),
    'edit-product' => (new ProductController())->index(),
    'update-product' => (new ProductController())->index(),
    'create-product' => (new ProductController())->create(),
    'store-product' => (new ProductController())->store(),
    //Category Route
    'list-category' => (new CategoryController())->index(),

    //Comment Route
    'list-comment' => (new CommentController())->index(),
    //User Route
    'list-user' => (new UserController())->index(),
};
