<?php

namespace App\Repositories\Backend\Location;

use App\Repositories\EloquentRepository;
use App\Seo;
use Illuminate\Support\Facades\Auth;

class LocationRepository extends EloquentRepository implements LocationRepositoryInterface
{
    public function getModel()
    {
        return \App\Location::class;
    }

    public function getAllLocation()
    {
        $data = $this->_model->getAllParent('order');

        return $data;
    }

    public function showCreateLocation()
    {
        return $this->_model->getAllParent('order');
    }

    public function createNewLocation($request)
    {
        $data = [];
        $seo = Seo::create($request->all());
        $request->request->add(['seo_id' => $seo->id]);
        $parameters = $this->_model->prepareParameters($request);
        dd($parameters);
        $result = $this->_model->create($parameters->all());
        return $data;
    }

    public function showEditLocation($id)
    {
        $data['location'] = $this->find($id);
        $data['locations'] = $this->_model->getAllParent('order');
        return $data;
    }


}