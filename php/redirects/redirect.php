<?php
include_once('../includes/connection.php');

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
?>