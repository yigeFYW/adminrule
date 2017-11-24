<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel SPA</title>
    <link rel="stylesheet" href="/css/app.css">

    <!-- Styles -->
    <style>

    </style>
</head>
<body>
<div id="app">
    <router-view></router-view>
</div>
</body>
<script src="/js/app.js"></script>
</html>
