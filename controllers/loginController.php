<?php
    include("../models/Login.php"); 
    $login = new Login(); 
    $conn = $login->openConn();
    $login->getUsers($conn, 'abcd', 'abcd');
    $login->closeConn($conn);
?>