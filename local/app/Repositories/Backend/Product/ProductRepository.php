<?php

namespace App\Repositories\Backend\Product;

use App\CategoryItem;
use App\Direction;
use App\Facility;
use App\Locale;
use App\Location;
use App\Repositories\EloquentRepository;
use App\Seo;
use App\Translation;
use App\Unit;

class ProductRepository extends EloquentRepository implements ProductRepositoryInterface
{
    public function getModel()
    {
        return \App\Product::class;
    }

    public function getAllProduct()
    {
        $data = [];
        $locale = new Locale();
        $locales = $locale->getAll();
        $translation=new Translation();
        $translations=$translation->getAllTranslation(CATEGORY_PRODUCT);
        $products=array();
        foreach ($translations as $key=>$item){
            array_push($products, $item);
        }
        $data['products']=$products;
        $data['locales']=$locales;
        return $data;
    }


    public function showCreateProduct($locale_id)
    {
        $data = [];
        $location = new Location();
        $locale = new Locale();
        $categoryItem = new CategoryItem();
        $unit = new Unit();
        $facility=new Facility();
        $locales = $locale->getAll();
        $categoryProduct = $categoryItem->getAllParent('order', CATEGORY_PRODUCT,$locale_id);
        $cities = $location->getAllCities($locale_id);
        $units = $unit->getAllUnit($locale_id);
        $facilities=$facility->getAllFacility($locale_id);
        $data['cities'] = $cities;
        $data['categoryProduct'] = $categoryProduct;
        $data['units'] = $units;
        $data['locales']=$locales;
        $data['facilities']=$facilities;
        return $data;
    }

    public function getAllDistrictsByCity($request)
    {
        $data = [];
        $id = $request['id'];
        $location = new Location();
        $wards = $location->getAllChildById($id);
        $data['success'] = 'success';
        $data['districts'] = $wards;
        return $data;
    }

    public function getAllWardsByDistrict($request)
    {
        $data = [];
        $id = $request['id'];
        $location = new Location();
        $wards = $location->getAllChildById($id);
        $data['success'] = 'success';
        $data['wards'] = $wards;
        return $data;
    }

    public function createNewProduct($request)
    {

        $data = [];
        $seo = new Seo();
        if (!$seo->isSeoParameterEmpty($request)) {
            $seo = Seo::create($request->all());
            $request->request->add(['seo_id' => $seo->id]);
        } else {
            $request->request->add(['seo_id' => null]);
        }
        $parameters = $this->_model->prepareParameters($request);
        $translation=Translation::create(['is_active'=>$parameters['is_active'],'type'=>CATEGORY_PRODUCT]);
        $parameters->request->add(['translation_id' => $translation->id]);
        $result = $this->_model->create($parameters->all());
        $attachData = array();
        foreach ($parameters['list_category_id'] as $key=>$item){
            $attachData[$item]=array('type'=>CATEGORY_PRODUCT);
        }
        $result->facilities()->attach($parameters['list_facility_id']);
        $result->categoryitems(CATEGORY_PRODUCT)->attach($attachData);

        return $data;
    }
    public function createNewProductLocale($request)
    {
        $data = [];
        $seo = new Seo();
        if (!$seo->isSeoParameterEmpty($request)) {
            $seo = Seo::create($request->all());
            $request->request->add(['seo_id' => $seo->id]);
        } else {
            $request->request->add(['seo_id' => null]);
        }
        $parameters = $this->_model->prepareParameters($request);
        $parameters->request->add(['translation_id' => $parameters['translation_id']]);
        $result = $this->_model->create($parameters->all());
        $attachData = array();
        foreach ($parameters['list_category_id'] as $key => $item) {
            $attachData[$item] = array('type' => CATEGORY_PRODUCT);
        }
        $result->facilities()->attach($parameters['list_facility_id']);
        $result->categoryitems(CATEGORY_PRODUCT)->attach($attachData);
        return $data;
    }

    public function showEditProduct($id, $locale_id)
    {
        $data['product'] = $this->find($id);
        $data['districts']=null;
        $data['district_id']=null;
        $data['wards']=null;
        $data['ward_id']=null;
        $facility = new Facility();
        $locale = new Locale();
        $location = new Location();
        $unit = new Unit();
        $translation = $data['product']->translations()->first();
        $locales = $locale->getAll();
        $categoryItem = new CategoryItem();
        $units = $unit->getAllUnit($locale_id);
        $data['units'] = $units;
        $categoryProduct = $categoryItem->getAllParent('order', CATEGORY_PRODUCT,$locale_id);
        $facilities = $facility->getAllFacility($locale_id);
        $data['categoryProduct'] = $categoryProduct;
        $data['locales'] = $locales;
        $data['translation'] = $translation;
        $data['facilities'] = $facilities;
        $level = $location->findLevelById($data['product']->location_id);
        switch ($level) {
            case 0:
                $data['cities'] = $location->getAllCities($locale_id);
                $data['city_id']=$data['product']->location_id;
                $data['districts']=$location->getAllChildById($data['product']->location_id);
                break;
            case 1:
                $parentIdDistrict=$location->findParentById($data['product']->location_id);
                $data['districts']=$location->getAllChildById($parentIdDistrict);
                $data['district_id']=$data['product']->location_id;
                $data['cities'] = $location->getAllCities($locale_id);
                $data['city_id']=$parentIdDistrict;
                $data['wards'] = $location->getAllChildById($data['product']->location_id);
                break;
            case 2:
                $parentIdWard = $location->findParentById($data['product']->location_id);
                $data['wards'] = $location->getAllChildById($parentIdWard);
                $data['ward_id']=$data['product']->location_id;
                $parentIdDistrict=$location->findParentById($data['ward_id']);
                $data['district_id']=$parentIdDistrict;
                $parentIDCity=$location->findParentById($parentIdDistrict);
                $data['districts']=$location->getAllChildById($parentIDCity);
                $data['cities'] = $location->getAllCities($locale_id);
                $data['city_id']=$parentIDCity;
                break;
        }
        return $data;
    }

    public function updateProduct($request, $id)
    {
        $data = [];
        $parameters = $this->_model->prepareParameters($request);
        $result = $this->update($id,$parameters->all());
        $seo = new Seo();
        if (!$seo->isSeoParameterEmpty($request)) {
            if (is_null($result->seo_id)) {
                $data = Seo::create($request->all());
                $result->update(['seo_id' => $data->id]);
            } else {
                $result->seos->update($parameters->all());
            }
        } else {
            if (!is_null($result->seo_id)) {
                $result->seos->delete();
            }
        }
        $syncData = array();
        foreach ($parameters['list_category_id'] as $key=>$item){
            $syncData[$item]=array('type'=>CATEGORY_PRODUCT);
        }
        $result->facilities()->sync($parameters['list_facility_id']);
        $result->categoryitems(CATEGORY_PRODUCT)->sync($syncData);
        return $data;
    }

    public function deleteProduct($id)
    {
        $data = [];
        $product = $this->find($id)->translations()->first()->products()->get();
        $translation = $this->find($id)->translations()->first();
        foreach ($product as $key => $item) {
            $this->delete($item->id);
        }
        Translation::destroy($translation->id);
        return $data;
    }

    public function showCreateLangProduct($translation_id, $locale_id)
    {
        $data = [];
        $locale = new Locale();
        $lang=$locale->getLocaleById($locale_id);
        $location = new Location();
        $locale = new Locale();
        $categoryItem = new CategoryItem();
        $unit = new Unit();
        $facility=new Facility();
        $locales = $locale->getAll();
        $categoryProduct = $categoryItem->getAllParent('order', CATEGORY_PRODUCT,$locale_id);
        $cities = $location->getAllCities($locale_id);
        $units = $unit->getAllUnit($locale_id);
        $facilities=$facility->getAllFacility($locale_id);
        $data['cities'] = $cities;
        $data['categoryProduct'] = $categoryProduct;
        $data['units'] = $units;
        $data['locales']=$locales;
        $data['facilities']=$facilities;
        $data['lang'] = $lang;
        return $data;
    }




}