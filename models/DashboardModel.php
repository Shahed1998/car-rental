<?php

    require("DB_Conn.php");
    require("CustomException.php");

    class Dashboard {
        use DB_Conn;

        // ------------------------------------------ About section
        public function getFieldContent($conn, $uc_id){
            try{

                $sql = "SELECT 
                `user-credentials`.`username`,
                `about`.`heading`, `about`.`sub_heading`, `about`.`description`, `about`.`image`,
                `user-type`.`type`
                FROM `user-credentials` 
                inner join `user-type` on `user-type`.id = `user-credentials`.`user`
                inner join `about` on `user-type`.`id` = `about`.`user`
                where `user-type`.id = 1 and `user-credentials`.`id` = '$uc_id' ";
                
                $result = $conn->query($sql);

                if($result->num_rows == 1){
                    $result = $result->fetch_assoc();
                    var_dump($result);
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