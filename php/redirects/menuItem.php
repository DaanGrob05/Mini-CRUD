<?php
    if (isset($_POST['editMenuItem'])) {
        // TODO Update statement veranderen
        $sql = "UPDATE `album` SET `titel`=:titel ,`artiest`=:artiest,`genre`=:genre WHERE ID = :ID";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':titel', $_POST['titel']);
        $stmt->bindParam(':artiest', $_POST['artiest']);
        $stmt->bindParam(':genre', $_POST['genre']);
        $stmt->bindParam(":ID", $_POST['menuItemID']);
        $stmt->execute();
        
        session_start();
        $_SESSION['menuItemEdited'] = true;
        header ("Location: ../index.php?page=Menu");
        
    }


    if (isset($_POST['deleteMenuItem'])) {
        // TODO Delete statement veranderen
        $sql = "DELETE FROM `album` WHERE ID = :ID";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":ID", $_POST['menuItemID']);
        $stmt->execute();

        session_start();
        $_SESSION['menuItemDeleted'] = true;
        header ("Location: ../index.php?page=Menu");
    }
?>