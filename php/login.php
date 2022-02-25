<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "../html/head.html" ?>
</head>

<body class="d-flex flex-column min-vh-100">
    <!-- Header -->
    <?php include "../html/header.html" ?>

    <!-- Main Content -->
    <main class="container pt-3">
        <form action="login.php" method="post">
            <div class="mb-3">
                <label class="form-label">Gebruikersnaam</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="mb-3">
                <label class="form-label">Wachtwoord</label>
                <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Log in</button>
        </form>
    </main>

    <!-- Footer en Bootstrap Scripts -->
    <?php include "../html/footer.html" ?>
</body>

</html>