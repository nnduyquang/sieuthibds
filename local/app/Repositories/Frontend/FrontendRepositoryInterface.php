<?php

namespace App\Repositories\Frontend;

interface FrontendRepositoryInterface
{
    public function getFrontEndInfo();

    public function getFrontend();

    public function getSanPhamDetail($path);

    public function getDuAnDetail($path);

    public function getDanhSachSanPhamTheoDuAn($path);

    public function getAllMenuFrontend();

    public function getDanhSachAllSanPham();

    public function getDanhSachAllSanPhamBan();

    public function getAllDuAn();

    public function getSearch($request);

    public function getAllTuyenDung();

    public function getTuyenDungDetail($path);

    public function getAllTinTuc();

    public function getTinTucDetail($path);


}