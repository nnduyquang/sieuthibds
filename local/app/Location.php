<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
        'name', 'path', 'parent_id', 'order', 'is_active', 'seo_id'
    ];

    public function children()
    {
        return $this->hasMany('App\Location', 'parent_id')
            ->with('children');
    }

    public function seos()
    {
        return $this->belongsTo('App\Seo', 'seo_id');
    }

    public function getAllOrderBy($order)
    {
        return $this->orderBy($order)->get();
    }

    public function getAllParent($order)
    {
        $newArray = array();
        $locations = self::getAllOrderBy($order);
        foreach ($locations as $key => $item) {
            if (!isset($item->parent_id)) {
                array_push($newArray, $item);
            }
        }
        return $newArray;
    }

    public function getAllCities()
    {
        return $this->whereNull('parent_id')->get();
    }

    public function getAllChildById($id)
    {
        return $this->where('parent_id', $id)->get();
    }

    public function getAllChildAndDeeperById($id)
    {
        $locations = collect();
        self::recursiveChildAndDeeper($id,$locations);
        return $locations;
    }

    public function recursiveChildAndDeeper($id, &$locations)
    {

        $location = $this->where('parent_id', $id)->get();
        foreach ($location as $key => $item) {
            $locations->push($item);
            if (!$item->children->isEmpty()) {
                self::recursiveChildAndDeeper($item->id,$locations);
            }
        }

    }

    public function prepareParameters($parameters)
    {
        if (!$parameters->has('is_active'))
            $parameters->request->add(['is_active' => null]);
        $parameters->request->add(['path' => '']);
        $parent_id = $parameters->input('parent_id');
        if ($parent_id == '-1') {
            $parameters['parent_id'] = null;
            $parameters['level'] = 0;
        } else {
            $parameters['level'] = self::findLevelById($parent_id) + 1;
        }
        return $parameters;
    }

    public function findLevelById($id)
    {
        return $this->where('id', $id)->first()->level;
    }

    public function findParentById($id)
    {
        return $this->where('id', $id)->first()->parent_id;
    }

    public function setIsActiveAttribute($value)
    {
        if (!IsNullOrEmptyString($value)) {
            $this->attributes['is_active'] = 1;
        } else {
            $this->attributes['is_active'] = 0;
        }
    }

    public function getStringLocatationById($id)
    {
        $stringLocation = '';
        self::recursiveLocationName($id,$stringLocation);

        return substr($stringLocation, 0, strlen($stringLocation) - 1);
    }

    public function recursiveLocationName($id,&$stringLocation){

        $location=$this->find($id);
        $stringLocation=$stringLocation.$location->name.',';
        if(!is_null($location->parent_id)){
            self::recursiveLocationName($location->parent_id,$stringLocation);
        }
    }
    public function getLocationByPath($path){
        return $this->wherePath($path)->first();
    }

    public function getListLocationByArrayId($array){
        return $this->whereIn('id', $array)->get();
    }

    public function setPathAttribute($value)
    {
        if (IsNullOrEmptyString($value))
            $this->attributes['path'] = chuyen_chuoi_thanh_path($this->name);
    }

    public function setOrderAttribute($value)
    {
        if (IsNullOrEmptyString($value))
            $this->attributes['order'] = 1;
    }
}
