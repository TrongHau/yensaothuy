<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Library\Helpers;
use Backpack\PageManager\app\Models\Page;
use Backpack\NewsCRUD\app\Models\Article;

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
        return view('catalog.index');
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
}
