<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercice 3 Les tableaux PHP à Double entrée</title>
        <link rel="stylesheet" href="../../CSS/style.css">
<link rel="stylesheet" href="CSS/style.css">

        <body>
        <?php include "../../navbar.php" ?>

        <h1>Exercice 3 Les tableaux PHP à Double entrée.</h1>
        <p>A) Créer un tableau php qui contient un nom un prenom et un mot de passe et qui a pour indice de colonne: Nom, Prenom, MDP.</p>
        <p>Afficher ce tableau avec la commande echo Tableau[‘Nom’] ect</p>

        <h2>Resultat :</h2>

        <?php

            $array = [
                [
                    "Nom"    => "Jean",
                    "Prenom" => "Michel",
                    "MDP"    => "54684547651254"
                ],
                [
                    "Nom"    => "Jaque",
                    "Prenom" => "Adit",
                    "MDP"    => "35465468454684"
                ],
                [
                    "Nom"    => "Jeanne",
                    "Prenom" => "Michelle",
                    "MDP"    => "21644463463874"
                ],
                [
                    "Nom"    => "Jonhatan",
                    "Prenom" => "Joystar",
                    "MDP"    => "5475435768/738"
                ],
                [
                    "Nom"    => "Maelle",
                    "Prenom" => "Elleam",
                    "MDP"    => "56749879877977"
                ]
            ];

        ?>

        <table class="borderedTable">
            <tbody>
                <?php
                    for ($i=0; $i < sizeof($array) ; $i++)
                        echo "<tr><td>".$array[$i]['Nom']."</td><td>".$array[$i]['Prenom']."</td><td>".$array[$i]['MDP']."</td></tr>";
                ?>
            </tbody>
        </table>

        <h2>Code</h2>
        <pre class="code">
            <?php highlight_file( __FILE__ ); ?>
        </pre>
    </body>
</html>