<?php
    if (isset($_POST['deleteMenuItem'])) {
        $sql = "DELETE FROM `album` WHERE ID = :ID";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":ID", $_POST['menuItemID']);
        $stmt->execute();

        session_start();
        $_SESSION['menuItemDeleted'] = true;
    }
?>