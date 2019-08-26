<?php
use App\Library\Helpers;
use Jenssegers\Agent\Agent;
$titleMeta = $page->name. ' - Yến Sào Thủy';
?>

@section('meta')
    <base href="{{env('APP_URL')}}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta name="author" content="Yen sao thuy">
    <meta name="copyright" content="{{env('APP_NAME')}}" />
    <meta name="revisit-after" content="7 Days">
    <meta name="keywords" content="Yến Sào Thủy, Yến Nhà, Yến Đảo, Yến hũ chưng thủ công, Yến Nguyên Tổ Sơ Chế, Yến Tinh Chế, Yến Trắng Nguyên Tổ  Sơ Chế Còn Lông, Huyết Yến Nguyên Tổ Sơ Chế Còn Lông,Yến Vụn, Yến Sợi Tinh Chế Loại 1, Yến Sợi Tinh Chế Đặc Biệt, Yến Sợi Tinh Chế Cao Cấp
Yến Trắng Rút Lông, Yến Chân Rút Lông, Yến Hồng Huyết Tinh Chế, Yến Hồng Vàng Tinh Chế, Yến Hồng Rút Lông, Yến Hồng Rút Lông, Yến Chân Hồng Huyết, Yến Đảo Nguyên Tổ Sơ Chế Còn Lông, Yến Đảo Tinh Chế, Yến hũ Chưng Sẵn Sợi Vụn, Yến hũ Chưng Sẵn Sợi Tinh Chế, Yến hũ Chưng Sẵn Chân Tổ, Yến hũ Chưng Sẵn Sợi Hồng Huyết">
    <link rel="canonical" href="{{url()->current()}}" />
    <link rel="image_src" href="{{env('APP_URL') . THUMBNAIL_DEFAULT_META}}" />
    <meta name="title" content="{{$page->name}} - Yến Sào Thủy" />
    <meta property="og:image" content="{{env('APP_URL') . THUMBNAIL_DEFAULT_META}}" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:title" content="Yến Sào Thủy" />
    <meta name="description" content="Yến Sào Thủy, Yến Nhà, Yến Đảo, Yến hũ chưng thủ công, Yến Nguyên Tổ Sơ Chế, Yến Tinh Chế, Yến Trắng Nguyên Tổ  Sơ Chế Còn Lông, Huyết Yến Nguyên Tổ Sơ Chế Còn Lông,Yến Vụn, Yến Sợi Tinh Chế Loại 1, Yến Sợi Tinh Chế Đặc Biệt, Yến Sợi Tinh Chế Cao Cấp
Yến Trắng Rút Lông, Yến Chân Rút Lông, Yến Hồng Huyết Tinh Chế, Yến Hồng Vàng Tinh Chế, Yến Hồng Rút Lông, Yến Hồng Rút Lông, Yến Chân Hồng Huyết, Yến Đảo Nguyên Tổ Sơ Chế Còn Lông, Yến Đảo Tinh Chế, Yến hũ Chưng Sẵn Sợi Vụn, Yến hũ Chưng Sẵn Sợi Tinh Chế, Yến hũ Chưng Sẵn Chân Tổ, Yến hũ Chưng Sẵn Sợi Hồng Huyết" />
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
                    <h2>{{$page->name}}</h2>
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
