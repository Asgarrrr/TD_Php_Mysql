<?php 

    class removeUser {
        
        private $_ID;
        private $DB;

        public function __construct($_DB, $_ID) {
            $this->_ID = $_ID;
            $this->DB = $_DB;
        }

        public function remove() {
            $this->DB->query("DELETE FROM `Personnage` WHERE _ID = ".$this->_ID);
        }
    }

?>