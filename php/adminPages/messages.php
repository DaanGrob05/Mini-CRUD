<?php
    $sql = "SELECT * FROM bericht";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    ?>


<div class="container">
        <!-- Terug knop -->
        <a href="../index.php?page=admin" class="btn btn-danger">Naar dashboard</a>

        <?php
            if (isset($_COOKIE['messageDeleted'])) {
                    if ($_COOKIE['messageDeleted'] == "1") {
                        echo "Bericht is verwijderd <br>";
                    } else {
                        echo "Er is een fout opgetreden bij het verwijderen van bericht <br>";
                    }
                }
        ?>
    </div>

    <div class="container d-flex flex-wrap">

        <?php foreach ($result as $res) { ?>
        <div class="card m-1 w-75">
            <div class="card-body">
                <h5 class="card-title"><?php echo $res['klantNaam']?></h5>
                <p class="card-text"><?php echo $res['berichtText']?></p>
                </h5>
                <form action="../redirects/redirect.php?page=contactMessage" method="post">
                    <input type="hidden" name="ID" value="<?php echo $res['ID']?>">
                    <button type="submit" class="btn btn-primary" name="delete" value="true">Verwijder</button>
                </form>
            </div>
        </div>


    <?php } ?>
    </div>
    

