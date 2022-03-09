<?php
    class conexion {
        private $server;
        private $user;
        private $passwordServer;
        private $db;

        function __construct() {
            $this->server = 'localhost';
            $this->user = 'root';
            $this->passwordServer = '';
            $this->db = 'keyperformanceindicator';
        }

        function connect($SQL){

            try {
                $pdo = new PDO("mysql:host=".$this->server.";dbname=".$this->db, $this->user, $this->passwordServer);       
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $statement = $pdo->prepare($SQL);
                $statement->execute(); 
                $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

                return $rows;
            }
        
            catch(PDOException $e)
            {
                
            }
        
            $pdo = null;

        }
    }
    
?>