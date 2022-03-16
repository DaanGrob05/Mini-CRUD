<?php
    if(isset($_GET['menuItem']) && !empty($_GET['menuItem'])){
        $sql = "SELECT * FROM album WHERE artiest LIKE CONCAT('%', :artiest, '%')";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":artiest", $_GET['menuItem']);
    } else {
        $sql = "SELECT * FROM album";
        $stmt = $connect->prepare($sql);
    }

    $stmt->execute();
    $result = $stmt->fetchAll();
?>

<div class="container mt-4">
    <?php
        foreach($result as $res){
            echo $res['artiest'] . "<br>";
        }
    ?>
</div>
