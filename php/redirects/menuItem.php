<?php
    // TODO Categorie toevoegen aan gerechten tabel
    // TODO Group by Categorie
   
    // Gerecht toevoegen
    if (isset($_POST['createMenuItem'])) {
        if (!empty($_POST['itemName']) && !empty($_POST['price'])) {
            $sql = "INSERT INTO `gerecht`(`naam`, `prijs`) VALUES (:naam, :prijs)";
            $stmt = $connect->prepare($sql);
            $stmt->bindParam(':naam', $_POST['itemName']);
            $stmt->bindParam(':prijs', $_POST['price']);
            $stmt->execute();

            setcookie("menuItemCreated", true, time() + 5, "/");
        } else {
            setcookie("menuItemCreated", false, time() + 5, "/");
        }
        header ("Location: ../index.php?page=Menu");
    }


    // Gerecht aanpassen
    if (isset($_POST['editMenuItem'])) {
        session_start();

        if (!empty($_POST['itemName']) && !empty($_POST['price']) && !empty($_POST['menuItemID'])) {
            $sql = "UPDATE `gerecht` SET `naam`=:naam ,`prijs`=:prijs WHERE ID = :ID";
            $stmt = $connect->prepare($sql);
            $stmt->bindParam(':naam', $_POST['itemName']);
            $stmt->bindParam(':prijs', $_POST['price']);
            $stmt->bindParam(":ID", $_POST['menuItemID']);
            $stmt->execute();
            
            $_SESSION['menuItemEdited'] = true;
        } else {
            $_SESSION['menuItemEdited'] = false;
        }
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