<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Library\Helpers;
use Backpack\PageManager\app\Models\Page;
use Backpack\NewsCRUD\app\Models\Article;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Models\CategoryProductModel;


class SearchController extends Controller
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
    public function index(Request $request) {
        $key = $request->q;
        $prods = ProductModel::where('status', 'PUBLISHED')->where('title', 'like', '%'.$key.'%')->paginate(12);
        $total = $prods->total();
        $dataList = view('search.search_item', compact('prods'));
        return view('search.index', compact('total', 'dataList', 'key'));
    }
    public function page(Request $request) {
        $key = $request->q;
        $prods = ProductModel::where('status', 'PUBLISHED')->where('title', 'like', '%'.$key.'%')->paginate(12);
        return view('search.search_item', compact('prods'));
    }
}
