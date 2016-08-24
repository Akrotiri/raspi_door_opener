<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    @include('partials._title')
    @include('partials._head')
</head>
<body>
<div id="container">
    @yield('content')
    @include('partials._articles')
    @include('partials._footer')
</div>
@include('partials._scripts')
</body>
</html>