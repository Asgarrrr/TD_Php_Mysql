<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <link rel="stylesheet" href="CSS/style.css">
    </head>
    <body>

        <h1>Exercice 6. (objet PDO Update)</h1>
        <p>Les méthodes des classes peuvent prendre des paramètres ( $variables ) qui peuvent être aussi des Objets</p>
        <ol>
            <li>Dans la méthode défense, utiliser le PDO de votre Personnage pour faire une requête update pour modifier les points de vie de votre personnage en BDD</li>
            <li>Vérifier en base que vos personnages perdent bien leur vie après un combat (pour faire un combat c’est Personnage1->attaque(Personnage2) ; )</li>
            <li>Faites une méthode soin pour remettre la vie du personnage à son maximum et le mettre à jour dans la BDD</li>
    
        </ol>

        <?php

            class Personnage {
                public $user;
                public $DB;
    
                function __construct($ID) {
                    try {
                        $DB = new PDO('mysql:host=localhost; dbname=OBJETSPart3; charset=utf8','root', '23w9j4');
                        $user = $DB->query("SELECT * FROM Personnage WHERE _ID=$ID")->fetch();
                        $this->DB = $DB;
                        $this->user = $user;
                    } catch (\Throwable $th) {
                        echo $th;
                    }
                }


                function showData() {
                    echo "<p>".$this->user['Name']." n'a plus que ".$this->user['HP']." PV !";
                }

                function attaquer($target) {
                    echo("<p>".$this->user['Name']." attaque <b>".$target->user['Name']."</b>...</p>");
                    $this->defendre($target, 50);
                }

                function defendre($target, $damages) {
                    echo("<p>".$target->user['Name']." subis <b>".$damages."</b> points de degats...</p>");
                    $target->user['HP'] -= $damages;
                    $this->DB->query("UPDATE Personnage SET HP = ".$target->user['HP']." WHERE _ID =".$target->user['_ID']);

                }

                function heal($target) {
                    $target->user['HP'] = 100;
                    $this->DB->query("UPDATE Personnage SET HP = 100 WHERE _ID =".$target->user['_ID']);
                }

            }

            $Player1 = new Personnage(1);
            $Player2 = new Personnage(2);
            $Player2 -> attaquer($Player1);
        ?>

        <h2>Code</h2>
        <pre class="code">
            <?php highlight_file( __FILE__ ); ?>
        </pre>
    </body>
</html>