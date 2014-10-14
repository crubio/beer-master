<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="author" content="Christopher A. Rubio">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="google-site-verification" content="tg-awBAOXG4pUiYhgTRiVnDxQ1vG0TW7xS4QET7oZQQ" />
        <title>[ beer search ]</title>

        <!-- CSS -->
        <link rel="stylesheet" href="css/global.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/beer/beer.css">

        <!-- JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.12/angular.min.js"></script>
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <!-- AngularJS resources -->
        <script src="js/controllers/beerController.js"></script> <!-- controller -->
        <script src="js/services/beerService.js"></script> <!-- service -->
        <script src="js/app.js"></script> <!-- app -->

    </head>
    <body ng-app="beerApp" ng-controller="mainController">
        <!-- Don't forget to include the nav above this if you want it -->
        <header class="beer-header">
            <div class="container">
                <h1>[ beer search ]</h1>
                <p>Powered by <a href="http://www.brewerydb.com">#brewerydb</a>
            </div>
        </header>

        <!-- App section -->
        <hr />
        <section class="container">
            <section class="col-lg-7 col-md-7 content-box-nobg">
                <!-- Angular handles the AJAX call -->
                <form class="form" ng-submit="submitQuery()">
                    <div class="form-group">
                        <fieldset>
                            <legend>Find a beer, brewery, style, etc</legend>
                            <input type="text" name="search" class="form-control" ng-model="formData.search">
                        </fieldset>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-default">Find it</button>
                        <div class="pull-right">
                            <label for="orderBy">order by</label>
                                <select id="orderBy" type="select" ng-model="orderProp">
                                    <option value="abv">Alchohol %</option>
                                    <option value="ibu">Hoppiness</option>
                                    <option value="name">Alphabetical</option>
                                </select>
                            </label>
                        </div>
                    </div>
                </form>
                <!-- Inject AngularJS templates here -->
                <section ng-show="beerData.success" class="col-lg-12 col-md-12">
                    <section class="result-container" ng-repeat="(key, row) in beerData | orderBy: orderProp" data-id="{{row.id}}">
                        <div class="result-list row" ng-show="row.labels.medium">
                            <div class="col-sm-3 col-md-5 img-container">
                                <img ng-src="{{row.labels.medium}}">
                            </div>
                            <div class="col-xs-12 col-sm-9 col-md-7">
                                <h2>{{row.name}}</h2>
                                <h3>{{row.breweries[0].name}}</h3>
                                <span>{{row.style.name}}</span>
                                <span ng-show="row.abv">{{row.abv}}% ABV</span>
                                <p>{{row.description}}</p>
                            </div>
                        </div>
                    </section>
                </section>
            </section>
            <section class="col-lg-1 col-md-1"></section>
            <section class="col-lg-4 col-md-4 content-box" style="height:400px;">
                <p>placeholder</p>
            </section>
        </section>
    </body>
</html>