<?php
use App\Library\Helpers;
$titleMeta = $article->title. ' - Yến Sào Thủy';
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
    <meta name="title" content="{{$article->title}} - Yến Sào Thủy" />
    <meta property="og:image" content="{{env('APP_URL') . THUMBNAIL_DEFAULT_META}}" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:title" content="{{$article->title}} - Yến Sào Thủy" />
    <meta name="description" content="Yến Sào Thủy, Yến Nhà, Yến Đảo, Yến hũ chưng thủ công, Yến Nguyên Tổ Sơ Chế, Yến Tinh Chế, Yến Trắng Nguyên Tổ  Sơ Chế Còn Lông, Huyết Yến Nguyên Tổ Sơ Chế Còn Lông,Yến Vụn, Yến Sợi Tinh Chế Loại 1, Yến Sợi Tinh Chế Đặc Biệt, Yến Sợi Tinh Chế Cao Cấp
Yến Trắng Rút Lông, Yến Chân Rút Lông, Yến Hồng Huyết Tinh Chế, Yến Hồng Vàng Tinh Chế, Yến Hồng Rút Lông, Yến Hồng Rút Lông, Yến Chân Hồng Huyết, Yến Đảo Nguyên Tổ Sơ Chế Còn Lông, Yến Đảo Tinh Chế, Yến hũ Chưng Sẵn Sợi Vụn, Yến hũ Chưng Sẵn Sợi Tinh Chế, Yến hũ Chưng Sẵn Chân Tổ, Yến hũ Chưng Sẵn Sợi Hồng Huyết" />
    <meta property="og:type" content="website" />
    <meta property="og:updated_time" content="{{time()}}" />
@endsection
@extends('layouts.app')
@section('content')
    <main id="main" class="main">



        <section id="stArticle">



            <div class="stBreadcrumb blog-breadcrumb">
                <div class="banner-breadcrumb">
                    <h2>{{$article->title}}</h2>
                    <ul>
                        <li><a href="/" target="_self">Trang chủ</a></li>


                        <li><a href="/tin-tuc.html" target="_self">Tin tức</a> </li>


                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-8 col-xs-12 col-md-push-3 col-sm-push-4">
                        <div class="blog-detail-page">
                            <div class="big-thumb">
                                <img src="images/blog/blog-detail-1.jpg" alt="">
                                <span>{{date('d-m-Y', strtotime($article->created_at))}}</span>
                                <h2>{{$article->title}}</h2>
                            </div>
                            <div class="small-thumb">
                                <div class="the-article-body cms-body">
                                    <?php echo $article->content ?>
                                </div>
                            </div>
                            <div class="social-share">

                                <div class="share-b">
                                    <b>Chia sẻ :</b>
                                    <ul>
                                        <li><a target="_blank" href="//www.facebook.com/sharer.php?u={{url()->current()}}"><i class="fa fa-facebook"></i></a></li>
                                        <li><a target="_blank" href="//twitter.com/share?text=S%C6%B0%E1%BB%9Dn%20non&amp;url={{url()->current()}}"><i class="fa fa-twitter"></i></a></li>
                                        <li><a target="_blank" href="//pinterest.com/pin/create/button/?url={{url()->current()}}&amp;media=http://hstatic.net/0/0/global/noDefaultImage6_1024x1024.gif&amp;description=S%C6%B0%E1%BB%9Dn%20non"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a target="_blank" href="//plus.google.com/share?url={{url()->current()}}" class="share-google"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12 col-md-pull-9 col-sm-pull-8">
                        <aside id="insBlogSidebar">
                            <div class="right_sidebar box_sidebar">
                                <div class="all_right_widgets">

                                    <div class="sing_right_widget">
                                        <h2>Danh mục</h2>
                                        <div class="block_content">
                                            <!-- layered -->
                                            <div class="layered layered-category">
                                                <div class="layered-content">
                                                    <ul class="tree-menu notStyle">

                                                        <li class="">
                                                            <span></span>
                                                            <a class="" href="/" title="Trang chủ" target="_self">
                                                                Trang chủ
                                                            </a>
                                                        </li>

                                                        <li class="active has-child">
                                                            <span></span>
                                                            <a class="dropdown-toggle has-category parent  current" href="/danh-muc/yen-nha.html" title="Yến Nhà" target="_self">
                                                                <span class="">Yến Nhà</span>
                                                            </a>
                                                        </li>
                                                        <li class="active has-child">
                                                            <span></span>
                                                            <a class="dropdown-toggle has-category parent  current" href="/danh-muc/yen-dao.html" title="Yến Đảo" target="_self">
                                                                <span class="">Yến Đảo</span>
                                                            </a>
                                                        </li>
                                                        <li class="active has-child">
                                                            <span></span>
                                                            <a class="dropdown-toggle has-category parent  current" href="/danh-muc/yen-hu-chung-thu-cong.html" title="Yến Hũ Chưng Thủ Công" target="_self">
                                                                <span class="">Yến Hũ Chưng Thủ Công</span>
                                                            </a>
                                                        </li>

                                                        <li class="">
                                                            <span></span>
                                                            <a class="" href="/khuyen-mai.html" title="Khuyến mãi" target="_self">
                                                                Khuyến mãi
                                                            </a>
                                                        </li>
                                                        <li class="">
                                                            <span></span>
                                                            <a class="" href="tin-tuc.html" title="Liên hệ" target="_self">
                                                                Tin tức
                                                            </a>
                                                        </li>
                                                        <li class="">
                                                            <span></span>
                                                            <a class="" href="lien-he.html" title="Liên hệ" target="_self">
                                                                Liên hệ
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- ./layered -->
                                        </div>
                                    </div>






                                    <div class="sing_right_widget">
                                        <h2>Bài viết mới nhất</h2>
                                        <div class="sing_right_widg_content">
                                            <ul class="lat_news_right">
                                                @foreach($article_relate as $item)
                                                <li class="newItem">
                                                    <div class="wrap clearfix">
                                                        <a href="/tin-tuc/{{$item->slug}}.html">
                                                            <img src="<?php echo Helpers::get_bp_image($item->image, 'tmp') ?>" alt="{{$item->title}}">
                                                        </a>
                                                        <div class="lat_news_right_con">
                                                            <h3><a href="/tin-tuc/{{$item->slug}}.html">{{$item->title}}</a></h3>
                                                            <h4>{{date('d-m-Y', strtotime($item->created_at))}}</h4>
                                                        </div>
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </aside>
                        <style>
                            #insBlogSidebar .all_right_widgets {
                            //margin-top: 30px;
                            }
                            #insBlogSidebar .all_right_widgets .sing_right_widget {
                                background: #fff;
                                padding: 0px 10px;
                            }
                            .sing_right_widget ul {
                                margin: 0 0 20px 0;
                                padding: 0;
                                list-style: none;
                            }
                            #insBlogSidebar .sing_right_widget > h2 {
                                padding: 10px 0px;
                                border-bottom: 1px solid transparent;
                                border-top-left-radius: 3px;
                                border-top-right-radius: 3px;
                                font-size: 15px;
                                text-transform: uppercase;
                                position: relative;
                                margin-bottom: 15px;
                            }
                            #insBlogSidebar .sing_right_widget > h2:after{
                                content: ' ';
                                height: 3px;
                                width: 40px;
                                background: #49a010;
                                position: absolute;
                                bottom: 0;
                                left: 0;
                            }
                            .lat_news_right .newItem {
                                margin-bottom: 15px;
                                border-bottom: 1px dashed #eaeaea;
                            }
                            .lat_news_right .newItem:last-child {
                                margin-bottom: 15px;
                                border-bottom: 0;
                            }
                            .lat_news_right .newItem .lat_news_right_con {
                                padding: 10px 0;
                            }
                            .lat_news_right .newItem h3 {
                                font-size: 15px;
                                display: block;
                                margin: 0;
                                line-height: 1.3;
                                margin-bottom: 5px;
                            }
                            .lat_news_right .newItem time {
                                font-size: 13px;
                                font-style: italic;
                                color: #999;
                            }
                            ul.category_right.blogTags li {
                                display: inline-block;
                                margin: 0px 5px 10px 0px;
                            }
                            ul.category_right.blogTags li a {
                                display: inline-block;
                                background: #e2e2e2;
                                color: #333;
                                padding: 4px 9px;
                                position: relative;
                                margin: 5px;
                                font-size: 12px;
                                border-left: 3px solid #49a010;
                            }
                            ul.category_right.blogTags li a:before {
                                left: 0;
                                top: 8px;
                                border: solid transparent;
                                content: " ";
                                height: 0;
                                width: 0;
                                position: absolute;
                                pointer-events: none;
                                border-color: rgba(136, 183, 213, 0);
                                border-left-color: #49a010;
                                border-width: 4px;
                            }
                        </style>
                        <!-- sidebar -->
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@section('contentJS')

@endsection

