<?php
    include("../models/Login.php"); 
    $login = new Login(); 
    $conn = $login->openConn();

    $login->closeConn($conn);
?>