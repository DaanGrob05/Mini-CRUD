<?php
    $cookieTimer = 3;
   
    // Gerecht toevoegen
    if (isset($_POST['createMenuItem'])) {
        if (!empty($_POST['itemName']) && !empty($_POST['price'])) {
            $sql = "INSERT INTO `gerecht`(`naam`, `prijs`) VALUES (:naam, :prijs)";
            $stmt = $connect->prepare($sql);
            $stmt->bindParam(':naam', $_POST['itemName']);
            $stmt->bindParam(':prijs', $_POST['price']);
            $stmt->execute();

            setcookie("menuItemCreated", "1", time() + $cookieTimer, "/");
        } else {
            setcookie("menuItemCreated", "0", time() + $cookieTimer, "/");
        }
        header ("Location: ../adminPages/admin.php?page=Menu");
    }

    // Gerecht aanpassen
    if (isset($_POST['editMenuItem'])) {
        if (!empty($_POST['itemName']) && !empty($_POST['price']) && !empty($_POST['menuItemID'])) {
            $sql = "UPDATE `gerecht` SET `naam`=:naam ,`prijs`=:prijs WHERE ID = :ID";
            $stmt = $connect->prepare($sql);
            $stmt->bindParam(':naam', $_POST['itemName']);
            $stmt->bindParam(':prijs', $_POST['price']);
            $stmt->bindParam(":ID", $_POST['menuItemID']);
            $stmt->execute();
            
            setcookie("menuItemEdited", "1", time() + $cookieTimer, "/");
        } else {
            setcookie("menuItemEdited", "0", time() + $cookieTimer, "/");
        }
        header ("Location: ../adminPages/admin.php?page=Menu");
    }

    // Gerecht verwijderen
    if (isset($_POST['deleteMenuItem'])) {
        $sql = "DELETE FROM `gerecht` WHERE ID = :ID";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":ID", $_POST['menuItemID']);
        $stmt->execute();

        setcookie("menuItemDeleted", "1", time() + $cookieTimer, "/");

        header ("Location: ../adminPages/admin.php?page=Menu");
    }
?>