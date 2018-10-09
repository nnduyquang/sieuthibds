<?php

namespace App\Repositories\Backend\Location;

interface LocationRepositoryInterface
{
    public function getAllLocation();

    public function showCreateLocation($locale_id);

    public function showCreateLangLocation($translation_id, $locale_id);

    public function createNewLocation($request);

    public function createNewLocationLocale($request);

    public function showEditLocation($id,$locale_id);

    public function updateLocation($request, $id);
}
