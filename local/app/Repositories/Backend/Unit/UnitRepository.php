<?php

namespace App\Repositories\Backend\Unit;

use App\Locale;
use App\Repositories\EloquentRepository;
use App\Translation;

class UnitRepository extends EloquentRepository implements UnitRepositoryInterface
{
    public function getModel()
    {
        return \App\Unit::class;
    }

    public function getAllUnit()
    {
        $data = [];
        $locale = new Locale();
        $locales = $locale->getAll();
        $translation = new Translation();
        $translations = $translation->getAllTranslation(CATEGORY_UNIT);
        $units = array();
        foreach ($translations as $key => $item) {
            array_push($units, $item);
        }

        $data['units'] = $units;
        $data['locales'] = $locales;
        return $data;
    }

    public function showCreateUnit()
    {
        $data = [];
        $locale = new Locale();
        $locales = $locale->getAll();
        $data['locales'] = $locales;
        return $data;
    }

    public function showCreateLangUnit($translation_id, $locale_id)
    {
        $data = [];
        $locale = new Locale();
        $lang = $locale->getLocaleById($locale_id);
        $data['lang'] = $lang;
        return $data;
    }

    public function createNewUnit($request)
    {
        $data = [];
        $parameters = $this->_model->prepareParameters($request);
        $translation = Translation::create(['is_active' => $parameters['is_active'], 'type' => CATEGORY_UNIT]);
        $parameters->request->add(['translation_id' => $translation->id]);
        $result = $this->_model->create($parameters->all());
        return $data;
    }

    public function createNewUnitLocale($request)
    {
        $data = [];
        $parameters = $this->_model->prepareParameters($request);
        $parameters->request->add(['translation_id' => $parameters['translation_id']]);
        $result = $this->_model->create($parameters->all());
        return $data;
    }


    public function showEditUnit($id)
    {
        $data = [];
        $data['unit'] = $this->find($id);

        $translation = $data['unit']->translations()->first();
        $locale = new Locale();
        $locales = $locale->getAll();
        $data['locales'] = $locales;
        $data['translation'] = $translation;
        return $data;
    }

    public function updateUnit($request, $id)
    {
        $data = [];
        $parameters = $this->_model->prepareParameters($request);
        $result = $this->update($id, $parameters->all());
        return $data;
    }


}