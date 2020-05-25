<!doctype html>
<html class="no-js" lang="vi" >

@include('layouts.header')
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PNTWQTV');</script>
<!-- End Google Tag Manager -->
<body class="stBody stHome index">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PNTWQTV"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="insLoadpage" class="preloader">
    <div class="wrapLoading">
        <div class="loader">Loading...</div>
    </div>
</div>

<div class="wrapper">
    <!-- /header -->

    @include('layouts.wapper')

    <!-- /main -->
    @yield('content')

    @include('layouts.footer')
</div>
@yield('contentJS')
<script src='/js/owl.carousel.min7d0b.js?v=140' type='text/javascript'></script>
<script src='/js/jquery.magnific-popup7d0b.js?v=140' type='text/javascript'></script>
<script src='/js/jquery-ui7d0b.js?v=140' type='text/javascript'></script>
<script src='/js/jquery.flexslider7d0b.js?v=140' type='text/javascript'></script>
{{--<script src='/js/option_selection.js' type='text/javascript'></script>--}}
{{--<script src='/js/api.jquery.js' type='text/javascript'></script>--}}
<script src='/js/bootstrap.min7d0b.js?v=140' type='text/javascript'></script>
<script src='/js/isotope.pkgd.min7d0b.js?v=140' type='text/javascript'></script>
<script src='/js/loadimage7d0b.js?v=140' type='text/javascript'></script>
<script src='/js/jquery.countdown.min7d0b.js?v=140' type='text/javascript'></script>
<script src='/js/main7d0b.js?v=140' type='text/javascript'></script>
@yield('contentJS_End')
</body>

</html>