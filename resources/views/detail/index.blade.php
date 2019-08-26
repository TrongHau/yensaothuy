<?php
use App\Library\Helpers;
use Jenssegers\Agent\Agent;
$img_f = Helpers::get_bp_image($prod->image, 'tmp');
$imgs_prod = [$img_f];
if($prod->gallery_image) {
    foreach (json_decode($prod->gallery_image) as $item) {
        $imgs_prod[] = Helpers::get_bp_image($item, 'tmp');
    }
}
$titleMeta = $prod->title. ' - Yến Sào Thủy';
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
    <meta name="title" content="{{$prod->title}} - Yến Sào Thủy" />
    <meta property="og:image" content="{{env('APP_URL') . THUMBNAIL_DEFAULT_META}}" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:title" content="{{$prod->title}} - Yến Sào Thủy" />
    <meta name="description" content="Yến Sào Thủy, Yến Nhà, Yến Đảo, Yến hũ chưng thủ công, Yến Nguyên Tổ Sơ Chế, Yến Tinh Chế, Yến Trắng Nguyên Tổ  Sơ Chế Còn Lông, Huyết Yến Nguyên Tổ Sơ Chế Còn Lông,Yến Vụn, Yến Sợi Tinh Chế Loại 1, Yến Sợi Tinh Chế Đặc Biệt, Yến Sợi Tinh Chế Cao Cấp
Yến Trắng Rút Lông, Yến Chân Rút Lông, Yến Hồng Huyết Tinh Chế, Yến Hồng Vàng Tinh Chế, Yến Hồng Rút Lông, Yến Hồng Rút Lông, Yến Chân Hồng Huyết, Yến Đảo Nguyên Tổ Sơ Chế Còn Lông, Yến Đảo Tinh Chế, Yến hũ Chưng Sẵn Sợi Vụn, Yến hũ Chưng Sẵn Sợi Tinh Chế, Yến hũ Chưng Sẵn Chân Tổ, Yến hũ Chưng Sẵn Sợi Hồng Huyết" />
    <meta property="og:type" content="website" />
    <meta property="og:updated_time" content="{{time()}}" />
@endsection
@extends('layouts.app')
@section('content')
    <main id="main" class="main">
        <section id="stProductPage" class="tamplateSection">
            <div class="stBreadcrumb ">
                <div class="banner-breadcrumb">
                    <h2>{{$prod->title}}</h2>
                    <ul>
                        <li><a href="/" target="_self">Trang chủ</a></li>

                        <li><a href="/danh-muc/{{$category->slug}}.html" target="_self">{{$category->name}}</a></li>

                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="row pro-content">
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <div class="slider-image">
                            <div id="slider" class="flexslider">
                                <ul class="slides">
                                    <li>
								<span>
									<img class="product-image-feature" src="{{$img_f}}" alt="">
								</span>
                                    </li>
                                </ul>
                            </div>
                            <div id="carousel" class="flexslider">

                                <div class="flex-viewport" style="overflow: hidden; position: relative;">
                                    <ul class="slides" style="width: 800%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                        @foreach($imgs_prod as $key => $item)
                                        <li class="product-thumb {{$key == 0 ? 'checked' : ''}}" style="width: 75px; margin-right: 10px; float: left; display: block;">
                                            <a href="#" data-image="{{$item}}" data-zoom-image="{{$item}}">
                                                <img src="{{$item}}" data-image="{{$item}}" alt="" draggable="false">
                                            </a>
                                        </li>
                                        @endforeach

                                    </ul></div><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev flex-disabled" href="#" tabindex="-1">Previous</a></li><li class="flex-nav-next"><a class="flex-next flex-disabled" href="#" tabindex="-1">Next</a></li></ul></div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="description-product">
                            <div class="info-desc">
                                <h2>{{$prod->title}}</h2>

                                <div class="price pdPrice">

                                    <span id="pro-price"><span>{{number_format($prod->price)}}₫</span></span>


                                </div>
                                <div class="shortDesc">

                                  <?php echo $prod->short_content ?>

                                </div>
                            </div>
                            <div class="qty-cart">
                                <div class="link-detail">
                                    <a href="javascript:void(0)" class="btn-addcart-modal">Liên hệ đặt hàng: {{env("PHONE")}}</a>
                                </div>
                            </div>
                            <div class="list-pd-dt">
                                <div class="sku-p">
                                    <b>Mã sản phẩm</b>
                                    <p>YEN-{{$prod->id}}</p>
                                </div>

                                @if($prod->supplier)
                                    <div class="sku-p">
                                        <b>Thương hiệu</b>
                                        <p>{{$prod->supplier}}</p>
                                    </div>
                                @endif
                                <div class="share-p">
                                    <b>Chia sẻ</b>
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
                </div>
                <!-- detail-product -->

                <div class="tab-product-detail">
                    <ul class="tab-style" role="tablist">
                        <li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab" aria-expanded="true">Mô tả sản phẩm</a></li>
                        <li role="presentation" class=""><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab" aria-expanded="false">Bình luận</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="tab1">
                            <div class="desc-tab"><br/>
                                <?php echo $prod->content ?>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="tab3">
                            <div id="binhluan">
                                <div class="fb-comments" data-href="{{url()->current()}}" data-width="100%" data-numposts="10"></div>
                                <script>
                                    window.fbAsyncInit = function() {
                                        FB.init({
                                            appId            : '<?php echo env('FACEBOOK_APP_ID') ?>',
                                            autoLogAppEvents : true,
                                            xfbml            : true,
                                            version          : 'v3.1'
                                        });
                                    };
                                    (function(d, s, id){
                                        var js, fjs = d.getElementsByTagName(s)[0];
                                        if (d.getElementById(id)) {return;}
                                        js = d.createElement(s); js.id = id;
                                        js.src = "https://connect.facebook.net/en_US/sdk.js";
                                        fjs.parentNode.insertBefore(js, fjs);
                                    }(document, 'script', 'facebook-jssdk'));
                                </script>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- tab-product-detail -->

                <div class="pdBlockDetail pdRelatedInfo">
                    <div class="relatedPD">
                        <div class="pdRelated">
                            <div class="blockTitle">
                                <div class="same-title">
                                    <h2>Sản phẩm liên quan</h2>
                                </div>
                            </div>
                            <div class="relatedListting">
                                <div class="contentRelatedPd row ">
                                    <?php echo $dataList ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <script>
            $(document).ready(function(){
                $('#carousel').flexslider({
                    animation: "slide",
                    controlNav: false,
                    animationLoop: false,
                    slideshow: false,
                    itemWidth: 75,
                    itemMargin: 10,
                });
                $(".product-thumb a").click(function(e){
                    e.preventDefault();
                    $(".product-thumb").removeClass('checked');
                    $(this).parent().addClass('checked');
                    $(".product-image-feature").attr("src",$(this).attr("data-image"));
                });
                if($(window).width() > 260){
                    jQuery(".product-image-feature").elevateZoom({
                        gallery:'carousel',
                        scrollZoom : true
                    });
                }
            });

        </script>

        <style>
            label[for] {
                cursor: pointer;
            }
            .soldout{
                display:none !important;
            }
        </style>

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
                    modal.find('.p-price').html(formatNumber(product.data.price) + 'đ');
                    modal.find('.m-sku').html('<span>Mã sản phẩm: </span>YEN-'+ product.data.id);


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

