<?php
    // Connection, Head en Header
    if(isset($_GET['page']) && !empty($_GET['page'])){
        $activePage = $_GET['page'];
    } else {
        $activePage = "Index";
    }
    $mapStepsBack = 0;
    include_once ('includes/header.php');

    // Main Content
    if(isset($_GET['page']) && !empty($_GET['page'])){
        // Als pagina bestaat ga naar deze pagina
        // Anders ga naar de 404 pagina
        $directToPage = $_GET['page'].'.php';
        if(file_exists($directToPage)) {
            include_once($directToPage);
        }
        else {
            include_once('includes/404.php');
        }
    } 

    // Footer en Scripts
    include_once ('includes/footer.php');
?>
