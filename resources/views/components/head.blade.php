<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $title ?? 'Название на задано' }} - {{ config('app.name') }}</title>
    <meta name="robots" content="noindex, nofollow" />
    <meta name="description" content="Martup is Multipurpose eCommerce HTML Template, that's perfect for any kind of eCommerce websites such as fashion, furniture and many more.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/material-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/ion.rangeSlider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/venobox.min.css') }}">
    <link rel="stylesheet" href="assets/css/style.css">
    {{ $slot }}
    </head>
<body>
