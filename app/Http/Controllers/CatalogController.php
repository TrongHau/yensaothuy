<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Library\Helpers;
use Backpack\PageManager\app\Models\Page;
use Backpack\NewsCRUD\app\Models\Article;
use App\Models\ProductModel;
use App\Models\CategoryProductModel;
use App\Models\ContactModel;

class CatalogController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $slug) {
        $category = CategoryProductModel::where('slug', $slug)->first();
        if(!$category) {
            return view('errors.404');
        }
        $arrCat[] = $category->id;
        $categoryChildren = CategoryProductModel::where('parent_id', $category->id)->get();
        if(count($categoryChildren)) {
            foreach($categoryChildren as $item) {
                $arrCat[] = $item->id;
                $categoryChildren2 = CategoryProductModel::where('parent_id', $item->id)->get();
                foreach ($categoryChildren2 as $item2) {
                    $arrCat[] = $item2->id;
                }
            }
        }
        $prods = ProductModel::whereIn('category_id', $arrCat)->where('status', 'PUBLISHED')->orderBy('id', 'desc')->paginate(12);
        $dataList = view('catalog.catelog_item', compact('prods'));
        return view('catalog.index', compact('category', 'dataList'));
    }
    public function khuyen_mai(Request $request) {
        $prods = ProductModel::where('status', 'PUBLISHED')->where('promotion', 1)->orderBy('id', 'desc')->paginate(12);
        $dataList = view('catalog.catelog_item', compact('prods'));
        $category = CategoryProductModel::where('id', 1)->first();
        $category->id = 0;
        $category->slug = 'san-pham-khuyen-mai';
        $category->name = 'Sản phẩm khuyến mãi';
        return view('catalog.index', compact('category', 'dataList'));
    }
    public function ajax(Request $request, $slug = null) {
        $arrCat[] = $request->cat_id;
        $categoryChildren = CategoryProductModel::where('parent_id', $request->cat_id)->get();
        if(count($categoryChildren)) {
            foreach($categoryChildren as $item) {
                $arrCat[] = $item->id;
                $categoryChildren2 = CategoryProductModel::where('parent_id', $item->id)->get();
                foreach ($categoryChildren2 as $item2) {
                    $arrCat[] = $item2->id;
                }
            }
        }
        if($request->cat_id == 0) {
            // sản phẩm khuyến mãi
            $prods = ProductModel::where('promotion', 1)->where('status', 'PUBLISHED');
        }else {
            $prods = ProductModel::whereIn('category_id', $arrCat)->where('status', 'PUBLISHED');
        }
        if($request->sort == "created-descending") {
            $prods = $prods->orderBy('id', 'desc');
        }
        if($request->sort == "created-ascending") {
            $prods = $prods->orderBy('id', 'asc');
        }
        if($request->sort == "best-selling") {
            $prods = $prods->orderBy('view', 'desc');
        }
        if($request->sort == "price-ascending") {
            $prods = $prods->orderBy('price', 'asc');
        }
        if($request->sort == "price-descending") {
            $prods = $prods->orderBy('price', 'desc');
        }
        if($request->sort == "title-ascending") {
            $prods = $prods->orderBy('title', 'asc');
        }
        if($request->sort == "title-descending") {
            $prods = $prods->orderBy('title', 'desc');
        }
        if($request->sort == "manual") {
            $prods = $prods->where('promotion', 1);
        }

        $price_filter_start = -1;
        $price_filter_end = -1;
        if($request->price_unless_500 == "price_unless_500") {
            $price_filter_start = 1;
            $price_filter_end = 500000;
        }
        if($request->price_500_1000 == "price_500_1000") {
            if($price_filter_start < 0)
                $price_filter_start = 500000;
            $price_filter_end = 1000000;
        }
        if($request->price_1000_2000 == "price_1000_2000") {
            if($price_filter_start < 0)
                $price_filter_start = 1000000;
            $price_filter_end = 2000000;
        }
        if($request->price_2000_5000 == "price_2000_5000") {
            if($price_filter_start < 0)
                $price_filter_start = 2000000;
            $price_filter_end = 5000000;
        }
        if($request->price_up_5000 == "price_up_5000") {
            if($price_filter_start < 0)
                $price_filter_start = 5000000;
            $price_filter_end = -1;
        }

        if($price_filter_start > 0) {
            if($price_filter_end > 0) {
                $prods = $prods->where([['price', '>=', $price_filter_start], ['price', '<=', $price_filter_end]]);
            }else{
                $prods = $prods->where([['price', '>=', 5000000]]);
            }
        }

        $prods = $prods->paginate(12);
        return view('catalog.catelog_item', compact('prods'));
    }


    public function gioi_thieu() {
        $page = Page::where('id', 2)->first();
        return view('catalog.page', compact('page'));
    }
    public function chinh_sach_doi_tra() {
        $page = Page::where('id', 3)->first();
        return view('catalog.page', compact('page'));
    }
    public function dieu_khoan_dich_vu() {
        $page = Page::where('id', 4)->first();
        return view('catalog.page', compact('page'));
    }
    public function huong_dan_mua_hang() {
        $page = Page::where('id', 5)->first();
        return view('catalog.page', compact('page'));
    }
    public function lien_he() {
        return view('detail.contact');
    }
    public function gui_lien_he(Request $request) {
        ContactModel::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'body_content' => $request->body,
        ]);
        $mes = 'Gửi liên hệ thành công';
        return view('detail.contact', compact('mes'));
    }
}
