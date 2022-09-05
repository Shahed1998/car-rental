<?php
    
    trait DB_Conn {
        public function openConn(){
            $serverName = "localhost";
            $username = "root";
            $password = "";
            $dbName = "car-rental";

            $conn = new mysqli($serverName, $username, $password, $dbName);
            
            if(mysqli_connect_error()){
                die("Couldn't connect with DB");
            }

            return $conn;
        }

        public function closeConn($conn){
            try{

                $conn->close();

            }catch(Exception $e){

                die("Unable to close connection");
                
            }
        }
    }

?>