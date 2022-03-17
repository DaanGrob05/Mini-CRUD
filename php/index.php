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
        // Als pagina bestaat ga naar deze pagina
        // Anders ga naar de 404 pagina
        $directToPage = $_GET['page'].'.php';
        if(file_exists($directToPage)) {
            include_once($directToPage);
        }
        else {
            include_once('404.php');
        }
    } 
?>

<!-- Footer en Bootstrap Scripts -->
<?php include_once ('footer.php') ?>
