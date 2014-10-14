<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="Christopher A. Rubio">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="tg-awBAOXG4pUiYhgTRiVnDxQ1vG0TW7xS4QET7oZQQ" />
    <title>[ dns lookup ]</title>

    <!-- CSS -->
    <link rel='stylesheet' href="css/global.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dnslookup/index.css">

    <!-- JS -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</head>
<body>
    <section class="container app">
        <header class="col-lg-8 col-md-8">
            <h1>DNS lookup</h1>
        </header>
        <!-- offset -->
        <section class="col-lg-8 col-md-8">
            <!-- FORM SECTION -->
            <form class="form">
                <legend>enter domain name or IP</legend>
                <fieldset>
                    <div class="form-group">
                        <label for="query"></label>
                        <input type="text" name="query" id="query" class="form-control" placeholder="lookup...">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success pull-left">Lookup</button>
                        <div class="col-md-5">
                            <select name="type" class="form-control pull-left">
                                <option value="1">A</option>
                                <option value="2">MX</option>
                                <option value="3">SPF</option>
                                <option value="4">TXT</option>
                                <option value="5">PTR (reverse IP lookup)</option>
                                <option value="6">CNAME</option>
                                <option value="7">WHOIS</option>
                            </select>
                        </div>
                    </div>
                </fieldset>
            </form>

            <!-- tabular query results -->
            <section class="result-set"></section>

        </section>
    </section>
    <!-- JS for app -->
    <script src="js/dnslookup/index.js"></script>
</body>
</html>