<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercice 2.1 Les tableaux PHP à indice numérique</title>
        <link rel="stylesheet" href="../../CSS/style.css">
<link rel="stylesheet" href="CSS/style.css">

    <body>
        <?php include "../../navbar.php" ?>

        <h1>Exercice 2.2 Les tableaux PHP à indice nommé.</h1>
        <p>A) Créer un tableau php qui contient un nom un prenom et un mot de passe et qui a pour indice de colonne: Nom, Prenom, MDP.</p>
        <p>Afficher ce tableau avec la commande echo Tableau[‘Nom’] ect</p>

        <h2>Resultat :</h2>

        <?php

            $array = [
                "Nom"    => "Jean",
                "Prenom" => "Michel",
                "MPD"    => "UnMotDePasseRobuste"
            ];

            echo $array["Nom"]

        ?>

        <h2>Code</h2>
        <pre class="code">
            <?php highlight_file( __FILE__ ); ?>
        </pre>
    </body>
</html>