<?php
    include("../models/Dashboard.php");
    session_start();
    
    if(!isset($_SESSION["uid"])){
        header("location: ./logout.php");
    }
    
    $dashboard = new Dashboard();
    $conn = $dashboard->openConn();

    // About section
    $about = $dashboard->aboutSection($conn);
    $_SESSION["dashAboutHeading"] = $about[0]["heading"];
    $_SESSION["dashAboutSub_heading"] = explode(', ',$about[0]["sub_heading"]);
    $_SESSION["dashAboutDescription"] = $about[0]["description"];

    $dashboard->closeConn($conn);


?>