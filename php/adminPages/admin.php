<?php
// Connection, Head en Header
    if(isset($_GET['page']) && !empty($_GET['page'])){
        $activePage = $_GET['page'];
    } else {
        $activePage = "Index";
    }
    $mapStepsBack = 1;
    include_once ('../includes/header.php');
?>