<?php

namespace App\Repositories\Backend\Location;

use App\Locale;
use App\Repositories\EloquentRepository;
use App\Seo;
use App\Translation;
use Illuminate\Support\Facades\Auth;

class LocationRepository extends EloquentRepository implements LocationRepositoryInterface
{
    public function getModel()
    {
        return \App\Location::class;
    }

    public function getAllLocation()
    {
        $locale = new Locale();
        $locales = $locale->getAll();
        $translation = new Translation();
        $translations = $translation->getAllTranslation(CATEGORY_LOCATION);
        $locations = array();
        foreach ($translations as $key => $item) {
            foreach ($item->locations()->get() as $key2=>$item2)
                if($item2->locale_id==1&&is_null($item2->parent_id))
                    array_push($locations, $item2);
        }

        $data['locations'] = $locations;
        $data['locales'] = $locales;
//        $data = $this->_model->getAllParent('order');

        return $data;
    }

    public function showCreateLocation($locale_id)
    {
        $data = [];
        $locale = new Locale();
        $locales = $locale->getAll();
        $data['locales'] = $locales;
        $data['locations']=$this->_model->getAllParent('order',$locale_id);
        return $data;
    }

    public function createNewLocation($request)
    {
        $data = [];

        $parameters = $this->_model->prepareParameters($request);
        $translation=Translation::create(['is_active'=>$parameters['is_active'],'type'=>CATEGORY_LOCATION]);
        $parameters->request->add(['translation_id' => $translation->id]);
        $result = $this->_model->create($parameters->all());
        return $data;
    }

    public function showEditLocation($id,$locale_id)
    {
        $data = [];
        $data['location'] = $this->find($id);

        $translation=$data['location']->translations()->first();
        $locale = new Locale();
        $locales = $locale->getAll();
        $data['locations'] = $this->_model->getAllParent('order',$locale_id);
        $data['locales'] = $locales;
        $data['translation']=$translation;
        return $data;


        return $data;
    }

    public function showCreateLangLocation($translation_id, $locale_id)
    {
        $data = [];
        $locale = new Locale();
        $lang=$locale->getLocaleById($locale_id);
        $data['locations']=$this->_model->getAllParent('order', $locale_id);
        $data['lang'] = $lang;
        return $data;
    }

    public function createNewLocationLocale($request)
    {
        $data = [];
        $parameters = $this->_model->prepareParameters($request);
        $parameters->request->add(['translation_id' => $parameters['translation_id']]);
        $result = $this->_model->create($parameters->all());
        return $data;
    }

    public function updateLocation($request, $id)
    {
        $data = [];
        $parameters = $this->_model->prepareParameters($request);
        $result = $this->update($id, $parameters->all());
        return $data;
    }


}