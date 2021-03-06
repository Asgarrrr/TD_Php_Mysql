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

            <h1>Exercice 5. (objet PDO Select)</h1>
            <p>Les méthodes des classes peuvent prendre des paramètres ( $variables ) qui peuvent être aussi des Objets</p>
            <ol>
                <li>Créer en BDD une table personnage avec les propriétés de la classe personnage. (Pensez toujours à rajouter un champ id)</li>
                <li>Créer plusieurs Personnage avec phpMyadmin dans votre Table</li>
                <li>Modifier votre constructeur de Classe pour avoir en paramètre un id</li>
                <li>Dans votre classe Personnage instancier un objet PDO dans la méthode constructeur puis faites un select * from personnage where id = id . ( je vous conseil de mettre l’objet PDO dans une propriété de votre classe )</li>
                <li>Initialiser les propriétés de votre Classe Personnage avec les données récupéré de la requête BDD</li>
                <li>Instancier un Personnage et afficher ses informations. Exemple : $P1 = new Personnage(12) ; $P1->AfficherPersonnage();</li>
            </ol>

            <?php

                include "Class/Ex5.php";

                $Player1 = new Personnage(1);
                $Player1->showData();
            ?>

            <h2>Code</h2>
            <pre class="code">
                <?php highlight_file( __FILE__ ); ?>
            </pre>
        </div>
    </body>
</html>