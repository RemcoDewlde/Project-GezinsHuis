<link rel="stylesheet" href="views/components/contact/contact.component.css">
<div class="container">
<br>
    <form action="../<?= $_SESSION['previous_uri'] ?>">
        <button type="submit" class="btn btn-primary">Terug</button>
    </form>
    <h1 class="display-4"> contact</h1>
    <form method="post" action="/verstuur">

            <div class="form-group">
                <label for="formNaam">aan</label>
                <select class="custom-select mr-sm-2"  id="formNaam" name="naam"required>
                    <option selected disabled>Kies...</option>
<?php
                    foreach ($selection as $items) {
                        foreach ($items as $item => $value) {
                            if ($item == 'email') {
                            echo "<option value=\"$value\">$value</option>";
                            }


                        }
                    }
?>
                </select>

            </div>

            <div class="form-group">
                <label for="formEmail">onderwerp</label>
                <input type="text" class="form-control" maxlength="256" id="formOnderwerp" name="onderwerp" required>
            </div>

        <div class="form-group">
            <label for="formBericht">bericht</label>
            <textarea class="form-control" id="formBericht" maxlength="12000" rows="8" name="bericht" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary mb-2">Verstuur bericht</button>
    </form>
</div>