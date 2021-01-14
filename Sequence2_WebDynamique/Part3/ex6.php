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

            <h1>Exercice 6. (objet PDO Update)</h1>
            <p>Les méthodes des classes peuvent prendre des paramètres ( $variables ) qui peuvent être aussi des Objets</p>
            <ol>
                <li>Dans la méthode défense, utiliser le PDO de votre Personnage pour faire une requête update pour modifier les points de vie de votre personnage en BDD</li>
                <li>Vérifier en base que vos personnages perdent bien leur vie après un combat (pour faire un combat c’est Personnage1->attaque(Personnage2) ; )</li>
                <li>Faites une méthode soin pour remettre la vie du personnage à son maximum et le mettre à jour dans la BDD</li>
        
            </ol>

            <?php

                include "Class/Ex6.php";

                $Player1 = new Personnage(1);
                $Player2 = new Personnage(2);
                $Player2 -> attaquer($Player1);
            ?>

            <h2>Code</h2>
            <pre class="code">
                <?php highlight_file( __FILE__ ); ?>
            </pre>
        </div>
    </body>
</html>