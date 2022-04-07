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
    <!-- TODO Cookies veranderen naar SESSION -->
    <!-- Laat een succes bericht zien als er een gerecht aangepast of verwijderd is -->
    <?php
        // Succes of error message weergeven van gerecht toevoegen
        if (isset($_COOKIE['menuItemCreated'])) {
            if ($_COOKIE['menuItemCreated'] == "1") {
                echo "Gerecht is toegevoegd <br>";
            } else {
                echo "Er is een fout opgetreden bij het toevoegen van gerecht <br>";
            }
        }

        // Succes of error message weergeven van gerecht aanpassen
        if (isset($_COOKIE['menuItemEdited'])) {
            if ($_COOKIE['menuItemEdited'] == "1") {
                echo "Gerecht is aangepast <br>";
            } else {
                echo "Er is een fout opgetreden bij het aanpassen van gerecht <br>";
            }
        }

        // Succes message voor verwijderen
        if(isset($_COOKIE['menuItemDeleted'])) {
            echo "Gerecht is verwijderd <br>";
        }
    ?>

    <!-- Voeg nieuw gerecht toe -->
    <button type="button" class="btn btn-primary mt-2 mb-2"><a href="admin.php?page=createMenuItem"
            class="text-light text-decoration-none">Voeg nieuw gerecht toe</a></button>
    <br>

    <!-- Tabel voor alle gerechten -->
    <?php $gerecht = $result[0]; ?>
    <table class="table table-sm table-hover table-striped w-75">
        <thead>
            <th scope="col">Naam</th>
            <th scope="col">Prijs</th>
            <th scope="col"></th>
        </thead>
        <tbody>
            <?php foreach ($result as $res) { ?>
                <tr>
                    <td><?php echo $res['naam']?></td>
                    <td><?php echo $res['prijs']?></td>
                    <td>
                        <form method="post" class="form-control-sm" action="admin.php?page=editMenuItem">
                            <input type="hidden" name="menuItemID" value="<?php echo $res['ID']?>">
                            <button type="submit" class="btn btn-primary btn-sm">Aanpassen</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>