<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'id','name','path','description','content','code' ,'image','sub_image','is_active','price','num_bath','num_bed','location_district','num_member','area','furniture_full','map','order','user_id','seo_id','created_at','updated_at'
    ];
    protected $hidden = ['id'];
    public function users()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    public function seos(){
        return $this->belongsTo('App\Seo','seo_id');
    }
    public function facilities()
    {
        return $this->belongsToMany('App\Facility', 'facilities_products', 'product_id', 'facility_id')->withTimestamps();
    }
    public function getAllProductActiveOrderById(){
        return $this->where('isActive',ACTIVE)->orderBy('id','DESC')->get();
    }
    public function prepareParameters($parameters)
    {

        $parameters->request->add(['path' => '']);
        $parameters->request->add(['user_id' => Auth::user()->id]);
        if ($parameters->input('select-unit') != -1) {
            $parameters->request->add(['unit_id' => $parameters->input('select-unit')]);
        }
        if (!$parameters->input('list_category_id')) {
            $parameters->request->add(['list_category_id' => [1]]);
        }
        if (!$parameters->input('is_active')) {
            $parameters->request->add(['is_active' => null]);
        }
        if ($parameters->input('image-choose')) {
            $listImage = $parameters->input('image-choose');
            $subImage = '';
            if (count($listImage) != 0) {
                foreach ($listImage as $key => $item) {
                    if (hasHttpOrHttps($item))
                        $subImage = $subImage . substr($item, strpos($item, 'images'), strlen($item) - 1) . ';';
                    else {
                        $subImage = $subImage . $item . ';';
                    }
                }
                $parameters->request->add(['sub_image' => substr($subImage, 0, -1)]);
            }
        } else {
            $parameters->request->add(['sub_image' => null]);
        }
        return $parameters;

    }
}
