<?php
    class Personnage {
        private $user;

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
    }
?>