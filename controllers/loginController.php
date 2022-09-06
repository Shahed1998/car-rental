<?php
    include("../models/Login.php"); 
    $login = new Login(); 
    $conn = $login->openConn();
    $login->getUsers($conn, 'abc', 'abcd');
    $login->closeConn($conn);
?>