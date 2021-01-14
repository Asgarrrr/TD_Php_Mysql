<?php
    class Personnage {
        private $Speudo;
        private $Vie;

        public function __construct($pseudo) {
            $this->Vie = 100;
            $this->Speudo = $pseudo;
        }

        public function showData() {
            echo "<p>$this->Speudo n'a plus que $this->Vie PV !";
        }

        public function attaquer($target) {
            echo("<p>".$this->Speudo." attaque <b>".$target->Speudo."</b>...</p>");
            $this->defendre($target, 50);
        }

        public function defendre($target, $damages) {
            $target->Vie -= $damages;
            echo("<p>".$target->Speudo." subis <b>".$damages."</b> point de dégats</p>");
        }
    }
?>