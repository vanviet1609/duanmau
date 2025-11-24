<?php

class UserController {
    private $userModel;

    public function __construct(){
        $this->userModel = new User();
    }

    public function index(){
        $view = 'user/index';
        $title = 'Danh sach nguoi dung';
        $data = $this->userModel->getAll();
        require_once PATH_VIEW_MAIN_ADMIN;
    }
}