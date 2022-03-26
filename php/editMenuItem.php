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
            
            echo "<div class='form-group'>";
                echo "<input type='hidden' class='form-control' name='menuItemID' value='" . $_POST['menuItemID'] . "'>";
            echo "</div>";

            // Naam
            echo "<div class='form-group'>";
                echo "<label class='form-label'>Naam</label>";
                echo "<input type='text' name='itemName' value='" . $res['naam'] . "'></input>";
            echo "</div>";
            
            // Prijs
            echo "<div class='form-group'>";
                echo "<label class='form-label'>Prijs</label>";
                echo "<input type='number' step='0.01' name='price' value='" . $res['prijs'] . "'></input>";
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