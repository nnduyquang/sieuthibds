<?php

namespace App\Repositories\Frontend;

interface FrontendRepositoryInterface
{
    public function getFrontEndInfo();

    public function getFrontend();

    public function getDuAnDetail($path);


}