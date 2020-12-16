<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercice 2.1 Les tableaux PHP à indice numérique</title>
        <link rel="stylesheet" type="text/css" href="CSS/style.css">
    </head>
    <body>
        <a href="../../index.php">Retour</a>
        <h1>Exercice 2.1 Les tableaux PHP à indice numérique</h1>
        <p>A) Créer un tableau php qui contient 5 chiffres.</p>
        <p>Afficher les 5 chiffres à la suite grace au parcours du tableau dans une boucle for.</p>
        <p>B) Essayer d’afficher ses 5 chiffres dans un tableau HTML que génère PHP</p>

        <h2>Resultat ex A :</h2>
        
        <?php
            $array = [12, 45, 75, 95, 99];

            for ($i = 0; $i < 5; $i++)
                echo "<span> ".$array[$i]." </span>";
        ?>

        <h2>Resultat ex B :</h2>
        
        <table class="borderedTable">
            <tbody>
                <tr>
                    <?php
                        for ($i = 0; $i < 5; $i++)
                            echo "<td>".$array[$i]."</td>";
                    ?>
                </tr>

            </tbody>
        </table>

        <h2>Code</h2>
        <pre class="code">
            <?php highlight_file( __FILE__ ); ?>
        </pre>
    </body>
</html>