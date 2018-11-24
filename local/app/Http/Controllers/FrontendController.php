<?php

namespace App\Http\Controllers;

use App\Repositories\Frontend\FrontendRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
    protected $frontendRepository;

    public function __construct(FrontendRepositoryInterface $frontendRepository)
    {
        $this->frontendRepository = $frontendRepository;
    }

    public function changeLanguage($language)
    {

        if (Session::has('website_language')) {
            Session::put('website_language', $language);
        }
        app()->setLocale(Session::get('website_language'));
        $array=explode('/',back()->getTargetUrl());
        $end=end($array);
        if($end=='tim-kiem'){

            return redirect()->route('homepage');
        }
        return back();
    }
    public function getFrontend(){
        $data = $this->frontendRepository->getFrontend();
        return view('frontend.home.index', compact('data'));
    }
    public function getSanPhamDetail($path){
        $data = $this->frontendRepository->getSanPhamDetail($path);
        return view('frontend.pr-details.index', compact('data'));
    }
    public function getDuAnDetail($path){
        $data = $this->frontendRepository->getDuAnDetail($path);
        return view('frontend.project.index', compact('data'));
    }
    public function getDanhSachSanPhamTheoDuAn($path){
        $data = $this->frontendRepository->getDanhSachSanPhamTheoDuAn($path);
        return view('frontend.rent.index', compact('data'));
    }
    public function getDanhSachAllSanPham(){
        $data = $this->frontendRepository->getDanhSachAllSanPham();
        return view('frontend.rent.index', compact('data'));
    }
    public function getDanhSachAllSanPhamBan(){
        $data = $this->frontendRepository->getDanhSachAllSanPhamBan();
        return view('frontend.rent.index', compact('data'));
    }
    public function getAllDuAn(){
        $data = $this->frontendRepository->getAllDuAn();
        return view('frontend.list-project.index', compact('data'));
    }
    public function getSearch(Request $request){
        $data = $this->frontendRepository->getSearch($request);
        return view('frontend.rent.index', compact('data'));
    }
    public function getAllTuyenDung(){
        $data = $this->frontendRepository->getAllTuyenDung();
        return view('frontend.carrers.index', compact('data'));
    }
    public function getTuyenDungDetail($path){
        $data = $this->frontendRepository->getTuyenDungDetail($path);
        return view('frontend.career-details.index', compact('data'));
    }
    public function getAllTinTuc(){
        $data = $this->frontendRepository->getAllTinTuc();
        return view('frontend.blog.index', compact('data'));
    }
    public function getTinTucDetail($path){
        $data = $this->frontendRepository->getTinTucDetail($path);
        return view('frontend.blog-details.index', compact('data'));
    }

}

