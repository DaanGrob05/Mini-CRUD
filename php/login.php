<?php
    // Ingelogde admin word doorgestuurd naar admin pagina
    if (isset($_COOKIE['isAdmin'])) {
        if ($_COOKIE['isAdmin'] == 1) {
            header("Location: index.php?page=Admin");
        }
    }
?>

<div class="container pt-3 w-50">
    <form action="redirects/redirect.php?page=login" method="post">
        <div class="form-group">
            <label class="form-label">Gebruikersnaam</label>
            <input type="text" class="form-control" name="username" value="">
        </div>
        <div class="form-group mt-3">
            <label class="form-label">Wachtwoord</label>
            <input type="password" class="form-control" name="password" value="">
        </div>
        <button type="submit" class="btn btn-primary mt-3" name="login">Log in</button>
    </form>
</div>