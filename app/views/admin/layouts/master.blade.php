<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('head-title')</title>

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    
    @include ('admin.partials.navbar')


    @yield ('body-content')
   

    <script src="/js/jquery-1.11.2.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/app.js"></script>
</body>

</html>
