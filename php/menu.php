<?php
    if(isset($_GET['menuItem']) && !empty($_GET['menuItem'])){
        $sql = "SELECT * FROM album WHERE artiest LIKE CONCAT('%', :artiest, '%')";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":artiest", $_GET['menuItem']);
    } else {
        $sql = "SELECT * FROM album";
        $stmt = $connect->prepare($sql);
    }

    $stmt->execute();
    $result = $stmt->fetchAll();
?>

<div class="container">
    <?php
        if(isset($_POST['deleteMenuItem'])) {
            echo "Gerecht is verwijderd <br>";
        }

        if(isset($_POST['editMenuItem'])) {
            echo "Gerecht is aangepast <br>";
        }
    ?>

    <button type="button" class="btn btn-primary mt-2 mb-2"><a href="index.php?page=Create"
            class="text-light text-decoration-none">Maak nieuw item aan</a></button>
    <br>

    <?php
        foreach($result as $res){
            echo "<div class=\"d-flex text-center\">";

            echo $res['artiest'];

            echo "<form method=\"post\" class=\"form-control-sm\" action=\"index.php?page=editMenuItem\">";
            echo "<input type=\"hidden\" name=\"menuItemID\" class=\"\" value=\"" . $res['ID'] . "\">
                <button type=\"submit\" class=\"btn btn-primary btn-sm\">Aanpassen</button>
                </form>";

            echo "</div>";
        }
    ?>
</div>