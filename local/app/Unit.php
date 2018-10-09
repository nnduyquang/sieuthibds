<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $fillable = [
        'name','locale_id','translation_id'
    ];

    public function translations()
    {
        return $this->belongsTo('App\Translation', 'translation_id');
    }

    public function prepareParameters($parameters){
        return $parameters;
    }
    public function getAllUnit($locale_id)
    {
        return $this->where('locale_id',$locale_id)->get();
    }
}
