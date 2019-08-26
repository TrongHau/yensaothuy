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
use View;


class ArticleController extends Controller
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
        $articles = Article::where('status', 'PUBLISHED')->orderBy('id', 'desc')->paginate(6);
        $dataList = view('catalog.article_item', compact('articles'));
        return view('catalog.article', compact('total', 'dataList', 'key'));
    }
    public function ajax() {
        $articles = Article::where('status', 'PUBLISHED')->orderBy('id', 'desc')->paginate(6);
        return view('catalog.article_item', compact('articles'));
    }
    public function articleView() {
        $prods = ProductModel::where('status', 'PUBLISHED')->orderBy('views', 'desc')->limit(10)->get();
        $content = view::make('home.home_product_hot', compact('prods'))->render();
        file_put_contents(resource_path().'/views/cache/home_product_hot.blade.php', $content);
    }
}
