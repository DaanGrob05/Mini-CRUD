<?php
    if(!empty($_POST['clientName'] && !empty($_POST['messageText']))){
        $sql = "INSERT INTO `bericht`(`klantNaam`, `berichtText`) VALUES (:klantNaam,:berichtText)";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":klantNaam", $_POST['clientName']);
        $stmt->bindParam(":berichtText", $_POST['messageText']);
        $stmt->execute();

        session_start();
        $_SESSION['messageSent'] = true;
    }
    
    header ("Location: ../index.php?page=Contact");
?>