
<?php
    if(isset($_GET['menuItem']) && !empty($_GET['menuItem'])){
        $sql = "SELECT * FROM album WHERE artiest LIKE CONCAT('%', :artiest, '%')";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":artiest", $_GET['menuItem']);
    } else {
        $sql = "SELECT * FROM album";
        $stmt = $connect->prepare($sql);
    }

    $stmt->execute();
    $result = $stmt->fetchAll();
?>

<div class="container mt-4">
    
    <button type="button" class="btn btn-primary"><a href="index.php?page=Create" class="text-light text-decoration-none">Maak nieuw item aan</a></button>  
    <br>
    
    <?php
        foreach($result as $res){
            echo $res['artiest'] . "<br>";
        }
    ?>
</div>
