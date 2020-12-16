<?php
    include "functions.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../../CSS/style.css">
    </head>

    <body>
        <?php include("../../navbar.php") ?>

        <div class="container pt-4">

            <?php

                if ( login() === "OK") {
                    echo "Tu es connecté, le lien est <a href='https://google.com'>ici</a>";
                } else {
                    echo "Mot de passe faux ...";
                }
            ?>

            <h2>Code</h2>
            <pre class="code">
                <?php highlight_file( __FILE__ ); ?>
            </pre>
        </div>
    </body>

</html>