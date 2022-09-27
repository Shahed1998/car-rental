<?php  
    include("../controllers/dashboardController.php");
    include("./includes/header.php");
    include("./includes/modal.php");
    include("./includes/dashboard/dashNav.php"); 
    include("./includes/dashboard/profile.php");
    include("./includes/dashboard/about.php");
    include("./includes/dashboard/cars.php");
    include("./includes/dashboard/services.php");
    include("./includes/dashboard/contact.php");
?>
<script src="../public/js/dashboard.js?v=<?= time(); ?>"></script>
<?php include("./includes/footer.php"); ?>

