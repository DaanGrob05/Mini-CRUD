<?php
    // TODO Categorie toevoegen aan gerechten tabel
    // TODO Group by Categorie

    // Gerecht toevoegen
    if (isset($_POST['createMenuItem'])) {
        $sql = "INSERT INTO `gerecht`(`naam`, `prijs`) VALUES (:naam, :prijs)";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':naam', $_POST['itemName']);
        $stmt->bindParam(':prijs', $_POST['price']);
        $stmt->execute();
        
        session_start();
        $_SESSION['menuItemCreated'] = true;
        header ("Location: ../index.php?page=Menu");
    }


    // Gerecht aanpassen
    if (isset($_POST['editMenuItem'])) {
        $sql = "UPDATE `gerecht` SET `naam`=:naam ,`prijs`=:prijs WHERE ID = :ID";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':naam', $_POST['itemName']);
        $stmt->bindParam(':prijs', $_POST['price']);
        $stmt->bindParam(":ID", $_POST['menuItemID']);
        $stmt->execute();
        
        session_start();
        $_SESSION['menuItemEdited'] = true;
        header ("Location: ../index.php?page=Menu");
    }


    // Gerecht verwijderen
    if (isset($_POST['deleteMenuItem'])) {
        $sql = "DELETE FROM `gerecht` WHERE ID = :ID";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":ID", $_POST['menuItemID']);
        $stmt->execute();

        session_start();
        $_SESSION['menuItemDeleted'] = true;
        header ("Location: ../index.php?page=Menu");
    }
?>