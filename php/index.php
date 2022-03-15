<!-- Header -->
<?php
    $activePage = $_GET['page'];
    include ('header.php');
?>

<!-- Main Content -->
<?php
    if(isset($_GET['page'])){
        include_once($_GET['page'].'.php');
    }
?>

<!-- Footer en Bootstrap Scripts -->
<?php include ('footer.php') ?>
