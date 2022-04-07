<?php
    $sql = "SELECT naam, prijs FROM gerecht WHERE ID = :ID";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":ID", $_POST['menuItemID']);
    $stmt->execute();
    $result = $stmt->fetchAll();
?>


<div class="container">
    <?php $res = $result[0]; ?>
    <form method="post" action="../redirects/redirect.php?page=menuItem" class="pt-3" id="editMenuitem">
        <!-- Item ID -->
        <div class="form-group">
            <input type="hidden" class="form-control" name="menuItemID" value="<?php echo $_POST['menuItemID'] ?>">
        </div>

        <!-- Naam -->
        <div class="form-group">
            <label class="form-label" id="dishName">Naam</label>
            <input type="text" name="itemName" value="<?php echo $res['naam'] ?>"></input>
        </div>

        <!-- Prijs -->
        <div class="form-group">
            <label class="form-label" id="price">Prijs</label>
            <input type="number" step="0.01" name="price" value="<?php echo $res['prijs'] ?>"></input>
        </div>

        <button type="submit" class="btn btn-primary" name="editMenuItem" value="true" >Pas Aan</button>
    </form>

    <!-- Verwijder -->
    <form method="post" action="../redirects/redirect.php?page=menuItem">
        <input type="hidden" name="menuItemID" value="<?php echo $_POST['menuItemID'] ?>">
        <button type="submit" class="btn btn-danger" name="deleteMenuItem" value="true">Verwijder</button>
    </form>
</div>