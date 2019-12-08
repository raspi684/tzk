<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="0240e68f-01d2-4178-8a39-0e9e0149c057"
        data-blockingmode="auto" type="text/javascript"></script>
<script id="CookieDeclaration" src="https://consent.cookiebot.com/0240e68f-01d2-4178-8a39-0e9e0149c057/cd.js"
        type="text/javascript" async></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords"
      content="order tzk,tzk czestochowa, ranking restauracji czestochowa,order technicznych zakaładów kulinarnych,restauracje czestochowa">
<link rel="icon" href="{{asset('images/favicon.png')}}" type="image">
    <title>{{config('app.name')}}</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>
@include('includes.preloader')
@include('includes.header')

<div id="content">
    @yield('content')
</div>

@include('includes.footer')
@include('includes.scripts')
</body>
</html>
