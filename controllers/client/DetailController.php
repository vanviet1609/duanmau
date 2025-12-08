<?php

class DetailController{
    private $prdModel;
    private $cateModel;
    private $commentModel;

    public function __construct()
    {
        $this->prdModel = new Product();
        $this->cateModel = new Category();
        $this->commentModel = new Comment();
    }

    public function show(){
        $cate = $this->cateModel->getAll();
        $view = 'detail';
        $title = 'Chi tiết sản phẩm';
        try{
            if(!isset($_GET['id'])){
                throw new Exception("Không tồn tại tham số ID");
            }
            $id = $_GET['id'];
            $prd = $this->prdModel->find($id);
            if(empty($prd)){
                throw new Exception("Không tồn tại sản phẩm với id:$id");
            }
            $view_count = $prd['view_count'] + 1;
            $this->prdModel->updateView($view_count,$id);
            $listOtherProduct = $this->prdModel->getOtherProduct($prd['category_id'],$prd['id']);
            $listComment = $this->commentModel->getCommentByPrd($prd['id']);
        }catch(Exception $ex){
            throw new Exception("Thao tác xảy ra lỗi: $ex");
        }
        require_once PATH_VIEW_MAIN;
    }
}