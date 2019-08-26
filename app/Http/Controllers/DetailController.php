<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Library\Helpers;
use App\Library\UploadHandler;
use Illuminate\Support\Facades\Auth;
use  App\Models\DistrictModel;
use  App\Models\ProvinceModel;
use  App\Models\StreetModel;
use  App\Models\WardModel;
use Illuminate\Support\Facades\Hash;
use  App\User;
use App\Models\ArticleForLeaseModel;
use App\Models\ArticleForBuyModel;
use App\Models\TypeModel;
use Backpack\PageManager\app\Models\Page;
use App\Models\CategoryModel;
use Backpack\NewsCRUD\app\Models\Article;
use App\Models\ProductModel;
use App\Models\CategoryProductModel;


class DetailController extends Controller
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
        $prod = ProductModel::where('status', 'PUBLISHED')->where('slug', $slug)->first();
        if(!$prod) {
            return view('errors.404');
        }
        if(Helpers::sessionCountTimes($prod->id, 'prod')){
            $prod->where('id', $prod->id)->increment('views');
        }
        $arrCat[] = $prod->category_id;
        $category = CategoryProductModel::where('id', $prod->category_id)->first();
        $categoryChildren = CategoryProductModel::where('parent_id', $category->parent_id)->get();
        if(count($categoryChildren)) {
            foreach($categoryChildren as $item) {
                $arrCat[] = $item->id;
            }
        }else{
            $categoryChildren = CategoryProductModel::where('parent_id', $category->id)->get();
            foreach($categoryChildren as $item) {
                $arrCat[] = $item->id;
            }
        }
        $prods = ProductModel::where('status', 'PUBLISHED')->whereIn('category_id', $arrCat)->where('id', '!=', $prod->id)->inRandomOrder()->limit(8)->get();
        $dataList = view('detail.prod_relate_item', compact('prods'));
        return view('detail.index', compact('prod', 'prod_relate', 'category', 'dataList'));
    }
    public function detailModal(Request $request) {
        if(!$request->id)
            return Helpers::ajaxResult(false, 'Không tìm thấy sản phẩm', null);

        $prod = ProductModel::where('status', 'PUBLISHED')->where('id', $request->id)->first();
        if(!$prod)
            return Helpers::ajaxResult(false, 'Không tìm thấy sản phẩm', null);
        if(Helpers::sessionCountTimes($prod->id, 'prod')){
            $prod->where('id', $prod->id)->increment('views');
        }
        return Helpers::ajaxResult(true, '', $prod->toArray());
    }
    public function article(Request $request, $slug) {
        $article = Article::where('status', 'PUBLISHED')->where('slug', $slug)->first();
        if(!$article) {
            return view('errors.404');
        }
        if(Helpers::sessionCountTimes($article->id, 'prod')){
            $article->where('id', $article->id)->increment('views');
        }
        $article_relate = Article::where('status', 'PUBLISHED')->where('id', '!=', $article->id)->limit(2)->get();
        return view('detail.article', compact('article', 'article_relate'));
    }
}
