<?php
    $sql = "SELECT * FROM album WHERE artiest =:artiest";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":artiest", $_GET['menuItem']);
    $stmt->execute();
    $result = $stmt->fetchAll();

    foreach($result as $res){
        echo $res['artiest'] . "<br>";
    }
?>

