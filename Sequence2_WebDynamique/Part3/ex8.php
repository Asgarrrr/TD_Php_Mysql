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

            <h1>Exercice 8. (objet PDO Insert)</h1>
            <ol>
                <li>Créer un formulaire HTML qui possède les champs representant les propriétés de votre Classe Personnage.</li>
                <li>En validant le formulaire, ajouter un Personnage en BDD.</li>
                <li>Reproduisait le même mécanisme mais le PDO et L’ajout en BDD doivent être positionné dans une méthode de votre classe.</li>
            </ol>

            <form method="POST">
                <p>
                    <label for="name">Nom</label>
                    <input type="text" name="name">
                </p>
                <p>
                    <label for="name">Points de vie</label>
                    <input type="number" name="hp">
                </p>

                <input type="submit" name="submit" value="Créer mon personnage !">
            </form>

            <?php

                $DB = new PDO('mysql:host=localhost; dbname=OBJETSPart3; charset=utf8','root', '23w9j4');
                include "Class/Ex8.php";
                
                if (isset($_POST["submit"])) {

                    $toAdd = new AddUser($DB, $_POST["name"], $_POST["hp"]);
                    $toAdd->insert();
                
                }

            ?>

            <h2>Code</h2>
            <pre class="code">
                <?php highlight_file( __FILE__ ); ?>
            </pre>
        </div>
    </body>
</html>