<div class="container">
    <form action="../<?= $_SESSION['previous_uri'] ?>">
        <button type="submit" class="btn btn-primary">Terug</button>
    </form>

    <h5><?= $fname . " " . $lname ?></h5>

    <h5><?= $email ?></h5>
    <h5><?= $mobile ?></h5>
    <h5><?= $function ?></h5>
    <h5><?= $nickname ?></h5>
    <h5><?= $dob ?></h5>

    <form action="plaatsopmerking" method="post">
        <input value="<?= $id ?>" name="id" hidden>
        <div class="form-group row">
            <div class="col-md-2">
                <label>Opmerking</label>
            </div>
            <div class="col-md-10">
                <textarea type="text" class="form-control" rows="5" name="opmerking"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Voeg opmerking toe</button>
    </form>

    <?php
    foreach ($opmerkingen as $opmerking) {

        echo "
            <textarea type=\"text\" class=\"form-control\" rows=\"5\"  disabled>
                geplaatst door: " . $opmerking['byname'] . " " . $opmerking['description'] . " " . $opmerking['date'] . "
            </textarea>
            ";
    }
    ?>
</div>


