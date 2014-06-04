<!DOCTYPE html>
<!--[if lt IE 7]>
<html lang="en" ng-app="app" class="no-js lt-ie9 lt-ie8 lt-ie7">
<![endif]-->
<!--[if IE 7]>
<html lang="en" ng-app="app" class="no-js lt-ie9 lt-ie8">
<![endif]-->
<!--[if IE 8]>
<html lang="en" ng-app="app" class="no-js lt-ie9">
<![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" ng-app="app" class="no-js">
<!--<![endif]-->

<head>
    <title>Mach's cooler: beim verrückten Früchtchen-Kühlen!</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">

    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content='J. Hausig @ Scholz & Friends'>

    <meta property="og:url" content=""/>
    <meta property="og:title" content=""/>
    <meta property="og:description" content=""/>
    <meta property="og:image" content=""/>

    <link rel="stylesheet" href="components/html5-boilerplate/css/normalize.css">
    <link rel="stylesheet" href="components/html5-boilerplate/css/main.css">
    <link rel="stylesheet" href="css/styles.min.css"/>

    <script src="components/html5-boilerplate/js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>

<!--[if lt IE 7]>
<p class="browsehappy">
    You are using an <strong>outdated</strong> browser. Please
    <a href="http://browsehappy.com/">upgrade your browser</a>
    to improve your experience.</p>
<![endif]-->

<ul class="menu">
    <li><a href="#/">Home</a></li>
    <li><a href="#/about">About</a></li>
</ul>

<div ng-view></div>
<div>Angularavel seed app: v<span app-version></span></div>

<!-- In production use:
<script src="//ajax.googleapis.com/ajax/libs/angularjs/x.x.x/angular.min.js"></script>
-->
<script src="components/angular/angular.js"></script>
<script src="components/angular-route/angular-route.js"></script>
<script src="components/angular-animate/angular-animate.js"></script>

<script src="js/script.min.js"></script>

<script src="app/app.js"></script>
<script src="app/utils/services/services.js"></script>
<script src="app/utils/filters/filters.js"></script>
<script src="app/utils/directives/directives.js"></script>

</body>
</html>
