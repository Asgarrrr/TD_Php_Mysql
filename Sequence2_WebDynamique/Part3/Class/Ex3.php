<?php

    class Personnage {
        private $Speudo;
        private $Vie;

        public function __construct($pseudo) {
            $this->Vie = 100;
            $this->Speudo = $pseudo;
        }

        public function showData() {
            echo "Tu es $this->Speudo et tu as $this->Vie PV !";
        }
    }
?>