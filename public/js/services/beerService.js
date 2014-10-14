// Angular service for getting api results

angular.module('Services', [])

    .factory('beerService', function($http){

        return {
            // Return beer query
            get : function(searchData) {
                return $http({
                    method: 'GET',
                    url: '/api/beers',
                    params: searchData
                });
            },

            heartbeat : function() {
                console.log('checking in, wat');
            } 

            // Write a method for saving this to a user here

            // Write a method for posting to a beer entry
        }
    });