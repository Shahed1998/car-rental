<?php
    include("../models/DashboardModel.php");
    session_start();
    
    if(!isset($_SESSION["uid"]) || $_SESSION["user"] != 1){
       return header("location: ./login.php");
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
    // Profile form
    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        // Profile form
        if ($_POST["formSubmitBtn"] == "profile"){
            $password = $_POST["u_profile_password"];
            
        }

        // About form
        if ($_POST["formSubmitBtn"] == "about"){
            echo "about";
        }
    }
    

?>