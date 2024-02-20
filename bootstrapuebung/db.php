<?php

    

    class database{

        private $hostname = 'localhost';
        private $dbname ='bootstrapuebubung';
        private $username ='root';
        private $pw = '';
        function connect(){
            
        
            try{
                $dsn = "mysql:host=".$this->hostname.";dbname=".$this->dbname;
                $pdo = new pdo($dsn,$this->username,$this->pw);
                $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
    
                return $pdo;
                }
                catch(PDOException $e){
                    die('Connection error!'.$e->getMessage());
                }
        }
    }


?>