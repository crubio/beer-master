// public/js/controllers/
angular.module('beerController', [])
    
    // Inject the beerService into the main controllers
    .controller('mainController', function($scope, $http, beerService){

        // Define an object in the scope for our data
        $scope.beerData = {};

        // Form data
        $scope.formData = {};

        // Loading icon stuff
        $scope.loading = true;

        // Method for getting results from a query
        $scope.submitQuery = function(){
            // Requesting the get method of beerService
            // ng-model $scope.formData needs to be attached to the form input
            beerService.get($scope.formData)
                .success(function(getData) {
                    $scope.beerData = getData;
                    // Add backend success results to the object
                    $scope.beerData.success = getData.success;
                    $scope.loading = false;
                    console.log($scope.beerData);
                })
                .error(function(getData) {
                    console.log(getData);
                });
        }

    });