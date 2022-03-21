<?php
    $sql = "SELECT titel, artiest, genre FROM album WHERE ID = :ID";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":ID", $_POST['menuItemID']);
    $stmt->execute();
    $result = $stmt->fetchAll();
?>


<div class="container">
    <?php
    foreach ($result as $res) {
        echo $res['titel'] . "<br>";
        echo $res['artiest'] . "<br>";
        echo $res['genre'] . "<br>";
    }

    // Pas aan
    echo "<form method='post' class='form-control-sm' action='index.php?page=Menu'>";
    echo "<input type='hidden' name='editMenuItem' class='' value='" . $_POST['menuItemID'] . "'>";
    echo "<button type='submit' class='btn btn-primary btn-sm'>Pas Aan</button>";
    echo "</form>";

    // Verwijder
    echo "<form method='post' class='form-control-sm' action='index.php?page=Menu'>";
    echo "<input type='hidden' name='deleteMenuItem' class='' value='" . $_POST['menuItemID'] . "'>";
    echo "<button type='submit' class='btn btn-danger btn-sm'>Verwijder</button>";
    echo "</form>";
?>
</div>