<?php

namespace App\Repositories\Backend\Facility;

use App\Locale;
use App\Product;
use App\Repositories\EloquentRepository;
use App\Translation;

class FacilityRepository extends EloquentRepository implements FacilityRepositoryInterface
{
    public function getModel()
    {
        return \App\Facility::class;
    }

    public function getAllFacility()
    {
        $data = [];
        $locale = new Locale();
        $locales = $locale->getAll();
        $translation = new Translation();
        $translations = $translation->getAllTranslation(CATEGORY_FACILITY);
        $facilities = array();
        foreach ($translations as $key => $item) {
            array_push($facilities, $item);
        }

        $data['facilities'] = $facilities;
        $data['locales'] = $locales;
        return $data;
    }

    public function showCreateFacility()
    {
        $data = [];
        $locale = new Locale();
        $locales = $locale->getAll();
        $data['locales'] = $locales;
        return $data;
    }

    public function showCreateLangFacility($translation_id, $locale_id)
    {
        $data = [];
        $locale = new Locale();
        $lang = $locale->getLocaleById($locale_id);
        $data['lang'] = $lang;
        return $data;
    }

    public function createNewFacility($request)
    {
        $data = [];
        $parameters = $this->_model->prepareParameters($request);
        $translation = Translation::create(['is_active' => $parameters['is_active'], 'type' => CATEGORY_FACILITY]);
        $parameters->request->add(['translation_id' => $translation->id]);
        $result = $this->_model->create($parameters->all());
        return $data;
    }

    public function createNewFacilityLocale($request)
    {
        $data = [];
        $parameters = $this->_model->prepareParameters($request);
        $parameters->request->add(['translation_id' => $parameters['translation_id']]);
        $result = $this->_model->create($parameters->all());
        return $data;
    }


    public function showEditFacility($id)
    {
        $data = [];
        $data['facility'] = $this->find($id);

        $translation = $data['facility']->translations()->first();
        $locale = new Locale();
        $locales = $locale->getAll();
        $data['locales'] = $locales;
        $data['translation'] = $translation;
        return $data;
    }

    public function updateFacility($request, $id)
    {
        $data = [];
        $parameters = $this->_model->prepareParameters($request);
        $result = $this->update($id, $parameters->all());
        return $data;
    }

    public function deleteFacility($id)
    {
        $data = [];
        $facilities = $this->find($id)->translations()->first()->facilities()->get();
        $translation = $this->find($id)->translations()->first();
        $arrayIDFacility=array();
        foreach ($facilities as $key => $item) {
            array_push($arrayIDFacility,$item->id);
            $this->delete($item->id);
        }
        $product=new Product();
        $products=$product->getAllProduct();
        foreach ($products as $key=>$item){
            $item->facilities()->detach($arrayIDFacility);
        }
        Translation::destroy($translation->id);
        return $data;
    }


}