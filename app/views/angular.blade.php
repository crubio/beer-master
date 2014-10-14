@extends('layouts.master')

@section('title')
@parent
:: Let's get Angular!
@stop

@section('content')
<!-- Declare this as an angular app and spec the controller -->
<div class="row group cards"
    <section class="col span12" ng-app="getAngular" ng-controller="MainController">
        <div class="row group card">
            <form role="form" method="GET" action="/beers" class="">
                <fieldset>
                    <div class="form-group">
                        <legend>Find a beer, brewery, style, etc</legend>
                        <label for="beer-search"><input id="beer-search" type="text" name="search" ng-model="inputValue"></label>
                    </div>
                </fieldset>
                <button class="btn btn-default" type="submit" name="submit" value="submit">Find it</button>
            </form>
        </div>

        <div class="row group card">
            <h3>This is an angularjs binding example.</h3>
            <!-- ng-options gets the name in our object -->
            <select ng-model="selectedBeer" ng-options="obj.name for obj in beers"></select>
            <!-- ng-repeat will create an option for each beers.tastes array based on the selectedBeer id -->
            <select ng-model="selectedStyle">
                <option ng-repeat="label in beers[selectedBeer.id].taste">@{{label}}</options>
            </select>
            <p style="margin-top: 20px;">We select a beer and bind it to the name value in $scope.beers
                The option values repeat and use the selected beer id value to
                specify values for the taste in the second option drop down.
            </p>
        </div>
        <div class="row group card">
            <h3>Filtering data with angularjs</h3>
            <!-- this input will bind to searchText model -->
            <input type="text" ng-model="searchText" style="margin-bottom: 20px;">
            <!-- our repeating list -->
            <ul>
                <li ng-repeat="beer in beers | filter:searchText">@{{beer.id}}: @{{beer.name}}</li> 
            </ul>
            <p>Here we create an li element for each 'beer' in the $scope.beer array.  Think of it as 
                foreach($beers AS $beer) in PHP, but written a bit different.  We pipe the filter (directive)
                which is provided with the searchText model.
        </div>
        <div class="row group card">
            <h3>Hiding/showing elements with angularjs</h3>
            <input type="text" ng-model="searchText" style="margin-bottom: 20px;">
            <!-- ng-hide/show will hide or show the element depending on its 'production' value (boolean) -->
            <ul>
                <li ng-repeat="beer in beers | filter:searchText" ng-show="beer.production == true">@{{beer.id}}: @{{beer.name}}</li>
            </ul>
            <ul>
                <li ng-repeat="beer in beers | filter:searchText" ng-hide="beer.production == true">@{{beer.id}}: @{{beer.name}}</li>
            </ul>
            <p>Here we have the same filter directive bound to the searchText model, but the top list shows all beers currently in production.
                The bottom list hides all beer in production (showing those out of production).  This is done using ng-show or ng-hide on the
                li element.
        </div>
        <div class="row group card">
            <h3>Events with angularjs</h3>
            <ul>
                <li ng-repeat="beer in beers | filter:searchText" ng-show="beer.production == true">@{{beer.id}}: @{{beer.name}}</li>
            </ul>
            <!-- a new input box! -->
            <input type="text" ng-model="newBeer">
            <!-- use to add a new beer -->
            <button ng-click="addNew()">Add</button>
            <p>Here is our existing list, please add one!  First we add $scope.newBeer in our controller - its initialized as null.
                Next, the function for addNew is written which is fired on button click.  Aside from validation, we basically take the
                value entered as the name of the new beer and add it to the $scope.beers array of objects using push (just like PHP's array push).
        </div>
    </section>
@stop