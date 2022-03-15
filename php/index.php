<!-- Header -->
<?php
    // $activePage = $_GET['page'];
    include ('header.php');
?>

<!-- Main Content -->
<?php
    if(isset($_POST['page'])){
        include_once($_GET['page'].'.php');
    }
?>

<!-- Footer en Bootstrap Scripts -->
<?php include ('../html/footer.html') ?>
