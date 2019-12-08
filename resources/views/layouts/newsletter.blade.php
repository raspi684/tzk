<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="{{asset('images/favicon.png')}}" type="image">
<title>Newsletter - {{config('app.name')}}</title>

</head>
<body>
<div id="content">
    @yield('content')
</div>

@include('includes.footer')
</body>
</html>
