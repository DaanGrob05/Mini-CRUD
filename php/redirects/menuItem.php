<?php
    if (isset($_POST['editMenuItem'])) {
        $sql = "UPDATE `album` SET `titel`='[value-2]',`artiest`='[value-3]',`genre`='[value-4]' WHERE ID = :ID";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':titel', $_POST['titel']);
        $stmt->bindParam(':artiest', $_POST['artiest']);
        $stmt->bindParam(':genre', $_POST['genre']);
        $stmt->bindParam(":ID", $_POST['menuItemID']);
        $stmt->execute();

        session_start();
        $_SESSION['menuItemEdited'] = true;
    }




    if (isset($_POST['deleteMenuItem'])) {
        $sql = "DELETE FROM `album` WHERE ID = :ID";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":ID", $_POST['menuItemID']);
        $stmt->execute();

        session_start();
        $_SESSION['menuItemDeleted'] = true;
    }


    if (isset($_POST['editMenuItem'])) {
        session_start();
        $_SESSION['menuItemEdited'] = true;
    }
?>