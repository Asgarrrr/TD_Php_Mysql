<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <link rel="stylesheet" href="CSS/style.css">
    </head>
    <body>

        <h1>Exercice 4. (interaction entre objet)</h1>
        <p>Les méthodes des classes peuvent prendre des paramètres ( $variables ) qui peuvent être aussi des Objets</p>
        <ol>
            <li>créer une méthode "attaquer" qui prend en paramétre un autre personnage</li>
            <li>créer une méthode " défense" qui prend en paramètre une valeur d’attaque.</li>
            <li>Implémenter la méthode attaquer : elle doit appeler la méthode défense de l’objet personnage passé en paramètre et lui mettre 50 de dégat</li>
            <li>Implémenter la méthode défense pour que la valeur d’attaque passée en paramètre décrémente la propriété vie du personnage.</li>
            <li>Rajouter des méthodes et des echos pour afficher les etapes de jeu.</li>
            <li>Instancier 2 personnage dont l’un attaque l’autre.</li>
            <li>Afficher le résultat de déroulement de l’attaque en HTML.</li>
        </ol>

        <?php

            class Personnage {
                public $Speudo;
                public $Vie;
    
                function __construct($pseudo) {
                    $this->Vie = 100;
                    $this->Speudo = $pseudo;
                }

                function showData() {
                    echo "<p>$this->Speudo n'a plus que $this->Vie PV !";
                }

                function attaquer($target) {
                    echo("<p>".$this->Speudo." attaque <b>".$target->Speudo."</b>...</p>");
                    $this->defendre($target, 50);
                }

                function defendre($target, $damages) {
                    echo("<p>".$target->Speudo." subis <b>".$damages."</b> point de dégats</p>");
                    $target->Vie -= $damages;
                }
            }

            $Player1 = new Personnage("Julien");
            $IA      = new Personnage("IA");
            $IA      -> attaquer($Player1);
            $Player1 -> showData();
        ?>

        <h2>Code</h2>
        <pre class="code">
            <?php highlight_file( __FILE__ ); ?>
        </pre>
    </body>
</html>