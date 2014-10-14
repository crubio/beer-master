// var BeerControllers = angular.module('BeerControllers', []);

// BeerControllers.controller('BeerListView', ['$scope', '$http',
//     function($scope, $http) {
//         // Our form object starts empty
//         $scope.formData = {};

//         // Ordering - I set to nothing because I want the initial results from the API
//         $scope.orderProp = '';

//         // Processing form input
//         $scope.processForm = function() {

//             // Hit the endpoint
//             $http({
//                     method  : 'GET',
//                     url     : '/beers/get_beer',
//                     params  : $scope.formData,  // test beer id
//                     headers : { 'Content-Type': 'application/x-www-form-urlencoded' }
//                 }).success(function(data) {
//                     // Pull the first result
//                     $scope.result = data;
//                     console.log($scope.result);
//                     if (data.success == false) {
//                         $scope.result.success = data.success;
//                         console.log($scope.result.success);
//                         // if not successful, bind errors to error variables
//                         //  
//                         // $scope.errorName = data.errors.name;
//                     } else {
//                         // if successful, bind success message to message
//                         $scope.result.success = true;
//                         console.log($scope.result.success);
//                     }
//                 });
//         };

//         // Method for what happens when you click on a thing :D
//         $scope.onBeerSelect = function(row) {
//             // The entire result set
//             $(".result-container[data-id!="+row.id+"]").fadeOut();
//         };

//         console.log($scope.result);
// }]);

// Main beer page controller, handles displaying search result
// app.controller("BeerListView", function($scope, $http){
    
//         // Our form object starts empty
//         $scope.formData = {};

//         // Ordering - I set to nothing because I want the initial results from the API
//         $scope.orderProp = '';

//         // Processing form input
//         $scope.processForm = function() {

//             // Hit the endpoint
//             $http({
//                     method  : 'GET',
//                     url     : '/beers/get_beer',
//                     params  : $scope.formData,  // test beer id
//                     headers : { 'Content-Type': 'application/x-www-form-urlencoded' }
//                 }).success(function(data) {
//                     // Pull the first result
//                     $scope.result = data;
//                     console.log($scope.result);
//                     if (data.success == false) {
//                         $scope.result.success = data.success;
//                         console.log($scope.result.success);
//                         // if not successful, bind errors to error variables
//                         //  
//                         // $scope.errorName = data.errors.name;
//                     } else {
//                         // if successful, bind success message to message
//                         $scope.result.success = true;
//                         console.log($scope.result.success);
//                     }
//                 });
//         };

//         // Method for what happens when you click on a thing :D
//         $scope.onBeerSelect = function(row) {
//             // The entire result set
//             $(".result-container[data-id!="+row.id+"]").fadeOut();
//         };

//         console.log($scope.result);
// });

// Single view controller
// app.controller("BeerSingleView", function(){

// });