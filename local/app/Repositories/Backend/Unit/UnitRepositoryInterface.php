<?php

namespace App\Repositories\Backend\Unit;
interface UnitRepositoryInterface
{
    public function getAllUnit();

    public function showCreateUnit();

    public function showCreateLangUnit($translation_id, $locale_id);

    public function createNewUnit($request);

    public function createNewUnitLocale($request);

    public function showEditUnit($id);

    public function updateUnit($request, $id);

}