<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    protected $fillable = [
        'is_active', 'type'
    ];
    public function setIsActiveAttribute($value)
    {
        if (!IsNullOrEmptyString($value)) {
            $this->attributes['is_active'] = 1;
        } else {
            $this->attributes['is_active'] = 0;
        }
    }
    public function prepareParameters($parameters){
        if (!$parameters->input('is_active')) {
            $parameters->request->add(['is_active' => null]);
        }
    }
}
