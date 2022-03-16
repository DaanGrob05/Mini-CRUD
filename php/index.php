<!-- Header -->
<?php
    if(isset($_GET['page']) && !empty($_GET['page'])){
        $activePage = $_GET['page'];
    } else {
        $activePage = "Index";
    }
    include_once ('header.php');
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
<?php include_once ('footer.php') ?>
