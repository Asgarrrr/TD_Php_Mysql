<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <link rel="stylesheet" href="CSS/style.css">
    </head>
    <body>

        <h1>Exercice 9. (objet PDO delete)</h1>
        <ol>
            <li>créer un formulaire HTML qui possède un input select avec tous les speudos de votre Jeu. ( utiliser select * from Personnage ) , la value de chaque option doit être ID du Personnage.</li>
            <li>En validant le formulaire, supprimer le Personnage sélectionné en BDD.<li>
            <li>Reproduisait le même mécanisme mais le PDO et L’ajout en BDD doivent être positionné dans une méthode de votre classe.</li>
            <li></li>
        </ol>

        <form action="" method="get">

            <label for="name">Nom</label>
            <input type="text" name="name" id="name">

            <input type="submit" name="submit" value="Créer mon personnage !">
        </form>

        <?php
        
         if (isset($_GET["submit"])) {
             
            try {

                $DB = new PDO('mysql:host=localhost; dbname=OBJETSPart3; charset=utf8','root', '23w9j4');
                $query = $DB->prepare("INSERT INTO Personnage (Name) VALUES (' ".$_GET["name"]." ')");
                $query->execute();

     
            } catch (\Throwable $th) {
                echo $th;
            }
            
        }            

        ?>

        <h2>Code</h2>
        <pre class="code">
            <?php highlight_file( __FILE__ ); ?>
        </pre>
    </body>
</html>