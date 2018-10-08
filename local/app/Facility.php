<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
