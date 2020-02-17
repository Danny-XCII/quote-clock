<?php require_once "core/init.php"; ?>
<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">

        <title>Inspirational Clock</title>

        <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    </head>

    <body class="purple">

        <div id="controls">

            <span onclick="switchTheme('purple')"></span>

            <span onclick="switchTheme('red')"></span>

            <span onclick="switchTheme('green')"></span>

        </div>

        <div id="clock">00:00:00</div>

        <div id="quote-container">

            <?= $slider; ?>

        </div>

        <div id="vb"></div>

        <div id="sunrise"></div>

        <script src="assets/js/clock.js"></script>

        <!-- View on Github bar -->
        <script src="https://tools.winningweb.co.uk/view-on-github/ViewOnGithub.js"></script>
        <script>
        new ViewOnGithub( "vb", "Danny-XCII", "quote-clock" );
        </script>

    </body>

</html>