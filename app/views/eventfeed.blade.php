<html>
<head>
    <title>Event Feed #SJ</title>
    {{ HTML::style('css/bootstrap.min.css')}}
    {{ HTML::style('css/global.css')}}
    {{ HTML::style('css/test/eventfeed.css') }}
</head>
<body>
    <section class="container-960">
        <h1>Event Feed #SJ</h1>
        <form method="GET" class="form-inline">
            <div class="form-group">
                <label for="q" class="">Search events</label>
                <input type="text" name="q" class="form-control" id="event-query" placeholder="What are you looking for?">
            </div>
            <div class="form-group">
                <label for="location" class="">Location</label>
                <input type="text" name="location" class="form-control" id="location" placeholder="San Jose, CA" disabled="disabled">
            </div>
            <button type="submit" class="btn btn-default">Go</button>
        </form><!--/form-->

        
        
    </section>
</body>
</html>