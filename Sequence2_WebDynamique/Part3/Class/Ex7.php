<?php

    class Personnage {
        private $_ID;
        private $Name;
        private $HP;


        public function __construct($dataPlayer) {
            $this->_ID = $dataPlayer["_ID"];
            $this->Name = $dataPlayer["Name"];
            $this->HP = $dataPlayer["HP"];
        }

        public function showData() {
            echo "<p>Le p'tit chien n°".$this->_ID." ".$this->Name." posséde ".$this->HP." PV ! Pas mal du tout. c:";
        }
    } 
?>