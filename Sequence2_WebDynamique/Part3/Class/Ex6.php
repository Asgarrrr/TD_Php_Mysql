<?php

    class Personnage {
        private $user;
        private $DB;

        public function __construct($ID) {
            try {
                $DB = new PDO('mysql:host=localhost; dbname=OBJETSPart3; charset=utf8','root', '23w9j4');
                $user = $DB->query("SELECT * FROM Personnage WHERE _ID=$ID");
                if ($user->rowCount() == 0) {
                    exit("Aucun utilisateur trouvé");
                } else $this->user = $user->fetch();
            } catch (\Throwable $th) {
                echo $th;
            }
        }

        public function showData() {
            echo "<p>".$this->user['Name']." n'a plus que ".$this->user['HP']." PV !";
        }

        public function attaquer($target) {
            echo("<p>".$this->user['Name']." attaque <b>".$target->user['Name']."</b>...</p>");
            $this->defendre($target, 50);
        }

        public function defendre($target, $damages) {
            echo("<p>".$target->user['Name']." subis <b>".$damages."</b> points de degats...</p>");
            $target->user['HP'] -= $damages;
            $this->DB->query("UPDATE Personnage SET HP = ".$target->user['HP']." WHERE _ID =".$target->user['_ID']);

        }

        public function heal($target) {
            $target->user['HP'] = 100;
            $this->DB->query("UPDATE Personnage SET HP = 100 WHERE _ID =".$target->user['_ID']);
        }

    }

?>