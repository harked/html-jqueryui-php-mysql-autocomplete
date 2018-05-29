<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>Autocomplete Demo with HTML5, jQueryUI, PHP & mySQL</title>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css"/>
        <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
        <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
        <script>
        // Autocomplete will show after user type at least 1 character on input
        $(function() {
            $("#negara").autocomplete({
                source: "Sourcedata.php",
                minLength: 1,
            });
        });
        </script>
    </head>
    <body>
        <div class="autocomplete-form">
            <label for="student">Enter Student : </label>
            <input id="student"/>
        </div>
    </body>
</html>