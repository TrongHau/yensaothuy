<?php
use App\Library\Helpers;
use Jenssegers\Agent\Agent;
?>

@section('meta')
    <base href="{{env('APP_URL')}}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta name="author" content="Bat Dong San Company">
    <meta name="copyright" content="{{env('APP_NAME')}}" />
    <meta name="revisit-after" content="7 Days">
    <meta name="keywords" content="batdongsan; rao ban bat dong san; bds; bat dong san Ho Chi Minh; bat dong san Ha Noi; cap nhat bat dong san; thu bat dong san; mua dat; thue dat; can thue nha; can thue dat">
    <meta name="description" content="Nhà đất bán, Bán căn hộ chung cư, Bán nhà biệt thự, liền kề, Bán nhà mặt phố, Bán đất nền dự án, Bán đất, Nhà đất cho thuê, Cho thuê căn hộ chung cư,
        Cho thuê nhà riêng, Cho thuê nhà mặt phố, Cho thuê nhà trọ, phòng trọ, Cho thuê văn phòng, Cho thuê kho, nhà xưởng, đất, Mua nhà riêng, Cần thuê kho, nhà xưởng, đất, Cần thuê nhà trọ, phòng trọ, Tất cả các loại đất bán">
    <link rel="canonical" href="{{url()->current()}}" />
    <link rel="image_src" href="{{env('APP_URL') . THUMBNAIL_DEFAULT_META}}" />
    <meta name="title" content="Bất Động Sản Company" />
    <meta property="og:image" content="{{env('APP_URL') . THUMBNAIL_DEFAULT_META}}" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:title" content="Bất Động Sản Company" />
    <meta property="og:description" content="batdongsan; rao ban bat dong san; bds; bat dong san Ho Chi Minh; bat dong san Ha Noi; cap nhat bat dong san; thu bat dong san; mua dat; thue dat; can thue nha; can thue dat">
    <meta name="description" content="Nhà đất bán, Bán căn hộ chung cư, Bán nhà biệt thự, liền kề, Bán nhà mặt phố, Bán đất nền dự án, Bán đất, Nhà đất cho thuê, Cho thuê căn hộ chung cư,
        Cho thuê nhà riêng, Cho thuê nhà mặt phố, Cho thuê nhà trọ, phòng trọ, Cho thuê văn phòng, Cho thuê kho, nhà xưởng, đất, Mua nhà riêng, Cần thuê kho, nhà xưởng, đất, Cần thuê nhà trọ, phòng trọ, Tất cả các loại đất bán" />
    <meta property="og:type" content="website" />
    <meta property="og:updated_time" content="{{time()}}" />
@endsection
@extends('layouts.app')
@section('content')
    <main id="main" class="main">
        <style>
            .wrapperPage {
                padding: 30px 10px 50px 10px;
                background: #fff;
                margin-top: 0px;
                border-radius: 3px;
            }
            .headingPage {
                margin-bottom: 15px;
            }
            .headingPage .title {
                font-size: 22px;
                text-transform: uppercase;
                color: #333333;
                padding: 10px 15px;
                margin: 0px 0px 30px 0px;
                background: #dedede;
                border-radius: 12px;
            }
            .content-page * {
                line-height: 1.3;
            }
        </style>
        <section id="stPages">



            <div class="stBreadcrumb ">
                <div class="banner-breadcrumb">
                    <h2>Chính sách đổi trả</h2>
                    <ul>
                        <li><a href="/" target="_self">Trang chủ</a></li>


                        <li class="active"><span>{{$page->name}}</span></li>


                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="wrapperPage">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 information-entry">
                            <div class="information-blocks main_article bg_w">
                                <div class="headingPage">
                                    <h1 class="title">{{$page->name}}</h1>
                                </div>
                                <div class="content-page">
                                    <?php echo $page->content ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@section('contentJS')


@endsection
