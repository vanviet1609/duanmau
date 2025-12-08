<?php

class HomeController
{
    private $prdModel;
    private $bannerModel;
    private $cateModel;
    private $searchModel;
    private $userModel;

    public function __construct()
    {
        $this->prdModel = new Product();
        $this->bannerModel = new Banner();
        $this->cateModel = new Category();
        $this->searchModel = new Search();
        $this->userModel = new User();
    }
    public function index()
    {
        $view = 'home';
        $top4Lastest = $this->prdModel->top4Lastest();
        $top4View = $this->prdModel->topView(4);
        $data = $this->bannerModel->getAll();
        $banner = $data[0];
        $cate = $this->cateModel->getAll();
        require_once PATH_VIEW_MAIN;
    }

    public function cate()
    {
        $view = 'cate';
        $cate = $this->cateModel->getAll();
        $thisCate = $this->cateModel->find($_GET['id']);
        $catePrd = $this->prdModel->findByCate($_GET['id']);
        require_once PATH_VIEW_MAIN;
    }

    public function search(){
        $view = 'search';
        $cate = $this->cateModel->getAll();
        $key = $_GET['keyword'];
        $search = $this->prdModel->search($key);
        $saveSearch = $this->searchModel->insert($key);
        require_once PATH_VIEW_MAIN;
    }

    public function login(){
        $cate = $this->cateModel->getAll();
        $title = "Trang dang nhap";
        $view = "login";
        require_once PATH_VIEW_MAIN;
    }
    public function register(){
        $cate = $this->cateModel->getAll();
        $title = "Trang dang ky";
        $view = "register";

        
        require_once PATH_VIEW_MAIN;
    }
}
