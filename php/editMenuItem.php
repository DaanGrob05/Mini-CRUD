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

        // TODO Aanpas functionaliteit
        // Pas aan
        echo "<form method='post' class='form-control-sm' action='redirects/redirect.php?page=menuItem'>";
        echo "<input type='hidden' name='editMenuItem' value='" . $_POST['menuItemID'] . "'>";
        echo "<button type='submit' class='btn btn-primary btn-sm' name='editMenuItem' value='true' >Pas Aan</button>";
        echo "</form>";

        // Verwijder
        echo "<form method='post' class='form-control-sm' action='redirects/redirect.php?page=menuItem'>";
        echo "<input type='hidden' name='menuItemID' value='" . $_POST['menuItemID'] . "'>";
        echo "<button type='submit' class='btn btn-danger btn-sm' name='deleteMenuItem' value='true'>Verwijder</button>";
        echo "</form>";
    ?>
</div>