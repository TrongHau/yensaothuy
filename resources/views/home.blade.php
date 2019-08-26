<?php
use App\Library\Helpers;
use Jenssegers\Agent\Agent;
?>

@section('meta')
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
            @include('cache.home_slider_show_1')
        </div>



        <!-- slide-main-h1 -->

        <div id="thumb-banner-h1" class="thumb-banner-h1">
            @include('cache.home_slider_show_2')
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
                            <p>Với điều kiện địa lý biển đảo phù hợp cho chim Yến, những Tổ Yến vùng Nha Trang-Khánh Hoà chứa thành phần dinh dưỡng hoàn toàn tự nhiên, và không sử dụng chất bảo quản hoặc phụ gia trong quá trình chế biến.</p>
                        </div>






                        <div class="item-os">
                            <img src="/image/icon-bp-27d0b.jpg?v=140" alt="Công thức nấu ăn lành mạnh">
                            <h4>Sở Y Tế Khánh Hoà cấp chứng nhận</h4>
                            <p>Quy trình sản xuất Tổ Yến đủ tiêu chuẩn chất lượng vệ sinh an toàn thực phẩm của Sở Y Tế Khánh Hoà.</p>
                        </div>






                        <div class="item-os">
                            <img src="/image/icon-bp-37d0b.jpg?v=140" alt="Chế độ ăn uống lành mạnh">
                            <h4>Sản phẩm đa dạng</h4>
                            <p>Đáp ứng nhiều cho nhiều đối tượng và mục đích khác nhau mà chúng tôi tạo ra 12 dòng sản phẩm Yến Sào với nhiều đặc điểm riêng nổi bật của mỗi loại.</p>
                        </div>


                    </div>
                    <div class="col-right">






                        <div class="item-os">
                            <img src="/image/icon-bp-47d0b.jpg?v=140" alt="Luôn tươi">
                            <h4>Quy trình chế biến đặc biệt</h4>
                            <p>Chúng tôi đã tạo ra một phương pháp chế biến đặc biệt mà không cơ sở sản xuất nào khác làm được, nhằm giữ được nguyên vẹn giá trị dinh dưỡng trong Tổ Yến.</p>
                        </div>






                        <div class="item-os">
                            <img src="/image/icon-bp-57d0b.jpg?v=140" alt="Thực hiện bài tập">
                            <h4>Chính sách bảo đảm chất lượng</h4>
                            <p>Cam kết sản phẩm Yến Sào quý khách hàng nhận được sẽ nguyên vẹn và hoàn toàn nguyên chất, không pha trộn.</p>
                        </div>






                        <div class="item-os">
                            <img src="/image/icon-bp-67d0b.jpg?v=140" alt="Giữ sức khỏe">
                            <h4>Làm nghề với cái Tâm</h4>
                            <p>Mỗi Tổ Yến chúng tôi đều nâng niu và đặt cả trái tim vào sản phẩm để gửi gắm đến tất cả gia đình người Việt Nam như một món quà sức khoẻ vô giá.</p>
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
            @include('cache.home_slider_show_3')

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
                        @include('cache.home_product_promotion')

                        @include('cache.home_product_hot')

                        @include('cache.home_product_featured')


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

        <div id="latest-news" class="latest-news">
            <div class="same-title">
                <i>Có gì mới</i>
                <h2>Bài viết mới</h2>
            </div>
            <div class="container">
                @include('cache.home_news')
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
                                    <div class="form-input" style="width: 100%">
                                        <button type="button" class="btn-addcart-modal">Liên hệ đặt hàng: {{env("PHONE")}}</button>
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
                url: '/chi-tiet-san-pham',
                async: false,
                method: "POST",
                dataType: "Json",
                data: {id: purl},
                success: function (product) {
                    if(!product.success) {
                        alert(product.message);
                        return false;
                    }
                    modal.find('.p-title').html('<h1>' + product.data.title + '</h1>');
                    if(product.data.supplier) {
                        modal.find('.m-vendor').removeClass('hidden');
                        modal.find('.m-vendor').html('<span>Nhà cung cấp: </span>'+ product.data.supplier);
                    }else{
                        modal.find('.m-vendor').addClass('hidden');
                    }
                    modal.find('.p-price').html(formatNumber(product.data.promotion == 1 ? product.data.price_promotion : product.data.price) + 'đ');
                    modal.find('.m-sku').html('<span>Mã sản phẩm: </span>Yen-'+ product.data.id);


                    var productdes = product.data.short_content;
                    if(productdes != '' && productdes != null){
                        var re_productdes = productdes.replace(/(<([^>]+)>)/ig,"")
                        var des = re_productdes.split("&nbsp;").splice(0, 50).join(" ") + "...";
                        modal.find('.form-des').html(des);
                        modal.find('.form-des').show();
                    }else{
                        modal.find('.form-des').html('Chưa có mô tả cho sản phẩm này!');
                    }
                    $('.image-zoom').html(p_zoom);
                    modal.find('.p-url').attr('href', '/san-pham/' + product.data.slug + '.html');
                    var img_slider = [];
                    if(product.data.gallery_image){
                        img_slider = JSON.parse(product.data.gallery_image);
                        img_slider.unshift(product.data.image);
                    }else{
                        img_slider.push(product.data.image);
                    }
                    $('#p-sliderproduct').remove();
                    $('.image-zoom').append("<div id='p-sliderproduct' class='owl_pages '>");
                    $('#p-sliderproduct').append("<ul class='slides owlDesign notStyle'>");
                    $('#p-sliderproduct .slides').hide();
                    $.each(img_slider, function (i, v) {
                        var img_item = get_bp_image(v, 'tmb');
                        elem = $('<li class="product-thumb">').append('<a href="#" data-image="" data-zoom-image=""><img /></a>');
                        elem.find('a').attr('data-image', img_item);
                        elem.find('a').attr('data-zoom-image', img_item);
                        elem.find('img').attr('data-image', img_item);
                        elem.find('img').attr('data-zoom-image',img_item);
                        elem.find('img').attr('src', img_item);
                        modal.find('.slides').append(elem);
                    });

                    modal.find('.p-product-image-feature').attr('src', get_bp_image(product.data.image, 'tmb'));
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