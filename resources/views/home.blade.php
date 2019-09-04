<?php
use App\Library\Helpers;
use Jenssegers\Agent\Agent;
$titleMeta = 'Yến Sào Thủy';
?>

@section('meta')
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta name="author" content="Yen sao thuy">
    <meta name="copyright" content="{{env('APP_NAME')}}" />
    <meta name="revisit-after" content="7 Days">
    <meta name="keywords" content="Yến Sào Thủy, Yến Nhà, Yến Đảo, Yến hũ chưng thủ công, Yến Nguyên Tổ Sơ Chế, Yến Tinh Chế, Yến Trắng Nguyên Tổ  Sơ Chế Còn Lông, Huyết Yến Nguyên Tổ Sơ Chế Còn Lông,Yến Vụn, Yến Sợi Tinh Chế Loại 1, Yến Sợi Tinh Chế Đặc Biệt, Yến Sợi Tinh Chế Cao Cấp
Yến Trắng Rút Lông, Yến Chân Rút Lông, Yến Hồng Huyết Tinh Chế, Yến Hồng Vàng Tinh Chế, Yến Hồng Rút Lông, Yến Hồng Rút Lông, Yến Chân Hồng Huyết, Yến Đảo Nguyên Tổ Sơ Chế Còn Lông, Yến Đảo Tinh Chế, Yến hũ Chưng Sẵn Sợi Vụn, Yến hũ Chưng Sẵn Sợi Tinh Chế, Yến hũ Chưng Sẵn Chân Tổ, Yến hũ Chưng Sẵn Sợi Hồng Huyết">
    <link rel="canonical" href="{{url()->current()}}" />
    <link rel="image_src" href="{{env('APP_URL') . THUMBNAIL_DEFAULT_META}}" />
    <meta name="title" content="Tin Tức - Yến Sào Thủy" />
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

                                        <img class="p-product-image-feature" >
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