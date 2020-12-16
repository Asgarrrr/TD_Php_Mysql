<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TD4 - Ex3</title>
    </head>
    <body>
        <h1>Ex3</h1>
        <form method="post">
            <label for="query">Nom : </label>
            <input type="text" name="name" id="name" required>
            <label for="query">Prenom : </label>
            <input type="text" name="subname" id="subname" required>
            <button type="submit" name="submit">Send !</button>
        </form>

        <?php
            try {

                include("fonctions.php");
                $DB = connec("TableEx4");

                if (isset($_POST["submit"]))
                    insert($DB, "'". $_POST["name"]."','". $_POST["subname"]."'");

            } catch (\Throwable $th) {
               echo $th;
            }
        ?>
    </body>
</html>