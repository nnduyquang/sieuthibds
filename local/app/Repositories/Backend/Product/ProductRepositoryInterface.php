<?php

namespace App\Repositories\Backend\Product;

interface ProductRepositoryInterface
{
    public function showCreateProduct($locale_id);

    public function getAllDistrictsByCity($request);

    public function getAllWardsByDistrict($request);

    public function createNewProduct($request);

    public function showEditProduct($id);

    public function updateProduct($request, $id);

    public function deleteProduct($id);

    public function getAllProduct();

    public function showCreateLangProduct($translation_id, $locale_id);

    public function createNewProductLocale($request);

}
