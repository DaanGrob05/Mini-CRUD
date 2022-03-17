<?php
    $sql = "SELECT titel, artiest, genre FROM album WHERE ID = :ID";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":ID", $_POST['menuItemID']);
    $stmt->execute();
    $result = $stmt->fetchAll();
?>

<div class="container">

<?php
    // echo $_POST['menuItemID'];
    // var_dump($result);

    // $result = array_values($result);
    foreach ($result as $res) {
        echo $res['titel'] . "<br>";
        echo $res['artiest'] . "<br>";
        echo $res['genre'] . "<br>";

    }

?>

</div>