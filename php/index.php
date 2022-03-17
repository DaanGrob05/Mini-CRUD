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
        $pages = array("Menu", "Contact", "Login", "Index", "Create", "contactRedirect");

        
        
        // Use condition to check the existence of URL
        $directToPage = $_GET['page'].'.php';
        if(file_exists($directToPage)) {
            include_once($_GET['page'].'.php');
        }
        else {
            include_once('404.php');
        }

        // echo $status;

        // if(in_array($_GET['page'], $pages)){
        //     include_once($_GET['page'].'.php');
        // } else {
        //     include_once('404.php');
        // }
    } 
?>

<!-- Footer en Bootstrap Scripts -->
<?php include_once ('footer.php') ?>
