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

            <h1>Exercice 3. (création d’un constructeur avec paramètre)</h1>
            <p>Une classe peu posséder une méthode spéciale : « constructeur ». Comme c’est une méthode elle peu recevoir des paramètres. Attention à partir du moment ou il y a un constructeur qui attend des paramètres vous ne pouvez plus instancier votre classe sans paramètre</p>
            <ol>
                <li>Reprendre la classe Personnage et implémenter le constructeur pour qu’il initialise la propriétés vie à 100 et initialise la propriété speudo avec la valeur passer en paramètre</li>
                <li>Créer un personage Exemple personage1 = new personage("Julien") ;</li>
                <li>Ajouter une méthode dans votre classe pour afficher le nombre de point de vie du personnage ainsi que son speudo.</li>
            </ol>

            <?php

                include "Class/Ex3.php";

                $Player1 = new Personnage("Julien");
                $Player1 -> showData();
            ?>

            <h2>Code</h2>
            <pre class="code">
                <?php highlight_file( __FILE__ ); ?>
            </pre>
        </div>
    </body>
</html>