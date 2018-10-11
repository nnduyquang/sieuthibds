<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Product extends Model
{
    protected $fillable = [
        'id', 'name', 'path', 'description', 'content', 'code', 'image', 'sub_image', 'is_active', 'price', 'num_bath', 'num_bed', 'location_district', 'num_member', 'area', 'furniture_full', 'map', 'order', 'user_id', 'seo_id', 'unit_id', 'location_id', 'locale_id', 'translation_id', 'created_at', 'updated_at'
    ];
    protected $hidden = ['id'];

    public function users()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function seos()
    {
        return $this->belongsTo('App\Seo', 'seo_id');
    }

    public function units()
    {
        return $this->belongsTo('App\Unit', 'unit_id');
    }

    public function facilities()
    {
        return $this->belongsToMany('App\Facility', 'facilities_products', 'product_id', 'facility_id')->withTimestamps();
    }

    public function categoryitems($type)
    {
        return $this->belongsToMany('App\CategoryItem', 'category_many', 'item_id', 'category_id')->withPivot('type')->wherePivot('type', $type)->withTimestamps();
    }

    public function translations()
    {
        return $this->belongsTo('App\Translation', 'translation_id');
    }

    public function getLanguage()
    {
        $lang = Session::get('website_language');
        $locale = new Locale();
        $locale_id = $locale->getLocaleIdByShortLang($lang);
        return $locale_id;
    }

    public function getAllProductActiveOrderById()
    {
        return $this->where('isActive', ACTIVE)->orderBy('id', 'DESC')->get();
    }

    public function getAllProduct()
    {
        return $this->get();
    }

    public function getAllProductByLocale()
    {
        $locale_id = self::getLanguage();
        return $this->where('locale_id', $locale_id)->get();
    }

    public function prepareParameters($parameters)
    {
        $city = $parameters->input('select-city');
        $district = $parameters->input('select-district');
        $ward = $parameters->input('select-ward');
        $parameters->request->add(['location_id' => null]);
        $parameters->request->add(['path' => '']);
        $parameters->request->add(['user_id' => Auth::user()->id]);
        if ($parameters->input('select-unit') != -1) {
            $parameters->request->add(['unit_id' => $parameters->input('select-unit')]);
        }
        if (!$parameters->input('list_category_id')) {
            $parameters->request->add(['list_category_id' => [1]]);
        }
        if (!$parameters->input('list_facility_id')) {
            $parameters->request->add(['list_facility_id' => [1]]);
        }
        if (!$parameters->input('is_active')) {
            $parameters->request->add(['is_active' => 0]);
        } else {
            $parameters->request->add(['is_active' => 1]);
        }
        if ($city != '-1') {
            if ($district == '-1') {
                if ($ward == '-1')
                    $parameters['location_id'] = $city;
                else {
                    $parameters['location_id'] = $ward;
                }
            } else {
                if ($ward == '-1') {
                    $parameters['location_id'] = $district;
                } else {
                    $parameters['location_id'] = $ward;
                }
            }
        } else {
            $parameters['location_id'] = 1;
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

    public function searchProduct($request)
    {
        $locale_id = self::getLanguage();
        $projectId = $request->input('select-project');
        $searchText = $request->input('input-search-text');
        $products = $this->query();
        $category = new CategoryItem();
        $products->where('locale_id', $locale_id);
        if ($projectId != -1) {
            return $category->getCategoryItemById($projectId)->products()->get();
        } else {
            if (!is_null($searchText)){
                $products->where('name','like','%'.$searchText.'%');
            }
        }
        return $products->get();
    }

    public function getAllProductHasTake($take)
    {
        return $this->take($take)->get();
    }

    public function getAllProductByArrayLocationId($arrayLocationId)
    {
        return $this->whereIn('location_id', $arrayLocationId)->get();
    }

    public function findProductByPath($path)
    {
        $locale_id = self::getLanguage();
        return $this->wherePath($path)->first()->translations()->first()->products()->where('locale_id', $locale_id)->first();
    }

    public function findOtherProductByPath($id)
    {
        $locale_id = self::getLanguage();
        $categories = $this->where('id', $id)->first()->categoryitems(CATEGORY_PRODUCT)->get();

        $other = array();
        foreach ($categories as $key => $item) {
            $products = $item->products()->where('id', '!=', $id)->where('locale_id', $locale_id)->get();

            foreach ($products as $key2 => $item2) {
                array_push($other, $item2);
            }
        }
        return $other;
    }

    public function setIsActiveAttribute($value)
    {
        if (!IsNullOrEmptyString($value)) {
            $this->attributes['is_active'] = 1;
        } else {
            $this->attributes['is_active'] = 0;
        }
    }

    public function setImageAttribute($value)
    {
        if ($value) {
            $this->attributes['image'] = substr($value, strpos($value, 'images'), strlen($value) - 1);
        } else
            $this->attributes['image'] = null;
    }

    public function setPathAttribute($value)
    {
        if (IsNullOrEmptyString($value))
            $this->attributes['path'] = chuyen_chuoi_thanh_path($this->name);
    }


    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($product) { // before delete() method call this
            if (!is_null($product->seo_id))
                $product->seos->delete();
            $product->categoryitems(CATEGORY_PRODUCT)->detach();
            $product->facilities()->detach();
        });

    }
}
