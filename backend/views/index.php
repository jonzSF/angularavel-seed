<!DOCTYPE html>
<!--[if lt IE 7]>
<html lang="en" ng-app="App" class="no-js lt-ie9 lt-ie8 lt-ie7">
<![endif]-->
<!--[if IE 7]>
<html lang="en" ng-app="App" class="no-js lt-ie9 lt-ie8">
<![endif]-->
<!--[if IE 8]>
<html lang="en" ng-app="App" class="no-js lt-ie9">
<![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" ng-app="App" class="no-js">
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

    <link rel="stylesheet" href="bower_components/html5-boilerplate/css/normalize.css">
    <link rel="stylesheet" href="bower_components/html5-boilerplate/css/main.css">
    <link rel="stylesheet" href="css/app.css"/>

    <script src="bower_components/html5-boilerplate/js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>
<ul class="menu">
    <li><a href="#/view1">view1</a></li>
    <li><a href="#/view2">view2</a></li>
</ul>

<!--[if lt IE 7]>
<p class="browsehappy">
    You are using an <strong>outdated</strong> browser. Please
    <a href="http://browsehappy.com/">upgrade your browser</a>
    to improve your experience.</p>
<![endif]-->

<div ng-view></div>

<div>Angular seed app: v<span app-version></span></div>

<!-- In production use:
<script src="//ajax.googleapis.com/ajax/libs/angularjs/x.x.x/angular.min.js"></script>
-->
<script src="bower_components/angular/angular.js"></script>
<script src="bower_components/angular-route/angular-route.js"></script>
<script src="app/App.js"></script>
<script src="app/controllers/controllers.js"></script>
<script src="app/utils/services/services.js"></script>
<script src="app/utils/filters/filters.js"></script>
<script src="app/utils/directives/directives.js"></script>

</body>
</html>
