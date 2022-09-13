<?php
    include("../models/Dashboard.php");
    session_start();
    
    if(!isset($_SESSION["uid"])){
        header("location: ./logout.php");
    }
    


?>