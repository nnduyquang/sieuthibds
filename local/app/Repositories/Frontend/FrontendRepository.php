<?php

namespace App\Repositories\Frontend;


use App\CategoryItem;
use App\Config;
use App\Location;
use App\Post;
use App\Product;

class FrontendRepository implements FrontendRepositoryInterface
{

    public function getFrontEndInfo()
    {
        $data = [];
        $configContact = Config::where('name', 'config-contact')->first();
        $data['configContact'] = $configContact;
        $categoryMain = CategoryItem::where('type', CATEGORY_PRODUCT)->where('level', MENU_GOC)->get();
        $data['categoryMain'] = $categoryMain;
        return $data;
    }

    public function getFrontend()
    {
        $data = [];
        $category=new CategoryItem();
        $location=new Location();
        $product=new Product();
        $featuredProject=$category->getAllCategoryByType(CATEGORY_PRODUCT);
        $locations=$location->getLocationByLevelHasTake(6);
        foreach ($locations as $key=>$item){
            $locationChildID = $location->getAllChildAndDeeperById($item->id);
            $finalId = $locationChildID->pluck('id');
            $finalId->push((int)$item->id);
            $products=$product->getAllProductByArrayLocationId($finalId);
            $item['products']=$products;
        }
        $featuredProperties=$locations;
        $data['featuredProject']=$featuredProject;
        $data['featuredProperties']=$featuredProperties;
        return $data;
    }

    public function getDuAnDetail($path)
    {
        $data = [];
        $product = new Product();
        $data['product'] = $product->findProductByPath($path);
        $data['other']=$product->findOtherProductByPath($data['product']->id);
        return $data;
    }


}