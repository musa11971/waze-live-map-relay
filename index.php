<?php require 'relay-request.php';  ?>
<html lang="en">
    <head>
        <title>Waze Live Map Relay</title>

        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php foreach($errors as $error) { ?>
            <span class="error"><?= $error ?></span>
        <?php } ?>

        <main>
            <h1>Waze Live Map Relay</h1>

            <p>This small app allows you to navigate to locations on the Waze live map with a human readable string.</p>

            <div id="instructions">
                <strong>How to use</strong>
                <ol>
                    <li>Register for the free plan on <a href="https://positionstack.com/" target="_blank">positionstack</a>.</li>
                    <li>Take note of the API key issued by positionstack.</li>
                    <li>Use Waze Live Map Relay as follows:</li>
                </ol>

                <div class="code">http://waze-live-map-relay.herokuapp.com?to=Amsterdam&key=<span>{API_KEY}</span></div>
            </div>
        </main>
    </body>
</html>
