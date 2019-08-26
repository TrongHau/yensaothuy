<!doctype html>
<html class="no-js" lang="vi" >

@include('layouts.header')
<body class="stBody stHome index">

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
<script src='/js/jquery.elevatezoom7d0b.js?v=140' type='text/javascript'></script>
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