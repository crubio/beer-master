<!doctype html>
<html>
    <head>
        <title></title>
        <link href="/css/test/googlemap.css" rel="stylesheet" type="text/css">
        <!-- I want to use some html5 elements, so we'll create them first for IE8 support -->
        <!--[if lt IE 9]>
           <script>document.createElement('section');</script>
        <![endif]-->
        <!-- Adding google maps recommended styles -->
    </head>
    <body>
        <section class="container">
            <header>
                <h1>Address search</h1>
            </header>
            <form id="address-form">
                <!-- Validation message -->
                <div class="error-alert"></div>
                <fieldset>
                    <legend>Please enter your address</legend>
                    <div class="form-group">
                        <label for="streetNumber">address</label>
                        <input id="streetNumber" name="streetNumber" type="text">
                        <input id="apt" name="apt" type="text">
                    </div>
                    <div class="form-group clearfix">
                        <div class="form-group-inline">
                            <label for="city">city</label>
                            <input id="city" name="city" type="text">
                        </div>
                        <div class="form-group-inline">
                            <label for="stateSelect">state</label>
                            <select id="stateSelect" name="stateSelect">
                                <option></option>
                            </select>
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <div class="form-group-inline">
                            <label for="zipCode">zip code</label>
                            <input id="zipCode" name="zipCode" type="text">
                        </div>
                        <div class="form-group-inline">
                            <label for="country">country</label>
                            <input id="country" name="country" type="text" value="United States" disabled>
                        </div>
                    </div>
                    
                    <button id="submit-addr" class="btn btn-default" type="submit">Submit</button>
                    
                </fieldset>
            </form>
            <div id="map-canvas"></div>
        </section>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="/js/test/googlemap.js"></script>
    </body>
</html>