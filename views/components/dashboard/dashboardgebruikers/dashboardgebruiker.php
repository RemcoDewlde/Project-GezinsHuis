

<div class="container">
    <form action="../<?=$_SESSION['previous_uri']?>">
    <button type="submit" class="btn btn-primary">Verlaat</button>
    </form>
    <form action="plaatsopmerking" method="post">
        <input value="<?=$kindID?>" name="id" hidden >
        <div class="form-group row">
            <div class="col-md-2">
                <label>Opmerking</label>
            </div>
            <div class="col-md-8">
                <textarea type="text" class="form-control" rows="5" name="opmerking"></textarea>
            </div>
        </div>



        <button type="submit" class="btn btn-primary">Voeg opmerking toe</button>


    </form>

    <?php
        foreach($opmerkingen as $opmerking) {

                echo "
            <textarea type=\"text\" class=\"form-control\" rows=\"5\" disabled>geplaatst door: " .$opmerking['byname'] . " " .$opmerking['description'] . " " .$opmerking['date'] . "</textarea>
            ";

        }
    ?>
</div>


