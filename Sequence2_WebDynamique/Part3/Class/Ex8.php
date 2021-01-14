<?php 

    class AddUser {
        
        private $username;
        private $hp;
        private $DB;

        public function __construct($DB, $username, $hp) {
            $this->username = $username;
            $this->hp = $hp;
            $this->DB = $DB;
        }

        public function insert() {
            $this->DB->query("INSERT INTO `Personnage`(`Name`, `HP`) VALUES ('".$this->username."', '".$this->hp."')");
            
        }
    }

?>