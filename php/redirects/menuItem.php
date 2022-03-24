<?php
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