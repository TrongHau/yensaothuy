<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <link rel="shortcut icon" href="/image/favicon7d0b.png?v=140" type="image/png" />
    <meta charset="utf-8" />
    <title>
        Vegetables-TMT
    </title>
    <script src='/js/jquery-1.11.1.js?v=140' type='text/javascript'></script>
    <!--------------CSS----------->
    <link href='/css/plugins7d0b.css?v=140' rel='stylesheet' type='text/css'  media='all'  />
    <link href='/css/swatch.scss7d0b.css?v=140' rel='stylesheet' type='text/css'  media='all'  />
    <link href='/css/styles7d0b.css?v=140' rel='stylesheet' type='text/css'  media='all'  />
    <link href='/css/responsive7d0b.css?v=140' rel='stylesheet' type='text/css'  media='all'  />
    @yield('meta')
    <link href="http://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
    @yield('contentCSS')
    <script>
        var csrfToken = "{{csrf_token()}}";
        var loaded = false;
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        });
        $( document ).ajaxStop(function() {
            loaded = false;
        });
    </script>
</head>