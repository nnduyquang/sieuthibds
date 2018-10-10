<?php

namespace App\Http\Controllers;

use App\Repositories\Frontend\FrontendRepositoryInterface;
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
        return back();
    }
    public function getFrontend(){
        $data = $this->frontendRepository->getFrontend();
        return view('frontend.home.index', compact('data'));
    }
    public function getDuAnDetail($path){
        $data = $this->frontendRepository->getDuAnDetail($path);
        return view('frontend.pr-details.index', compact('data'));
    }

}

