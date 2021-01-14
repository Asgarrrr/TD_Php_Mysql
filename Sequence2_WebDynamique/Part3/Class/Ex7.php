<?php

    class Personnage {
        private $player;

        public function __construct($dataPlayer) {
            $this->player = $dataPlayer;
        }

        public function showData() {
            echo "<p>Le joueur n°".$this->player['_ID']." ".$this->player['Name']." posséde ".$this->player['HP']." PV !";
        }
    } 
?>