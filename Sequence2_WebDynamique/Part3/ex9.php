<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <link rel="stylesheet" href="../../CSS/style.css"/>
    </head>
    <body>

        <?php include("../../navbar.php"); ?>

        <div class="container mt-5">

            <h1>Exercice 9. (objet PDO delete)</h1>
            <ol>
                <li>créer un formulaire HTML qui possède un input select avec tous les speudos de votre Jeu. ( utiliser select * from Personnage ) , la value de chaque option doit être ID du Personnage.</li>
                <li>En validant le formulaire, supprimer le Personnage sélectionné en BDD.</li>
                <li>Reproduisait le même mécanisme mais le PDO et L’ajout en BDD doivent être positionné dans une méthode de votre classe.</li>
            </ol>

            <form action="" method="post">

            <?php

                $DB = new PDO('mysql:host=localhost; dbname=OBJETSPart3; charset=utf8','root', '23w9j4');
                $query = $DB->query("SELECT * FROM Personnage");
                
            ?>

                <select name='character'> 
                    <?php
                        foreach ($query as $personnage) {
                            echo "<option value='".$personnage["_ID"]."'>".$personnage["Name"]."</option>";
                        }
                    ?>
                </select>
                <input type="submit" name="send" value="Send !"/>
            </form>

            <?php

                if (isset($_POST["send"])) {
                    include "Class/Ex9.php";

                    if (isset($_POST["character"])) {
                        
                        $toRemove = new removeUser($DB, $_POST["character"]);
                        $toRemove->remove();
                    } else echo "Une erreure est survenue";
                    
                }
            
            ?>



            <h2>Code</h2>
            <pre class="code">
                <?php highlight_file( __FILE__ ); ?>
            </pre>
        </div>
    </body>
</html>