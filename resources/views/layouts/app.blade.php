<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Sample App') - Laravel</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
    @include('layouts._header')

    <div class="container">
        <div class="col-md-offset-1 col-md-10">
            @yield('content')
            @include('layouts._footer')
        </div>
    </div>

</body>
</html>