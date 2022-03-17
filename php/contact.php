<div class="container">
    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-3">Als u vragen heeft kunt u gerust contact met ons opnemen
        met de onderstaande gegevens.</p>

    <div class="text-center">
        <ul class="list-unstyled mb-0">
            <li><i class="fas fa-map-marker-alt fa-2x"></i>
                <p>Cafetaria 't Smikkelhoekje Nijmegen 6525BD</p>
            </li>

            <li><i class="fas fa-phone mt-3 fa-2x"></i>
                <p>0620691433</p>
            </li>

            <li><i class="fas fa-envelope mt-3 fa-2x"></i>
                <p>d.grob05@gmail.com</p>
            </li>
        </ul>
    </div>

    <div class="container pt-3 w-50">
        <form action="index.php?page=contactSendMessage" method="post">
            <div class="form-group">
                <label class="form-label">Naam</label>
                <input type="text" class="form-control" name="clientName">
            </div>
            <div class="form-group mt-2">
                <label for="exampleFormControlTextarea1">Bericht</label>
                <textarea class="form-control" rows="4" name="messageText"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-3">
                Verstuur Bericht</button>
        </form>
    </div>
</div>