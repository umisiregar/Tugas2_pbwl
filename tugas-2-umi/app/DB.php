<?php
    namespace App;
    use PDO;

    class DB{
        protected object $db;

        public function __construct(){
            try{
                $this->db = new PDO("mysql:host=localhost;dbname=tugas_2_umi", "root", "");
            } catch(\Exception $e){
                die("Error : " . $e->getMassage());
            }
        }
    }
