<?php
    $sql = "SELECT naam, prijs FROM gerecht WHERE ID = :ID";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":ID", $_POST['menuItemID']);
    $stmt->execute();
    $result = $stmt->fetchAll();
?>


<div class="container">
    <?php
        $res = $result[0];
        
        // Pas aan
        echo "<form method='post' action='redirects/redirect.php?page=menuItem' class='pt-3'>";
            // Item ID
            echo "<div class='form-group'>";
                echo "<input type='hidden' class='form-control' name='menuItemID' value='" . $_POST['menuItemID'] . "'>";
            echo "</div>";

            // TODO Naam en prijs input maken ipv huidige

            // Titel
            echo "<div class='form-group'>";
                echo "<label class='form-label'>Naam</label>";
                echo "<input type='text' name='titel' value='" . $res['titel'] . "'></input>";
            echo "</div>";
            
            // Artiest
            echo "<div class='form-group'>";
                echo "<label class='form-label'>Artiest</label>";
                echo "<input type='text' name='artiest' value='" . $res['artiest'] . "'></input>";
            echo "</div>";

            // Genre
            echo "<div class='form-group'>";
                echo "<label class='form-label'>Genre</label>";
                echo "<input type='text' name='genre' value='" . $res['genre'] . "'></input>";
            echo "</div>";

            echo "<button type='submit' class='btn btn-primary' name='editMenuItem' value='true' >Pas Aan</button>";
        echo "</form>";


        // Verwijder
        echo "<form method='post' action='redirects/redirect.php?page=menuItem'>";
            echo "<input type='hidden' name='menuItemID' value='" . $_POST['menuItemID'] . "'>";
            echo "<button type='submit' class='btn btn-danger' name='deleteMenuItem' value='true'>Verwijder</button>";
        echo "</form>";
    ?>
</div>