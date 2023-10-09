<?php
    include_once ("config.php");
        session_start();

        class Conectar{
            protected $dbh;

            protected function Conexion(){
                try{
                    $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=tickbq", "root","");
                    //$conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=bbbme11_tickets", "bbbme11_ccima","GBUD0G2j6N*7");
                    
                    return $conectar;
                } catch (Exception $e) {
                    print "¡Error BD!: " .$e->getMessage()."<br/>";
                    die();
                }
            }

            public function set_names(){
                return $this->dbh->query("SET NAMES 'utf8'");
            }

            public function ruta(){
                //return $rootPath;
                return "http://localhost/TicketBQ/";
            }
        }
?>