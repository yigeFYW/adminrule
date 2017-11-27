<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel SPA</title>
    <link rel="stylesheet" href="/css/app.css{{'?s='.str_random(10)}}">

    <!-- Styles -->
    <style>

    </style>
</head>
<body>
<div id="app">
    <router-view></router-view>
</div>
</body>
<script src="/js/app.js{{'?s='.str_random(10)}}"></script>
</html>
