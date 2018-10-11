<?php

namespace App\Repositories\Frontend;


use App\CategoryItem;
use App\Config;
use App\Facility;
use App\Location;
use App\Menu;
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

    public function getSanPhamDetail($path)
    {
        $data = [];
        $product = new Product();

        $data['product'] = $product->findProductByPath($path);
        $data['project']=$data['product']->categoryitems(CATEGORY_PRODUCT)->get();

        $data['other']=$product->findOtherProductByPath($data['product']->id);
        return $data;
    }

    public function getAllDuAn()
    {
        $data = [];
        $categoryItem = new CategoryItem();
        $categories=$categoryItem->getAllCategoryByType(CATEGORY_PRODUCT);
        $data['categories']=$categories;
        return $data;
    }


    public function getDuAnDetail($path)
    {
        $data = [];
        $categoryItem = new CategoryItem();
        $facility=new Facility();
        $category=$categoryItem->getCategoryItemByPath($path);
        $other=$categoryItem->getCategoryItemOther($category->id);
        $facilities=$facility->getFacilityAll();
        $category['products']=$category->products()->get();
        $data['category']=$category;
        $data['other']=$other;
        $data['facilities']=$facilities;
        return $data;
    }

    public function getDanhSachSanPhamTheoDuAn($path)
    {
        $data = [];
        $categoryItem = new CategoryItem();
        $category=$categoryItem->getCategoryItemByPath($path);
        $category['products']=$category->products()->get();
        $data['category']=$category;
        $data['type']=1;
        return $data;

    }

    public function getDanhSachAllSanPham()
    {
        $data = [];
        $product=new Product();
        $products=$product->getAllProductByLocale();

        $data['type']=2;
        $data['products']=$products;
        return $data;
    }


    public function getAllMenuFrontend()
    {
        $data = [];
        $menu = new Menu();
        $data = $menu->getAllOrderBy('order');
        return $data;
    }

    public function getSearch($request)
    {
        $data=[];
        $product = new Product();
        $products = $product->searchProduct($request);
        $data['type']=2;
        $data['products']=$products;
        return $data;
    }

    public function getAllTuyenDung()
    {
        $data=[];
        $categoryItem = new CategoryItem();
        $category=$categoryItem->getCategoryItemByPath('tuyen-dung');
        $post=$categoryItem->getAllPostByCategory('tuyen-dung');
        $data['post']=$post;
        $data['category']=$category;
        return $data;
    }

    public function getAllTinTuc()
    {
        $data=[];
        $categoryItem = new CategoryItem();
        $category=$categoryItem->getCategoryItemByPath('tin-tuc');
        $post=$categoryItem->getAllPostByCategory('tin-tuc');
        $data['post']=$post;
        $data['category']=$category;
        return $data;
    }


    public function getTuyenDungDetail($path)
    {
        $data=[];
        $post=new Post();
        $tuyendung=$post->getPostByPath($path);
        $other=$post->findPostOtherByPathAndId('tuyen-dung',$tuyendung->id);
        $data['tuyendung']=$tuyendung;
        $data['other']=$other;
        return $data;
    }


}