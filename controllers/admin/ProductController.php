<?php

class ProductController {
    private $productModel;

    public function __construct(){
        $this->productModel = new Product();
    }

    public function dashboard(){
        $title = "Day la trang quan tri";
        require_once PATH_VIEW_MAIN_ADMIN;
    }

    public function index(){
        $view = 'product/index';
        $title = 'Danh sach san pham';
        $data = $this->productModel->getAll();
        require_once PATH_VIEW_MAIN_ADMIN;
    }
}