<?php

class BannerController
{
    private $bannerModel;

    public function __construct()
    {
        $this->bannerModel = new Banner();
    }

    public function index()
    {   
        
        $view = 'banner/index';
        $title = 'Quản lý banner';
        $data = $this->bannerModel->getAll();
        $banner = $data[0];
        require_once PATH_VIEW_MAIN_ADMIN;
    }

    public function edit()
    {
        $view = 'banner/edit';
        $title = 'Cập nhật banner';
        $data = $this->bannerModel->getAll();
        $banner = $data[0];
        require_once PATH_VIEW_MAIN_ADMIN;
    }

    public function update()
    {   
        $getBanner = $this->bannerModel->getAll();
        $banner = $getBanner[0];
        try {
            $data = $_POST + $_FILES;
            //Banner1
            if ($data['banner1']['size'] > 0) {
                $data['banner1'] = upload_file('banners', $data['banner1']);
                unlink(PATH_ASSETS_UPLOADS.$banner['banner1']);
            } else {
                $data['banner1'] = $banner['banner1'];
            }
            //Banner2
            if ($data['banner2']['size'] > 0) {
                $data['banner2'] = upload_file('banners', $data['banner2']);
                unlink(PATH_ASSETS_UPLOADS.$banner['banner2']);
            } else {
                $data['banner2'] = $banner['banner2'];
            }
            //Banner3
            if ($data['banner3']['size'] > 0) {
                $data['banner3'] = upload_file('banners', $data['banner3']);
                unlink(PATH_ASSETS_UPLOADS.$banner['banner3']);
            } else {
                $data['banner3'] = $banner['banner3'];
            }
            $this->bannerModel->update($data);
        } catch (Exception $ex) {
            throw new Exception("Thao tac khong thanh cong $ex");
        }
        header('Location:' . BASE_URL_ADMIN . '&action=banner');
        exit();
    }

    
}
