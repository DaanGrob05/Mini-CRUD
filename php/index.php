<!-- Header -->
<?php
    $activePage = $_GET['page'];
    include ('header.php');
?>

<!-- Main Content -->
<?php
    if(isset($_GET['page']) && !empty($_GET['page'])){
        $pages = array("Menu", "Contact", "Login", "Index");
        if(in_array($_GET['page'], $pages)){
            include_once($_GET['page'].'.php');
        } else {
            include_once('404.php');
        }
    } 
?>

<!-- Footer en Bootstrap Scripts -->
<?php include ('footer.php') ?>
