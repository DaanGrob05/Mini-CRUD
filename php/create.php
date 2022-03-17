<!-- Main Content -->
<div class="container pt-3 w-50">
    <form name="create" action="index.php?page=Menu" method="post">
        <div class="mb-3">
            <label class="form-label">Naam</label>
            <input type="text" class="form-control" name="username">
        </div>
        <div class="mb-3">
            <label class="form-label">Prijs</label>
            <input type="number" step="0.01" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Voeg toe</button>
    </form>
</div>