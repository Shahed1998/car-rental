<?php
    include("../models/Login.php"); 
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["login"] == "Sign in"){
        $username = htmlentities($_POST["username"]);
        $password = htmlentities($_POST["password"]);

        $login = new Login();
        $conn = $login->openConn();
        $res = $login->getUsers($conn, $username, $password);

        if(!$res[1]){
            $_SESSION["error"] = "User does not exist";
        }else {
            $_SESSION["uid"] = $res[0]["id"];
            $_SESSION["uname"] = 
                // capitalize the first letter 
                strtoupper($res[0]["username"][0]).strtolower(substr($res[0]["username"],1));
            header("location: ./dashboard.php");
        }
        
        $login->closeConn($conn);

    }

    
?>
