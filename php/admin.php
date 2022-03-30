<?php
    // Non admins worden teruggestuurd naar de login pagina
    if (isset($_COOKIE['isAdmin'])) {
        if ($_COOKIE['isAdmin'] == 0) {
            header("Location: index.php?page=Login");
        }
    }
?>