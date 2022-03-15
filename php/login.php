<?php include "head.php" ?>

<body class="d-flex flex-column min-vh-100">
    <!-- Header -->
    <?php
        $activePage = "Login";
        include "header.php" 
    ?>

    <!-- Main Content -->
    <main>
        <div class="container pt-3 w-50">
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
        </div>
    </main>

    <!-- Footer en Bootstrap Scripts -->
    <?php include "../html/footer.html" ?>
</body>

</html>