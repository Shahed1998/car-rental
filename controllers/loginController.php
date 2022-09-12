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
        }
        
        $login->closeConn($conn);

    }

    
?>