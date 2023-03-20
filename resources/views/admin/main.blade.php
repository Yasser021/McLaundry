<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>McLaundry</title>
    @include('part.css')
</head>

<body>
    <div class="app">
        <div class="" id="main">
            @include('layout.sidebar')
            @yield('konten')
            @include('part.js')
        </div>
    </div>

</body>

</html>
