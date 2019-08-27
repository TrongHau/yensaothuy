<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <link rel="shortcut icon" href="/image/favicon7d0b.png?v=140" type="image/png" />
    <meta charset="utf-8" />
    <meta name="revisit-after" content="1 day" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="HandheldFriendly" content="true">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=0' name='viewport' />
    <title>{{ $titleMeta or Config::get('constants.app.title') }}</title>
    <script src='/js/jquery-1.11.1.js?v=140' type='text/javascript'></script>
    <script src='/js/functions.js' type='text/javascript'></script>
    <!--------------CSS----------->
    <link href='/css/plugins7d0b.css?v=140' rel='stylesheet' type='text/css'  media='all'  />
    <link href='/css/swatch.scss7d0b.css?v=140' rel='stylesheet' type='text/css'  media='all'  />
    <link href='/css/styles7d0b.css?v=140' rel='stylesheet' type='text/css'  media='all'  />
    <link href='/css/responsive7d0b.css?v=140' rel='stylesheet' type='text/css'  media='all'  />
    <link href='/css/custom.css' rel='stylesheet' type='text/css'  media='all'  />
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