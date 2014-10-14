/* 
* Glue it together. Our app requires our main controller and api service call    
*/
var beerApp = angular.module('beerApp', ['beerController', 'Services']);