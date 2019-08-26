<?php
use App\Library\Helpers;
$titleMeta = 'Liên hệ - Yến Sào Thủy';
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
    <meta name="title" content="Liên hệ - Yến Sào Thủy" />
    <meta property="og:image" content="{{env('APP_URL') . THUMBNAIL_DEFAULT_META}}" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:title" content="Liên hệ - Yến Sào Thủy" />
    <meta name="description" content="Yến Sào Thủy, Yến Nhà, Yến Đảo, Yến hũ chưng thủ công, Yến Nguyên Tổ Sơ Chế, Yến Tinh Chế, Yến Trắng Nguyên Tổ  Sơ Chế Còn Lông, Huyết Yến Nguyên Tổ Sơ Chế Còn Lông,Yến Vụn, Yến Sợi Tinh Chế Loại 1, Yến Sợi Tinh Chế Đặc Biệt, Yến Sợi Tinh Chế Cao Cấp
Yến Trắng Rút Lông, Yến Chân Rút Lông, Yến Hồng Huyết Tinh Chế, Yến Hồng Vàng Tinh Chế, Yến Hồng Rút Lông, Yến Hồng Rút Lông, Yến Chân Hồng Huyết, Yến Đảo Nguyên Tổ Sơ Chế Còn Lông, Yến Đảo Tinh Chế, Yến hũ Chưng Sẵn Sợi Vụn, Yến hũ Chưng Sẵn Sợi Tinh Chế, Yến hũ Chưng Sẵn Chân Tổ, Yến hũ Chưng Sẵn Sợi Hồng Huyết" />
    <meta property="og:type" content="website" />
    <meta property="og:updated_time" content="{{time()}}" />
@endsection
@extends('layouts.app')
@section('content')
    <main id="main" class="main">
        <style>
            .same-title {
                margin-bottom: 20px;
            }
        </style>
        <section id="stContact" class="contactPage">



            <div class="stBreadcrumb ">
                <div class="banner-breadcrumb">
                    <h2>Liên hệ</h2>
                    <ul>
                        <li><a href="/" target="_self">Trang chủ</a></li>


                        <li class="active"><span>Liên hệ</span></li>


                    </ul>
                </div>
            </div>
            <div class="contact-page">

                <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3899.144250441049!2d109.18883671481449!3d12.23851059133975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3170677c552588db%3A0x37dfe212c4986fbd!2zMTE0IFRy4buLbmggUGhvbmcsIFTDom4gTOG6rXAsIFRow6BuaCBwaOG7kSBOaGEgVHJhbmcsIEtow6FuaCBIw7JhIDY1MDAwMA!5e0!3m2!1svi!2s!4v1566666112405!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>

                <!-- google-map -->
                <div class="content-contact">
                    <div class="same-title">
                        <i>Chúng tôi ở đây</i>
                        <h2>Liên hệ</h2>
                        <h1 class="hidden">
                            Liên hệ
                        </h1>
                    </div>
                    <div class="info-contact">
                        <p>Nếu bạn có thắc mắc gì, có thể gửi yêu cầu cho chúng tôi, và chúng tôi sẽ liên lạc lại với bạn sớm nhất có thể .</p>
                        <div class="icon">
                            <div class="item"><i class="fa fa-home"></i>114A Trịnh Phong, Phường Tân Lập, TP Nha Trang</div>
                            <div class="item"><i class="fa fa-phone"></i>{{env("PHONE")}}</div>
                        </div>
                    </div>

                    <form accept-charset="UTF-8" action="/lien-he.html" class="contact-form" method="post">
                        <input name="form_type" type="hidden" value="contact">
                        <input name="utf8" type="hidden" value="✓">
                        <input required="" type="text" id="contactFormName" class="form-control input-lg" name="name" placeholder="Tên của bạn" autocapitalize="words" value="">
                        <input required="" type="text" name="phone" placeholder="Phone của bạn" id="contactFormEmail" class="form-control input-lg" autocorrect="off" autocapitalize="off" value="">
                        <textarea required="" name="body" class="form-control" placeholder="Viết bình luận" id="contactFormMessage"></textarea>
                        <button type="submit">Gửi</button>
                        <input name="_token" type="hidden" value="{{csrf_token()}}">
                    </form>
                </div>
                <!-- content-contact -->
            </div>
        </section>
    </main>
@endsection
@section('contentJS')
<script>
<?php
  if(isset($mes)) {
      echo 'alert("'.$mes.'")';
  }
?>
</script>
@endsection

