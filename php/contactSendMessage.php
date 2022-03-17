<?php
    if(isset($_POST['sendMessage']) && !empty($_POST['sendMessage'])){
        $sql = "INSERT INTO `bericht`(`klantNaam`, `berichtText`) VALUES (:klantNaam,:berichtText)";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":klantNaam", $_POST['clientName']);
        $stmt->bindParam(":berichtText", $_POST['messageText']);
        $stmt->execute();

        unset($_POST['sendMessage']);
    }

    header ('Location: index.php?page=Contact');
?>