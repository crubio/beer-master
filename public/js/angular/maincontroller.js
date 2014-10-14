// The main controller for our angular.js tests and apps!

// Pay attention to the scope and know what it is!
app.controller("MainController", function($scope, $http){
    // This is a scope variable
    $scope.apiKey = "7fb46d351e1d41cde81a2edd31c4f1b4";
    $scope.test = "this variable is in the scope of the MainController";
    $scope.inputValue = "";

    // Lets bind some variable to the scope
    $scope.selectedBeer = 0;
    $scope.selectedStyle = null;
    // An array of objects - an example
    $scope.beers = [
        {
            id: 0,
            name: 'Sierra Nevada Pale Ale',
            taste: [
                'hoppy',
                'piney',
                'fruity',
                'bong rips'
            ],
            production: true
        },
        {
            id: 1,
            name: 'Chris\'s Kolsch',
            taste: [
                'appley',
                'garbagy',
                'light',
                'i hate this beer'
            ],
            production: false
        },
        {
            id: 2,
            name: 'Old Rasputin',
            taste: [
                'dark',
                'rich',
                'alcoholic',
                'syrupy'
            ],
            production: true
        },
        {
            id: 3,
            name: 'Delirium Tremens',
            taste: [
                'yeasty',
                'spicy',
                'dry'
            ],
            production: true
        }
    ];

    // Declare the new variable I suppose
    $scope.newBeer = null;
    // Add the function to the scope
    $scope.addNew = function(){
        // Validate the input - no null or empty values
        if ($scope.newBeer != null || $scope.newBeer !="") {
            // We are going to do an array push to the $scope.beers array of objects
            // push is a function, the argument is the object we are building
            $scope.beers.push({
                // Next index is equal to the length here
                id: $scope.beers.length,
                name: $scope.newBeer,
                // No data for this but its ok
                taste: [],
                production: true
            });
        }
    }

    // Make an API call to breweryDB
    $scope.init = function() {
        
    }
});