<?php
    include("../models/Dashboard.php");
    session_start();
    
    if(!isset($_SESSION["uid"])){
        header("location: ./logout.php");
    }
    
    // ------------------------------- On page load ----------------------
    $dashboard = new Dashboard();
    $conn = $dashboard->openConn();

    // About section 
    $about = $dashboard->getAboutSectionFieldContent($conn);

    if ($about[1]){
        $_SESSION["dashAboutHeading"] = $about[0]["heading"];
        $_SESSION["dashAboutSub_heading"] = explode(', ',$about[0]["sub_heading"]);
        $_SESSION["dashAboutDescription"] = $about[0]["description"];
    }else {
        die($about[0]);
    }

    $dashboard->closeConn($conn);

    // ------------------------------- On form submission ----------------------
    // About form
    if ($_SERVER["REQUEST_METHOD"]=="POST" && $_POST["aboutFormSubmitBtn"]=="Update"){
        // $password = $_POST["password"];
        
    }

?>