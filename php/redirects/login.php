<?php
    $sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":username", $_POST['username']);
    $stmt->bindParam(":password", $_POST['password']);
    $stmt->execute();
    $result = $stmt->fetchAll();

    if(count($result) > 0){
        setcookie("isAdmin", true, time() + 60000, "/");
        header("Location: ../index.php?page=Admin");
    } else {
        setcookie("isAdmin", false, time() + 60000, "/");
        header("Location: ../index.php?page=Login");
    }
?>