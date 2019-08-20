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
    public function index(Request $request, $slug, $id) {
        return view('detail.index');
    }
}
