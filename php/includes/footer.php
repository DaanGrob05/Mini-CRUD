<footer class="footer mt-auto  p-3 text-muted bg-dark">
    <p class="mb-0">'t Smikkelhoekje </p>
</footer>

<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

<?php
// Bepaalt hoe veel extra stappen terug moet worden gedaan, is standaard 0
    $stepsBackPath = "";
    for ($i = 0; $i < $mapStepsBack; $i++) {
        $stepsBackPath .= "../";
    }
?>
<!-- Validatie -->
<script src="<?php echo $stepsBackPath?>../js/validations.js"></script>    

</body>

</html>