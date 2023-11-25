<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List | @yield('title')</title>
    <!-- favicon -->
    <!-- estilos -->
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .active{
            background-color: rgb(0, 179, 255);
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <!-- header -->
    @include('layouts.partials.header');
    <!-- nav -->
    @yield('content')
    <!-- footer -->
    @include('layouts.partials.footer');
    <!-- script -->
</body>
</html>