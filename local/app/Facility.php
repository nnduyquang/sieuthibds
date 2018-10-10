<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Facility extends Model
{
    protected $fillable = [
        'name','icon','locale_id','translation_id'
    ];

    public function translations()
    {
        return $this->belongsTo('App\Translation', 'translation_id');
    }

    public function prepareParameters($parameters){
        return $parameters;
    }
    public function getLanguage(){
        $lang=Session::get('website_language');
        $locale=new Locale();
        $locale_id=$locale->getLocaleIdByShortLang($lang);
        return $locale_id;
    }
    public function getAllFacility($locale_id){
        return $this->where('locale_id',$locale_id)->get();
    }
    public function getFacilityAll(){
        $locale_id=self::getLanguage();
        return $this->where('locale_id',$locale_id)->get();
    }
}
