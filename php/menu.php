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

    <!-- Voeg nieuw gerecht toe -->
    <button type="button" class="btn btn-primary mt-2 mb-2"><a href="index.php?page=Create"
            class="text-light text-decoration-none">Voeg nieuw gerecht toe</a></button>
    <br>

    <?php
        $gerecht = $result[0];
        echo "<table class='table table-sm table-hover table-striped w-75'>";
            echo "<thead>";
                echo "<th scope='col'>Naam</th>";
                echo "<th scope='col'>Prijs</th>";
                echo "<th scope='col'></th>";
            echo "</thead>";
            echo "<tbody>";
            // Voor elk gerecht word een row gemaakt
            foreach ($result as $res) {
                echo "<tr>";
                    echo "<td>" . $res['naam'] . "</td>";
                    echo "<td>" . $res['prijs'] . "</td>";
                    echo "<td>";
                        // Aanpas knop
                        echo "<form method='post' class='form-control-sm' action='index.php?page=editMenuItem'>";
                        echo "<input type='hidden' name='menuItemID' class='' value='" . $res['ID'] . "'>";
                        echo "<button type='submit' class='btn btn-primary btn-sm'>Aanpassen</button>";
                        echo "</form>";
                    echo "</td>";
                echo "</tr>";
            }
            echo "</tbody>";
        echo "</table>";
    ?>
</div>