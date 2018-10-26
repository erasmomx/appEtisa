<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title','ETISA')</title>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <base href="{{URL::asset("/")}}" target="_blank">
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('css/desing_etisa.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
          integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <script src="{{url('js/jquery-3.3.1.min.js')}}"></script>
    <!-- Meta SEO -->
    <meta name="keywords" content="@yield('keywords','')">
    <meta name="description" content="@yield('description')">
    <meta name="robots" content="index,follow">
    <meta name="author" content="Erasmo Soto Guerrero | Edgar Perez Perez">
    <meta name="owner" content="Etisa">
</head>

<body id="top">
@yield('content')
@include('template/layouts/footer')
<script src="{{url('js/bootstrap.min.js')}}"></script>
</body>
</html>