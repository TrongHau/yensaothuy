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


        <div id="slide-main-h3" class="slide-main-h3">













            <div class="item ">
                <div class="content-slide insLoadIMG isShow " >
                    <img class="owl-lazy" data-src="/image/slideshow_1.jpg?v=140"alt="">
                    <div class="caption-slide">

                        <span>Thực phẩm hữu cơ</span>


                        <div class="ht1">Tốt cho sức khỏe</div>


                        <i>Bồi bổ sức khỏe</i>

                        <a href="collections/all.html">Xem chi tiết</a>
                    </div>
                </div>
            </div>














            <div class="item ">
                <div class="content-slide insLoadIMG isShow " >
                    <img class="owl-lazy" data-src="/image/slideshow_2.jpg?v=140"alt="">
                    <div class="caption-slide">

                        <span>Thực phẩm hữu cơ</span>


                        <div class="ht1">Tốt cho sức khỏe</div>


                        <i>Bồi bổ sức khỏe</i>

                        <a href="collections/all.html">Xem chi tiết</a>
                    </div>
                </div>
            </div>


























        </div>



        <!-- slide-main-h1 -->

        <div id="thumb-banner-h1" class="thumb-banner-h1">






            <a href="#1" class="thumb-item">
                <img class="lazy" src="/image/banerduoislider17d0b.jpg?v=140" alt="Trái cây">
                <div class="content-thumb">
                    <span>Trái cây</span>
                    <h3>Xanh sạch</h3>
                </div>
            </a>






            <a href="#2" class="thumb-item">
                <img class="lazy" src="/image/banerduoislider27d0b.jpg?v=140" alt="Rau củ">
                <div class="content-thumb">
                    <span>Rau củ</span>
                    <h3>Nhập khẩu 100%</h3>
                </div>
            </a>






            <a href="#3" class="thumb-item">
                <img class="lazy" src="/image/banerduoislider37d0b.jpg?v=140" alt="Thịt">
                <div class="content-thumb">
                    <span>Thịt</span>
                    <h3>Thực phẩm sạch</h3>
                </div>
            </a>






            <a href="#4" class="thumb-item">
                <img class="lazy" src="/image/banerduoislider47d0b.jpg?v=140" alt="Sữa">
                <div class="content-thumb">
                    <span>Sữa</span>
                    <h3>Ngon mỗi ngày</h3>
                </div>
            </a>

        </div>
        <!-- thumb-banner-h1 -->


        <div id="our-story" class="our-story">
            <div class="same-title">
                <i>Tại sao chọn chúng tôi</i>
                <h2>Các sản phẩm tốt nhất</h2>
            </div>
            <div class="container">
                <div class="content-our-story">
                    <div class="col-left">





                        <div class="item-os">
                            <img src="/image/icon-bp-17d0b.jpg?v=140" alt="100% Tự nhiên">
                            <h4>100% Tự nhiên</h4>
                            <p>Đó là một thực tế được thành lập từ lâu rằng một độc giả sẽ bị phân tâm bởi nội dung có thể đọc được.</p>
                        </div>






                        <div class="item-os">
                            <img src="/image/icon-bp-27d0b.jpg?v=140" alt="Công thức nấu ăn lành mạnh">
                            <h4>Công thức nấu ăn lành mạnh</h4>
                            <p>Đó là một thực tế được thành lập từ lâu rằng một độc giả sẽ bị phân tâm bởi nội dung có thể đọc được.</p>
                        </div>






                        <div class="item-os">
                            <img src="/image/icon-bp-37d0b.jpg?v=140" alt="Chế độ ăn uống lành mạnh">
                            <h4>Chế độ ăn uống lành mạnh</h4>
                            <p>Đó là một thực tế được thành lập từ lâu rằng một độc giả sẽ bị phân tâm bởi nội dung có thể đọc được.</p>
                        </div>


                    </div>
                    <div class="col-right">






                        <div class="item-os">
                            <img src="/image/icon-bp-47d0b.jpg?v=140" alt="Luôn tươi">
                            <h4>Luôn tươi</h4>
                            <p>Đó là một thực tế được thành lập từ lâu rằng một độc giả sẽ bị phân tâm bởi nội dung có thể đọc được.</p>
                        </div>






                        <div class="item-os">
                            <img src="/image/icon-bp-57d0b.jpg?v=140" alt="Thực hiện bài tập">
                            <h4>Thực hiện bài tập</h4>
                            <p>Đó là một thực tế được thành lập từ lâu rằng một độc giả sẽ bị phân tâm bởi nội dung có thể đọc được.</p>
                        </div>






                        <div class="item-os">
                            <img src="/image/icon-bp-67d0b.jpg?v=140" alt="Giữ sức khỏe">
                            <h4>Giữ sức khỏe</h4>
                            <p>Đó là một thực tế được thành lập từ lâu rằng một độc giả sẽ bị phân tâm bởi nội dung có thể đọc được.</p>
                        </div>

                    </div>
                    <div class="col-center">

                        <img class="lazy" src="/image/img_best_big7d0b.jpg?v=140" alt="">
                    </div>
                </div>
                <!-- content-our-story -->
            </div>
        </div>

        <!-- our-story -->

        <!-- how-to-buy -->

        <div id="banner-h1" class="banner-h1">
            <div class="part-bn">
                <img src="/image/banner-h1-17d0b.jpg?v=140" alt="">
                <div class="caption-bn1">
                    <span>Giảm giá</span>
                    <h3>Trái cây </h3>
                    <a href="#1">Mua ngay<i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="part-bn">
                <img src="/image/banner-h1-27d0b.jpg?v=140" alt="">
                <div class="caption-bn2">
                    <span>Nổi bật</span>
                    <h3>Sữa</h3>
                    <a href="#2">Mua ngay <i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>


        <!-- banner-h1 -->


        <div id="our-product" class="our-product">
            <div class="same-title">
                <i>Sản phẩm đặc biệt</i>
                <h2>Sản phẩm đặc biệt </h2>
            </div>
            <div class="container">
                <div class="content-feature-pd">
                    <div class="button-group filters-button-group">
                        <button class="button is-checked trigg" data-filter=".onsale1">Sản phẩm khuyến mãi</button>
                        <button class="button" data-filter=".frontpage2">Sản phẩm hot </button>
                        <button class="button" data-filter=".hot-products3">Sản phẩm nổi bật </button>
                    </div>
                    <div class="gallery-grid row">
                        <div class="box-prod onsale1 grid-item" data-pro="1016881468">
                            <div class="pdLoopItem animated zoomIn">
                                <div class="itemLoop clearfix">
                                    <div class="ct-box-op">
                                        <div class="pdLoopImg elementFixHeight">
                                            <a href="products/san-pham-6.html" title="Cranberry">
                                                <img alt="Cranberry" data-reg="false" class="imgLoopItem" src="/image/upload_f1ab16ccc4e6489193361fe7c04af50c_compact.jpg" />
                                            </a>
                                            <ul class="link-quickview">
                                                <li><a href="javascript:void(0)" title="Thêm vào giỏ" class="add-to-cart" data-id="1032218092"><i class="fa fa-shopping-basket"></i></a></li>
                                                <li><a href="products/san-pham-6.html" title="Xem chi tiết"><i class="fa fa-exchange"></i></a></li>
                                                <li><a href="javascript:void(0)" title="Xem nhanh" data-handle="/products/san-pham-6" class="mask-view btn-quickview-1"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="pdLoopDetail text-center clearfix">
                                            <h3 class="pdLoopName"><a class="productName" href="products/san-pham-6.html" title="Cranberry">Cranberry </a></h3>
                                            <p class="pdPrice">
                                                <span>150,000₫</span>
                                            </p>
                                            <div class="pdLoopListView">
                                                <ul class="notStyle">
                                                    <li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
                                                    <li><strong>Thương hiệu: </strong><span>Vinamilk</span></li>
                                                    <li><strong>Mô tả ngắn: </strong>
                                                        <span class="short-des">
								Giá trị dinh dưỡng:   Nho tươi cung cấp các chất dinh dưỡng, làm giảm mệt nhọc ngay lập tức. Các nghiên cứu cho thấy Nho tươi có chứa vitamin A, C, Calcium và sắt...Mã hàng:Thể loại: Rau, quả hữu cơ, Rau quả bán chạy, Rau, quả tốt cho người già,Rau quả có lợi cho sức khỏe, Rau, quả nhập khẩu, Rau, quả trong nước, Sản phẩm nổi bật, Sản phẩm khuyến mãi, Trang chủ,
							</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-prod onsale1 grid-item" data-pro="1016881469">
                            <div class="pdLoopItem animated zoomIn">
                                <div class="itemLoop clearfix">
                                    <div class="ct-box-op">
                                        <div class="pdLoopImg elementFixHeight">
                                            <a href="products/san-pham-7.html" title="Đào tiên Úc">
                                                <img alt="Đào tiên Úc" data-reg="false" class="imgLoopItem" src="/image/upload_f1657dbe94444faba6930f58ace06cea_compact.jpg" />
                                            </a>
                                            <ul class="link-quickview">
                                                <li><a href="javascript:void(0)" title="Thêm vào giỏ" class="add-to-cart" data-id="1032218093"><i class="fa fa-shopping-basket"></i></a></li>
                                                <li><a href="products/san-pham-7.html" title="Xem chi tiết"><i class="fa fa-exchange"></i></a></li>
                                                <li><a href="javascript:void(0)" title="Xem nhanh" data-handle="/products/san-pham-7" class="mask-view btn-quickview-1"><i class="fa fa-eye"></i></a></li>
                                            </ul>


                                        </div>
                                        <div class="pdLoopDetail text-center clearfix">
                                            <h3 class="pdLoopName"><a class="productName" href="products/san-pham-7.html" title="Đào tiên Úc">Đào tiên Úc </a></h3>
                                            <p class="pdPrice">
                                                <span>15,000,000₫</span>
                                            </p>
                                            <div class="pdLoopListView">
                                                <ul class="notStyle">
                                                    <li><strong>Mã sản phẩm: </strong><span>434</span></li>
                                                    <li><strong>Thương hiệu: </strong><span>Emart</span></li>
                                                    <li><strong>Mô tả ngắn: </strong>
                                                        <span class="short-des">

								Giá trị dinh dưỡng:   Nho tươi cung cấp các chất dinh dưỡng, làm giảm mệt nhọc ngay lập tức. Các nghiên cứu cho thấy Nho tươi có chứa vitamin A, C, Calcium và sắt...Mã hàng:Thể loại: Rau, quả hữu cơ, Rau quả bán chạy, Rau, quả nhập khẩu, Rau, quả trong nước, Sản phẩm khuyến mãi, Trang chủ,


							</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-prod onsale1 grid-item" data-pro="1016881458">
                            <div class="pdLoopItem animated zoomIn">
                                <div class="itemLoop clearfix">
                                    <div class="ct-box-op">
                                        <div class="pdLoopImg elementFixHeight">
                                            <a href="products/khoai-mon" title="Khoai môn">
                                                <img alt="Khoai môn" data-reg="false" class="imgLoopItem" src="/image/upload_02a60bf9367949d38cd6ff8c80b77eb8_compact.jpg" />
                                            </a>
                                            <ul class="link-quickview">
                                                <li><a href="javascript:void(0)" title="Thêm vào giỏ" class="add-to-cart" data-id="1032218080"><i class="fa fa-shopping-basket"></i></a></li>
                                                <li><a href="products/khoai-mon" title="Xem chi tiết"><i class="fa fa-exchange"></i></a></li>
                                                <li><a href="javascript:void(0)" title="Xem nhanh" data-handle="/products/khoai-mon" class="mask-view btn-quickview-1"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="pdLoopDetail text-center clearfix">
                                            <h3 class="pdLoopName"><a class="productName" href="products/khoai-mon" title="Khoai môn">Khoai môn </a></h3>
                                            <p class="pdPrice">
                                                <span>23,000₫</span>
                                            </p>
                                            <div class="pdLoopListView">
                                                <ul class="notStyle">
                                                    <li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
                                                    <li><strong>Thương hiệu: </strong><span>Khác</span></li>
                                                    <li><strong>Mô tả ngắn: </strong>
                                                        <span class="short-des">
								Giá trị dinh dưỡng:   Nho tươi cung cấp các chất dinh dưỡng, làm giảm mệt nhọc ngay lập tức. Các nghiên cứu cho thấy Nho tươi có chứa vitamin A, C, Calcium và sắt...Mã hàng:Thể loại: Rau, quả hữu cơ, Rau quả bán chạy, Rau, quả tốt cho người già,Rau quả có lợi cho sức khỏe, Rau, quả nhập khẩu, Rau, quả trong nước, Sản phẩm nổi bật, Trang chủ,
							</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-prod onsale1 grid-item" data-pro="1016881461">
                            <div class="pdLoopItem animated zoomIn">
                                <div class="itemLoop clearfix">
                                    <div class="ct-box-op">
                                        <div class="pdLoopImg elementFixHeight">
                                            <a href="products/ot-chuong-vang.html" title="Ớt chuông vàng">
                                                <img alt="Ớt chuông vàng" data-reg="false" class="imgLoopItem" src="/image/upload_f9bb326578de4576b90b277641b6fe25_compact.jpg" />
                                            </a>
                                            <ul class="link-quickview">
                                                <li><a href="javascript:void(0)" title="Thêm vào giỏ" class="add-to-cart" data-id="1032218084"><i class="fa fa-shopping-basket"></i></a></li>
                                                <li><a href="products/ot-chuong-vang.html" title="Xem chi tiết"><i class="fa fa-exchange"></i></a></li>
                                                <li><a href="javascript:void(0)" title="Xem nhanh" data-handle="/products/ot-chuong-vang" class="mask-view btn-quickview-1"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="pdLoopDetail text-center clearfix">
                                            <h3 class="pdLoopName"><a class="productName" href="products/ot-chuong-vang.html" title="Ớt chuông vàng">Ớt chuông vàng </a></h3>
                                            <p class="pdPrice">
                                                <span>70,000₫</span>
                                            </p>
                                            <div class="pdLoopListView">
                                                <ul class="notStyle">
                                                    <li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
                                                    <li><strong>Thương hiệu: </strong><span>Khác</span></li>
                                                    <li><strong>Mô tả ngắn: </strong>
                                                        <span class="short-des">
								Giá trị dinh dưỡng:   Nho tươi cung cấp các chất dinh dưỡng, làm giảm mệt nhọc ngay lập tức. Các nghiên cứu cho thấy Nho tươi có chứa vitamin A, C, Calcium và sắt...Mã hàng:Thể loại: Rau, quả hữu cơ, Rau quả bán chạy, Rau, quả tốt cho người già,Rau quả có lợi cho sức khỏe, Rau, quả nhập khẩu, Rau, quả trong nước, Sản phẩm nổi bật, Trang chủ,
							</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-prod onsale1 grid-item" data-pro="1016881462">
                            <div class="pdLoopItem animated zoomIn">
                                <div class="itemLoop clearfix">
                                    <div class="ct-box-op">
                                        <div class="pdLoopImg elementFixHeight">
                                            <a href="products/ot-sung" title="Ớt sừng">
                                                <img alt="Ớt sừng" data-reg="false" class="imgLoopItem" src="/image/upload_6b86e5ff4c8e45c6ad681be8c99fb72a_compact.jpg" />
                                            </a>
                                            <ul class="link-quickview">
                                                <li><a href="javascript:void(0)" title="Thêm vào giỏ" class="add-to-cart" data-id="1032218085"><i class="fa fa-shopping-basket"></i></a></li>
                                                <li><a href="products/ot-sung" title="Xem chi tiết"><i class="fa fa-exchange"></i></a></li>
                                                <li><a href="javascript:void(0)" title="Xem nhanh" data-handle="/products/ot-sung" class="mask-view btn-quickview-1"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="pdLoopDetail text-center clearfix">
                                            <h3 class="pdLoopName"><a class="productName" href="products/ot-sung" title="Ớt sừng">Ớt sừng </a></h3>
                                            <p class="pdPrice">
                                                <span>60,000₫</span>
                                            </p>
                                            <div class="pdLoopListView">
                                                <ul class="notStyle">
                                                    <li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
                                                    <li><strong>Thương hiệu: </strong><span>Khác</span></li>
                                                    <li><strong>Mô tả ngắn: </strong>
                                                        <span class="short-des">
								Giá trị dinh dưỡng:   Nho tươi cung cấp các chất dinh dưỡng, làm giảm mệt nhọc ngay lập tức. Các nghiên cứu cho thấy Nho tươi có chứa vitamin A, C, Calcium và sắt...Mã hàng:Thể loại: Rau, quả hữu cơ, Rau quả bán chạy, Rau, quả tốt cho người già,Rau quả có lợi cho sức khỏe, Rau, quả nhập khẩu, Rau, quả trong nước, Sản phẩm nổi bật, Trang chủ,
							</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>





                        <div class="box-prod onsale1 grid-item" data-pro="1016881472">







                            <div class="pdLoopItem animated zoomIn">
                                <div class="itemLoop clearfix">
                                    <div class="ct-box-op">
                                        <div class="pdLoopImg elementFixHeight">
                                            <a href="products/su-su-non.html" title="Su su non">
                                                <img alt="Su su non" data-reg="false" class="imgLoopItem" src="/image/upload_1d48c719c6ac4a6d8c179f8bc5b78fcf_compact.jpg" />
                                            </a>
                                            <ul class="link-quickview">
                                                <li><a href="javascript:void(0)" title="Thêm vào giỏ" class="add-to-cart" data-id="1032218099"><i class="fa fa-shopping-basket"></i></a></li>
                                                <li><a href="products/su-su-non.html" title="Xem chi tiết"><i class="fa fa-exchange"></i></a></li>
                                                <li><a href="javascript:void(0)" title="Xem nhanh" data-handle="/products/su-su-non" class="mask-view btn-quickview-1"><i class="fa fa-eye"></i></a></li>
                                            </ul>


                                        </div>
                                        <div class="pdLoopDetail text-center clearfix">
                                            <h3 class="pdLoopName"><a class="productName" href="products/su-su-non.html" title="Su su non">Su su non </a></h3>
                                            <p class="pdPrice">

                                                <span>35,000₫</span>


                                            </p>
                                            <div class="pdLoopListView">
                                                <ul class="notStyle">
                                                    <li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
                                                    <li><strong>Thương hiệu: </strong><span>Khác</span></li>
                                                    <li><strong>Mô tả ngắn: </strong>
                                                        <span class="short-des">

								Giá trị dinh dưỡng:   Nho tươi cung cấp các chất dinh dưỡng, làm giảm mệt nhọc ngay lập tức. Các nghiên cứu cho thấy Nho tươi có chứa vitamin A, C, Calcium và sắt...Mã hàng:Thể loại: Rau, quả hữu cơ, Rau quả bán chạy, Rau, quả tốt cho người già,Rau quả có lợi cho sức khỏe, Rau, quả nhập khẩu, Rau, quả trong nước, Sản phẩm nổi bật, Trang chủ,


							</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>





                        <div class="box-prod onsale1 grid-item" data-pro="1016881474">







                            <div class="pdLoopItem animated zoomIn">
                                <div class="itemLoop clearfix">
                                    <div class="ct-box-op">
                                        <div class="pdLoopImg elementFixHeight">
                                            <a href="products/sua-meiji-so-9-820g-1-3-tuoi" title="Sữa meiji số 9 820g (1 - 3 tuổi)">
                                                <img alt="Sữa meiji số 9 820g (1 - 3 tuổi)" data-reg="false" class="imgLoopItem" src="/image/upload_fb2a2b70d32449deae970477219cd687_compact.jpg" />
                                            </a>
                                            <ul class="link-quickview">
                                                <li><a href="javascript:void(0)" title="Thêm vào giỏ" class="add-to-cart" data-id="1032218103"><i class="fa fa-shopping-basket"></i></a></li>
                                                <li><a href="products/sua-meiji-so-9-820g-1-3-tuoi" title="Xem chi tiết"><i class="fa fa-exchange"></i></a></li>
                                                <li><a href="javascript:void(0)" title="Xem nhanh" data-handle="/products/sua-meiji-so-9-820g-1-3-tuoi" class="mask-view btn-quickview-1"><i class="fa fa-eye"></i></a></li>
                                            </ul>


                                        </div>
                                        <div class="pdLoopDetail text-center clearfix">
                                            <h3 class="pdLoopName"><a class="productName" href="products/sua-meiji-so-9-820g-1-3-tuoi" title="Sữa meiji số 9 820g (1 - 3 tuổi)">Sữa meiji số 9 820g (1 - 3 tuổi) </a></h3>
                                            <p class="pdPrice">

                                                <span>1,200,000₫</span>


                                            </p>
                                            <div class="pdLoopListView">
                                                <ul class="notStyle">
                                                    <li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
                                                    <li><strong>Thương hiệu: </strong><span>Khác</span></li>
                                                    <li><strong>Mô tả ngắn: </strong>
                                                        <span class="short-des">

								Sữa Meiji số 9 820g phù hợp cho trẻ từ 1-3 tuổi, không chỉ chứa các chất dinh dưỡng cơ bản như protein, chất béo, carbohydrat mà còn có các vitamin và khoáng chất rất khó có được từ sữa mẹ, sữa bò và thức ăn dạng rắn. Meiji còn bổ sung cả axit docosahexaenoic (DHA), các nucleotides và đặc biệt là hệ chất xơ GOS hỗ trợ tiêu hóa làm nên đặc tính mát của sữa giúp thúc đẩy sự phát triển toàn diện cả về thể chất lẫn não bộ của trẻ trong suốt giai đoạn thơ ấu. Sản phẩm được dùng bổ sung cùng các...


							</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>





                        <div class="box-prod onsale1 grid-item" data-pro="1016881475">







                            <div class="pdLoopItem animated zoomIn">
                                <div class="itemLoop clearfix">
                                    <div class="ct-box-op">
                                        <div class="pdLoopImg elementFixHeight">
                                            <a href="products/sua-pediasure-ba-850g-1-10-tuoi.html" title="Sữa Pediasure ba 850g (1 - 10 tuổi)">
                                                <img alt="Sữa Pediasure ba 850g (1 - 10 tuổi)" data-reg="false" class="imgLoopItem" src="/image/upload_eaf63ab35a48414f9329bd930afc468f_compact.jpg" />
                                            </a>
                                            <ul class="link-quickview">
                                                <li><a href="javascript:void(0)" title="Thêm vào giỏ" class="add-to-cart" data-id="1032218105"><i class="fa fa-shopping-basket"></i></a></li>
                                                <li><a href="products/sua-pediasure-ba-850g-1-10-tuoi.html" title="Xem chi tiết"><i class="fa fa-exchange"></i></a></li>
                                                <li><a href="javascript:void(0)" title="Xem nhanh" data-handle="/products/sua-pediasure-ba-850g-1-10-tuoi" class="mask-view btn-quickview-1"><i class="fa fa-eye"></i></a></li>
                                            </ul>


                                        </div>
                                        <div class="pdLoopDetail text-center clearfix">
                                            <h3 class="pdLoopName"><a class="productName" href="products/sua-pediasure-ba-850g-1-10-tuoi.html" title="Sữa Pediasure ba 850g (1 - 10 tuổi)">Sữa Pediasure ba 850g (1 - 10 tuổi) </a></h3>
                                            <p class="pdPrice">

                                                <span>1,000,000₫</span>


                                            </p>
                                            <div class="pdLoopListView">
                                                <ul class="notStyle">
                                                    <li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
                                                    <li><strong>Thương hiệu: </strong><span>Khác</span></li>
                                                    <li><strong>Mô tả ngắn: </strong>
                                                        <span class="short-des">

								Sữa PediaSure BA là sản phẩm dinh dưỡng dùng bổ sung hoặc thay thế hoàn toàn bữa ăn của trẻ 1-10 tuổi, được đặc chế khoa học để cung cấp nguồn dinh dưỡng đầy đủ và cân đối, giúp thay thế và bổ sung kịp thời sự thiếu hụt của bữa ăn, cho trẻ khỏe mạnh và phát triển tốt, không bị suy dinh dưỡng hoặc béo phì, đặc biệt tốt khi dùng thường xuyên và lâu dài cho trẻ. Sữa đặc biệt phù hợp cho các bé biếng ăn, giúp trẻ nhanh chóng bắt kịp và tiếp tục đà tăng trưởng tối ưu...


							</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>





                        <div class="box-prod onsale1 grid-item" data-pro="1016881478">







                            <div class="pdLoopItem animated zoomIn">
                                <div class="itemLoop clearfix">
                                    <div class="ct-box-op">
                                        <div class="pdLoopImg elementFixHeight">
                                            <a href="products/suon-non" title="Sườn non">
                                                <img alt="Sườn non" data-reg="false" class="imgLoopItem" src="/image/upload_ed386c6e7c5f439fac42d7404cb18e28_compact.jpg" />
                                            </a>
                                            <ul class="link-quickview">
                                                <li><a href="javascript:void(0)" title="Thêm vào giỏ" class="add-to-cart" data-id="1032218111"><i class="fa fa-shopping-basket"></i></a></li>
                                                <li><a href="products/suon-non" title="Xem chi tiết"><i class="fa fa-exchange"></i></a></li>
                                                <li><a href="javascript:void(0)" title="Xem nhanh" data-handle="/products/suon-non" class="mask-view btn-quickview-1"><i class="fa fa-eye"></i></a></li>
                                            </ul>


                                        </div>
                                        <div class="pdLoopDetail text-center clearfix">
                                            <h3 class="pdLoopName"><a class="productName" href="products/suon-non" title="Sườn non">Sườn non </a></h3>
                                            <p class="pdPrice">

                                                <span>1,000,000₫</span>


                                            </p>
                                            <div class="pdLoopListView">
                                                <ul class="notStyle">
                                                    <li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
                                                    <li><strong>Thương hiệu: </strong><span>Khác</span></li>
                                                    <li><strong>Mô tả ngắn: </strong>
                                                        <span class="short-des">

								Sườn non heo (hữu cơ) đảm bảo chất lượng và vệ sinh an toàn thực phẩm.Phù hợp chế biến các món kho, chiên, rim, nấu canh,... thơm ngon và giàu dinh dưỡng cho cả gia đình.


							</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>





                        <div class="box-prod onsale1 grid-item" data-pro="1016881471">







                            <div class="pdLoopItem animated zoomIn">
                                <div class="itemLoop clearfix">
                                    <div class="ct-box-op">
                                        <div class="pdLoopImg elementFixHeight">
                                            <a href="products/san-pham-8.html" title="Xoài đỏ mỹ">
                                                <img alt="Xoài đỏ mỹ" data-reg="false" class="imgLoopItem" src="/image/upload_83f770ac573043798bf11123d707c2c0_compact.jpg" />
                                            </a>
                                            <ul class="link-quickview">
                                                <li><a href="javascript:void(0)" title="Thêm vào giỏ" class="add-to-cart" data-id="1032218098"><i class="fa fa-shopping-basket"></i></a></li>
                                                <li><a href="products/san-pham-8.html" title="Xem chi tiết"><i class="fa fa-exchange"></i></a></li>
                                                <li><a href="javascript:void(0)" title="Xem nhanh" data-handle="/products/san-pham-8" class="mask-view btn-quickview-1"><i class="fa fa-eye"></i></a></li>
                                            </ul>


                                        </div>
                                        <div class="pdLoopDetail text-center clearfix">
                                            <h3 class="pdLoopName"><a class="productName" href="products/san-pham-8.html" title="Xoài đỏ mỹ">Xoài đỏ mỹ </a></h3>
                                            <p class="pdPrice">

                                                <span>120,000₫</span>


                                            </p>
                                            <div class="pdLoopListView">
                                                <ul class="notStyle">
                                                    <li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
                                                    <li><strong>Thương hiệu: </strong><span>BigC</span></li>
                                                    <li><strong>Mô tả ngắn: </strong>
                                                        <span class="short-des">

								Giá trị dinh dưỡng:   Nho tươi cung cấp các chất dinh dưỡng, làm giảm mệt nhọc ngay lập tức. Các nghiên cứu cho thấy Nho tươi có chứa vitamin A, C, Calcium và sắt...Mã hàng:Thể loại: Rau, quả hữu cơ, Rau quả bán chạy, Rau, quả tốt cho người già,Rau quả có lợi cho sức khỏe, Rau, quả nhập khẩu, Rau, quả trong nước, Sản phẩm nổi bật, Trang chủ,


							</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>













                        <div class="box-prod onsale2 grid-item" data-pro="1016881472">







                            <div class="pdLoopItem animated zoomIn">
                                <div class="itemLoop clearfix">
                                    <div class="ct-box-op">
                                        <div class="pdLoopImg elementFixHeight">
                                            <a href="products/su-su-non.html" title="Su su non">
                                                <img alt="Su su non" data-reg="false" class="imgLoopItem" src="/image/upload_1d48c719c6ac4a6d8c179f8bc5b78fcf_compact.jpg" />
                                            </a>
                                            <ul class="link-quickview">
                                                <li><a href="javascript:void(0)" title="Thêm vào giỏ" class="add-to-cart" data-id="1032218099"><i class="fa fa-shopping-basket"></i></a></li>
                                                <li><a href="products/su-su-non.html" title="Xem chi tiết"><i class="fa fa-exchange"></i></a></li>
                                                <li><a href="javascript:void(0)" title="Xem nhanh" data-handle="/products/su-su-non" class="mask-view btn-quickview-1"><i class="fa fa-eye"></i></a></li>
                                            </ul>


                                        </div>
                                        <div class="pdLoopDetail text-center clearfix">
                                            <h3 class="pdLoopName"><a class="productName" href="products/su-su-non.html" title="Su su non">Su su non </a></h3>
                                            <p class="pdPrice">

                                                <span>35,000₫</span>


                                            </p>
                                            <div class="pdLoopListView">
                                                <ul class="notStyle">
                                                    <li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
                                                    <li><strong>Thương hiệu: </strong><span>Khác</span></li>
                                                    <li><strong>Mô tả ngắn: </strong>
                                                        <span class="short-des">

								Giá trị dinh dưỡng:   Nho tươi cung cấp các chất dinh dưỡng, làm giảm mệt nhọc ngay lập tức. Các nghiên cứu cho thấy Nho tươi có chứa vitamin A, C, Calcium và sắt...Mã hàng:Thể loại: Rau, quả hữu cơ, Rau quả bán chạy, Rau, quả tốt cho người già,Rau quả có lợi cho sức khỏe, Rau, quả nhập khẩu, Rau, quả trong nước, Sản phẩm nổi bật, Trang chủ,


							</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>





                        <div class="box-prod frontpage2 grid-item" data-pro="1016881474">







                            <div class="pdLoopItem animated zoomIn">
                                <div class="itemLoop clearfix">
                                    <div class="ct-box-op">
                                        <div class="pdLoopImg elementFixHeight">
                                            <a href="products/sua-meiji-so-9-820g-1-3-tuoi" title="Sữa meiji số 9 820g (1 - 3 tuổi)">
                                                <img alt="Sữa meiji số 9 820g (1 - 3 tuổi)" data-reg="false" class="imgLoopItem" src="/image/upload_fb2a2b70d32449deae970477219cd687_compact.jpg" />
                                            </a>
                                            <ul class="link-quickview">
                                                <li><a href="javascript:void(0)" title="Thêm vào giỏ" class="add-to-cart" data-id="1032218103"><i class="fa fa-shopping-basket"></i></a></li>
                                                <li><a href="products/sua-meiji-so-9-820g-1-3-tuoi" title="Xem chi tiết"><i class="fa fa-exchange"></i></a></li>
                                                <li><a href="javascript:void(0)" title="Xem nhanh" data-handle="/products/sua-meiji-so-9-820g-1-3-tuoi" class="mask-view btn-quickview-1"><i class="fa fa-eye"></i></a></li>
                                            </ul>


                                        </div>
                                        <div class="pdLoopDetail text-center clearfix">
                                            <h3 class="pdLoopName"><a class="productName" href="products/sua-meiji-so-9-820g-1-3-tuoi" title="Sữa meiji số 9 820g (1 - 3 tuổi)">Sữa meiji số 9 820g (1 - 3 tuổi) </a></h3>
                                            <p class="pdPrice">

                                                <span>1,200,000₫</span>


                                            </p>
                                            <div class="pdLoopListView">
                                                <ul class="notStyle">
                                                    <li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
                                                    <li><strong>Thương hiệu: </strong><span>Khác</span></li>
                                                    <li><strong>Mô tả ngắn: </strong>
                                                        <span class="short-des">

								Sữa Meiji số 9 820g phù hợp cho trẻ từ 1-3 tuổi, không chỉ chứa các chất dinh dưỡng cơ bản như protein, chất béo, carbohydrat mà còn có các vitamin và khoáng chất rất khó có được từ sữa mẹ, sữa bò và thức ăn dạng rắn. Meiji còn bổ sung cả axit docosahexaenoic (DHA), các nucleotides và đặc biệt là hệ chất xơ GOS hỗ trợ tiêu hóa làm nên đặc tính mát của sữa giúp thúc đẩy sự phát triển toàn diện cả về thể chất lẫn não bộ của trẻ trong suốt giai đoạn thơ ấu. Sản phẩm được dùng bổ sung cùng các...


							</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>





                        <div class="box-prod frontpage2 grid-item" data-pro="1016881475">







                            <div class="pdLoopItem animated zoomIn">
                                <div class="itemLoop clearfix">
                                    <div class="ct-box-op">
                                        <div class="pdLoopImg elementFixHeight">
                                            <a href="products/sua-pediasure-ba-850g-1-10-tuoi.html" title="Sữa Pediasure ba 850g (1 - 10 tuổi)">
                                                <img alt="Sữa Pediasure ba 850g (1 - 10 tuổi)" data-reg="false" class="imgLoopItem" src="/image/upload_eaf63ab35a48414f9329bd930afc468f_compact.jpg" />
                                            </a>
                                            <ul class="link-quickview">
                                                <li><a href="javascript:void(0)" title="Thêm vào giỏ" class="add-to-cart" data-id="1032218105"><i class="fa fa-shopping-basket"></i></a></li>
                                                <li><a href="products/sua-pediasure-ba-850g-1-10-tuoi.html" title="Xem chi tiết"><i class="fa fa-exchange"></i></a></li>
                                                <li><a href="javascript:void(0)" title="Xem nhanh" data-handle="/products/sua-pediasure-ba-850g-1-10-tuoi" class="mask-view btn-quickview-1"><i class="fa fa-eye"></i></a></li>
                                            </ul>


                                        </div>
                                        <div class="pdLoopDetail text-center clearfix">
                                            <h3 class="pdLoopName"><a class="productName" href="products/sua-pediasure-ba-850g-1-10-tuoi.html" title="Sữa Pediasure ba 850g (1 - 10 tuổi)">Sữa Pediasure ba 850g (1 - 10 tuổi) </a></h3>
                                            <p class="pdPrice">

                                                <span>1,000,000₫</span>


                                            </p>
                                            <div class="pdLoopListView">
                                                <ul class="notStyle">
                                                    <li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
                                                    <li><strong>Thương hiệu: </strong><span>Khác</span></li>
                                                    <li><strong>Mô tả ngắn: </strong>
                                                        <span class="short-des">

								Sữa PediaSure BA là sản phẩm dinh dưỡng dùng bổ sung hoặc thay thế hoàn toàn bữa ăn của trẻ 1-10 tuổi, được đặc chế khoa học để cung cấp nguồn dinh dưỡng đầy đủ và cân đối, giúp thay thế và bổ sung kịp thời sự thiếu hụt của bữa ăn, cho trẻ khỏe mạnh và phát triển tốt, không bị suy dinh dưỡng hoặc béo phì, đặc biệt tốt khi dùng thường xuyên và lâu dài cho trẻ. Sữa đặc biệt phù hợp cho các bé biếng ăn, giúp trẻ nhanh chóng bắt kịp và tiếp tục đà tăng trưởng tối ưu...


							</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>





                        <div class="box-prod frontpage2 grid-item" data-pro="1016881478">







                            <div class="pdLoopItem animated zoomIn">
                                <div class="itemLoop clearfix">
                                    <div class="ct-box-op">
                                        <div class="pdLoopImg elementFixHeight">
                                            <a href="products/suon-non" title="Sườn non">
                                                <img alt="Sườn non" data-reg="false" class="imgLoopItem" src="/image/upload_ed386c6e7c5f439fac42d7404cb18e28_compact.jpg" />
                                            </a>
                                            <ul class="link-quickview">
                                                <li><a href="javascript:void(0)" title="Thêm vào giỏ" class="add-to-cart" data-id="1032218111"><i class="fa fa-shopping-basket"></i></a></li>
                                                <li><a href="products/suon-non" title="Xem chi tiết"><i class="fa fa-exchange"></i></a></li>
                                                <li><a href="javascript:void(0)" title="Xem nhanh" data-handle="/products/suon-non" class="mask-view btn-quickview-1"><i class="fa fa-eye"></i></a></li>
                                            </ul>


                                        </div>
                                        <div class="pdLoopDetail text-center clearfix">
                                            <h3 class="pdLoopName"><a class="productName" href="products/suon-non" title="Sườn non">Sườn non </a></h3>
                                            <p class="pdPrice">

                                                <span>1,000,000₫</span>


                                            </p>
                                            <div class="pdLoopListView">
                                                <ul class="notStyle">
                                                    <li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
                                                    <li><strong>Thương hiệu: </strong><span>Khác</span></li>
                                                    <li><strong>Mô tả ngắn: </strong>
                                                        <span class="short-des">

								Sườn non heo (hữu cơ) đảm bảo chất lượng và vệ sinh an toàn thực phẩm.Phù hợp chế biến các món kho, chiên, rim, nấu canh,... thơm ngon và giàu dinh dưỡng cho cả gia đình.


							</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>





                        <div class="box-prod frontpage2 grid-item" data-pro="1016881471">







                            <div class="pdLoopItem animated zoomIn">
                                <div class="itemLoop clearfix">
                                    <div class="ct-box-op">
                                        <div class="pdLoopImg elementFixHeight">
                                            <a href="products/san-pham-8.html" title="Xoài đỏ mỹ">
                                                <img alt="Xoài đỏ mỹ" data-reg="false" class="imgLoopItem" src="/image/upload_83f770ac573043798bf11123d707c2c0_compact.jpg" />
                                            </a>
                                            <ul class="link-quickview">
                                                <li><a href="javascript:void(0)" title="Thêm vào giỏ" class="add-to-cart" data-id="1032218098"><i class="fa fa-shopping-basket"></i></a></li>
                                                <li><a href="products/san-pham-8.html" title="Xem chi tiết"><i class="fa fa-exchange"></i></a></li>
                                                <li><a href="javascript:void(0)" title="Xem nhanh" data-handle="/products/san-pham-8" class="mask-view btn-quickview-1"><i class="fa fa-eye"></i></a></li>
                                            </ul>


                                        </div>
                                        <div class="pdLoopDetail text-center clearfix">
                                            <h3 class="pdLoopName"><a class="productName" href="products/san-pham-8.html" title="Xoài đỏ mỹ">Xoài đỏ mỹ </a></h3>
                                            <p class="pdPrice">

                                                <span>120,000₫</span>


                                            </p>
                                            <div class="pdLoopListView">
                                                <ul class="notStyle">
                                                    <li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
                                                    <li><strong>Thương hiệu: </strong><span>BigC</span></li>
                                                    <li><strong>Mô tả ngắn: </strong>
                                                        <span class="short-des">

								Giá trị dinh dưỡng:   Nho tươi cung cấp các chất dinh dưỡng, làm giảm mệt nhọc ngay lập tức. Các nghiên cứu cho thấy Nho tươi có chứa vitamin A, C, Calcium và sắt...Mã hàng:Thể loại: Rau, quả hữu cơ, Rau quả bán chạy, Rau, quả tốt cho người già,Rau quả có lợi cho sức khỏe, Rau, quả nhập khẩu, Rau, quả trong nước, Sản phẩm nổi bật, Trang chủ,


							</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>













                        <div class="box-prod onsale3 grid-item" data-pro="1016881469">







                            <div class="pdLoopItem animated zoomIn">
                                <div class="itemLoop clearfix">
                                    <div class="ct-box-op">
                                        <div class="pdLoopImg elementFixHeight">
                                            <a href="products/san-pham-7.html" title="Đào tiên Úc">
                                                <img alt="Đào tiên Úc" data-reg="false" class="imgLoopItem" src="/image/upload_f1657dbe94444faba6930f58ace06cea_compact.jpg" />
                                            </a>
                                            <ul class="link-quickview">
                                                <li><a href="javascript:void(0)" title="Thêm vào giỏ" class="add-to-cart" data-id="1032218093"><i class="fa fa-shopping-basket"></i></a></li>
                                                <li><a href="products/san-pham-7.html" title="Xem chi tiết"><i class="fa fa-exchange"></i></a></li>
                                                <li><a href="javascript:void(0)" title="Xem nhanh" data-handle="/products/san-pham-7" class="mask-view btn-quickview-1"><i class="fa fa-eye"></i></a></li>
                                            </ul>


                                        </div>
                                        <div class="pdLoopDetail text-center clearfix">
                                            <h3 class="pdLoopName"><a class="productName" href="products/san-pham-7.html" title="Đào tiên Úc">Đào tiên Úc </a></h3>
                                            <p class="pdPrice">

                                                <span>15,000,000₫</span>


                                            </p>
                                            <div class="pdLoopListView">
                                                <ul class="notStyle">
                                                    <li><strong>Mã sản phẩm: </strong><span>434</span></li>
                                                    <li><strong>Thương hiệu: </strong><span>Emart</span></li>
                                                    <li><strong>Mô tả ngắn: </strong>
                                                        <span class="short-des">

								Giá trị dinh dưỡng:   Nho tươi cung cấp các chất dinh dưỡng, làm giảm mệt nhọc ngay lập tức. Các nghiên cứu cho thấy Nho tươi có chứa vitamin A, C, Calcium và sắt...Mã hàng:Thể loại: Rau, quả hữu cơ, Rau quả bán chạy, Rau, quả nhập khẩu, Rau, quả trong nước, Sản phẩm khuyến mãi, Trang chủ,


							</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>





                        <div class="box-prod hot-products3 grid-item" data-pro="1016881458">







                            <div class="pdLoopItem animated zoomIn">
                                <div class="itemLoop clearfix">
                                    <div class="ct-box-op">
                                        <div class="pdLoopImg elementFixHeight">
                                            <a href="products/khoai-mon" title="Khoai môn">
                                                <img alt="Khoai môn" data-reg="false" class="imgLoopItem" src="/image/upload_02a60bf9367949d38cd6ff8c80b77eb8_compact.jpg" />
                                            </a>
                                            <ul class="link-quickview">
                                                <li><a href="javascript:void(0)" title="Thêm vào giỏ" class="add-to-cart" data-id="1032218080"><i class="fa fa-shopping-basket"></i></a></li>
                                                <li><a href="products/khoai-mon" title="Xem chi tiết"><i class="fa fa-exchange"></i></a></li>
                                                <li><a href="javascript:void(0)" title="Xem nhanh" data-handle="/products/khoai-mon" class="mask-view btn-quickview-1"><i class="fa fa-eye"></i></a></li>
                                            </ul>


                                        </div>
                                        <div class="pdLoopDetail text-center clearfix">
                                            <h3 class="pdLoopName"><a class="productName" href="products/khoai-mon" title="Khoai môn">Khoai môn </a></h3>
                                            <p class="pdPrice">

                                                <span>23,000₫</span>


                                            </p>
                                            <div class="pdLoopListView">
                                                <ul class="notStyle">
                                                    <li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
                                                    <li><strong>Thương hiệu: </strong><span>Khác</span></li>
                                                    <li><strong>Mô tả ngắn: </strong>
                                                        <span class="short-des">

								Giá trị dinh dưỡng:   Nho tươi cung cấp các chất dinh dưỡng, làm giảm mệt nhọc ngay lập tức. Các nghiên cứu cho thấy Nho tươi có chứa vitamin A, C, Calcium và sắt...Mã hàng:Thể loại: Rau, quả hữu cơ, Rau quả bán chạy, Rau, quả tốt cho người già,Rau quả có lợi cho sức khỏe, Rau, quả nhập khẩu, Rau, quả trong nước, Sản phẩm nổi bật, Trang chủ,


							</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>





                        <div class="box-prod hot-products3 grid-item" data-pro="1016881459">







                            <div class="pdLoopItem animated zoomIn">
                                <div class="itemLoop clearfix">
                                    <div class="ct-box-op">
                                        <div class="pdLoopImg elementFixHeight">
                                            <a href="products/nac-xay-heo-huu-co.html" title="Nạc xay heo (hữu cơ)">
                                                <img alt="Nạc xay heo (hữu cơ)" data-reg="false" class="imgLoopItem" src="/image/upload_9d26f0b946284b9ca18e3709fe6afe1d_compact.jpg" />
                                            </a>
                                            <ul class="link-quickview">
                                                <li><a href="javascript:void(0)" title="Thêm vào giỏ" class="add-to-cart" data-id="1032218081"><i class="fa fa-shopping-basket"></i></a></li>
                                                <li><a href="products/nac-xay-heo-huu-co.html" title="Xem chi tiết"><i class="fa fa-exchange"></i></a></li>
                                                <li><a href="javascript:void(0)" title="Xem nhanh" data-handle="/products/nac-xay-heo-huu-co" class="mask-view btn-quickview-1"><i class="fa fa-eye"></i></a></li>
                                            </ul>


                                        </div>
                                        <div class="pdLoopDetail text-center clearfix">
                                            <h3 class="pdLoopName"><a class="productName" href="products/nac-xay-heo-huu-co.html" title="Nạc xay heo (hữu cơ)">Nạc xay heo (hữu cơ) </a></h3>
                                            <p class="pdPrice">

                                                <span>50,000₫</span>


                                            </p>
                                            <div class="pdLoopListView">
                                                <ul class="notStyle">
                                                    <li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
                                                    <li><strong>Thương hiệu: </strong><span>Khác</span></li>
                                                    <li><strong>Mô tả ngắn: </strong>
                                                        <span class="short-des">

								Nạc xay heo (hữu cơ) với quy trình chăn nuôi và xử lý được giám sát và kiểm tra nghiêm ngặt, đảm bảo vệ sinh an toàn thực phẩm nên người tiêu dùng có thể hoàn toàn yên tâm khi lựa chọn.


							</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>





                        <div class="box-prod hot-products3 grid-item" data-pro="1016881462">







                            <div class="pdLoopItem animated zoomIn">
                                <div class="itemLoop clearfix">
                                    <div class="ct-box-op">
                                        <div class="pdLoopImg elementFixHeight">
                                            <a href="products/ot-sung" title="Ớt sừng">
                                                <img alt="Ớt sừng" data-reg="false" class="imgLoopItem" src="/image/upload_6b86e5ff4c8e45c6ad681be8c99fb72a_compact.jpg" />
                                            </a>
                                            <ul class="link-quickview">
                                                <li><a href="javascript:void(0)" title="Thêm vào giỏ" class="add-to-cart" data-id="1032218085"><i class="fa fa-shopping-basket"></i></a></li>
                                                <li><a href="products/ot-sung" title="Xem chi tiết"><i class="fa fa-exchange"></i></a></li>
                                                <li><a href="javascript:void(0)" title="Xem nhanh" data-handle="/products/ot-sung" class="mask-view btn-quickview-1"><i class="fa fa-eye"></i></a></li>
                                            </ul>


                                        </div>
                                        <div class="pdLoopDetail text-center clearfix">
                                            <h3 class="pdLoopName"><a class="productName" href="products/ot-sung" title="Ớt sừng">Ớt sừng </a></h3>
                                            <p class="pdPrice">

                                                <span>60,000₫</span>


                                            </p>
                                            <div class="pdLoopListView">
                                                <ul class="notStyle">
                                                    <li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
                                                    <li><strong>Thương hiệu: </strong><span>Khác</span></li>
                                                    <li><strong>Mô tả ngắn: </strong>
                                                        <span class="short-des">

								Giá trị dinh dưỡng:   Nho tươi cung cấp các chất dinh dưỡng, làm giảm mệt nhọc ngay lập tức. Các nghiên cứu cho thấy Nho tươi có chứa vitamin A, C, Calcium và sắt...Mã hàng:Thể loại: Rau, quả hữu cơ, Rau quả bán chạy, Rau, quả tốt cho người già,Rau quả có lợi cho sức khỏe, Rau, quả nhập khẩu, Rau, quả trong nước, Sản phẩm nổi bật, Trang chủ,


							</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>





                        <div class="box-prod hot-products3 grid-item" data-pro="1016881463">







                            <div class="pdLoopItem animated zoomIn">
                                <div class="itemLoop clearfix">
                                    <div class="ct-box-op">
                                        <div class="pdLoopImg elementFixHeight">
                                            <a href="products/phuc-bon-tu.html" title="Phúc bồn tử">
                                                <img alt="Phúc bồn tử" data-reg="false" class="imgLoopItem" src="/image/upload_b33de9b2a8cb4368b43c4f1af9862fed_compact.jpg" />
                                            </a>
                                            <ul class="link-quickview">
                                                <li><a href="javascript:void(0)" title="Thêm vào giỏ" class="add-to-cart" data-id="1032218086"><i class="fa fa-shopping-basket"></i></a></li>
                                                <li><a href="products/phuc-bon-tu.html" title="Xem chi tiết"><i class="fa fa-exchange"></i></a></li>
                                                <li><a href="javascript:void(0)" title="Xem nhanh" data-handle="/products/phuc-bon-tu" class="mask-view btn-quickview-1"><i class="fa fa-eye"></i></a></li>
                                            </ul>


                                        </div>
                                        <div class="pdLoopDetail text-center clearfix">
                                            <h3 class="pdLoopName"><a class="productName" href="products/phuc-bon-tu.html" title="Phúc bồn tử">Phúc bồn tử </a></h3>
                                            <p class="pdPrice">

                                                <span>46,000₫</span>


                                            </p>
                                            <div class="pdLoopListView">
                                                <ul class="notStyle">
                                                    <li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
                                                    <li><strong>Thương hiệu: </strong><span>Khác</span></li>
                                                    <li><strong>Mô tả ngắn: </strong>
                                                        <span class="short-des">

								Giá trị dinh dưỡng:   Nho tươi cung cấp các chất dinh dưỡng, làm giảm mệt nhọc ngay lập tức. Các nghiên cứu cho thấy Nho tươi có chứa vitamin A, C, Calcium và sắt...Mã hàng:Thể loại: Rau, quả hữu cơ, Rau quả bán chạy, Rau, quả tốt cho người già,Rau quả có lợi cho sức khỏe, Rau, quả nhập khẩu, Rau, quả trong nước, Sản phẩm nổi bật, Trang chủ,


							</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>





                        <div class="box-prod hot-products3 grid-item" data-pro="1016881473">







                            <div class="pdLoopItem animated zoomIn">
                                <div class="itemLoop clearfix">
                                    <div class="ct-box-op">
                                        <div class="pdLoopImg elementFixHeight">
                                            <a href="products/sua-glico-icreo-so-0-800g-0-9-thang.html" title="Sữa glico icreo số 0 800g (0 - 9 tháng)">
                                                <img alt="Sữa glico icreo số 0 800g (0 - 9 tháng)" data-reg="false" class="imgLoopItem" src="/image/upload_f6d9466d276b43e7beec563e067b7318_compact.jpg" />
                                            </a>
                                            <ul class="link-quickview">
                                                <li><a href="javascript:void(0)" title="Thêm vào giỏ" class="add-to-cart" data-id="1032218100"><i class="fa fa-shopping-basket"></i></a></li>
                                                <li><a href="products/sua-glico-icreo-so-0-800g-0-9-thang.html" title="Xem chi tiết"><i class="fa fa-exchange"></i></a></li>
                                                <li><a href="javascript:void(0)" title="Xem nhanh" data-handle="/products/sua-glico-icreo-so-0-800g-0-9-thang" class="mask-view btn-quickview-1"><i class="fa fa-eye"></i></a></li>
                                            </ul>


                                        </div>
                                        <div class="pdLoopDetail text-center clearfix">
                                            <h3 class="pdLoopName"><a class="productName" href="products/sua-glico-icreo-so-0-800g-0-9-thang.html" title="Sữa glico icreo số 0 800g (0 - 9 tháng)">Sữa glico icreo số 0 800g (0 - 9 tháng) </a></h3>
                                            <p class="pdPrice">

                                                <span>1,500,000₫</span>


                                            </p>
                                            <div class="pdLoopListView">
                                                <ul class="notStyle">
                                                    <li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
                                                    <li><strong>Thương hiệu: </strong><span>Khác</span></li>
                                                    <li><strong>Mô tả ngắn: </strong>
                                                        <span class="short-des">

								Sữa Glico Icreo số 0 từ thương hiệu Glico - Nhật Bản dành cho bé từ sơ sinh đến 9 tháng tuổi là sản phẩm sữa được các mẹ yêu thích và tin dùng bởi sự an toàn và nguồn dinh dưỡng dồi dào giúp cho bé lớn nhanh và khỏe mạnh. Glico Icreo cung cấp đầy đủ các vitamin thiết yếu, bổ sung sắt, canxi, natri,... cùng cơ chế lợi khuẩn tốt cho hệ tiêu hóa để dễ dàng hấp thu được các dưỡng chất đó. Với 5 loại Nucleotide, Glico còn hỗ trợ nâng cao sức đề kháng cho bé. Nó cũng giúp phát...


							</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>





                        <div class="box-prod hot-products3 grid-item" data-pro="1016881474">







                            <div class="pdLoopItem animated zoomIn">
                                <div class="itemLoop clearfix">
                                    <div class="ct-box-op">
                                        <div class="pdLoopImg elementFixHeight">
                                            <a href="products/sua-meiji-so-9-820g-1-3-tuoi" title="Sữa meiji số 9 820g (1 - 3 tuổi)">
                                                <img alt="Sữa meiji số 9 820g (1 - 3 tuổi)" data-reg="false" class="imgLoopItem" src="/image/upload_fb2a2b70d32449deae970477219cd687_compact.jpg" />
                                            </a>
                                            <ul class="link-quickview">
                                                <li><a href="javascript:void(0)" title="Thêm vào giỏ" class="add-to-cart" data-id="1032218103"><i class="fa fa-shopping-basket"></i></a></li>
                                                <li><a href="products/sua-meiji-so-9-820g-1-3-tuoi" title="Xem chi tiết"><i class="fa fa-exchange"></i></a></li>
                                                <li><a href="javascript:void(0)" title="Xem nhanh" data-handle="/products/sua-meiji-so-9-820g-1-3-tuoi" class="mask-view btn-quickview-1"><i class="fa fa-eye"></i></a></li>
                                            </ul>


                                        </div>
                                        <div class="pdLoopDetail text-center clearfix">
                                            <h3 class="pdLoopName"><a class="productName" href="products/sua-meiji-so-9-820g-1-3-tuoi" title="Sữa meiji số 9 820g (1 - 3 tuổi)">Sữa meiji số 9 820g (1 - 3 tuổi) </a></h3>
                                            <p class="pdPrice">

                                                <span>1,200,000₫</span>


                                            </p>
                                            <div class="pdLoopListView">
                                                <ul class="notStyle">
                                                    <li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
                                                    <li><strong>Thương hiệu: </strong><span>Khác</span></li>
                                                    <li><strong>Mô tả ngắn: </strong>
                                                        <span class="short-des">

								Sữa Meiji số 9 820g phù hợp cho trẻ từ 1-3 tuổi, không chỉ chứa các chất dinh dưỡng cơ bản như protein, chất béo, carbohydrat mà còn có các vitamin và khoáng chất rất khó có được từ sữa mẹ, sữa bò và thức ăn dạng rắn. Meiji còn bổ sung cả axit docosahexaenoic (DHA), các nucleotides và đặc biệt là hệ chất xơ GOS hỗ trợ tiêu hóa làm nên đặc tính mát của sữa giúp thúc đẩy sự phát triển toàn diện cả về thể chất lẫn não bộ của trẻ trong suốt giai đoạn thơ ấu. Sản phẩm được dùng bổ sung cùng các...


							</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>





                        <div class="box-prod hot-products3 grid-item" data-pro="1016881475">







                            <div class="pdLoopItem animated zoomIn">
                                <div class="itemLoop clearfix">
                                    <div class="ct-box-op">
                                        <div class="pdLoopImg elementFixHeight">
                                            <a href="products/sua-pediasure-ba-850g-1-10-tuoi.html" title="Sữa Pediasure ba 850g (1 - 10 tuổi)">
                                                <img alt="Sữa Pediasure ba 850g (1 - 10 tuổi)" data-reg="false" class="imgLoopItem" src="/image/upload_eaf63ab35a48414f9329bd930afc468f_compact.jpg" />
                                            </a>
                                            <ul class="link-quickview">
                                                <li><a href="javascript:void(0)" title="Thêm vào giỏ" class="add-to-cart" data-id="1032218105"><i class="fa fa-shopping-basket"></i></a></li>
                                                <li><a href="products/sua-pediasure-ba-850g-1-10-tuoi.html" title="Xem chi tiết"><i class="fa fa-exchange"></i></a></li>
                                                <li><a href="javascript:void(0)" title="Xem nhanh" data-handle="/products/sua-pediasure-ba-850g-1-10-tuoi" class="mask-view btn-quickview-1"><i class="fa fa-eye"></i></a></li>
                                            </ul>


                                        </div>
                                        <div class="pdLoopDetail text-center clearfix">
                                            <h3 class="pdLoopName"><a class="productName" href="products/sua-pediasure-ba-850g-1-10-tuoi.html" title="Sữa Pediasure ba 850g (1 - 10 tuổi)">Sữa Pediasure ba 850g (1 - 10 tuổi) </a></h3>
                                            <p class="pdPrice">

                                                <span>1,000,000₫</span>


                                            </p>
                                            <div class="pdLoopListView">
                                                <ul class="notStyle">
                                                    <li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
                                                    <li><strong>Thương hiệu: </strong><span>Khác</span></li>
                                                    <li><strong>Mô tả ngắn: </strong>
                                                        <span class="short-des">

								Sữa PediaSure BA là sản phẩm dinh dưỡng dùng bổ sung hoặc thay thế hoàn toàn bữa ăn của trẻ 1-10 tuổi, được đặc chế khoa học để cung cấp nguồn dinh dưỡng đầy đủ và cân đối, giúp thay thế và bổ sung kịp thời sự thiếu hụt của bữa ăn, cho trẻ khỏe mạnh và phát triển tốt, không bị suy dinh dưỡng hoặc béo phì, đặc biệt tốt khi dùng thường xuyên và lâu dài cho trẻ. Sữa đặc biệt phù hợp cho các bé biếng ăn, giúp trẻ nhanh chóng bắt kịp và tiếp tục đà tăng trưởng tối ưu...


							</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>





                        <div class="box-prod hot-products3 grid-item" data-pro="1016881476">







                            <div class="pdLoopItem animated zoomIn">
                                <div class="itemLoop clearfix">
                                    <div class="ct-box-op">
                                        <div class="pdLoopImg elementFixHeight">
                                            <a href="products/sua-s-26-gold-so-4-900g-tren-2-tuoi.html" title="Sữa s-26 gold số 4 - 900g (Trên 2 tuổi)">
                                                <img alt="Sữa s-26 gold số 4 - 900g (Trên 2 tuổi)" data-reg="false" class="imgLoopItem" src="/image/upload_389f13e290564117b1d317bb5c392f0d_compact.jpg" />
                                            </a>
                                            <ul class="link-quickview">
                                                <li><a href="javascript:void(0)" title="Thêm vào giỏ" class="add-to-cart" data-id="1032218107"><i class="fa fa-shopping-basket"></i></a></li>
                                                <li><a href="products/sua-s-26-gold-so-4-900g-tren-2-tuoi.html" title="Xem chi tiết"><i class="fa fa-exchange"></i></a></li>
                                                <li><a href="javascript:void(0)" title="Xem nhanh" data-handle="/products/sua-s-26-gold-so-4-900g-tren-2-tuoi" class="mask-view btn-quickview-1"><i class="fa fa-eye"></i></a></li>
                                            </ul>


                                        </div>
                                        <div class="pdLoopDetail text-center clearfix">
                                            <h3 class="pdLoopName"><a class="productName" href="products/sua-s-26-gold-so-4-900g-tren-2-tuoi.html" title="Sữa s-26 gold số 4 - 900g (Trên 2 tuổi)">Sữa s-26 gold số 4 - 900g (Trên 2 tuổi) </a></h3>
                                            <p class="pdPrice">

                                                <span>500,000₫</span>


                                            </p>
                                            <div class="pdLoopListView">
                                                <ul class="notStyle">
                                                    <li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
                                                    <li><strong>Thương hiệu: </strong><span>Khác</span></li>
                                                    <li><strong>Mô tả ngắn: </strong>
                                                        <span class="short-des">

								Sữa S-26 Gold số 4 - 900g là sản phẩm dinh dưỡng công thức dành cho bé từ 2 tuổi trở lên thích hợp bổ sung cùng bữa ăn của bé để bù đắp sự thiếu hụt dưỡng chất và năng lượng trong khẩu phần ăn hàng ngày. Sữa S-26 Gold số 4 cung cấp đến 16 loại vitamin cùng các khoáng chất thiết yếu, trong đó có Omega 3, sắt, vitamin C và Canxi đạt từ 25 đến 50% theo khuyến nghị của RDI hỗ trợ hoàn hảo cho sự phát triển toàn diện của bé cả về thể chất, não bộ lẫn các giác quan,...


							</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>





                        <div class="box-prod hot-products3 grid-item" data-pro="1016881477">







                            <div class="pdLoopItem animated zoomIn">
                                <div class="itemLoop clearfix">
                                    <div class="ct-box-op">
                                        <div class="pdLoopImg elementFixHeight">
                                            <a href="products/sua-similac-iq-intelli-pro-so-4-900g-2-6-tuoi" title="Sữa Similac iq intelli - pro số 4 900g (2 - 6 tuổi)">
                                                <img alt="Sữa Similac iq intelli - pro số 4 900g (2 - 6 tuổi)" data-reg="false" class="imgLoopItem" src="/image/upload_d371d7edad0345268caae1fcd3029e38_compact.jpg" />
                                            </a>
                                            <ul class="link-quickview">
                                                <li><a href="javascript:void(0)" title="Thêm vào giỏ" class="add-to-cart" data-id="1032218109"><i class="fa fa-shopping-basket"></i></a></li>
                                                <li><a href="products/sua-similac-iq-intelli-pro-so-4-900g-2-6-tuoi" title="Xem chi tiết"><i class="fa fa-exchange"></i></a></li>
                                                <li><a href="javascript:void(0)" title="Xem nhanh" data-handle="/products/sua-similac-iq-intelli-pro-so-4-900g-2-6-tuoi" class="mask-view btn-quickview-1"><i class="fa fa-eye"></i></a></li>
                                            </ul>


                                        </div>
                                        <div class="pdLoopDetail text-center clearfix">
                                            <h3 class="pdLoopName"><a class="productName" href="products/sua-similac-iq-intelli-pro-so-4-900g-2-6-tuoi" title="Sữa Similac iq intelli - pro số 4 900g (2 - 6 tuổi)">Sữa Similac iq intelli - pro số 4 900g (2 - 6 tuổi) </a></h3>
                                            <p class="pdPrice">

                                                <span>1,800,000₫</span>


                                            </p>
                                            <div class="pdLoopListView">
                                                <ul class="notStyle">
                                                    <li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
                                                    <li><strong>Thương hiệu: </strong><span>Khác</span></li>
                                                    <li><strong>Mô tả ngắn: </strong>
                                                        <span class="short-des">

								Sữa Similac IQ Intelli - Pro số 4 900g là thực phẩm đặc chế dùng thay thế bữa ăn phụ, bổ sung chế độ dinh dưỡng hàng ngày cho trẻ 2 - 6 tuổi. Sữa bột chứa các hệ dưỡng chất IQ-Plus và Intell-Pro hỗ trợ sự phát triển não bộ và thị giác, đồng thời Immunity giúp tăng cường sức đề kháng cùng các dưỡng chất thiết yếu khác giúp bé tăng trưởng tốt. Hương vani truyền thống thơm ngậy, hấp dẫn bé mang đến những bữa ăn ngon miệng và thích thus cho trẻ.


							</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>













































































































































                    </div>
                </div>
            </div>
        </div>


        <!-- our-product -->



        <div class="shipping-h1">
            <div class="container">
                <div class="content-shipping wow flipInX">
                    <div class="item-shipping">
                        <img src="/image/icon-h1-17d0b.png?v=140" alt="">
                        <span>Giao hàng </span>
                        <p>Free cho đơn hàng trên 200k </p>
                    </div>
                    <div class="item-shipping">
                        <img src="/image/icon-h1-27d0b.png?v=140" alt="">
                        <span>Hoàn trả</span>
                        <p>Cho tất cả sản phẩm ko chính hãng </p>
                    </div>
                    <div class="item-shipping">
                        <img src="/image/icon-h1-37d0b.png?v=140" alt="">
                        <span>Hỗ trợ 24/7</span>
                        <p>Tận tình, chu đáo </p>
                    </div>
                    <div class="item-shipping">
                        <img src="/image/icon-h1-47d0b.png?v=140" alt="">
                        <span>Thanh toán </span>
                        <p>100% Thanh toán an toàn </p>
                    </div>
                </div>
            </div>
        </div>


        <!-- shipping-h1 -->

        <div class="deals-of">
            <div class="same-title">
                <i>Deal</i>
                <h2>Sản phẩm giảm giá</h2>
            </div>
            <div class="container">
                <div class="content-deals-of">
                    <div class="slide-deals-of">
                        <div class="item elementFixHeight ct-box-op fix_bd">
                            <div class="box-do">
                                <div class="box-img">
                                    <img class="imgLoopItem" src="/image/upload_f1ab16ccc4e6489193361fe7c04af50c_compact.jpg" alt="">
                                </div>
                                <div class="content-box-do">
                                    <h3>Cranberry</h3>
                                    <p></p>
                                    <b>150,000₫</b>

                                    <ul class="link-icon">
                                        <li><a href="javascript:void(0)" class="add-to-cart" data-id="1032218092"><i class="fa fa-shopping-basket"></i></a></li>
                                        <li><a href="products/san-pham-6.html"><i class="fa fa-exchange"></i></a></li>
                                        <li><a class="mask-view btn-quickview-1"  data-handle="/products/san-pham-6"  href="#"><i class="fa fa-eye"></i></a></li>

                                    </ul>
                                </div>
                            </div>
                            <!-- box-do -->
                        </div>
                        <div class="item elementFixHeight ct-box-op fix_bd">
                            <div class="box-do">
                                <div class="box-img">
                                    <img class="imgLoopItem" src="/image/upload_f1657dbe94444faba6930f58ace06cea_compact.jpg" alt="">
                                </div>
                                <div class="content-box-do">
                                    <h3>Đào tiên Úc</h3>
                                    <p></p>
                                    <b>15,000,000₫</b>

                                    <ul class="link-icon">
                                        <li><a href="javascript:void(0)" class="add-to-cart" data-id="1032218093"><i class="fa fa-shopping-basket"></i></a></li>
                                        <li><a href="products/san-pham-7.html"><i class="fa fa-exchange"></i></a></li>
                                        <li><a class="mask-view btn-quickview-1"  data-handle="/products/san-pham-7"  href="#"><i class="fa fa-eye"></i></a></li>

                                    </ul>
                                </div>
                            </div>
                            <!-- box-do -->
                        </div>
                        <div class="item elementFixHeight ct-box-op fix_bd">
                            <div class="box-do">
                                <div class="box-img">
                                    <img class="imgLoopItem" src="/image/upload_02a60bf9367949d38cd6ff8c80b77eb8_compact.jpg" alt="">
                                </div>
                                <div class="content-box-do">
                                    <h3>Khoai môn</h3>
                                    <p></p>
                                    <b>23,000₫</b>

                                    <ul class="link-icon">
                                        <li><a href="javascript:void(0)" class="add-to-cart" data-id="1032218080"><i class="fa fa-shopping-basket"></i></a></li>
                                        <li><a href="products/khoai-mon"><i class="fa fa-exchange"></i></a></li>
                                        <li><a class="mask-view btn-quickview-1"  data-handle="/products/khoai-mon"  href="#"><i class="fa fa-eye"></i></a></li>

                                    </ul>
                                </div>
                            </div>
                            <!-- box-do -->
                        </div>



                        <div class="item elementFixHeight ct-box-op fix_bd">
                            <div class="box-do">
                                <div class="box-img">
                                    <img class="imgLoopItem" src="/image/upload_f9bb326578de4576b90b277641b6fe25_compact.jpg" alt="">
                                </div>
                                <div class="content-box-do">
                                    <h3>Ớt chuông vàng</h3>
                                    <p></p>
                                    <b>70,000₫</b>

                                    <ul class="link-icon">
                                        <li><a href="javascript:void(0)" class="add-to-cart" data-id="1032218084"><i class="fa fa-shopping-basket"></i></a></li>
                                        <li><a href="products/ot-chuong-vang.html"><i class="fa fa-exchange"></i></a></li>
                                        <li><a class="mask-view btn-quickview-1"  data-handle="/products/ot-chuong-vang"  href="#"><i class="fa fa-eye"></i></a></li>

                                    </ul>
                                </div>
                            </div>
                            <!-- box-do -->
                        </div>



                        <div class="item elementFixHeight ct-box-op fix_bd">
                            <div class="box-do">
                                <div class="box-img">
                                    <img class="imgLoopItem" src="/image/upload_6b86e5ff4c8e45c6ad681be8c99fb72a_compact.jpg" alt="">
                                </div>
                                <div class="content-box-do">
                                    <h3>Ớt sừng</h3>
                                    <p></p>
                                    <b>60,000₫</b>

                                    <ul class="link-icon">
                                        <li><a href="javascript:void(0)" class="add-to-cart" data-id="1032218085"><i class="fa fa-shopping-basket"></i></a></li>
                                        <li><a href="products/ot-sung"><i class="fa fa-exchange"></i></a></li>
                                        <li><a class="mask-view btn-quickview-1"  data-handle="/products/ot-sung"  href="#"><i class="fa fa-eye"></i></a></li>

                                    </ul>
                                </div>
                            </div>
                            <!-- box-do -->
                        </div>



                        <div class="item elementFixHeight ct-box-op fix_bd">
                            <div class="box-do">
                                <div class="box-img">
                                    <img class="imgLoopItem" src="/image/upload_1d48c719c6ac4a6d8c179f8bc5b78fcf_compact.jpg" alt="">
                                </div>
                                <div class="content-box-do">
                                    <h3>Su su non</h3>
                                    <p></p>
                                    <b>35,000₫</b>

                                    <ul class="link-icon">
                                        <li><a href="javascript:void(0)" class="add-to-cart" data-id="1032218099"><i class="fa fa-shopping-basket"></i></a></li>
                                        <li><a href="products/su-su-non.html"><i class="fa fa-exchange"></i></a></li>
                                        <li><a class="mask-view btn-quickview-1"  data-handle="/products/su-su-non"  href="#"><i class="fa fa-eye"></i></a></li>

                                    </ul>
                                </div>
                            </div>
                            <!-- box-do -->
                        </div>



                        <div class="item elementFixHeight ct-box-op fix_bd">
                            <div class="box-do">
                                <div class="box-img">
                                    <img class="imgLoopItem" src="/image/upload_fb2a2b70d32449deae970477219cd687_compact.jpg" alt="">
                                </div>
                                <div class="content-box-do">
                                    <h3>Sữa meiji số 9 820g (1 - 3 tuổi)</h3>
                                    <p></p>
                                    <b>1,200,000₫</b>

                                    <ul class="link-icon">
                                        <li><a href="javascript:void(0)" class="add-to-cart" data-id="1032218103"><i class="fa fa-shopping-basket"></i></a></li>
                                        <li><a href="products/sua-meiji-so-9-820g-1-3-tuoi"><i class="fa fa-exchange"></i></a></li>
                                        <li><a class="mask-view btn-quickview-1"  data-handle="/products/sua-meiji-so-9-820g-1-3-tuoi"  href="#"><i class="fa fa-eye"></i></a></li>

                                    </ul>
                                </div>
                            </div>
                            <!-- box-do -->
                        </div>



                        <div class="item elementFixHeight ct-box-op fix_bd">
                            <div class="box-do">
                                <div class="box-img">
                                    <img class="imgLoopItem" src="/image/upload_eaf63ab35a48414f9329bd930afc468f_compact.jpg" alt="">
                                </div>
                                <div class="content-box-do">
                                    <h3>Sữa Pediasure ba 850g (1 - 10 tuổi)</h3>
                                    <p></p>
                                    <b>1,000,000₫</b>

                                    <ul class="link-icon">
                                        <li><a href="javascript:void(0)" class="add-to-cart" data-id="1032218105"><i class="fa fa-shopping-basket"></i></a></li>
                                        <li><a href="products/sua-pediasure-ba-850g-1-10-tuoi.html"><i class="fa fa-exchange"></i></a></li>
                                        <li><a class="mask-view btn-quickview-1"  data-handle="/products/sua-pediasure-ba-850g-1-10-tuoi"  href="#"><i class="fa fa-eye"></i></a></li>

                                    </ul>
                                </div>
                            </div>
                            <!-- box-do -->
                        </div>



                        <div class="item elementFixHeight ct-box-op fix_bd">
                            <div class="box-do">
                                <div class="box-img">
                                    <img class="imgLoopItem" src="/image/upload_ed386c6e7c5f439fac42d7404cb18e28_compact.jpg" alt="">
                                </div>
                                <div class="content-box-do">
                                    <h3>Sườn non</h3>
                                    <p></p>
                                    <b>1,000,000₫</b>

                                    <ul class="link-icon">
                                        <li><a href="javascript:void(0)" class="add-to-cart" data-id="1032218111"><i class="fa fa-shopping-basket"></i></a></li>
                                        <li><a href="products/suon-non"><i class="fa fa-exchange"></i></a></li>
                                        <li><a class="mask-view btn-quickview-1"  data-handle="/products/suon-non"  href="#"><i class="fa fa-eye"></i></a></li>

                                    </ul>
                                </div>
                            </div>
                            <!-- box-do -->
                        </div>



                        <div class="item elementFixHeight ct-box-op fix_bd">
                            <div class="box-do">
                                <div class="box-img">
                                    <img class="imgLoopItem" src="/image/upload_83f770ac573043798bf11123d707c2c0_compact.jpg" alt="">
                                </div>
                                <div class="content-box-do">
                                    <h3>Xoài đỏ mỹ</h3>
                                    <p></p>
                                    <b>120,000₫</b>

                                    <ul class="link-icon">
                                        <li><a href="javascript:void(0)" class="add-to-cart" data-id="1032218098"><i class="fa fa-shopping-basket"></i></a></li>
                                        <li><a href="products/san-pham-8.html"><i class="fa fa-exchange"></i></a></li>
                                        <li><a class="mask-view btn-quickview-1"  data-handle="/products/san-pham-8"  href="#"><i class="fa fa-eye"></i></a></li>

                                    </ul>
                                </div>
                            </div>
                            <!-- box-do -->
                        </div>

                    </div>
                </div>
                <!-- content-deals-of -->
            </div>
        </div>


        <!-- end footer -->


    </main>
@endsection
@section('contentJS')
    <!-- wrapper -->
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
    </script>
@endsection