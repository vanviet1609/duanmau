<?php

class CommentController {
    private $commentModel;

    public function __construct(){
        $this->commentModel = new Comment();
    }

    public function index(){
        $view = 'comment/index';
        $title = 'Danh sach comment';
        $data = $this->commentModel->getAll();
        require_once PATH_VIEW_MAIN_ADMIN;
    }
}