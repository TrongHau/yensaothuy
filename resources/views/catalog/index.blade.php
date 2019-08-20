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

        <section id="stCollection">



            <div class="stBreadcrumb ">
                <div class="banner-breadcrumb">
                    <h2>Tất cả sản phẩm</h2>
                    <ul>
                        <li><a href="/" target="_self">Trang chủ</a></li>


                        <li><a href="/collections" target="_self">Danh mục</a></li>



                        <li class="active"><span>Tất cả sản phẩm</span></li>




                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="main bg_w">
                    <div class="row">
                        <!-- Left colunm -->
                        <div class="column col-xs-12 col-sm-4 col-md-3" id="left_column">
                            <div class="box_sidebar">

                                <div class="block left-module">
                                    <p class="title_block">Danh mục sản phẩm <i class="visible-xs fa fa-angle-down" aria-hidden="true"></i></p>
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
                                                        <a class="dropdown-toggle has-category parent  current" href="/collections/all" title="Sản phẩm" target="_self">
                                                            <span class="">Sản phẩm</span>
                                                        </a>

                                                    </li>



                                                    <li class="">
                                                        <span></span>
                                                        <a class="" href="/collections/onsale" title="Khuyến mãi" target="_self">
                                                            Khuyến mãi
                                                        </a>
                                                    </li>



                                                    <li class="">
                                                        <span></span>
                                                        <a class="" href="/blogs/news" title="Tin tức" target="_self">
                                                            Tin tức
                                                        </a>
                                                    </li>



                                                    <li class="">
                                                        <span></span>
                                                        <a class="" href="/pages/lien-he" title="Liên hệ" target="_self">
                                                            Liên hệ
                                                        </a>
                                                    </li>



                                                </ul>
                                            </div>
                                        </div>
                                        <!-- ./layered -->
                                    </div>
                                </div>

                                <div class="block left-module">
                                    <p class="title_block">Bộ lọc sản phẩm <i class="visible-xs fa fa-angle-down" aria-hidden="true"></i></p>
                                    <div class="block_content filter_xs">
                                        <!-- layered -->
                                        <div class="layered layered-filter-price">
                                            <!-- ./filter brand -->
                                            <div class="layered_subtitle">Giá</div>
                                            <div class="layered-content slider-range filter-price">
                                                <ul class="check-box-list">
                                                    <li>
                                                        <input type="checkbox" id="p1" name="price_filter" value="price_unless_50">
                                                        <label for="p1">
                                                            <span class="button"></span>
                                                            Dưới 50,000₫
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" id="p2" name="price_filter" value="price_50_100">
                                                        <label for="p2">
                                                            <span class="button"></span>
                                                            50,000₫ - 100,000₫
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" id="p3" name="price_filter" value="price_100_200">
                                                        <label for="p3">
                                                            <span class="button"></span>
                                                            100,000₫ - 200,000₫
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" id="p4" name="price_filter" value="price_200_500">
                                                        <label for="p4">
                                                            <span class="button"></span>
                                                            200,000₫ - 500,000₫
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" id="p5" name="price_filter" value="price_up_500">
                                                        <label for="p5">
                                                            <span class="button"></span>
                                                            Trên 500,000₫
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- ./filter price -->
                                        </div>
                                        <!-- ./layered -->

                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- ./left colunm -->
                        <div class="center_column col-xs-12 col-sm-8 col-md-9 product-col" id="center_column">
                            <!-- view-product-list-->
                            <div id="view-product-list" class="view-product-list">
                                <div class="collection_head relative">
                                    <div class="page_head">
                                        <h1 class="collection_title ins_title">
                                            Tất cả sản phẩm
                                        </h1>
                                    </div>
                                    <ul class="display-product-option">
                                        <li class="view-as-grid" data-view="view_grid">
                                            <span>grid</span>
                                        </li>
                                        <li class="view-as-list selected" data-view="view_list">
                                            <span>list</span>
                                        </li>
                                    </ul>

                                    <div class="browse-tags">
                                        <span>Sắp xếp theo:</span>
                                        <span class="custom-dropdown custom-dropdown--white">
									<select class="sort-by custom-dropdown__select custom-dropdown__select--white">
										<option value="manual">Sản phẩm nổi bật</option>
										<option value="price-ascending">Giá: Tăng dần</option>
										<option value="price-descending">Giá: Giảm dần</option>
										<option value="title-ascending">Tên: A-Z</option>
										<option value="title-descending">Tên: Z-A</option>
										<option value="created-ascending">Cũ nhất</option>
										<option value="created-descending">Mới nhất</option>
										<option value="best-selling">Bán chạy nhất</option>
									</select>
								</span>
                                    </div>

                                </div>

                                <!-- PRODUCT LIST -->
                                <div id="pd_collection" style="display: block;">

                                    <ul class="product-list filter products clearfix notStyle view_list">

                                        <li class="itemProduct col-md-4 col-sm-6 col-xs-6">







                                            <div class="pdLoopItem animated zoomIn">
                                                <div class="itemLoop clearfix">
                                                    <div class="ct-box-op">
                                                        <div class="pdLoopImg elementFixHeight">
                                                            <a href="/products/toi" title="Tỏi">
                                                                <img alt="Tỏi" data-reg="true" class="imgLoopItem" src="//product.hstatic.net/1000314614/product/upload_5c51e591356c482f88ca95adf52283d0_large.jpg" style="width: auto;">
                                                            </a>
                                                            <ul class="link-quickview">
                                                                <li><a href="javascript:void(0)" title="Thêm vào giỏ" class="add-to-cart" data-id="1032218113"><i class="fa fa-shopping-basket"></i></a></li>
                                                                <li><a href="/products/toi" title="Xem chi tiết"><i class="fa fa-exchange"></i></a></li>
                                                                <li><a href="javascript:void(0)" title="Xem nhanh" data-handle="/products/toi" class="mask-view btn-quickview-1"><i class="fa fa-eye"></i></a></li>
                                                            </ul>


                                                        </div>
                                                        <div class="pdLoopDetail text-center clearfix">
                                                            <h3 class="pdLoopName"><a class="productName" href="/products/toi" title="Tỏi">Tỏi </a></h3>
                                                            <p class="pdPrice">

                                                                <span>30,000₫</span>


                                                            </p>
                                                            <div class="pdLoopListView">
                                                                <ul class="notStyle">
                                                                    <li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
                                                                    <li><strong>Thương hiệu: </strong><span>Khác</span></li>
                                                                    <li><strong>Mô tả ngắn: </strong>
                                                                        <span class="short-des">

								Giá trị dinh dưỡng: &nbsp; Nho tươi cung cấp các chất dinh dưỡng, làm giảm mệt nhọc ngay lập tức. Các nghiên cứu cho thấy Nho tươi có chứa vitamin A, C, Calcium và sắt...Mã hàng:Thể loại:&nbsp;Rau, quả hữu cơ,&nbsp;Rau quả bán chạy,&nbsp;Rau, quả tốt cho người già,Rau quả có lợi cho sức khỏe,&nbsp;Rau, quả nhập khẩu,&nbsp;Rau, quả trong nước,&nbsp;Sản phẩm nổi bật,&nbsp;Trang chủ,


							</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="itemProduct col-md-4 col-sm-6 col-xs-6">







                                            <div class="pdLoopItem animated zoomIn">
                                                <div class="itemLoop clearfix">
                                                    <div class="ct-box-op">
                                                        <div class="pdLoopImg elementFixHeight">
                                                            <a href="/products/suon-non" title="Sườn non">
                                                                <img alt="Sườn non" data-reg="true" class="imgLoopItem" src="//product.hstatic.net/1000314614/product/upload_ed386c6e7c5f439fac42d7404cb18e28_large.jpg" style="width: auto;">
                                                            </a>
                                                            <ul class="link-quickview">
                                                                <li><a href="javascript:void(0)" title="Thêm vào giỏ" class="add-to-cart" data-id="1032218111"><i class="fa fa-shopping-basket"></i></a></li>
                                                                <li><a href="/products/suon-non" title="Xem chi tiết"><i class="fa fa-exchange"></i></a></li>
                                                                <li><a href="javascript:void(0)" title="Xem nhanh" data-handle="/products/suon-non" class="mask-view btn-quickview-1"><i class="fa fa-eye"></i></a></li>
                                                            </ul>


                                                        </div>
                                                        <div class="pdLoopDetail text-center clearfix">
                                                            <h3 class="pdLoopName"><a class="productName" href="/products/suon-non" title="Sườn non">Sườn non </a></h3>
                                                            <p class="pdPrice">

                                                                <span>1,000,000₫</span>


                                                            </p>
                                                            <div class="pdLoopListView">
                                                                <ul class="notStyle">
                                                                    <li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
                                                                    <li><strong>Thương hiệu: </strong><span>Khác</span></li>
                                                                    <li><strong>Mô tả ngắn: </strong>
                                                                        <span class="short-des">

								Sườn non heo (hữu cơ)&nbsp;đảm bảo chất lượng và vệ sinh an toàn thực phẩm.Phù hợp chế biến các món kho, chiên, rim, nấu canh,... thơm ngon và giàu dinh dưỡng cho cả gia đình.


							</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="itemProduct col-md-4 col-sm-6 col-xs-6">







                                            <div class="pdLoopItem animated zoomIn">
                                                <div class="itemLoop clearfix">
                                                    <div class="ct-box-op">
                                                        <div class="pdLoopImg elementFixHeight">
                                                            <a href="/products/sua-pediasure-ba-850g-1-10-tuoi" title="Sữa Pediasure ba 850g (1 - 10 tuổi)">
                                                                <img alt="Sữa Pediasure ba 850g (1 - 10 tuổi)" data-reg="true" class="imgLoopItem" src="//product.hstatic.net/1000314614/product/upload_eaf63ab35a48414f9329bd930afc468f_large.jpg" style="width: auto;">
                                                            </a>
                                                            <ul class="link-quickview">
                                                                <li><a href="javascript:void(0)" title="Thêm vào giỏ" class="add-to-cart" data-id="1032218105"><i class="fa fa-shopping-basket"></i></a></li>
                                                                <li><a href="/products/sua-pediasure-ba-850g-1-10-tuoi" title="Xem chi tiết"><i class="fa fa-exchange"></i></a></li>
                                                                <li><a href="javascript:void(0)" title="Xem nhanh" data-handle="/products/sua-pediasure-ba-850g-1-10-tuoi" class="mask-view btn-quickview-1"><i class="fa fa-eye"></i></a></li>
                                                            </ul>


                                                        </div>
                                                        <div class="pdLoopDetail text-center clearfix">
                                                            <h3 class="pdLoopName"><a class="productName" href="/products/sua-pediasure-ba-850g-1-10-tuoi" title="Sữa Pediasure ba 850g (1 - 10 tuổi)">Sữa Pediasure ba 850g (1 - 10 tuổi) </a></h3>
                                                            <p class="pdPrice">

                                                                <span>1,000,000₫</span>


                                                            </p>
                                                            <div class="pdLoopListView">
                                                                <ul class="notStyle">
                                                                    <li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
                                                                    <li><strong>Thương hiệu: </strong><span>Khác</span></li>
                                                                    <li><strong>Mô tả ngắn: </strong>
                                                                        <span class="short-des">

								Sữa PediaSure&nbsp;BA&nbsp;là sản phẩm dinh dưỡng dùng bổ sung hoặc thay thế hoàn toàn bữa ăn của trẻ 1-10 tuổi, được đặc chế khoa học để cung cấp nguồn dinh dưỡng đầy đủ và cân đối, giúp thay thế và bổ sung kịp thời sự thiếu hụt của bữa ăn, cho trẻ khỏe mạnh và phát triển tốt, không bị suy dinh dưỡng hoặc béo phì, đặc biệt tốt khi dùng thường xuyên và lâu dài cho trẻ.&nbsp;Sữa&nbsp;đặc biệt phù hợp cho các bé biếng ăn, giúp trẻ nhanh chóng bắt kịp và tiếp tục đà tăng trưởng tối ưu...


							</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="itemProduct col-md-4 col-sm-6 col-xs-6">







                                            <div class="pdLoopItem animated zoomIn">
                                                <div class="itemLoop clearfix">
                                                    <div class="ct-box-op">
                                                        <div class="pdLoopImg elementFixHeight">
                                                            <a href="/products/sua-meiji-so-9-820g-1-3-tuoi" title="Sữa meiji số 9 820g (1 - 3 tuổi)">
                                                                <img alt="Sữa meiji số 9 820g (1 - 3 tuổi)" data-reg="true" class="imgLoopItem" src="//product.hstatic.net/1000314614/product/upload_fb2a2b70d32449deae970477219cd687_large.jpg" style="width: auto;">
                                                            </a>
                                                            <ul class="link-quickview">
                                                                <li><a href="javascript:void(0)" title="Thêm vào giỏ" class="add-to-cart" data-id="1032218103"><i class="fa fa-shopping-basket"></i></a></li>
                                                                <li><a href="/products/sua-meiji-so-9-820g-1-3-tuoi" title="Xem chi tiết"><i class="fa fa-exchange"></i></a></li>
                                                                <li><a href="javascript:void(0)" title="Xem nhanh" data-handle="/products/sua-meiji-so-9-820g-1-3-tuoi" class="mask-view btn-quickview-1"><i class="fa fa-eye"></i></a></li>
                                                            </ul>


                                                        </div>
                                                        <div class="pdLoopDetail text-center clearfix">
                                                            <h3 class="pdLoopName"><a class="productName" href="/products/sua-meiji-so-9-820g-1-3-tuoi" title="Sữa meiji số 9 820g (1 - 3 tuổi)">Sữa meiji số 9 820g (1 - 3 tuổi) </a></h3>
                                                            <p class="pdPrice">

                                                                <span>1,200,000₫</span>


                                                            </p>
                                                            <div class="pdLoopListView">
                                                                <ul class="notStyle">
                                                                    <li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
                                                                    <li><strong>Thương hiệu: </strong><span>Khác</span></li>
                                                                    <li><strong>Mô tả ngắn: </strong>
                                                                        <span class="short-des">

								Sữa Meiji&nbsp;số 9&nbsp;820g phù hợp cho trẻ từ 1-3 tuổi, không chỉ chứa các chất dinh dưỡng cơ bản như protein, chất béo, carbohydrat mà còn có các&nbsp;vitamin&nbsp;và khoáng chất rất khó có được từ&nbsp;sữa&nbsp;mẹ,&nbsp;sữa&nbsp;bò và thức ăn dạng rắn. Meiji còn bổ sung cả axit docosahexaenoic (DHA), các nucleotides và đặc biệt là hệ chất xơ GOS hỗ trợ tiêu hóa làm nên đặc tính mát của sữa giúp thúc đẩy sự phát triển toàn diện cả về thể chất lẫn não bộ của trẻ trong suốt giai đoạn thơ ấu. Sản phẩm được dùng bổ sung cùng các...


							</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="itemProduct col-md-4 col-sm-6 col-xs-6">







                                            <div class="pdLoopItem animated zoomIn">
                                                <div class="itemLoop clearfix">
                                                    <div class="ct-box-op">
                                                        <div class="pdLoopImg elementFixHeight">
                                                            <a href="/products/su-su-non" title="Su su non">
                                                                <img alt="Su su non" data-reg="true" class="imgLoopItem" src="//product.hstatic.net/1000314614/product/upload_1d48c719c6ac4a6d8c179f8bc5b78fcf_large.jpg" style="width: auto;">
                                                            </a>
                                                            <ul class="link-quickview">
                                                                <li><a href="javascript:void(0)" title="Thêm vào giỏ" class="add-to-cart" data-id="1032218099"><i class="fa fa-shopping-basket"></i></a></li>
                                                                <li><a href="/products/su-su-non" title="Xem chi tiết"><i class="fa fa-exchange"></i></a></li>
                                                                <li><a href="javascript:void(0)" title="Xem nhanh" data-handle="/products/su-su-non" class="mask-view btn-quickview-1"><i class="fa fa-eye"></i></a></li>
                                                            </ul>


                                                        </div>
                                                        <div class="pdLoopDetail text-center clearfix">
                                                            <h3 class="pdLoopName"><a class="productName" href="/products/su-su-non" title="Su su non">Su su non </a></h3>
                                                            <p class="pdPrice">

                                                                <span>35,000₫</span>


                                                            </p>
                                                            <div class="pdLoopListView">
                                                                <ul class="notStyle">
                                                                    <li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
                                                                    <li><strong>Thương hiệu: </strong><span>Khác</span></li>
                                                                    <li><strong>Mô tả ngắn: </strong>
                                                                        <span class="short-des">

								Giá trị dinh dưỡng: &nbsp; Nho tươi cung cấp các chất dinh dưỡng, làm giảm mệt nhọc ngay lập tức. Các nghiên cứu cho thấy Nho tươi có chứa vitamin A, C, Calcium và sắt...Mã hàng:Thể loại:&nbsp;Rau, quả hữu cơ,&nbsp;Rau quả bán chạy,&nbsp;Rau, quả tốt cho người già,Rau quả có lợi cho sức khỏe,&nbsp;Rau, quả nhập khẩu,&nbsp;Rau, quả trong nước,&nbsp;Sản phẩm nổi bật,&nbsp;Trang chủ,


							</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="itemProduct col-md-4 col-sm-6 col-xs-6">







                                            <div class="pdLoopItem animated zoomIn">
                                                <div class="itemLoop clearfix">
                                                    <div class="ct-box-op">
                                                        <div class="pdLoopImg elementFixHeight">
                                                            <a href="/products/san-pham-8" title="Xoài đỏ mỹ">
                                                                <img alt="Xoài đỏ mỹ" data-reg="true" class="imgLoopItem" src="//product.hstatic.net/1000314614/product/upload_83f770ac573043798bf11123d707c2c0_large.jpg" style="width: auto;">
                                                            </a>
                                                            <ul class="link-quickview">
                                                                <li><a href="javascript:void(0)" title="Thêm vào giỏ" class="add-to-cart" data-id="1032218098"><i class="fa fa-shopping-basket"></i></a></li>
                                                                <li><a href="/products/san-pham-8" title="Xem chi tiết"><i class="fa fa-exchange"></i></a></li>
                                                                <li><a href="javascript:void(0)" title="Xem nhanh" data-handle="/products/san-pham-8" class="mask-view btn-quickview-1"><i class="fa fa-eye"></i></a></li>
                                                            </ul>


                                                        </div>
                                                        <div class="pdLoopDetail text-center clearfix">
                                                            <h3 class="pdLoopName"><a class="productName" href="/products/san-pham-8" title="Xoài đỏ mỹ">Xoài đỏ mỹ </a></h3>
                                                            <p class="pdPrice">

                                                                <span>120,000₫</span>


                                                            </p>
                                                            <div class="pdLoopListView">
                                                                <ul class="notStyle">
                                                                    <li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
                                                                    <li><strong>Thương hiệu: </strong><span>BigC</span></li>
                                                                    <li><strong>Mô tả ngắn: </strong>
                                                                        <span class="short-des">

								Giá trị dinh dưỡng: &nbsp; Nho tươi cung cấp các chất dinh dưỡng, làm giảm mệt nhọc ngay lập tức. Các nghiên cứu cho thấy Nho tươi có chứa vitamin A, C, Calcium và sắt...Mã hàng:Thể loại:&nbsp;Rau, quả hữu cơ,&nbsp;Rau quả bán chạy,&nbsp;Rau, quả tốt cho người già,Rau quả có lợi cho sức khỏe,&nbsp;Rau, quả nhập khẩu,&nbsp;Rau, quả trong nước,&nbsp;Sản phẩm nổi bật,&nbsp;Trang chủ,


							</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="itemProduct col-md-4 col-sm-6 col-xs-6">







                                            <div class="pdLoopItem animated zoomIn">
                                                <div class="itemLoop clearfix">
                                                    <div class="ct-box-op">
                                                        <div class="pdLoopImg elementFixHeight">
                                                            <a href="/products/xuong-ong-heo" title="Xương ống heo">
                                                                <img alt="Xương ống heo" data-reg="true" class="imgLoopItem" src="//product.hstatic.net/1000314614/product/upload_0b7acd1e8c2e45dab39e43b3120db9a5_large.jpg" style="width: auto;">
                                                            </a>
                                                            <ul class="link-quickview">
                                                                <li><a href="javascript:void(0)" title="Thêm vào giỏ" class="add-to-cart" data-id="1032218115"><i class="fa fa-shopping-basket"></i></a></li>
                                                                <li><a href="/products/xuong-ong-heo" title="Xem chi tiết"><i class="fa fa-exchange"></i></a></li>
                                                                <li><a href="javascript:void(0)" title="Xem nhanh" data-handle="/products/xuong-ong-heo" class="mask-view btn-quickview-1"><i class="fa fa-eye"></i></a></li>
                                                            </ul>


                                                        </div>
                                                        <div class="pdLoopDetail text-center clearfix">
                                                            <h3 class="pdLoopName"><a class="productName" href="/products/xuong-ong-heo" title="Xương ống heo">Xương ống heo </a></h3>
                                                            <p class="pdPrice">

                                                                <span>50,000₫</span>


                                                            </p>
                                                            <div class="pdLoopListView">
                                                                <ul class="notStyle">
                                                                    <li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
                                                                    <li><strong>Thương hiệu: </strong><span>Khác</span></li>
                                                                    <li><strong>Mô tả ngắn: </strong>
                                                                        <span class="short-des">

								Xương ống heo (hữu cơ)&nbsp;là phần xương của bắp chân con heo, phần xương này chứa nhiều tủy sống thường được dùng để &nbsp;chế biến nước dùng trong các quán bún phở...Xương ống heo (hữu cơ)&nbsp;thường được dùng ninh, nấu, hầm làm nước dùng nấu lẩu, canh, cháo, soup...v...v


							</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="itemProduct col-md-4 col-sm-6 col-xs-6">









                                            <div class="pdLoopItem animated zoomIn">
                                                <div class="itemLoop clearfix">
                                                    <div class="ct-box-op">
                                                        <div class="pdLoopImg elementFixHeight">
                                                            <a href="/products/san-pham-5" title="Damson plums">
                                                                <img alt="Damson plums" data-reg="true" class="imgLoopItem" src="//product.hstatic.net/1000314614/product/upload_d5ab6bc5f8d2410f989d66b18932a7b2_large.jpg" style="width: auto;">
                                                            </a>
                                                            <ul class="link-quickview">
                                                                <li><a href="javascript:void(0)" title="Thêm vào giỏ" class="add-to-cart" data-id="1032218091"><i class="fa fa-shopping-basket"></i></a></li>
                                                                <li><a href="/products/san-pham-5" title="Xem chi tiết"><i class="fa fa-exchange"></i></a></li>
                                                                <li><a href="javascript:void(0)" title="Xem nhanh" data-handle="/products/san-pham-5" class="mask-view btn-quickview-1"><i class="fa fa-eye"></i></a></li>
                                                            </ul>

                                                            <div class="pdLabel sale">
                                                                <span>- 17%</span>
                                                            </div>


                                                        </div>
                                                        <div class="pdLoopDetail text-center clearfix">
                                                            <h3 class="pdLoopName"><a class="productName" href="/products/san-pham-5" title="Damson plums">Damson plums </a></h3>
                                                            <p class="pdPrice">

                                                                <span>500,000₫</span>

                                                                <del class="pdComparePrice">600,000₫</del>


                                                            </p>
                                                            <div class="pdLoopListView">
                                                                <ul class="notStyle">
                                                                    <li><strong>Mã sản phẩm: </strong><span>008</span></li>
                                                                    <li><strong>Thương hiệu: </strong><span>Khác 1</span></li>
                                                                    <li><strong>Mô tả ngắn: </strong>
                                                                        <span class="short-des">

								Tác dụng của trái chanh đối với sức khỏe đã được biết đến hàng thế kỷ nay, trong đó quan trọng nhất là tác dụng chống khuẩn, diệt vi-rút, tăng khả năng miễn dịch và tác dụng giảm cân nhờ khả năng hỗ trợ tiêu hóa và giải độc gan. Chanh có chứa nhiều chất có lợi như axit xitric, canxi, magiê, vitam..


							</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="itemProduct col-md-4 col-sm-6 col-xs-6">







                                            <div class="pdLoopItem animated zoomIn">
                                                <div class="itemLoop clearfix">
                                                    <div class="ct-box-op">
                                                        <div class="pdLoopImg elementFixHeight">
                                                            <a href="/products/xoai-cat" title="Xoài cát">
                                                                <img alt="Xoài cát" data-reg="true" class="imgLoopItem" src="//product.hstatic.net/1000314614/product/upload_a75ef890e0bd46cdbb1c971ebd953e2b_large.jpg" style="width: auto;">
                                                            </a>
                                                            <ul class="link-quickview">
                                                                <li><a href="javascript:void(0)" title="Thêm vào giỏ" class="add-to-cart" data-id="1032218114"><i class="fa fa-shopping-basket"></i></a></li>
                                                                <li><a href="/products/xoai-cat" title="Xem chi tiết"><i class="fa fa-exchange"></i></a></li>
                                                                <li><a href="javascript:void(0)" title="Xem nhanh" data-handle="/products/xoai-cat" class="mask-view btn-quickview-1"><i class="fa fa-eye"></i></a></li>
                                                            </ul>


                                                        </div>
                                                        <div class="pdLoopDetail text-center clearfix">
                                                            <h3 class="pdLoopName"><a class="productName" href="/products/xoai-cat" title="Xoài cát">Xoài cát </a></h3>
                                                            <p class="pdPrice">

                                                                <span>45,000₫</span>


                                                            </p>
                                                            <div class="pdLoopListView">
                                                                <ul class="notStyle">
                                                                    <li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
                                                                    <li><strong>Thương hiệu: </strong><span>Khác</span></li>
                                                                    <li><strong>Mô tả ngắn: </strong>
                                                                        <span class="short-des">

								Giá trị dinh dưỡng: &nbsp; Nho tươi cung cấp các chất dinh dưỡng, làm giảm mệt nhọc ngay lập tức. Các nghiên cứu cho thấy Nho tươi có chứa vitamin A, C, Calcium và sắt...Mã hàng:Thể loại:&nbsp;Rau, quả hữu cơ,&nbsp;Rau quả bán chạy,&nbsp;Rau, quả tốt cho người già,Rau quả có lợi cho sức khỏe,&nbsp;Rau, quả nhập khẩu,&nbsp;Rau, quả trong nước,&nbsp;Sản phẩm nổi bật,&nbsp;Sản phẩm khuyến mãi,&nbsp;Trang chủ,


							</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="itemProduct col-md-4 col-sm-6 col-xs-6">







                                            <div class="pdLoopItem animated zoomIn">
                                                <div class="itemLoop clearfix">
                                                    <div class="ct-box-op">
                                                        <div class="pdLoopImg elementFixHeight">
                                                            <a href="/products/san-pham-2" title="Dưa leo gai">
                                                                <img alt="Dưa leo gai" data-reg="true" class="imgLoopItem" src="//product.hstatic.net/1000314614/product/upload_b8bbf7214a9447a69711f301eddac997_large.jpg" style="width: auto;">
                                                            </a>
                                                            <ul class="link-quickview">
                                                                <li><a href="javascript:void(0)" title="Thêm vào giỏ" class="add-to-cart" data-id="1032218087"><i class="fa fa-shopping-basket"></i></a></li>
                                                                <li><a href="/products/san-pham-2" title="Xem chi tiết"><i class="fa fa-exchange"></i></a></li>
                                                                <li><a href="javascript:void(0)" title="Xem nhanh" data-handle="/products/san-pham-2" class="mask-view btn-quickview-1"><i class="fa fa-eye"></i></a></li>
                                                            </ul>


                                                        </div>
                                                        <div class="pdLoopDetail text-center clearfix">
                                                            <h3 class="pdLoopName"><a class="productName" href="/products/san-pham-2" title="Dưa leo gai">Dưa leo gai </a></h3>
                                                            <p class="pdPrice">

                                                                <span>3,000,000₫</span>


                                                            </p>
                                                            <div class="pdLoopListView">
                                                                <ul class="notStyle">
                                                                    <li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
                                                                    <li><strong>Thương hiệu: </strong><span>Khác</span></li>
                                                                    <li><strong>Mô tả ngắn: </strong>
                                                                        <span class="short-des">

								Giá trị dinh dưỡng: &nbsp; Nho tươi cung cấp các chất dinh dưỡng, làm giảm mệt nhọc ngay lập tức. Các nghiên cứu cho thấy Nho tươi có chứa vitamin A, C, Calcium và sắt...Mã hàng:Thể loại:&nbsp;Rau, quả hữu cơ,&nbsp;Rau quả bán chạy,&nbsp;Rau, quả nhập khẩu,&nbsp;Rau, quả trong nước,&nbsp;Sản phẩm khuyến mãi,&nbsp;Trang chủ,


							</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="itemProduct col-md-4 col-sm-6 col-xs-6">







                                            <div class="pdLoopItem animated zoomIn">
                                                <div class="itemLoop clearfix">
                                                    <div class="ct-box-op">
                                                        <div class="pdLoopImg elementFixHeight">
                                                            <a href="/products/phuc-bon-tu" title="Phúc bồn tử">
                                                                <img alt="Phúc bồn tử" data-reg="true" class="imgLoopItem" src="//product.hstatic.net/1000314614/product/upload_b33de9b2a8cb4368b43c4f1af9862fed_large.jpg" style="width: auto;">
                                                            </a>
                                                            <ul class="link-quickview">
                                                                <li><a href="javascript:void(0)" title="Thêm vào giỏ" class="add-to-cart" data-id="1032218086"><i class="fa fa-shopping-basket"></i></a></li>
                                                                <li><a href="/products/phuc-bon-tu" title="Xem chi tiết"><i class="fa fa-exchange"></i></a></li>
                                                                <li><a href="javascript:void(0)" title="Xem nhanh" data-handle="/products/phuc-bon-tu" class="mask-view btn-quickview-1"><i class="fa fa-eye"></i></a></li>
                                                            </ul>


                                                        </div>
                                                        <div class="pdLoopDetail text-center clearfix">
                                                            <h3 class="pdLoopName"><a class="productName" href="/products/phuc-bon-tu" title="Phúc bồn tử">Phúc bồn tử </a></h3>
                                                            <p class="pdPrice">

                                                                <span>46,000₫</span>


                                                            </p>
                                                            <div class="pdLoopListView">
                                                                <ul class="notStyle">
                                                                    <li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
                                                                    <li><strong>Thương hiệu: </strong><span>Khác</span></li>
                                                                    <li><strong>Mô tả ngắn: </strong>
                                                                        <span class="short-des">

								Giá trị dinh dưỡng: &nbsp; Nho tươi cung cấp các chất dinh dưỡng, làm giảm mệt nhọc ngay lập tức. Các nghiên cứu cho thấy Nho tươi có chứa vitamin A, C, Calcium và sắt...Mã hàng:Thể loại:&nbsp;Rau, quả hữu cơ,&nbsp;Rau quả bán chạy,&nbsp;Rau, quả tốt cho người già,Rau quả có lợi cho sức khỏe,&nbsp;Rau, quả nhập khẩu,&nbsp;Rau, quả trong nước,&nbsp;Sản phẩm nổi bật,&nbsp;Trang chủ,


							</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="itemProduct col-md-4 col-sm-6 col-xs-6">







                                            <div class="pdLoopItem animated zoomIn">
                                                <div class="itemLoop clearfix">
                                                    <div class="ct-box-op">
                                                        <div class="pdLoopImg elementFixHeight">
                                                            <a href="/products/sua-similac-iq-intelli-pro-so-4-900g-2-6-tuoi" title="Sữa Similac iq intelli - pro số 4 900g (2 - 6 tuổi)">
                                                                <img alt="Sữa Similac iq intelli - pro số 4 900g (2 - 6 tuổi)" data-reg="true" class="imgLoopItem" src="//product.hstatic.net/1000314614/product/upload_d371d7edad0345268caae1fcd3029e38_large.jpg" style="width: auto;">
                                                            </a>
                                                            <ul class="link-quickview">
                                                                <li><a href="javascript:void(0)" title="Thêm vào giỏ" class="add-to-cart" data-id="1032218109"><i class="fa fa-shopping-basket"></i></a></li>
                                                                <li><a href="/products/sua-similac-iq-intelli-pro-so-4-900g-2-6-tuoi" title="Xem chi tiết"><i class="fa fa-exchange"></i></a></li>
                                                                <li><a href="javascript:void(0)" title="Xem nhanh" data-handle="/products/sua-similac-iq-intelli-pro-so-4-900g-2-6-tuoi" class="mask-view btn-quickview-1"><i class="fa fa-eye"></i></a></li>
                                                            </ul>


                                                        </div>
                                                        <div class="pdLoopDetail text-center clearfix">
                                                            <h3 class="pdLoopName"><a class="productName" href="/products/sua-similac-iq-intelli-pro-so-4-900g-2-6-tuoi" title="Sữa Similac iq intelli - pro số 4 900g (2 - 6 tuổi)">Sữa Similac iq intelli - pro số 4 900g (2 - 6 tuổi) </a></h3>
                                                            <p class="pdPrice">

                                                                <span>1,800,000₫</span>


                                                            </p>
                                                            <div class="pdLoopListView">
                                                                <ul class="notStyle">
                                                                    <li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
                                                                    <li><strong>Thương hiệu: </strong><span>Khác</span></li>
                                                                    <li><strong>Mô tả ngắn: </strong>
                                                                        <span class="short-des">

								Sữa Similac&nbsp;IQ Intelli - Pro&nbsp;số 4 900g&nbsp;là thực phẩm đặc chế dùng thay thế bữa ăn phụ, bổ sung chế độ dinh dưỡng hàng ngày cho trẻ 2 - 6 tuổi.&nbsp;Sữa bột&nbsp;chứa các hệ dưỡng chất IQ-Plus và Intell-Pro hỗ trợ sự phát triển não bộ và thị giác, đồng thời Immunity giúp tăng cường sức đề kháng cùng các dưỡng chất thiết yếu khác giúp bé tăng trưởng tốt. Hương vani truyền thống thơm ngậy, hấp dẫn bé mang đến những bữa ăn ngon miệng và thích thus cho trẻ.


							</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>


                                    <div class="clearfix"></div>
                                    <div class="col-md-12 content_sortPagiBar pagi">
                                        <div id="pagination" class="clearfix">
                                            <ul class="pagination">


                                                <li class="pagination_previous disabled">
                                                    <span><i class="fa fa-chevron-left"></i></span>
                                                </li>





                                                <li class="active"><span>1</span></li>




                                                <li>
                                                    <a href="/collections/all?page=2" title="">2</a>
                                                </li>



                                                <li>
                                                    <a href="/collections/all?page=3" title="">3</a>
                                                </li>




                                                <li class="pagination_next"><a href="/collections/all?page=2" title="Next »"><i class="fa fa-chevron-right"></i></a></li>


                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <input type="text" class="hidden" id="coll-handle" value="(collectionid:product>0)">
        <div class="overlayFilter filter view_list"></div>



    </main>
@endsection
@section('contentJS')
    <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="false">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title " id="">Thông tin sản phẩm</h4>
                    <button type="button" class="closeModal" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <form method="post" action="/">
                                <div class="col-lg-5 col-md-6">
                                    <div class="image-zoom row">

                                        <img class="p-product-image-feature" src="#">
                                        <div id="p-sliderproduct" class="owl_pages ">
                                            <ul class="slides"></ul>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-6 pull-right" style="padding: 0px 10px;">

                                    <div class="form-input">
                                        <div class="product-title p-title">
                                        </div>
                                        <div class="product-price">
                                            <span class="p-price "></span>
                                            <del></del>
                                        </div>

                                    </div>
                                    <div class="form-des"></div>
                                    <div class="clearfix"></div>
                                    <div class="form-input vid ">
                                        <div class="m-vendor">
                                        </div>
                                        <div class="m-sku">
                                        </div>
                                        <div class="m-tt">
                                        </div>
                                    </div>
                                    <div class="p-option-wrapper">
                                        <select name="id" class="" id="p-select"></select>
                                    </div>

                                    <div class="form-input ">
                                        <label>Số lượng</label>
                                        <input name="quantity" type="number" min="1" value="1" />
                                    </div>

                                    <div class="form-input" style="width: 100%">
                                        <button type="button" class="btn-addcart">Thêm vào giỏ</button>
                                        <button disabled class="btn-detail addtocart btn-color-add btn-min-width btn-mgt btn-soldout">Hết hàng</button>
                                        <div class="qv-readmore">
                                            <span> hoặc </span><a class="read-more p-url" href="#" role="button">Xem chi tiết</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <script>

        var p_select_data = $('.p-option-wrapper').html();
        var p_zoom = $('.image-zoom').html();
        var quickViewProduct = function (purl) {

            if ($(window).width() < 680) { window.location = purl; return false; }
            modal = $('#quick-view-modal'); modal.modal('show');
            $.ajax({
                url: purl + '.js',
                async: false,
                success: function (product) {
                    $.each(product.options, function (i, v) {
                        product.options[i] = v.name;
                    })
                    modal.find('.p-title').html('<h1>' + product.title + '</h1>');
                    modal.find('.p-option-wrapper').html(p_select_data);
                    modal.find('.m-vendor').html('<span>Nhà cung cấp: </span>'+ product.vendor);
                    var productdes = product.description;
                    if(productdes != '' && productdes != null){
                        var re_productdes = productdes.replace(/(<([^>]+)>)/ig,"")
                        var des = re_productdes.split("&nbsp;").splice(0, 50).join(" ") + "...";
                        modal.find('.form-des').html(des);
                        modal.find('.form-des').show();
                    }else{
                        modal.find('.form-des').html('Chưa có mô tả cho sản phẩm này!');
                    }
                    $('.image-zoom').html(p_zoom);
                    modal.find('.p-url').attr('href', product.url);
                    if (product.images.length == 0) {
                        modal.find('.p-product-image-feature').attr('src', 'image/noDefaultImage6_large.gif');
                    }
                    else {
                        $('#p-sliderproduct').remove();
                        $('.image-zoom').append("<div id='p-sliderproduct' class='owl_pages '>");
                        $('#p-sliderproduct').append("<ul class='slides owlDesign notStyle'>");
                        $('#p-sliderproduct .slides').hide();
                        $.each(product.images, function (i, v) {
                            elem = $('<li class="product-thumb">').append('<a href="#" data-image="" data-zoom-image=""><img /></a>');
                            elem.find('a').attr('data-image', Haravan.resizeImage(v, 'medium'));
                            elem.find('a').attr('data-zoom-image', v);
                            elem.find('img').attr('data-image', Haravan.resizeImage(v, 'medium'));
                            elem.find('img').attr('data-zoom-image',v);
                            elem.find('img').attr('src', Haravan.resizeImage(v, 'small'));
                            modal.find('.slides').append(elem);
                        })

                        modal.find('.p-product-image-feature').attr('src', product.featured_image);
                        $(".modal-footer .btn-readmore").attr('href', purl);
                        var iflag = 0;
                        $('#p-sliderproduct img').load(function () {
                            iflag++;
                            if (iflag == $('#p-sliderproduct img').length) {
                                setTimeout(function(){
                                    var owl = $('#p-sliderproduct .slides');
                                    owl.on('initialize.owl.carousel initialized.owl.carousel ' +
                                        'initialize.owl.carousel initialize.owl.carousel ' +
                                        'resize.owl.carousel resized.owl.carousel ' +
                                        'refresh.owl.carousel refreshed.owl.carousel ' +
                                        'update.owl.carousel updated.owl.carousel ' +
                                        'drag.owl.carousel dragged.owl.carousel ' +
                                        'translate.owl.carousel translated.owl.carousel ' +
                                        'to.owl.carousel changed.owl.carousel', function(e) {
                                        $('#p-sliderproduct .slides').show();
                                    })
                                    owl.owlCarousel({
                                        items : 4,
                                        loop: false,
                                        autoplay: false,
                                        margin: 5,
                                        responsiveClass: true,
                                        nav : true,
                                        navText: ['‹' , '›'],
                                        responsive: {
                                            0: {
                                                items: 1
                                            },
                                            370: {
                                                items: 2
                                            },
                                            480: {
                                                items: 3
                                            },
                                            768: {
                                                items: 4
                                            },
                                            992: {
                                                items: 4
                                            }
                                        }
                                    });
                                    modal.find('.owl-item:first-child .product-thumb').addClass('active');
                                },500)
                            }
                        })
                    }
                    $.each(product.variants, function (i, v) {
                        modal.find('select#p-select').append("<option value='" + v.id + "'>" + v.title + ' - ' + v.price + "</option>");
                    })
                    if (product.variants.length == 1 && product.variants[0].title.indexOf('Default') != -1)
                        $('.p-option-wrapper').hide();
                    else
                        $('.p-option-wrapper').show();
                    if (product.variants.length == 1 && product.variants[0].title.indexOf('Default') != -1) {
                        callBack(product.variants[0], null);
                    }
                    else {
                        new Haravan.OptionSelectors("p-select", { product: product, onVariantSelected: callBack });
                        debugger
                        if (product.options.length == 1 && product.options[0].indexOf('Tiêu đề')==-1)

                            modal.find('.selector-wrapper:eq(0)').prepend('<label>' + product.options[0] + '</label>');

                        $('.p-option-wrapper select:not(#p-select)').each(function () {
                            $(this).wrap('<span class="custom-dropdown custom-dropdown--white"></span>');
                            $(this).addClass("custom-dropdown__select custom-dropdown__select--white");
                        });
                        callBack(product.variants[0], null);
                    }
                }
            });
            return false;
        }
        $('#quick-view-modal ').on('click', '.product-thumb img', function (event) {
            event.preventDefault();
            modal = $('#quick-view-modal');
            modal.find('.p-product-image-feature').attr('src', $(this).attr('data-zoom-image'));
            modal.find('.product-thumb').removeClass('active');
            $(this).parents('li').addClass('active');
            return false;
        })
        $(document).on('click', 'a.btn-quickview-1', function (event) {
            event.preventDefault();
            quickViewProduct($(this).attr('data-handle'));
        })
        // $(document).on('click','.check-box-list li > input',function(){
        //     jQuery(this).parent().toggleClass('active');
        //     var _url = stFilter.ajaxGetFilterQuery() + '&view=filter&page=1';
        //     stFilter.ajaxRenderHTML(_url);
        // })
    </script>

@endsection
@section('contentJS_End')
    <script src='/js/collection7d0b.js?v=140' type='text/javascript'></script>
@endsection
