<?php
    // Login
    if (isset($_POST['login'])) {
        $sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":username", $_POST['username']);
        $stmt->bindParam(":password", $_POST['password']);
        $stmt->execute();
        $result = $stmt->fetch();

        if (empty($result)) {
            setcookie("isAdmin", "0", time() + 60000, "/");
            header("Location: ../index.php?page=Login");
        } else {
            setcookie("isAdmin", "1", time() + 60000, "/");
            setcookie("adminLevel", $result['adminLevel'], time() + 60000, "/");
            header("Location: ../index.php?page=Admin");
        }
    }

    // Logout
    if (isset($_POST['logout'])) {
        setcookie("isAdmin", "0", time() + 60000, "/");
        header("Location: ../index.php?page=Login");
    }
?>