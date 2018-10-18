<div class="container container-fluid">
<form method="post" action="event_toevoegen">

        <div class="form-group row">
            <label for="evenementTitel">Evenement titel</label>
            <input type="text" class="form-control" id="evenementTitel" name="eventname" placeholder="Titel" required>
        </div>


        <div class="form-group row">
            <label for="exampleInputFile">Thumbnail</label>
            <input type="file" class="form-control-file" id="exampleInputFile" name="pictures" aria-describedby="fileHelp">
            <small id="bestandHulp" class="form-text text-muted">Het bestand is op zijn mooist als het op zijn minst 524 x 640 is</small>
        </div>


        <div class="form-group row">
            <label for="example-date-input">Datum</label>
            <input id="datepicker" name="date_event" placeholder="mm-dd-yyyy" required>
        </div>


        <div class="form-group row">
            <label for="evenementBeschrijving">Beschrijving</label>
            <textarea class="form-control" rows="5" name="description" placeholder="Beschrijving"></textarea>
        </div>


        <div class="form-group row">
            <button class="btn btn-lg btn-primary btn-block" type="submit">plaats evenement</button>
        </div>

</form>
</div>