<?php
    // Non admins worden teruggestuurd naar de login pagina
    if (isset($_COOKIE['isAdmin'])) {
        if ($_COOKIE['isAdmin'] == 0) {
            header("Location: index.php?page=Login");
        }
    }
?>

<div class="container">
    <form action="redirects/redirect.php?page=login" method="post">
        <button type="submit" class="btn btn-danger mt-3" name="logout">Log out</button>
    </form>
</div>

