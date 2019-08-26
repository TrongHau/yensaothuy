<?php
use App\Library\Helpers;
use Jenssegers\Agent\Agent;
$titleMeta = 'Kết quả tìm kiếm "'.$key.'" - Yến Sào Thủy';
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
    <meta name="title" content='Kết quả tìm kiếm "{{$key}}" - Yến Sào Thủy' />
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

        <section id="stCollection">



            <div class="stBreadcrumb ">
                <div class="banner-breadcrumb">
                    <h2>Kết quả tìm kiếm "{{$key}}" - Yến Sào Thủy</h2>
                </div>
            </div>
            <div class="container">
                <div class="container">

                    <div class="searchResults">
                        <div class="searchHead">
                            <p>
                                Tìm thấy <span>{{number_format($total)}} kết quả với từ khóa <i>"t"</i>...</span>
                            </p>
                        </div>
                        <div id="pd_collection" style="display: block;">

                            <?php echo $dataList ?>

                        </div>

                    </div>

                </div>
            </div>
        </section>
        <input type="text" class="hidden" id="coll-handle" value="(collectionid:product>0)">
        <div class="overlayFilter filter view_list"></div>
    </main>
    <style>
        .itemProduct {
            list-style-type: none;
        }
    </style>
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
                    modal.find('.p-url').attr('href', '/' + product.data.slug + '-p-' + product.data.id + '.html');
                    var img_slider = ['/' + product.data.image];
                    if (product.data.gallery_image_1)
                        img_slider.push('/' + product.data.gallery_image_1);
                    if (product.data.gallery_image_2)
                        img_slider.push('/' + product.data.gallery_image_2);
                    if (product.data.gallery_image_3)
                        img_slider.push('/' + product.data.gallery_image_3);
                    if (product.data.gallery_image_4)
                        img_slider.push('/' + product.data.gallery_image_4);
                    if (product.data.gallery_image_5)
                        img_slider.push('/' + product.data.gallery_image_5);
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
        // $(document).on('click','.check-box-list li > input',function(){
        //     jQuery(this).parent().toggleClass('active');
        //     var _url = stFilter.ajaxGetFilterQuery() + '&view=filter&page=1';
        //     stFilter.ajaxRenderHTML(_url);
        // })
    </script>
    <script>
        $('#pd_collection').find('.pagination li a').on('click', function (e) {
            e.preventDefault();
            getList($(this).attr('href'));
        });
        $('#custom-dropdown__select').on('change', function() {
            getList(window.location.href);
        });
        $('.price_filter').change(function () {
            getList(window.location.href);
        })
        function getList(url) {
            $.ajax({
                url: url,
                type: "POST",
                dataType: "html",
                data: {
                    key: "<?php echo $key ?>",
                },
                beforeSend: function () {
                    if(loaded) return false;
                    loaded = true;
                },
                success: function(response) {
                    $('#pd_collection').html(response);
                    if(sessionStorage.page_view.indexOf('view_grid') != -1 ){
                        $('.filter').removeClass('view_list').addClass('view_grid');
                    }else{
                        $('.filter').removeClass('view_grid').addClass('view_list');
                    }
                    setTimeout(function(){
                        $('#pd_collection').fadeIn(300);
                    },500)
                    $('#pd_collection').find('.pagination li a').on('click', function (e) {
                        e.preventDefault();
                        getList($(this).attr('href'));
                    });
                }
            });
        }
    </script>
@endsection
@section('contentJS_End')
    <script src='/js/collection7d0b.js?v=140' type='text/javascript'></script>
@endsection
