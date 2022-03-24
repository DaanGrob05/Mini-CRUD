<?php
    // Bepaal welke query word uitgevoerd op de gerechten
    if(isset($_GET['menuItem']) && !empty($_GET['menuItem'])){
    $sql = "SELECT * FROM gerecht WHERE naam LIKE CONCAT('%', :naam, '%')";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":naam", $_GET['menuItem']);
    } else {
        $sql = "SELECT * FROM gerecht";
        $stmt = $connect->prepare($sql);
    }

    $stmt->execute();
    $result = $stmt->fetchAll();
?>

<div class="container">
    <!-- Laat een succes bericht zien als er een gerecht aangepast of verwijderd is -->
    <?php
        session_start();
        if(isset($_SESSION['menuItemDeleted'])) {
            echo "Gerecht is verwijderd <br>";
        }

        if(isset($_POST['editMenuItem'])) {
            echo "Gerecht is aangepast <br>";
        }

        session_destroy();
    ?>

    <button type="button" class="btn btn-primary mt-2 mb-2"><a href="index.php?page=Create"
            class="text-light text-decoration-none">Maak nieuw item aan</a></button>
    <br>

    <!-- Laat alle geselecteerde gerechten zien -->
    <?php
        foreach($result as $res){
            echo "<div class=\"d-flex text-center\">";

            // TODO Tabel maken voor data
            echo $res['naam'];

            // Aanpas knop
            echo "<form method='post' class='form-control-sm' action='index.php?page=editMenuItem'>";
            echo "<input type='hidden' name='menuItemID' class='' value='" . $res['ID'] . "'>";
            echo "<button type='submit' class='btn btn-primary btn-sm'>Aanpassen</button>";
            echo "</form>";

            echo "</div>";
        }
    ?>
</div>