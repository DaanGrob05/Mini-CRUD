<?php
    $cookieTimer = 3;

    if(isset($_POST['create'])) {
        if(!empty($_POST['clientName'] && !empty($_POST['messageText']))){
            $sql = "INSERT INTO `bericht`(`klantNaam`, `berichtText`) VALUES (:klantNaam,:berichtText)";
            $stmt = $connect->prepare($sql);
            $stmt->bindParam(":klantNaam", $_POST['clientName']);
            $stmt->bindParam(":berichtText", $_POST['messageText']);
            $stmt->execute();

            setcookie("messageSent", true, time() + $cookieTimer, "/");

        } else {
            setcookie("messageSent", false, time() + $cookieTimer, "/");
        }
        
        header ("Location: ../index.php?page=Contact");  
    }

    if(isset($_POST['delete'])) {
        $sql = "DELETE FROM `bericht` WHERE ID = :ID";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":ID", $_POST['ID']);
        $stmt->execute();

        setcookie("messageDeleted", "1", time() + $cookieTimer, "/");

        header ("Location: ../adminPages/admin.php?page=messages");  
    }
    
?>