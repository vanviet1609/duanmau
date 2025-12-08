<?php

class ProductController
{
    private $productModel;
    private $cateModel;

    public function __construct()
    {
        $this->productModel = new Product();
        $this->cateModel = new Category();
    }

    public function dashboard()
    {
        $title = "Day la trang quan tri";
        require_once PATH_VIEW_MAIN_ADMIN;
    }

    public function index()
    {
        $view = 'product/index';
        $title = 'Danh sach san pham';
        $data = $this->productModel->getAll();
        require_once PATH_VIEW_MAIN_ADMIN;
    }

    public function delete()
    {
        // var_dump($_GET['id']);
        // die;
        try {
            if (!isset($_GET['id'])) {
                throw new Exception("Khong nhan duoc id");
            }
            $id = $_GET['id'];
            $prd = $this->productModel->find($id);
            if ($prd) {
                $this->productModel->delete($id);
                header('Location:' . BASE_URL_ADMIN . '&action=list-product');
                exit();
            } else {
                throw new Exception("Khong tim thay san pham voi id: $id");
            }
        } catch (Exception $ex) {
            throw new Exception("Thao tac khong thanh cong $ex");
        }
    }

    public function create()
    {
        $view = 'product/create';
        $title = 'Tao moi san pham';
        $categories = $this->cateModel->getAll();

        require_once PATH_VIEW_MAIN_ADMIN;
    }

    public function edit()
    {
        $view = 'product/edit';
        $title = 'Cập nhật sản phẩm';
        $prd = $this->productModel->find($_GET['id']);
        $categories = $this->cateModel->getAll();

        require_once PATH_VIEW_MAIN_ADMIN;
    }

    public function show()
    {
        $view = 'product/show';
        $title = 'Chi tiết sản phẩm';
        $prd = $this->productModel->find($_GET['id']);
        $categories = $this->cateModel->getAll();

        require_once PATH_VIEW_MAIN_ADMIN;
    }

    public function store()
    {
        try {
            $data = $_POST + $_FILES;

            if ($data['image']['size'] > 0) {
                $data['image'] = upload_file('products', $data['image']);
            } else {
                $data['image'] = null;
            }
            $this->productModel->insert($data);
        } catch (Exception $ex) {
            throw new Exception("Thao tac khong thanh cong $ex");
        }
        header('Location:' . BASE_URL_ADMIN . '&action=create-product');
        exit();
    }

    public function update()
    {   
        $prd = $this->productModel->find($_GET['id']);
        try {
            $data = $_POST + $_FILES;
            
            if ($data['image']['size'] > 0) {
                $data['image'] = upload_file('products', $data['image']);
                unlink(PATH_ASSETS_UPLOADS.$prd['img']);
            } else {
                $data['image'] = $prd['img'];
            }
            $this->productModel->update($data,$_GET['id']);
        } catch (Exception $ex) {
            throw new Exception("Thao tac khong thanh cong $ex");
        }
        header('Location:' . BASE_URL_ADMIN . '&action=list-product');
        exit();
    }
}
