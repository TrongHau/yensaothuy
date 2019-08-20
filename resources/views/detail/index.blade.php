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







        <section id="stProductPage" class="tamplateSection">



            <div class="stBreadcrumb ">
                <div class="banner-breadcrumb">
                    <h2>Sườn non</h2>
                    <ul>
                        <li><a href="/" target="_self">Trang chủ</a></li>


                        <!--li><a href="/collections" target="_self">Danh mục</a></li-->





                        <li><a href="/collections/onsale" target="_self">Sản phẩm khuyến mãi</a></li>



                        <li class="active"><span> Sườn non</span></li>


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
									<img class="product-image-feature" src="//product.hstatic.net/1000314614/product/upload_ed386c6e7c5f439fac42d7404cb18e28_master.jpg" alt="">
								</span>
                                    </li>
                                </ul>
                            </div>
                            <div id="carousel" class="flexslider">

                                <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 800%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">


                                        <li class="product-thumb checked" style="width: 75px; margin-right: 10px; float: left; display: block;">
                                            <a href="#" data-image="//product.hstatic.net/1000314614/product/upload_ed386c6e7c5f439fac42d7404cb18e28_master.jpg" data-zoom-image="//product.hstatic.net/1000314614/product/upload_ed386c6e7c5f439fac42d7404cb18e28_master.jpg">
                                                <img src="//product.hstatic.net/1000314614/product/upload_ed386c6e7c5f439fac42d7404cb18e28_compact.jpg" data-image="//product.hstatic.net/1000314614/product/upload_ed386c6e7c5f439fac42d7404cb18e28_master.jpg" alt="" draggable="false">
                                            </a>
                                        </li>

                                        <li class="product-thumb " style="width: 75px; margin-right: 10px; float: left; display: block;">
                                            <a href="#" data-image="//product.hstatic.net/1000314614/product/upload_e5a3415c72d84630a62842108f3c45b6_master.jpg" data-zoom-image="//product.hstatic.net/1000314614/product/upload_e5a3415c72d84630a62842108f3c45b6_master.jpg">
                                                <img src="//product.hstatic.net/1000314614/product/upload_e5a3415c72d84630a62842108f3c45b6_compact.jpg" data-image="//product.hstatic.net/1000314614/product/upload_e5a3415c72d84630a62842108f3c45b6_master.jpg" alt="" draggable="false">
                                            </a>
                                        </li>

                                        <li class="product-thumb " style="width: 75px; margin-right: 10px; float: left; display: block;">
                                            <a href="#" data-image="//product.hstatic.net/1000314614/product/upload_043d5b18cba645e193b545540af47ed4_master.jpg" data-zoom-image="//product.hstatic.net/1000314614/product/upload_043d5b18cba645e193b545540af47ed4_master.jpg">
                                                <img src="//product.hstatic.net/1000314614/product/upload_043d5b18cba645e193b545540af47ed4_compact.jpg" data-image="//product.hstatic.net/1000314614/product/upload_043d5b18cba645e193b545540af47ed4_master.jpg" alt="" draggable="false">
                                            </a>
                                        </li>

                                        <li class="product-thumb " style="width: 75px; margin-right: 10px; float: left; display: block;">
                                            <a href="#" data-image="//product.hstatic.net/1000314614/product/upload_d1885b3b17ab44e8bb776ead4ededd84_master.jpg" data-zoom-image="//product.hstatic.net/1000314614/product/upload_d1885b3b17ab44e8bb776ead4ededd84_master.jpg">
                                                <img src="//product.hstatic.net/1000314614/product/upload_d1885b3b17ab44e8bb776ead4ededd84_compact.jpg" data-image="//product.hstatic.net/1000314614/product/upload_d1885b3b17ab44e8bb776ead4ededd84_master.jpg" alt="" draggable="false">
                                            </a>
                                        </li>


                                    </ul></div><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev flex-disabled" href="#" tabindex="-1">Previous</a></li><li class="flex-nav-next"><a class="flex-next flex-disabled" href="#" tabindex="-1">Next</a></li></ul></div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="description-product">
                            <div class="info-desc">
                                <h2>Sườn non</h2>

                                <div class="price pdPrice">

                                    <span id="pro-price"><span>1,000,000₫</span></span>


                                </div>

                                <div class="cate">Trạng thái : <a id="price-preview" href="javascript:void(0)">

                                        Còn hàng

                                    </a></div>
                                <div class="shortDesc">

                                    <p>
                                        Sườn non heo (hữu cơ)&nbsp;đảm bảo chất lượng và vệ sinh an toàn thực phẩm.Phù hợp chế biến các món kho, chiên, rim, nấu canh,... thơm ngon và giàu dinh dưỡng cho cả gia đình.</p>

                                </div>
                            </div>
                            <div class="qty-cart">
                                <form id="form-pro" action="#" method="get" class="qty-number-cart">
                                    <input type="button" value="-" class="qtyminus" field="quantity">
                                    <input type="text" name="quantity" value="1" class="qty">
                                    <input type="button" value="+" class="qtyplus" field="quantity">

                                    <div class="select-swatch" style="display:table;clear:both">

















                                        <div id="variant-swatch-0" class="swatch clearfix" data-option="option1" data-option-index="0">
                                            <div class="header-s">Tiêu đề</div>
                                            <div class="select-swap">







                                                <div data-value="1000g" class="n-sd swatch-element 1000g ">
                                                    <input class="variant-0" id="swatch-0-1000g" type="radio" name="option1" value="1000g" checked="">

                                                    <label for="swatch-0-1000g" class="sd">
                                                        1000g
                                                        <img class="crossed-out" src="//theme.hstatic.net/1000314614/1000404249/14/sold.png?v=140">

                                                        <img class="img-check" src="//theme.hstatic.net/1000314614/1000404249/14/select-pro.png?v=140">
                                                    </label>

                                                </div>







                                                <div data-value="2000g" class="n-sd swatch-element 2000g ">
                                                    <input class="variant-0" id="swatch-0-2000g" type="radio" name="option1" value="2000g">

                                                    <label for="swatch-0-2000g">
                                                        2000g
                                                        <img class="crossed-out" src="//theme.hstatic.net/1000314614/1000404249/14/sold.png?v=140">

                                                        <img class="img-check" src="//theme.hstatic.net/1000314614/1000404249/14/select-pro.png?v=140">
                                                    </label>

                                                </div>


                                            </div>
                                        </div>




                                    </div>

                                    <div class="selector-wrapper"><label for="productSelect-option-0">Tiêu đề</label><select class="single-option-selector" data-option="option1" id="productSelect-option-0"><option value="1000g">1000g</option><option value="2000g">2000g</option></select></div><select name="id" id="productSelect" class="product-single-variants" style="display:none">


                                        <option selected="selected" data-sku="" value="1032218111">1000g - 1,000,000 VND</option>



                                        <option data-sku="" value="1032218112">2000g - 2,000,000 VND</option>


                                    </select>

                                </form>
                                <div class="link-detail">
                                    <a href="javascript:void(0)" class="add-to-c btnAddCart">Thêm vào giỏ</a>
                                    <a href="javascript:void(0)" class="add-to-c btnSoldOut" style="display:none">Thêm vào giỏ</a>
                                </div>
                            </div>
                            <div class="list-pd-dt">
                                <div class="sku-p">
                                    <b>Mã sản phẩm</b>
                                    <p>Null</p>
                                </div>








                                <div class="share-p">
                                    <b>Chia sẻ</b>
                                    <ul>
                                        <li><a target="_blank" href="//www.facebook.com/sharer.php?u=https://vegetables-tmt.myharavan.com/products/suon-non"><i class="fa fa-facebook"></i></a></li>
                                        <li><a target="_blank" href="//twitter.com/share?text=S%C6%B0%E1%BB%9Dn%20non&amp;url=https://vegetables-tmt.myharavan.com/products/suon-non"><i class="fa fa-twitter"></i></a></li>
                                        <li><a target="_blank" href="//pinterest.com/pin/create/button/?url=https://vegetables-tmt.myharavan.com/products/suon-non&amp;media=http://hstatic.net/0/0/global/noDefaultImage6_1024x1024.gif&amp;description=S%C6%B0%E1%BB%9Dn%20non"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a target="_blank" href="//plus.google.com/share?url=https://vegetables-tmt.myharavan.com/products/suon-non" class="share-google"><i class="fa fa-google-plus"></i></a></li>
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
                            <div class="desc-tab">
                                <p>
                                </p><p><strong>Sườn non heo (hữu cơ)</strong>&nbsp;đảm bảo chất lượng và vệ sinh an toàn thực phẩm.</p><p>Phù hợp chế biến các món kho, chiên, rim, nấu canh,... thơm ngon và giàu dinh dưỡng cho cả gia đình.</p>
                                <p></p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="tab3">
                            <div id="binhluan">
                                <div class="product-comment-fb">
                                    <div class="fb-comments fb_iframe_widget fb_iframe_widget_fluid_desktop" data-href="https://vegetables-tmt.myharavan.com/products/suon-non" data-numposts="5" width="100%" data-colorscheme="light" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;color_scheme=light&amp;container_width=0&amp;height=100&amp;href=https%3A%2F%2Fvegetables-tmt.myharavan.com%2Fproducts%2Fsuon-non&amp;locale=vi_VN&amp;numposts=5&amp;sdk=joey&amp;version=v2.8" style="width: 100%;"><span style="vertical-align: bottom; width: 100%; height: 0px;"><iframe name="f1e8c9cd9391aa" width="1000px" height="100px" title="fb:comments Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.8/plugins/comments.php?app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D44%23cb%3Df365e951405e168%26domain%3Dvegetables-tmt.myharavan.com%26origin%3Dhttps%253A%252F%252Fvegetables-tmt.myharavan.com%252Ff305d2286ef539c%26relation%3Dparent.parent&amp;color_scheme=light&amp;container_width=0&amp;height=100&amp;href=https%3A%2F%2Fvegetables-tmt.myharavan.com%2Fproducts%2Fsuon-non&amp;locale=vi_VN&amp;numposts=5&amp;sdk=joey&amp;version=v2.8" class="" style="border: none; visibility: visible; width: 100%; height: 0px;"></iframe></span></div>
                                </div>
                                <div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div><iframe name="fb_xdm_frame_https" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://staticxx.facebook.com/connect/xd_arbiter.php?version=44#channel=f305d2286ef539c&amp;origin=https%3A%2F%2Fvegetables-tmt.myharavan.com" style="border: none;"></iframe></div><div></div></div></div>
                                <script>(function(d, s, id) {
                                        var js, fjs = d.getElementsByTagName(s)[0];
                                        if (d.getElementById(id)) return;
                                        js = d.createElement(s); js.id = id;
                                        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8";
                                        fjs.parentNode.insertBefore(js, fjs);
                                    }(document, 'script', 'facebook-jssdk'));</script>
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







                                    <div class="itemProduct col-md-3 col-sm-6 col-xs-6">







                                        <div class="pdLoopItem animated zoomIn">
                                            <div class="itemLoop clearfix">
                                                <div class="ct-box-op">
                                                    <div class="pdLoopImg elementFixHeight">
                                                        <a href="/products/san-pham-6" title="Cranberry">
                                                            <img alt="Cranberry" data-reg="true" class="imgLoopItem" src="//product.hstatic.net/1000314614/product/upload_f1ab16ccc4e6489193361fe7c04af50c_large.jpg" style="width: auto;">
                                                        </a>
                                                        <ul class="link-quickview">
                                                            <li><a href="javascript:void(0)" title="Thêm vào giỏ" class="add-to-cart" data-id="1032218092"><i class="fa fa-shopping-basket"></i></a></li>
                                                            <li><a href="/products/san-pham-6" title="Xem chi tiết"><i class="fa fa-exchange"></i></a></li>
                                                            <li><a href="javascript:void(0)" title="Xem nhanh" data-handle="/products/san-pham-6" class="mask-view btn-quickview-1"><i class="fa fa-eye"></i></a></li>
                                                        </ul>


                                                    </div>
                                                    <div class="pdLoopDetail text-center clearfix">
                                                        <h3 class="pdLoopName"><a class="productName" href="/products/san-pham-6" title="Cranberry">Cranberry </a></h3>
                                                        <p class="pdPrice">

                                                            <span>150,000₫</span>


                                                        </p>
                                                        <div class="pdLoopListView">
                                                            <ul class="notStyle">
                                                                <li><strong>Mã sản phẩm: </strong><span>chưa rõ</span></li>
                                                                <li><strong>Thương hiệu: </strong><span>Vinamilk</span></li>
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
                                    </div>






                                    <div class="itemProduct col-md-3 col-sm-6 col-xs-6">







                                        <div class="pdLoopItem animated zoomIn">
                                            <div class="itemLoop clearfix">
                                                <div class="ct-box-op">
                                                    <div class="pdLoopImg elementFixHeight">
                                                        <a href="/products/san-pham-7" title="Đào tiên Úc">
                                                            <img alt="Đào tiên Úc" data-reg="true" class="imgLoopItem" src="//product.hstatic.net/1000314614/product/upload_f1657dbe94444faba6930f58ace06cea_large.jpg" style="width: auto;">
                                                        </a>
                                                        <ul class="link-quickview">
                                                            <li><a href="javascript:void(0)" title="Thêm vào giỏ" class="add-to-cart" data-id="1032218093"><i class="fa fa-shopping-basket"></i></a></li>
                                                            <li><a href="/products/san-pham-7" title="Xem chi tiết"><i class="fa fa-exchange"></i></a></li>
                                                            <li><a href="javascript:void(0)" title="Xem nhanh" data-handle="/products/san-pham-7" class="mask-view btn-quickview-1"><i class="fa fa-eye"></i></a></li>
                                                        </ul>


                                                    </div>
                                                    <div class="pdLoopDetail text-center clearfix">
                                                        <h3 class="pdLoopName"><a class="productName" href="/products/san-pham-7" title="Đào tiên Úc">Đào tiên Úc </a></h3>
                                                        <p class="pdPrice">

                                                            <span>15,000,000₫</span>


                                                        </p>
                                                        <div class="pdLoopListView">
                                                            <ul class="notStyle">
                                                                <li><strong>Mã sản phẩm: </strong><span>434</span></li>
                                                                <li><strong>Thương hiệu: </strong><span>Emart</span></li>
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
                                    </div>






                                    <div class="itemProduct col-md-3 col-sm-6 col-xs-6">







                                        <div class="pdLoopItem animated zoomIn">
                                            <div class="itemLoop clearfix">
                                                <div class="ct-box-op">
                                                    <div class="pdLoopImg elementFixHeight">
                                                        <a href="/products/khoai-mon" title="Khoai môn">
                                                            <img alt="Khoai môn" data-reg="true" class="imgLoopItem" src="//product.hstatic.net/1000314614/product/upload_02a60bf9367949d38cd6ff8c80b77eb8_large.jpg" style="width: auto;">
                                                        </a>
                                                        <ul class="link-quickview">
                                                            <li><a href="javascript:void(0)" title="Thêm vào giỏ" class="add-to-cart" data-id="1032218080"><i class="fa fa-shopping-basket"></i></a></li>
                                                            <li><a href="/products/khoai-mon" title="Xem chi tiết"><i class="fa fa-exchange"></i></a></li>
                                                            <li><a href="javascript:void(0)" title="Xem nhanh" data-handle="/products/khoai-mon" class="mask-view btn-quickview-1"><i class="fa fa-eye"></i></a></li>
                                                        </ul>


                                                    </div>
                                                    <div class="pdLoopDetail text-center clearfix">
                                                        <h3 class="pdLoopName"><a class="productName" href="/products/khoai-mon" title="Khoai môn">Khoai môn </a></h3>
                                                        <p class="pdPrice">

                                                            <span>23,000₫</span>


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
                                    </div>






                                    <div class="itemProduct col-md-3 col-sm-6 col-xs-6">







                                        <div class="pdLoopItem animated zoomIn">
                                            <div class="itemLoop clearfix">
                                                <div class="ct-box-op">
                                                    <div class="pdLoopImg elementFixHeight">
                                                        <a href="/products/ot-chuong-vang" title="Ớt chuông vàng">
                                                            <img alt="Ớt chuông vàng" data-reg="true" class="imgLoopItem" src="//product.hstatic.net/1000314614/product/upload_f9bb326578de4576b90b277641b6fe25_large.jpg" style="width: auto;">
                                                        </a>
                                                        <ul class="link-quickview">
                                                            <li><a href="javascript:void(0)" title="Thêm vào giỏ" class="add-to-cart" data-id="1032218084"><i class="fa fa-shopping-basket"></i></a></li>
                                                            <li><a href="/products/ot-chuong-vang" title="Xem chi tiết"><i class="fa fa-exchange"></i></a></li>
                                                            <li><a href="javascript:void(0)" title="Xem nhanh" data-handle="/products/ot-chuong-vang" class="mask-view btn-quickview-1"><i class="fa fa-eye"></i></a></li>
                                                        </ul>


                                                    </div>
                                                    <div class="pdLoopDetail text-center clearfix">
                                                        <h3 class="pdLoopName"><a class="productName" href="/products/ot-chuong-vang" title="Ớt chuông vàng">Ớt chuông vàng </a></h3>
                                                        <p class="pdPrice">

                                                            <span>70,000₫</span>


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
                                    </div>






                                    <div class="itemProduct col-md-3 col-sm-6 col-xs-6">







                                        <div class="pdLoopItem animated zoomIn">
                                            <div class="itemLoop clearfix">
                                                <div class="ct-box-op">
                                                    <div class="pdLoopImg elementFixHeight">
                                                        <a href="/products/ot-sung" title="Ớt sừng">
                                                            <img alt="Ớt sừng" data-reg="true" class="imgLoopItem" src="//product.hstatic.net/1000314614/product/upload_6b86e5ff4c8e45c6ad681be8c99fb72a_large.jpg" style="width: auto;">
                                                        </a>
                                                        <ul class="link-quickview">
                                                            <li><a href="javascript:void(0)" title="Thêm vào giỏ" class="add-to-cart" data-id="1032218085"><i class="fa fa-shopping-basket"></i></a></li>
                                                            <li><a href="/products/ot-sung" title="Xem chi tiết"><i class="fa fa-exchange"></i></a></li>
                                                            <li><a href="javascript:void(0)" title="Xem nhanh" data-handle="/products/ot-sung" class="mask-view btn-quickview-1"><i class="fa fa-eye"></i></a></li>
                                                        </ul>


                                                    </div>
                                                    <div class="pdLoopDetail text-center clearfix">
                                                        <h3 class="pdLoopName"><a class="productName" href="/products/ot-sung" title="Ớt sừng">Ớt sừng </a></h3>
                                                        <p class="pdPrice">

                                                            <span>60,000₫</span>


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
                                    </div>






                                    <div class="itemProduct col-md-3 col-sm-6 col-xs-6">







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
                                    </div>






                                    <div class="itemProduct col-md-3 col-sm-6 col-xs-6">







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
                                    </div>






                                    <div class="itemProduct col-md-3 col-sm-6 col-xs-6">







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
                                    </div>






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
                $('.add-to-c').click(function(e){
                    e.preventDefault();
                    var params = {
                        type: 'POST',
                        url: '/cart/add.js',
                        data: $('#form-pro').serialize(),
                        dataType: 'json',
                        success: function(result) {
                            //alert('Bạn đã thêm' + ' ' + result.product_title + ' ' + 'vào giỏ hàng thành công !');
                            $.ajax({url: "/cart/?view=view", success: function(result){
                                    $(".cart-header").html(result);
                                }});			},
                        error: function(XMLHttpRequest, textStatus) {
                            //Haravan.onError(XMLHttpRequest, textStatus);
                            alert(XMLHttpRequest.responseJSON.description = 'Bạn không thể đặt quá số lượng tồn kho!');

                        }
                    };
                    jQuery.ajax(params);
                    var cart = $('.icon-cart');
                    var imgtodrag = $(this).parents('.pro-content').find(".slides img").eq(0);
                    if (imgtodrag) {
                        var imgclone = imgtodrag.clone()
                            .offset({
                                top: imgtodrag.offset().top,
                                left: imgtodrag.offset().left
                            })
                            .css({
                                'opacity': '0.5',
                                'position': 'absolute',
                                'height': '150px',
                                'width': '150px',
                                'z-index': '9999999'
                            })
                            .appendTo($('body'))
                            .animate({
                                'top': cart.offset().top + 2,
                                'left': cart.offset().left + 2,
                                'width': 35,
                                'height': 35
                            }, 1000, 'easeInOutExpo');

                        setTimeout(function () {

                        }, 1500);

                        imgclone.animate({
                            'width': 0,
                            'height': 0
                        }, function () {
                            $(this).detach()
                        });
                    }
                });
                $(".product-thumb a").click(function(e){
                    e.preventDefault();
                    $(".product-thumb").removeClass('checked');
                    $(this).parent().addClass('checked');
                    $(".product-image-feature").attr("src",$(this).attr("data-image"));
                });
                if($(window).width() > 960){
                    jQuery(".product-image-feature").elevateZoom({
                        gallery:'carousel',
                        scrollZoom : true
                    });
                }
            });

        </script>
        <script>
            var swatch_size = parseInt($('.select-swatch').children().size());
            jQuery(document).on('click','.swatch input', function(e) {
                e.preventDefault()
                var $this = $(this);
                var _available = '';
                $this.parent().siblings().find('label').removeClass('sd');
                $this.next().addClass('sd');
                var name = $this.attr('name');
                var value = $this.val();

                $('select[data-option='+name+']').val(value).trigger('change');

                if(swatch_size == 2){
                    if(name.indexOf('1') != -1){
                        $('#variant-swatch-1 .swatch-element').find('input').prop('disabled', false);
                        $('#variant-swatch-2 .swatch-element').find('input').prop('disabled', false);
                        $('#variant-swatch-1 .swatch-element label').removeClass('sd');
                        $('#variant-swatch-1 .swatch-element').removeClass('soldout');
                        $('.selector-wrapper .single-option-selector').eq(1).find('option').each(function(){
                            var _tam = $(this).val();
                            $(this).parent().val(_tam).trigger('change');

                            if(check_variant){
                                if(_available == '' ){
                                    _available = _tam;
                                }
                            }else{
                                $('#variant-swatch-1 .swatch-element[data-value="'+_tam+'"]').addClass('soldout');
                                $('#variant-swatch-1 .swatch-element[data-value="'+_tam+'"]').find('input').prop('disabled', true);
                            }
                        })
                        $('.selector-wrapper .single-option-selector').eq(1).val(_available).trigger('change');
                        $('#variant-swatch-1 .swatch-element[data-value="'+_available+'"] label').addClass('sd');
                    }
                }else if (swatch_size == 3){

                    var _count_op2 = $('#variant-swatch-1 .swatch-element').size();
                    var _count_op3 = $('#variant-swatch-2 .swatch-element').size();
                    if(name.indexOf('1') != -1){
                        $('#variant-swatch-1 .swatch-element').find('input').prop('disabled', false);
                        $('#variant-swatch-2 .swatch-element').find('input').prop('disabled', false);
                        $('#variant-swatch-1 .swatch-element label').removeClass('sd');
                        $('#variant-swatch-1 .swatch-element').removeClass('soldout');
                        $('#variant-swatch-2 .swatch-element label').removeClass('sd');
                        $('#variant-swatch-2 .swatch-element').removeClass('soldout');
                        var _avi_op1 = '';
                        var _avi_op2 = '';
                        $('#variant-swatch-1 .swatch-element').each(function(ind,value){
                            var _key = $(this).data('value');
                            var _unavi = 0;
                            $('.single-option-selector').eq(1).val(_key).change();
                            $('#variant-swatch-2 .swatch-element label').removeClass('sd');
                            $('#variant-swatch-2 .swatch-element').removeClass('soldout');
                            $('#variant-swatch-2 .swatch-element').find('input').prop('disabled', false);
                            $('#variant-swatch-2 .swatch-element').each(function(i,v){
                                var _val = $(this).data('value');
                                $('.single-option-selector').eq(2).val(_val).change();
                                if(check_variant == true){
                                    if(_avi_op1 == ''){
                                        _avi_op1 = _key;
                                    }
                                    if(_avi_op2 == ''){
                                        _avi_op2 = _val;
                                    }
                                    console.log(_avi_op1 + ' -- ' + _avi_op2)
                                }else{
                                    _unavi += 1;
                                }
                            })
                            if(_unavi == _count_op3){
                                $('#variant-swatch-1 .swatch-element[data-value = "'+_key+'"]').addClass('soldout');
                                setTimeout(function(){
                                    $('#variant-swatch-1 .swatch-element[data-value = "'+_key+'"] input').attr('disabled','disabled');
                                })
                            }
                        })


                        $('#variant-swatch-1 .swatch-element[data-value="'+_avi_op1+'"] input').click();
                    }
                    else if(name.indexOf('2') != -1){
                        $('#variant-swatch-2 .swatch-element label').removeClass('sd');
                        $('#variant-swatch-2 .swatch-element').removeClass('soldout');
                        $('.selector-wrapper .single-option-selector').eq(2).find('option').each(function(){
                            var _tam = $(this).val();
                            $(this).parent().val(_tam).trigger('change');
                            if(check_variant){
                                if(_available == '' ){
                                    _available = _tam;
                                }
                            }else{

                                $('#variant-swatch-2 .swatch-element[data-value="'+_tam+'"]').addClass('soldout');
                                $('#variant-swatch-2 .swatch-element[data-value="'+_tam+'"]').find('input').prop('disabled', true);
                            }
                        })

                        $('.selector-wrapper .single-option-selector').eq(2).val(_available).trigger('change');
                        $('#variant-swatch-2 .swatch-element[data-value="'+_available+'"] label').addClass('sd');
                    }
                }else{

                }
            })
            $(document).ready(function(){


                var _chage = '';

                $('.swatch-element[data-value="'+$('.selector-wrapper .single-option-selector').eq(0).val()+'"]').find('input').click();
                $('.swatch-element[data-value="'+$('.selector-wrapper .single-option-selector').eq(1).val()+'"]').find('input').click();

                if(swatch_size == 2){
                    var _avi_op1 = '';
                    var _avi_op2 = '';
                    var _count = $('#variant-swatch-1 .swatch-element').size();
                    $('#variant-swatch-0 .swatch-element').each(function(ind,value){
                        var _key = $(this).data('value');

                        var _unavi = 0;
                        //$('.single-option-selector').eq(0).val(_key).change();

                        $('#variant-swatch-1 .swatch-element').each(function(i,v){
                            var _val = $(this).data('value');

                            $('.single-option-selector').eq(1).val(_val).change();
                            if(check_variant == true){
                                if(_avi_op1 == ''){
                                    _avi_op1 = _key;
                                }
                                if(_avi_op2 == ''){
                                    _avi_op2 = _val;
                                }
                            }else{
                                _unavi += 1;
                            }

                        })
                        if(_unavi == _count){

                            $('#variant-swatch-0 .swatch-element[data-value = "'+_key+'"]').addClass('soldout');
                            $('#variant-swatch-0 .swatch-element[data-value = "'+_key+'"]').find('input').attr('disabled','disabled');
                        }
                    })



                    $('#variant-swatch-0 .swatch-element[data-value = "'+_avi_op1+'"] input').click();
                    $('#variant-swatch-1 .swatch-element[data-value = "'+_avi_op2+'"] input').click();

                }else if(swatch_size == 3){

                    var _avi_op1 = '';
                    var _avi_op2 = '';
                    var _avi_op3 = '';

                    var _size_op2 = $('#variant-swatch-1 .swatch-element').size();


                    var _size_op3 = $('#variant-swatch-2 .swatch-element').size();


                    $('#variant-swatch-0 .swatch-element').each(function(ind,value){
                        var _key_va1 = $(this).data('value');
                        var _count_unavi = 0;

                        $('.single-option-selector').eq(0).val(_key_va1).change();
                        $('#variant-swatch-1 .swatch-element').each(function(i,v){


                            var _key_va2 = $(this).data('value');
                            var _unavi_2 = 0;
                            $('.single-option-selector').eq(1).val(_key_va2).change();
                            $('#variant-swatch-2 .swatch-element').each(function(j,z){
                                var _key_va3 = $(this).data('value');

                                $('.single-option-selector').eq(2).val(_key_va3).change();
                                if(check_variant == true){
                                    if(_avi_op1 == ''){
                                        _avi_op1 = _key_va1;

                                    }
                                    if(_avi_op2 == ''){
                                        _avi_op2 = _key_va2;
                                    }
                                    if(_avi_op3 == ''){
                                        _avi_op3 = _key_va3;
                                    }
                                }else{

                                    _unavi_2 += 1;
                                }
                            })
                            if(_unavi_2 == _size_op3){
                                _count_unavi += 1;
                            }
                        })
                        if(_size_op2 == _count_unavi){

                            $('#variant-swatch-0 .swatch-element[data-value = "'+_key_va1+'"]').addClass('soldout');
                            $('#variant-swatch-0 .swatch-element[data-value = "'+_key_va1+'"]').find('input').attr('disabled','disabled');
                        }
                    })

                    $('#variant-swatch-0 .swatch-element[data-value = "'+_avi_op1+'"] input').click();

                }


            })
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

