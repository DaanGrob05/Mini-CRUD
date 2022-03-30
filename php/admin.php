<?php
    // TODO isAdmin check
    var_dump($_COOKIE['isAdmin']);
    if (isset($_COOKIE['isAdmin'])) {
        if ($_COOKIE['isAdmin'] == 0) {
            echo "Doe eens niet";
            header("Location: index.php?page=Login");
        }
    }
?>