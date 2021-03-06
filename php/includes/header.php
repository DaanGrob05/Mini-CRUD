<?php
    include_once('connection.php');

    // Bepaalt hoe veel extra stappen terug moet worden gedaan, is standaard 0
    $stepsBackPath = "";
    for ($i = 0; $i < $mapStepsBack; $i++) {
        $stepsBackPath .= "../";
    }
?>

<head>
    <!DOCTYPE html>
    <html lang="en">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />
    <!-- Eigen CSS -->
    <?php echo "<link rel='stylesheet' href='" . $stepsBackPath . "../css/main.css'>"; ?>
    <title>'t Smikkelhoekje</title>
</head>

<body class="d-flex flex-column min-vh-100">

    <header class="mb-4">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <?php echo "<a class='navbar-brand' href='" . $stepsBackPath . "index.php?page=Index'>'t Smikkelhoekje</a>"; ?>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <?php
                        // Login of Admin op basis van isAdmin cookie
                        if (isset($_COOKIE['isAdmin'])) {
                            if ($_COOKIE['isAdmin'] == "1"){
                                $loginOrAdmin = "Admin";
                            } else {
                                $loginOrAdmin = "Login"; 
                            }
                        } else {
                            $loginOrAdmin = "Login";
                        }

                        $pages = array("Menu", "Contact", $loginOrAdmin);
                        // De li tags worden hier gegenereerd
                        // Huidige pagina krijgt een active class
                        foreach ($pages as $page) {
                            echo "<li class='nav-item'>";
                            echo "<a href='" . $stepsBackPath . "index.php?page=$page' class='nav-link ";
                            if ($page == $activePage) {
                                echo "active";
                            }
                            echo "'>$page</a></li>";
                        }
                        ?>
                    </ul>

                    <!-- Zoek form -->
                    <form action="<?php echo $stepsBackPath?>index.php?page=Menu" method="get" class="d-flex mb-lg-0">
                        <input type="hidden" name="page" value="Menu">
                        <input class="form-control me-2" type="search" placeholder="Zoek een gerecht" name="menuItem" />
                        <button class="btn btn-outline-success" type="submit">
                            Zoek
                        </button>
                    </form>
                </div>
            </div>
        </nav>
    </header>