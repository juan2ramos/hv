<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Ingresa tu hoja de vida') </title>
    <meta name="description" content="@yield('description', '')"/>
    <link rel="canonical" href="{{ URL::current() }}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,200,200i,300,300i,400,400i,500,600,600i,700,700i,900,900i|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i"
          rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/main.min.css')}}"/>
    @yield('styles')
</head>
<body id="#body" class="@yield('classBody')">
@yield('content')
<footer class="Footer scrollTarget" id="#redes-sociales">
</footer>
<script  src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.2/sweetalert2.all.min.js"></script>
@yield('scripts')
</body>
</html>