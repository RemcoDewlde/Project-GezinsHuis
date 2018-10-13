<div class="container">
    <form class="form-horizontal" method="post" action="/gebruiker_toevoegen">

        <div class="form-group row">
            <label class="control-label col-sm-2" for="exampleInputFile">thumbnail</label>
            <div class="col-sm-10">
                <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                <small id="bestandHulp" class="form-text text-muted">Het bestand is op zijn mooist als het op zijn minst 524 x 640 is en kan altijd nog toegevoegd worden</small>
            </div>
        </div>

        <div class="form-group row">
            <label class="control-label col-sm-2" for="evenementTitel">voornaam</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="voornaam" required>
            </div>



            <label class="control-label col-sm-2" for="evenementTitel">achternaam</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="achternaam" required>
            </div>
        </div>

        <div class="form-group row">
            <label class="control-label col-sm-2" for="evenementTitel">gebruikersnaam</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="gebruikersnaam">
            </div>
        </div>

        <div class="form-group row">
            <label class="control-label col-sm-2" for="datum">geboortedatum</label>
            <div class="col-sm-10">
                <input id="datepicker" placeholder="mm-dd-yyyy" required>
            </div>
        </div>

        <div class="form-group row">
            <label class="control-label col-sm-2" for="email">email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" required>
            </div>
        </div>

        <div class="form-group row">
            <label class="control-label col-sm-2" for="evenementTitel">wachtwoord</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="wachtwoord" required>
            </div>
        </div>

        <div class="form-group row">
            <label class="control-label col-sm-2" for="evenementTitel">herhaling wachtwoord</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="wachtwoordHerhaling" required>
            </div>
        </div>

        <div class="form-group row">
            <label class="control-label col-sm-2" for="evenementTitel">mobiele nummer</label>
            <div class="col-sm-10">
                <input type="tel" class="form-control" id="nummer" placeholder="+31 " required>
            </div>
        </div>








        <div class="form-group row">
            <label class="col-sm-2" for="inlineFormCustomSelect">functie</label>
            <div class="col-sm-10">
                <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="functieSelecteren" required>
                    <option value="">selecteer</option>
                    <option value="Admin">administrator</option>
                    <option value="Specialist">specialist/hulp</option>
                    <option value="Ouder">ouder</option>
                    <option value="Kind">kind</option>
                </select>
            </div>
        </div>


        <div class="form-group row yellow kindSelectie">
            <label class="control-label col-sm-2" for="evenementTitel">omschrijving</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="omschrijving">
            </div>
        </div>


        <div class="form-group row yellow kindSelectie">
            <label class="control-label col-sm-2" for="evenementTitel">reden</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="evenementTitel">
            </div>
        </div>

        <div class="form-group row kindSelectie">
            <label class="control-label col-sm-2" for="exampleInputFile">Document</label>
            <div class="col-sm-10">
                <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                <small id="bestandHulp" class="form-text text-muted">Dit bestand kan later altijd nog toegevoegd worden</small>
            </div>
        </div>


        <div class="form-group row specialistSelectie">
            <label class="control-label col-sm-2" for="evenementTitel">functie/hulpvorm</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="evenementTitel">
            </div>
        </div>


        <div class="form-group row ouderSelectie">
            <label class="control-label col-sm-2" for="evenementTitel">rechten</label>
            <div class="col-sm-10">

                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" required>wel
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" required>geen
                    </label>
                </div>

            </div>
        </div>

        <div class="form-group row">
        <button class="btn btn-lg btn-primary btn-block" type="submit">maak gebruiker</button>
        </div>

        <!--Datepicker-->
        <script>
            $('#datepicker').datepicker({
                uiLibrary: 'bootstrap4'
            });
        </script>


    </form>
</div>