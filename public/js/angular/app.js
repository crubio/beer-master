// This is the main controller for my angular.js tests

// var app = angular.module('getAngular', [
//     'ngRoute',
//     'BeerControllers'
// ]);

// // Configure the app to use routing for our controllers and templates
// app.config(['$routeProvider'],
//     function($routeProvider) {
//         $routeProvider.
//             when('/beers', {
//                 templateUrl: 'js/angular/templates/list.hmtl',
//                 controller: 'BeerListView'
//             }).
//             when('/beers/:beerId', {
//                 templateUrl: 'js/angular/templates/single.html',
//                 controller: 'BeerSingleView'
//             }).
//             otherwise({
//                 redirectTo: '/beers'
//             });
// });

// The real beer app
var beerApp = angular.module('beerApp', ['ngRoute']);

// Configure the routes
beerApp.config(function($routeProvider){
    $routeProvider

    // Route pages for List and Single views
    .when('beers', {
        templateUrl: 'templates/list.html',
        controller: 'beerListView'
    }).otherwise({
        redirectTo: 'beers'
    });
});

beerApp.controller('beerListView', function($scope){
    // Test message
    $scope.message = "Working beer list view controller response";
});