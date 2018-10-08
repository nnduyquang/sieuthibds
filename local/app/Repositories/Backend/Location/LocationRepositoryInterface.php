<?php

namespace App\Repositories\Backend\Location;

interface LocationRepositoryInterface
{
    public function getAllLocation();

    public function showCreateLocation();

    public function createNewLocation($request);

    public function showEditLocation($id);
}
