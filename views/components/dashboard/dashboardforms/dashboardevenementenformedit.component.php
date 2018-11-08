<div class="container container-fluid">
    <?php
    foreach ($results as $items) {
        echo '
<form method="post" action="event_bewerken" enctype="multipart/form-data">

        <div class="form-group row">
            <label for="evenementTitel">Evenement titel</label>
            <input type="text" class="form-control" id="evenementTitel" name="eventname" placeholder="Titel" required value="' . $items['eventname'] . '">
        </div>


        <div class="form-group row">
            <label for="exampleInputFile">Thumbnail</label>
            <input type="file" class="form-control-file" id="exampleInputFile" name="pictures" aria-describedby="fileHelp" value="' . $items['pictures'] . '">
            <label>' . $items['pictures'] . '</label>
            <small id="bestandHulp" class="form-text text-muted"><br>Het bestand is op zijn mooist als het op zijn minst 524 x 640 is</small>
        </div>


        <div class="form-group row">
            <label for="example-date-input">Datum</label>
            <input id="datepicker" name="date_event" placeholder="yyyy-mm-dd" required value="' . $items['date_event'] . '">
        </div>


        <div class="form-group row">
            <label for="evenementBeschrijving">Beschrijving</label>
            <textarea class="form-control" rows="5" name="description" placeholder="Beschrijving">' . $items['description'] . '"</textarea>
        </div>


        <div class="form-group row">
            <button name="id" value="' . $items['id'] . '" class="btn btn-lg btn-primary btn-block" type="submit">bewerk event</button>
        </div>



</form>
';
    };
    ?>
</div>

<!--Datepicker-->
<script>
    $('#datepicker').datepicker({
        format: 'yyyy/mm/dd',
        uiLibrary: 'bootstrap4'

    });
</script>