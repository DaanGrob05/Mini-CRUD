<!-- Main Content -->
<div class="container pt-3 w-50">
    <form name="create" action="redirects/redirect.php?page=menuItem" method="post">
        <div class="form-group">
            <label class="form-label">Gerecht Naam</label>
            <input type="text" class="form-control" name="itemName">
        </div>
        <div class="form-group mt-3">
            <label class="form-label">Prijs</label>
            <input type="number" step="0.01" class="form-control" name="price">
        </div>
        <button type="submit" name="createMenuItem" class="btn btn-primary mt-3">Voeg toe</button>
    </form>
</div>