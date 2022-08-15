<?php 
    class Database {
        
        private $host;
        private $username;
        private $password;
        private $database;
        

        public function connect(){
            $this->host = "localhost";
            $this->username = "uoom8hlwgigko";
            $this->password = "spinachMath!";
            $this->database =  "dbse2jrmax3vrx";

            try {
                $pdo = new PDO( "mysql:host=$this->host; 
                                 dbname=$this->database", 
                                 $this->username, 
                                 $this->password );

                $pdo->setAttribute( PDO::ATTR_ERRMODE, 
                                    PDO::ERRMODE_EXCEPTION );
                return $pdo;
            } 
            catch( PDOException $e ){
                echo "Connection failed:  " . $e->getMessage();
            }
        }
    }
?>