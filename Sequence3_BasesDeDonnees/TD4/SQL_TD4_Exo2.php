<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TD4 - Ex2</title>
    </head>
    <body>
        <h1>Ex2</h1>
        <form method="post">
            <label for="query">Select : </label>
            <input type="text" name="query" id="query" required>
            <button type="submit" name="submit">Send !</button>
        </form>

        <?php
            try {

                include("fonctions.php");
                $DB = connec("TableEx4");

                if (isset($_POST["submit"]))
                    afficher_requet_select($DB, $_POST["query"]);

            } catch (\Throwable $th) {
               echo $th;
            }
        ?>
    </body>
</html>