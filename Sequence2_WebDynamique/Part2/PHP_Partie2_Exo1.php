<?php
    include "functions.php";
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../../CSS/style.css">
    </head>

    <body>
        <?php include("../../navbar.php") ?>
        <div class="container pt-4">

            <?php PrintTable("Titre 1", "Titre 2", "Titre 3"); ?>
            <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus velit saepe labore nemo voluptatibus vero dolore, dignissimos nesciunt consectetur voluptate fugit quidem quisquam nostrum rerum ducimus iure architecto magni sit.</p>
            <?php PrintTable("Titre 1", "Titre 2", "Titre 3"); ?>

            <h2>Code: </h2>
            <pre class="code">
                <?php highlight_file( __FILE__ ); ?>
            </pre>
        </div>
    </body>

</html>