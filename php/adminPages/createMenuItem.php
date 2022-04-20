<div class="container pt-3 w-50">
    <form name="createMenuItem" id="createForm" action="../redirects/redirect.php?page=menuItem" method="post">
        <div class="form-group">
            <label class="form-label">Gerecht Naam</label>
            <input type="text" class="form-control" id="itemName" name="itemName">
        </div>
        <div class="form-group">
            <label class="form-label">Gerecht Beschrijving</label>
            <input type="text" class="form-control" id="itemDescription" name="itemDescription">
        </div>
        <div class="form-group mt-3">
            <label class="form-label">Prijs</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price">
        </div>
        <button type="submit" name="createMenuItem" class="btn btn-primary mt-3" id="createButton">Voeg toe</button>
    </form>
</div>