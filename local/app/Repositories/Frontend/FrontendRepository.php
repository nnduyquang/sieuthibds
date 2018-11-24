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
        $categoryItem = new CategoryItem();
        $allProject = $categoryItem->getAllCategoryByType(CATEGORY_PRODUCT);
        $data['allProject']=$allProject;
        return $data;
    }

    public function getFrontend()
    {
        $data = [];
        $category = new CategoryItem();
        $location = new Location();
        $product = new Product();
        $featuredProject = $category->getAllCategoryByType(CATEGORY_PRODUCT);
        $locations = $location->getLocationByLevelHasTake(6);
        foreach ($locations as $key => $item) {
            $locationChildID = $location->getAllChildAndDeeperById($item->id);
            $finalId = $locationChildID->pluck('id');
            $finalId->push((int)$item->id);
            $products = $product->getAllProductByArrayLocationId($finalId);
            $item['products'] = $products;
        }
        $featuredProperties = $locations;
        $data['featuredProject'] = $featuredProject;
        $data['featuredProperties'] = $featuredProperties;
        return $data;
    }

    public function getSanPhamDetail($path)
    {
        $data = [];
        $product = new Product();

        $data['product'] = $product->findProductByPath($path);
        $data['project'] = $data['product']->categoryitems(CATEGORY_PRODUCT)->get();

        $data['other'] = $product->findOtherProductByPath($data['product']->id);
        return $data;
    }

    public function getAllDuAn()
    {
        $data = [];
        $categoryItem = new CategoryItem();
        $categories = $categoryItem->getAllCategoryByType(CATEGORY_PRODUCT);
        $data['categories'] = $categories;
        return $data;
    }


    public function getDuAnDetail($path)
    {
        $data = [];
        $categoryItem = new CategoryItem();
        $facility = new Facility();
        $category = $categoryItem->getCategoryItemByPath($path);
        $other = $categoryItem->getCategoryItemOther($category->id, CATEGORY_PRODUCT);
        $facilities = $facility->getFacilityAll();
        $category['products'] = $category->products()->get();
        $data['category'] = $category;
        $data['other'] = $other;
        $data['facilities'] = $facilities;
        return $data;
    }

    public function getDanhSachSanPhamTheoDuAn($path)
    {
        $data = [];
        $categoryItem = new CategoryItem();
        $category = $categoryItem->getCategoryItemByPath($path);
        $category['products'] = $category->products()->get();
        $data['category'] = $category;
        $data['type'] = 1;
        return $data;

    }

    public function getDanhSachAllSanPham()
    {
        $data = [];
        $product = new Product();
        $category = new CategoryItem();
        $products = $product->getAllProductByLocaleAndRentOrSell(NEED_RENT);
        $featuredProject = $category->getAllCategoryByType(CATEGORY_PRODUCT);
        $data['type'] = 2;
        $data['products'] = $products;
        $data['featuredProject'] = $featuredProject;
        return $data;
    }

    public function getDanhSachAllSanPhamBan()
    {
        $data = [];
        $product = new Product();
        $category = new CategoryItem();
        $products = $product->getAllProductByLocaleAndRentOrSell(NEED_SELL);
        $featuredProject = $category->getAllCategoryByType(CATEGORY_PRODUCT);
        $data['type'] = 2;
        $data['products'] = $products;
        $data['featuredProject'] = $featuredProject;
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
        $selectType=$request->input('select-type');
        $data = [];
        $product = new Product();
        $category = new CategoryItem();
        $products = $product->searchProduct($request);
        $featuredProject = $category->getAllCategoryByType(CATEGORY_PRODUCT);
        $data['type'] = 2;
        $data['selectType']=$selectType;
        $data['products'] = $products;
        $data['featuredProject'] = $featuredProject;
        return $data;
    }

    public function getAllTuyenDung()
    {
        $data = [];
        $categoryItem = new CategoryItem();
        $category = $categoryItem->getCategoryItemByPath('tuyen-dung');
        $post = $categoryItem->getAllPostByCategory('tuyen-dung');
        $data['post'] = $post;
        $data['category'] = $category;
        return $data;
    }

    public function getAllTinTuc()
    {
        $data = [];

        $categoryItem = new CategoryItem();
        $allProject = $categoryItem->getAllCategoryByType(CATEGORY_PRODUCT);
        $category = $categoryItem->getCategoryItemByPath('tin-tuc');
        $post = $categoryItem->getAllPostByCategory('tin-tuc');
        $data['post'] = $post;
        $data['category'] = $category;
        $data['allProject'] = $allProject;
        return $data;
    }


    public function getTuyenDungDetail($path)
    {
        $data = [];
        $post = new Post();
        $tuyendung = $post->getPostByPath($path);
        $other = $post->findPostOtherByPathAndId('tuyen-dung', $tuyendung->id);
        $data['tuyendung'] = $tuyendung;
        $data['other'] = $other;
        return $data;
    }

    public function getTinTucDetail($path)
    {
        $data = [];
        $post = new Post();
        $categoryItem = new CategoryItem();
        $allProject = $categoryItem->getAllCategoryByType(CATEGORY_PRODUCT);
        $tintuc = $post->getPostByPath($path);
        $other = $post->findPostOtherByPathAndId('tin-tuc', $tintuc->id);
        $data['allProject'] = $allProject;
        $data['tintuc'] = $tintuc;
        $data['other'] = $other;
        return $data;
    }


}