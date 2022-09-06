<?php 
    require "DB_Conn.php";
    require "CustomException.php";

    class Login extends CustomException {
        use DB_Conn;
        
        public function getUsers($conn, $username, $password){
            try{
                $sql = "SELECT * FROM `user-credentials`
                 WHERE username='$username' AND password='$password'";

                $result = $conn->query($sql);

                if($result->num_rows > 0){
                    $result = $result->fetch_assoc();
                    return $result;
                }else {
                    throw new CustomException("Unable to find user : custom");
                }

            }
            catch(CustomException $e){
                return $e->errorMessage();
            }
            catch(Exception $e){
                return $e->getMessage();
            }
        }

    }

?>