<?php

    session_start();
    
    if(!isset($_SESSION["uid"]) || $_SESSION["user"] != 2){
       return header("location: ./login.php");
    }

?>