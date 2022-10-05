<?php

    require("DB_Conn.php");
    require("CustomException.php");

    class Dashboard {
        use DB_Conn;

        // ------------------------------------------ About section
        public function getAboutSectionFieldContent($conn){
            try{

                $sql = "SELECT * FROM about";
                $result=$conn->query($sql);
                if($result->num_rows == 1){
                    $result = $result->fetch_assoc();
                    return [$result, True];
                }else {
                    throw new CustomException("Unable to find user : custom");
                }

            }catch(CustomException $e){
                return [$e->errorMessage(), False];
            }
            catch(Exception $e){
                return [$e->getMessage(), False];
            }

        }
    }

?>