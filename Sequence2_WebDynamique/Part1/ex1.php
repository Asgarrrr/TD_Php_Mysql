<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercice 1 : les conditions</title>
        <link rel="stylesheet" href="CSS/style.css">
    </head>
    <body>
        <a href="../../index.php">Retour</a>
        <h1>Exercice 1 : les conditions</h1>
        <p>Réaliser une page php qui affiche un cadre bleu si un nombre est impair et en rouge si il
        est paire : vous aurait besoin de la fonction</p>

        <h2>Resultat</h2>
        
        <?php
            $nbr = rand( 0 , 100 );

            echo $nbr%2 == 1 
                ? "<span class='impaire'>".$nbr." est impaire </span>"
                : "<span class='paire'>".$nbr." est paire </span>";
        ?>

        <h2>Code</h2>
        <pre class="code">
            <?php highlight_file( __FILE__ ); ?>
        </pre>
    </body>
</html>