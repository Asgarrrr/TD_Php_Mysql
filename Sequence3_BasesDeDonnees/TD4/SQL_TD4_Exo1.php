<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TD4 - Ex1</title>
    </head>
    <body>
        <h1>Ex1</h1>
        <?php
            try {
                $DB = new PDO('mysql:host=localhost; dbname=TableEx4; charset=utf8','root', '23w9j4');
                $query = $DB->query("SELECT * FROM Medecin");
                $query->execute();

                while($userArray = $query->fetch())
                    echo "<p>".$userArray["nom"]." ".$userArray["prenom"]."</p>";

            } catch (\Throwable $th) {
               echo $th;
            }
        ?>
    </body>
</html>