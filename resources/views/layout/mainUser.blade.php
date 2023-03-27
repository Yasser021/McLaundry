<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>McLaundry</title>
    @include('part.cssUser')
</head>

<body>
    @include('layout.navbar')
    @yield('konten')
    @include('part.jsUser')
</body>

</html>
