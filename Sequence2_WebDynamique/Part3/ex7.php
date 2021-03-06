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

            <h1>Exercice 7. (objet PDO Select ALL)</h1>
            <ol>
                <li>Créer plusieurs personnage dans votre BDD.</li>
                <li> en PHP faites une requête select * from Personnage avec un objet PDO instancier dans votre program principal ( pas dans la classe ) . faites une boucle while sur les résultats et instancier chaque objet Personnage en le rangeant dans un tableau</li>
                <li>parcourez en fin de page votre tableau (foreach) récupérer l’objet Personnage dedans et afficher son speudo et ses points de vie avec la méthode afficherPersonnage de votre classe Personnage</li>
            </ol>
            <p>rappel: $Tableau = Array() ;</p>
            <p>Ajouter une case : array_push($tableau, $Personnage);</p>
            <p>Récupérer un objet personnage : $Personnage = $Tableau[indice] ;</p>

            <?php

                include "Class/Ex7.php";

                try {
                    $Players = array();
                    $DB = new PDO('mysql:host=localhost; dbname=OBJETSPart3; charset=utf8','root', '23w9j4');
                    $query = $DB->query("SELECT * FROM Personnage");

                while($userArray = $query->fetch())
                    array_push($Players, new Personnage($userArray));
            
                foreach($Players as $value) 
                    $value->showData();
                } catch (\Throwable $th) {
                    echo $th;
                }
            ?>

            <h2>Code</h2>
            <pre class="code">
                <?php highlight_file( __FILE__ ); ?>
            </pre>
        </div>
    </body>
</html>