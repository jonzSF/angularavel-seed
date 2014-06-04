'use strict';

var defaultDependencies = [];

var app = angular.module('app', [
    'ngRoute',
    'app.filters',
    'app.services',
    'app.directives',
]);

app.config(function ($routeProvider, $controllerProvider, $compileProvider, $filterProvider, $animateProvider, $provide) {

    app.lazy = {
        controller: $controllerProvider.register,
        directive: $compileProvider.directive,
        filter: $filterProvider.register,
        factory: $provide.factory,
        service: $provide.service,
        animation: $animateProvider.register
    };

    // Register routes with the $routeProvider
    $routeProvider.when('/', {templateUrl: 'views/home.html', resolve: {load: function ($q, $rootScope) {

        var dependencies = [
            'app/controllers/HomeViewController.js'
        ];

        var deferred = $q.defer();

        $script(dependencies, function () {
            $rootScope.$apply(function () {
                deferred.resolve();
            });
        });

        return deferred.promise;
    }}});

    $routeProvider.when('/about', {templateUrl: 'views/about.html', resolve: {deps: function ($q, $rootScope) {

        var dependencies = [
            'app/controllers/AboutViewController.js'
        ];

        var deferred = $q.defer();

        $script(dependencies, function () {
            $rootScope.$apply(function () {
                deferred.resolve();
            });
        });

        return deferred.promise;

    }}});

});


