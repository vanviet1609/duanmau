<?php

class CategoryController
{
    private $categoryModel;

    public function __construct()
    {
        $this->categoryModel = new Category();
    }

    public function index()
    {
        $view = 'category/index';
        $title = 'Danh sach danh muc';
        $data = $this->categoryModel->getAll();
        require_once PATH_VIEW_MAIN_ADMIN;
    }

    public function create()
    {
        $view = 'category/create';
        $title = 'Tạo mới danh mục';

        require_once PATH_VIEW_MAIN_ADMIN;
    }

    public function store()
    {
        try {
            $data = $_POST;
            $this->categoryModel->insert($data);
        } catch (Exception $ex) {
            throw new Exception("Thao tac khong thanh cong $ex");
        }
        header('Location:' . BASE_URL_ADMIN . '&action=create-cate');
        exit();
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
            $prd = $this->categoryModel->find($id);
            if ($prd) {
                $this->categoryModel->delete($id);
                header('Location:' . BASE_URL_ADMIN . '&action=list-category');
                exit();
            } else {
                throw new Exception("Khong tim thay cate voi id: $id");
            }
        } catch (Exception $ex) {
            throw new Exception("Thao tac khong thanh cong $ex");
        }
    }

    public function edit()
    {
        $view = 'category/edit';
        $title = 'Cập nhật danh mục';
        $cate = $this->categoryModel->find($_GET['id']);

        require_once PATH_VIEW_MAIN_ADMIN;
    }

    public function show()
    {
        $view = 'category/show';
        $title = 'Chi tiết danh mục';
        $cate = $this->categoryModel->find($_GET['id']);

        require_once PATH_VIEW_MAIN_ADMIN;
    }

    public function update()
    {
        try {
            $data = $_POST;
            $this->categoryModel->update($data,$_GET['id']);
        } catch (Exception $ex) {
            throw new Exception("Thao tac khong thanh cong $ex");
        }
        header('Location:' . BASE_URL_ADMIN . '&action=list-category');
        exit();
    }
}
