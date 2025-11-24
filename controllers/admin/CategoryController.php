<?php

class CategoryController {
    private $categoryModel;

    public function __construct(){
        $this->categoryModel = new Category();
    }

    public function index(){
        $view = 'category/index';
        $title = 'Danh sach danh muc';
        $data = $this->categoryModel->getAll();
        require_once PATH_VIEW_MAIN_ADMIN;
    }
}