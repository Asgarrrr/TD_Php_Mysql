<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <link rel="stylesheet" href="CSS/style.css">
    </head>
    <body>

        <h1>Exercice 2. (création d’un constructeur)</h1>
        <p>Une classe peu posséder une méthode spéciale : « constructeur ». Cette méthode est
           automatiquement appelée lorsqu’un objet de cette classe est instancié (créée)</p>
        <ol>
            <li>Créer une classe Personnage qui possède 2 propriétés : Speudo et Vie ainsi qu’un constructeur vide : public function __construct(){}</li>
            <li>Implémenter le constructeur pour qu’il initialise la propriétés vie à 100</li>
        </ol>

        <?php

            class Personnage {
                public $Speudo;
                public $Vie;
    
                function __construct() {
                    $this->Vie = 100;
                }

                function showPv() {
                    echo "$this->Vie";
                }
            }

            $perso = new Personnage();
            $perso -> showPv();
        ?>

        <h2>Code</h2>
        <pre class="code">
            <?php highlight_file( __FILE__ ); ?>
        </pre>
    </body>
</html>