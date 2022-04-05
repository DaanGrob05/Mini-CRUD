<?php
    // Non admins worden teruggestuurd naar de login pagina
    if (!isset($_COOKIE['isAdmin'])) {
        header("Location: " . $stepsBackPath . "index.php?page=Login");
    } else if (isset($_COOKIE['isAdmin'])) {
        if ($_COOKIE['isAdmin'] == 0) {
            header("Location: ../index.php?page=Login");
        }
    }
    

    // Connection, Head en Header
    if(isset($_GET['page']) && !empty($_GET['page'])){
        $activePage = $_GET['page'];
    } else {
        $activePage = "Index";
    }
    $mapStepsBack = 1;
    include_once ('../includes/header.php');

    // Main Content
    if(isset($_GET['page']) && !empty($_GET['page'])){
        // Als pagina bestaat ga naar deze pagina
        // Anders ga naar de 404 pagina
        $directToPage = $_GET['page'].'.php';
        if(file_exists($directToPage)) {
            include_once($directToPage);
        }
        else {
            include_once('../includes/404.php');
        }
    }

    // Footer en Scripts
    include_once ('../includes/footer.php');
?>

