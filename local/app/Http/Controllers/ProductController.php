<?php

namespace App\Http\Controllers;


use App\CategoryItem;
use App\Product;
use App\Repositories\Backend\Product\ProductRepositoryInterface;
use App\Seo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    protected $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index(Request $request)
    {
        $data = $this->productRepository->getAllProduct();
        $products = $data['products'];
        $locales = $data['locales'];
        return view('backend.admin.product.index', compact('products','locales'))->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($locale_id)
    {
        $data = $this->productRepository->showCreateProduct($locale_id);
        $cities = $data['cities'];
        $categoryProduct = $data['categoryProduct'];
        $units = $data['units'];
        $locales=$data['locales'];
        $facilities=$data['facilities'];
        return view('backend.admin.product.create', compact('roles', 'cities', 'categoryProduct', 'units','locales','locale_id','facilities'));
    }
    public function createLocale($translation_id, $locale_id)
    {
        $data = $this->productRepository->showCreateLangProduct($translation_id, $locale_id);
        $cities = $data['cities'];
        $categoryProduct = $data['categoryProduct'];
        $units = $data['units'];
        $locales=$data['locales'];
        $facilities=$data['facilities'];
        $langLocale = $data['lang'];
        return view('backend.admin.product.create', compact('roles','categoryProduct', 'langLocale','cities','units','locales','facilities', 'translation_id', 'locale_id'));
    }

    public function getAllDistrictsByCity(Request $request)
    {
        $data = $this->productRepository->getAllDistrictsByCity($request);
        return response()->json([
            'success' => $data['success'],
            'districts' => $data['districts']
        ]);
    }

    public function getAllWardsByDistrict(Request $request)
    {
        $data = $this->productRepository->getAllWardsByDistrict($request);
        return response()->json([
            'success' => $data['success'],
            'wards' => $data['wards']
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->productRepository->createNewProduct($request);
        return redirect()->route('product.index');
    }
    public function storeLocale(Request $request){
        $data = $this->productRepository->createNewProductLocale($request);
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$locale_id)
    {
        $data = $this->productRepository->showEditProduct($id,$locale_id);
//        dd($data);
        $product = $data['product'];
        $cities = $data['cities'];
        $city_id = $data['city_id'];
        $districts = $data['districts'];
        $district_id = $data['district_id'];
        $wards = $data['wards'];
        $ward_id = $data['ward_id'];
        $units = $data['units'];
        $translation=$data['translation'];
        $categoryProduct = $data['categoryProduct'];
        $locales=$data['locales'];
        $facilities=$data['facilities'];
        return view('backend.admin.product.edit', compact('product', 'cities', 'city_id', 'districts', 'district_id', 'wards', 'ward_id', 'translation', 'units', 'categoryProduct','locales','facilities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->productRepository->updateProduct($request, $id);
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=$this->productRepository->deleteProduct($id);
        return redirect()->route('product.index')->with('success', 'Đã Xóa Thành Công');
    }

    public function search(Request $request)
    {
        $keywords = preg_replace('/\s+/', ' ', $request->input('txtSearch'));
        $products = Product::where('name', 'like', '%' . $keywords . '%')->orderBy('id', 'DESC')->paginate(5);
        return view('backend.admin.product.index', compact('products', 'keywords'))->with('i', ($request->input('product', 1) - 1) * 5);
    }

    public function showCategoryDropDown($dd_category_products, $parent_id = 0, &$newArray)
    {
        foreach ($dd_category_products as $key => $data) {
            if ($data->parent_id == $parent_id) {
                array_push($newArray, $data);
                $dd_category_products->forget($key);
                self::showCategoryDropDown($dd_category_products, $data->id, $newArray);
            }
        }
    }

    public function paste(Request $request)
    {
        $listId = $request->input('listID');
        $products = Product::find(explode(',', $listId));
        foreach ($products as $key => $data) {
            $data->name = $data->name . ' ' . rand(pow(10, 2), pow(10, 3) - 1);
            $data->path = chuyen_chuoi_thanh_path($data->name);
        }
        Product::insert($products->toArray());
        return redirect()->route('product.index')->with('success', 'Tạo Mới Thành Công Sản Phẩm');
    }
}
