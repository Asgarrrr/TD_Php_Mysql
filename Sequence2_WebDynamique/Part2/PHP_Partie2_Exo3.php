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
            <p>Entrez 5 valeurs et nous vous donnerons la moyenne</p>
            <form action="" method="post">
                <input type="number" name="val1">
                <input type="number" name="val2">
                <input type="number" name="val3">
                <input type="number" name="val4">
                <input type="number" name="val5">
                <button type="submit" name="calcul">calcul</button>
            </form>

            <?php
                if (isset($_POST["calcul"]) ) {

                    echo Moyenne(
                        array(
                            $_POST["val1"],
                            $_POST["val2"],
                            $_POST["val3"],
                            $_POST["val4"],
                            $_POST["val5"],
                            $_POST["val6"]
                        )
                    );
                }
            ?>

            <h2>Code</h2>
            <pre class="code">
                <?php highlight_file( __FILE__ ); ?>
            </pre>
        </div>
    </body>

</html>