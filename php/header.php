<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">'t Smikkelhoekje</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <?php
                        $pages = array("Menu", "Contact", "Login");

                        foreach ($pages as $page) {
                            echo "<li class=\"nav-item\">";
                            if ($page == $activePage) {
                                echo "<a href=\"$page.php\" class=\"nav-link active\">$page</a>";
                            } else {
                                echo "<a href=\"$page.php\" class=\"nav-link\">$page</a>";
                            }
                            echo "</li>";
                        }
                    ?>

                    <!-- <li class="nav-item">
                        <a href="menu.php" class="nav-link">Menu
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.php" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="login.php" class="nav-link">Login</a>
                    </li> -->
                </ul>
                <form action="menu.php" method="get" class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Zoek een gerecht" name="menuItem" />
                    <button class="btn btn-outline-success" type="submit">
                        Zoek
                    </button>
                </form>
            </div>
        </div>
    </nav>
</header>