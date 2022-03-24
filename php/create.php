<!-- Main Content -->
<!-- TODO Create werkend maken -->
<div class="container pt-3 w-50">
    <form name="create" action="index.php?page=Menu" method="post">
        <div class="form-group">
            <label class="form-label">Gerecht Naam</label>
            <input type="text" class="form-control" name="menuItemName">
        </div>
        <div class="form-group mt-3">
            <label class="form-label">Prijs</label>
            <input type="number" step="0.01" class="form-control" name="price">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Voeg toe</button>
    </form>
</div>