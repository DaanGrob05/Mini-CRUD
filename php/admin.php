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

<!-- Panel naar de adminpagina's -->
<div class="container">
    <div class="row">
        <div class="col-sm-4 m-1">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Menu</h5>
                    <p class="card-text">Beheer het menu</p>
                    <a href="adminPages/admin.php?page=Menu" class="btn btn-primary">Ga</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 m-1">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Berichten</h5>
                    <p class="card-text">Zie en beheer berichten</p>
                    <a href="adminPages/admin.php?page=Messages" class="btn btn-primary">Ga</a>
                </div>
            </div>
        </div>
    </div>
</div>