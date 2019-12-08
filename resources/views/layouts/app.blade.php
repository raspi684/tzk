<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
          content="order tzk,tzk czestochowa, ranking restauracji czestochowa,order technicznych zakaładów kulinarnych,restauracje czestochowa">
    <link rel="icon" href="{{asset('images/favicon.png')}}" type="image">
    <title>{{config('app.name')}}</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>
@include('includes.header')

<div id="content">
    @yield('content')
</div>

@include('includes.footer')
@include('includes.scripts')
</body>
</html>
