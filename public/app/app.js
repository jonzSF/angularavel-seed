'use strict';

var defaultDependencies = [];

var app = angular.module('app', [
  'ngRoute',
  'app.filters',
  'app.services',
  'app.directives',
]);

app.loadDependencies = function(deferred, dependencies){

  $script(dependencies, function () {
    // all dependencies have now been loaded by $script.js so resolve the promise
    $rootScope.$apply(function () {
      deferred.resolve();
    });
  });

  return deferred.promise;
}

app.config(function ($routeProvider, $controllerProvider, $compileProvider, $filterProvider, $provide) {

  app.controllerProvider = $controllerProvider;
  app.compileProvider = $compileProvider;
  app.routeProvider = $routeProvider;
  app.filterProvider = $filterProvider;
  app.provide = $provide;

  // Register routes with the $routeProvider
  $routeProvider.when('/', {templateUrl: 'views/home.html'});

  $routeProvider.when('/about', {templateUrl: 'views/about.html', resolve: {deps: function ($q, $rootScope) {
    var dependencies =
      [
        'controllers/AboutViewController.js',
        'directives/some-directive.js'
      ];

    return app.loadDependencies($q.defer(), dependencies);
  }}});

});


