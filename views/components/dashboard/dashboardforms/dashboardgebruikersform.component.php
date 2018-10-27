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
                <input type="text" class="form-control" name="voornaam" required>
            </div>

            <label class="control-label col-sm-2" for="evenementTitel">achternaam</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="achternaam" required>
            </div>
        </div>

        <div class="form-group row">
            <label class="control-label col-sm-2" for="evenementTitel">gebruikersnaam</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="gebruikersnaam">
            </div>
        </div>

        <div class="form-group row">
            <label class="control-label col-sm-2" for="datum">geboortedatum</label>
            <div class="col-sm-10">
                <input id="datepicker" placeholder="yyyy-mm-dd" name="datum" data-date-format="yyyy/mm/dd">
            </div>
        </div>

        <div class="form-group row">
            <label class="control-label col-sm-2" for="email">email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
        </div>

        <div class="form-group row">
            <label class="control-label col-sm-2" for="evenementTitel">wachtwoord</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="wachtwoord" required>
            </div>
        </div>

        <div class="form-group row">
            <label class="control-label col-sm-2" for="evenementTitel">herhaling wachtwoord</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="wachtwoordHerhaling" required>
            </div>
        </div>

        <div class="form-group row">
            <label class="control-label col-sm-2" for="evenementTitel">mobiele nummer</label>
            <div class="col-sm-10">
                <input type="tel" class="form-control" name="nummer" placeholder="+31 ">
            </div>
        </div>




        <div class="form-group row">
            <label class="col-sm-2" for="inlineFormCustomSelect">functie</label>
            <div class="col-sm-10">
                <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="functieSelecteren" name="functieSelecteren" onchange="yesnoCheck(this);" required>
                    <option value="" disabled selected>selecteer</option>
                    <option value="Admin">administrator</option>
                    <option value="Specialist">specialist/hulp</option>
                    <option value="Ouder">ouder</option>
                    <option value="Kind">kind</option>
                </select>
            </div>
        </div>





        <div class="form-group row" id="specialistFunctie" style="display: none;">
            <label class="control-label col-sm-2" for="evenementTitel">omschrijving functie</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="omschrijving">
            </div>
        </div>


        <div class="form-group row" id="kindReden" style="display: none;">
            <label class="control-label col-sm-2" for="evenementTitel">reden</label>
            <div class="col-sm-10">
                <textarea class="form-control" rows="5" name="reden"></textarea>
            </div>
        </div>

        <div class="form-group row" id="kindDocument" style="display: none;">
            <label class="control-label col-sm-2" for="exampleInputFile">Document</label>
            <div class="col-sm-10">
                <input type="file" class="form-control-file" id="exampleInputFile" name="document" aria-describedby="fileHelp">
                <small id="bestandHulp" class="form-text text-muted">Dit bestand kan later altijd nog toegevoegd worden</small>
            </div>
        </div>


        <div class="form-group row" id="ouderRechten" style="display: none;">
            <label class="control-label col-sm-2" for="evenementTitel">rechten</label>
            <div class="col-sm-10">

                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="rechten" id="inlineRadio1" value=1 >wel
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="rechten" id="inlineRadio2" value=0 >geen
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
                format: 'yyyy/mm/dd',
                uiLibrary: 'bootstrap4'

            });
        </script>
        <script>
            function yesnoCheck(that) {

                if(that.value == "Specialist") {
                    document.getElementById("specialistFunctie").style.display = "block";
                    document.getElementById("ouderRechten").style.display = "none";
                    document.getElementById("kindReden").style.display = "none";
                    document.getElementById("kindDocument").style.display = "none";
                }
                else if(that.value == "Ouder") {
                    document.getElementById("specialistFunctie").style.display = "none";
                    document.getElementById("ouderRechten").style.display = "block";
                    document.getElementById("kindReden").style.display = "none";
                    document.getElementById("kindDocument").style.display = "none";
                }
                else if(that.value == "Kind") {
                    document.getElementById("specialistFunctie").style.display = "none";
                    document.getElementById("ouderRechten").style.display = "none";
                    document.getElementById("kindReden").style.display = "block";
                    document.getElementById("kindDocument").style.display = "block";
                }
                else{
                    document.getElementById("specialistFunctie").style.display = "none";
                    document.getElementById("ouderRechten").style.display = "none";
                    document.getElementById("kindReden").style.display = "none";
                    document.getElementById("kindDocument").style.display = "none";
                }
            }
        </script>



    </form>
</div>