<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercice 4 Les opérateurs PHP.</title>
        <link rel="stylesheet" href="../../CSS/style.css">
        <link rel="stylesheet" href="CSS/style.css">
    </head>
        <body>
        <?php include "../../navbar.php" ?>

        <h1>Exercice 4 Les opérateurs PHP</h1>
        <p>Créer un petit programme php qui résout une équation du second degré de type Ax2 + Bx + C = 0 Comme on ne maitrise pas pour le moment les entrées utilisateur les variables A, B et C seront rentré manuellement dans le programme.</p>

        <h2>Resultat :</h2>

        <?php

            $A = 3; $B = 9; $C = -84;

            if ($A!=0) {

                $D = $B * $B - 4 * $A * $C;

                echo "<p>Le déterminant vaut <strong>".$D."</strong></p>";

                if( $D < 0 ) {
                    echo "<p>Aucune solution !</p>";
                }
                elseif( $D == 0 ) {
                    $X =- $B / (2 * $A);
                    echo "<p>Solution unique : X = ".$X."</p>";
                }
                elseif( $D >= 0 ) {
                    $X1 = (-$B-sqrt($D))/(2*$A);
                    $X2 = (-$B+sqrt($D))/(2*$A);
                    echo "Solution double : S = {".$X1." ; ".$X2."}";
                }
            }

        ?>

        <h2>Code</h2>
        <pre class="code">
            <?php highlight_file( __FILE__ ); ?>
        </pre>
    </body>
</html>
