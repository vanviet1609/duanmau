<?php

class StatisticController
{
    private $categoryModel;
    private $searchModel;
    private $prdModel;

    public function __construct()
    {
        $this->categoryModel = new Category();
        $this->searchModel = new Search();
        $this->prdModel = new Product();
    }

    public function index()
    {
        $view = 'statistic/index';
        $title = 'Thống kê';
        $cate = $this->categoryModel->getAll();
        $mostSearch = $this->searchModel->getMostSearch(5);
        $mostViewProduct = $this->prdModel->topView(5);
        require_once PATH_VIEW_MAIN_ADMIN;
    }

}
