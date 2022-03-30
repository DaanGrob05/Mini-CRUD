<?php
    $cookieTimer = 3;

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
?>