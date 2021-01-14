<?php

    class Personnage {
        private $Speudo;
        private $Vie;

        public function __construct() {
            $this->Vie = 100;
        }

        public function showPv() {
            echo "Tu as $this->Vie";
        }
    }

?>