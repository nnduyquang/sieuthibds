<?php

namespace App\Http\Controllers;

use App\Repositories\Frontend\FrontendRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
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
        }else{
            Session::set('website_language',$language);
        }
        app()->setLocale(Session::get('website_language'));
        return back();
    }

}

