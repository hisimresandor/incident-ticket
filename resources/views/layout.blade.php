<html lang="hu">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{asset('images/icon.png')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>
<body class="text-bg-light">
    <div class="text-bg-primary">
        <div class="row p-2">
            <div class="col-lg-3"> </div>
            <div class="col-6">
                <h4><a href="{{route('index')}}" style="color: inherit;" class="link-underline link-underline-opacity-0">Tech Support</a></h4>
            </div>
            <div class="col-lg-3"> </div>
        </div>
    </div>
    <div style="height: 2.5vh;"></div>
    <div style="margin: auto; width: 750px;" class="p-2">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
