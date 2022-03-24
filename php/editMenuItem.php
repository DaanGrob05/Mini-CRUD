<?php
    $sql = "SELECT titel, artiest, genre FROM album WHERE ID = :ID";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":ID", $_POST['menuItemID']);
    $stmt->execute();
    $result = $stmt->fetchAll();
?>


<div class="container">
    <?php
        $res = $result[0];
        echo $res['artiest'] . "<br>";
        echo $res['genre'] . "<br>";

        // TODO Aanpas functionaliteit
        // Pas aan
        echo "<div class='container pt-3'>";
            echo "<form method='post' action='redirects/redirect.php?page=menuItem'>";
                echo "<div class='form-group'>";
                    echo "<input type='hidden' class='form-control' name='menuItemID' value='" . $_POST['menuItemID'] . "'>";
                echo "</div>";

                echo "<div class='form-group'>";
                    echo "<label class='form-label'>Naam</label>";
                    echo "<input type='text' name='itemName' value='" . $res['titel'] . "'></input>";
                echo "</div>";

                echo "<button type='submit' class='btn btn-primary btn-sm' name='editMenuItem' value='true' >Pas Aan</button>";
            echo "</form>";
        echo "</div>";


        // Verwijder
        echo "<form method='post' class='form-control-sm' action='redirects/redirect.php?page=menuItem'>";
            echo "<input type='hidden' name='menuItemID' value='" . $_POST['menuItemID'] . "'>";
            echo "<button type='submit' class='btn btn-danger btn-sm' name='deleteMenuItem' value='true'>Verwijder</button>";
        echo "</form>";
    ?>
</div>