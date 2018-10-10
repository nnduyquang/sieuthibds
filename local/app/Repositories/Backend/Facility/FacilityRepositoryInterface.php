<?php

namespace App\Repositories\Backend\Facility;
interface FacilityRepositoryInterface
{
    public function getAllFacility();

    public function showCreateFacility();

    public function showCreateLangFacility($translation_id, $locale_id);

    public function createNewFacility($request);

    public function createNewFacilityLocale($request);

    public function showEditFacility($id);

    public function updateFacility($request, $id);

    public function deleteFacility($id);

}