<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $page->title }}</title>
    <meta name="description" content="{{ $page->description }}">
    <meta name="author" content="Форинтерстрой">
    <meta name="rating" content="safe for kids">
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <link rel="shortcut icon" href="{{ asset('favicon/favicon.ico') }}">
    <link rel="icon" href="{{ asset('favicon/favicon.ico') }}" type="image/x-icon">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="msapplication-config" content="{{ asset('favicon/browserconfig.xml') }}">
    <meta name="theme-color" content="#000000">

    <meta itemprop="name" content="{{ $page->title }}">
    <meta itemprop="description" content="{{ $page->description }}">
    <meta itemprop="image" content="">
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="http://forinterstroy.ru">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $page->title }}">
    <meta property="og:description" content="{{ $page->title }}">
    <meta property="og:image" content="">
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $page->title }}">
    <meta name="twitter:description" content="{{ $page->description }}">
    <meta name="twitter:image" content="">
    @vite('resources/sass/app.sass')
</head>
<body>
    <div id="app">
    <x-comp.mobile-menu :company="$company"></x-comp.mobile-menu>