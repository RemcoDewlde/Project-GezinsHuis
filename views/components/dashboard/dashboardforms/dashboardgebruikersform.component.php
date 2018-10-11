<div class="container container-fluid">
    <form method="post" action="core/dashboardgebruikersform.php">



        <div class="form-group row">
            <label for="exampleInputFile">Thumbnail</label>
            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
            <small id="bestandHulp" class="form-text text-muted">Het bestand is op zijn mooist als het op zijn minst 524 x 640 is</small>
        </div>


        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Voornaam</label>
            <div class="col-10">
                <input class="form-control" type="text" id="example-text-input" name="voorNaam">
            </div>
        </div>


        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Achternaam</label>
            <div class="col-10">
                <input class="form-control" type="text" id="example-text-input" name="achterNaam">
            </div>
        </div>


        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Emailadres</label>
            <div class="col-10">
                <input class="form-control" type="text" id="example-text-input" name="email">
            </div>
        </div>


        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Wachtwoord</label>
            <div class="col-10">
                <input class="form-control" type="text" id="example-text-input" name="password">
            </div>
        </div>


        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Herhaal wachtwoord</label>
            <div class="col-10">
                <input class="form-control" type="text" id="example-text-input" name="passwordHerhaling">
            </div>
        </div>

        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Telefoonnummer</label>
            <div class="col-10">
                <input class="form-control" type="text" id="example-text-input" name="nummer">
            </div>
        </div>


        <div class="form-group row">
            <label for="example-date-input">Date</label>
            <div class="col-8">
                <input id="datepicker" width="1000" name="dob">
            </div>
        </div>





        <div class="form-group row">
            <label  for="example-text-input" class="col-2 col-form-label">Functie</label>
            <div class="col-10">
            <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect"  onchange="yesnoCheck(this);" name="functie">
                <option selected>Choose...</option>
                <option value="Admin">Admin</option>
                <option value="Specialist">Specialist</option>
                <option value="Ouder">Ouder</option>
                <option value="Kind">Kind</option>
            </select>
        </div>
    </div>





        <div class="form-group row" id="SpecialistFunctie" style="display: none;">
            <label for="example-text-input" class="col-2 col-form-label">Specialiteit</label>
            <div class="col-10">
                <input class="form-control" type="text" id="example-text-input" name="specialiteit">
            </div>
        </div>

        <div class="form-group row" id="OuderRechten" style="display: none;" name="rechten">
            <label for="example-text-input" class="col-2 col-form-label">Rechten</label>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value=TRUE>Wel
                </label>
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value=FALSE>Geen
                </label>
            </div>
        </div>

        <div class="form-group row" id="KindReden" style="display: none;">
            <label for="example-text-input" class="col-2 col-form-label">Reden</label>
            <div class="col-10">
                <input class="form-control" type="text" id="example-text-input" name="achterNaam">
            </div>
        </div>

        <button class="btn btn-primary btn-block my-4" type="submit">Sign in</button>

        <!--Datepicker-->
        <script>
            $('#datepicker').datepicker({
                uiLibrary: 'bootstrap4'
            });
        </script>


        <script>
            function yesnoCheck(that) {
                if (that.value == "Admin") {
                    document.getElementById("SpecialistFunctie").style.display = "none";
                    document.getElementById("OuderRechten").style.display = "none";
                    document.getElementById("KindReden").style.display = "none";
                }
                else if(that.value == "Specialist") {

                    document.getElementById("SpecialistFunctie").style.display = "block";
                    document.getElementById("OuderRechten").style.display = "none";
                    document.getElementById("KindReden").style.display = "none";
                }

                else if(that.value == "Ouder") {
                    document.getElementById("SpecialistFunctie").style.display = "none";
                    document.getElementById("OuderRechten").style.display = "block";
                    document.getElementById("KindReden").style.display = "none";
                }

                else if(that.value == "Kind") {
                    document.getElementById("SpecialistFunctie").style.display = "none";
                    document.getElementById("OuderRechten").style.display = "none";
                    document.getElementById("KindReden").style.display = "block";
                }

                else{
                    document.getElementById("SpecialistFunctie").style.display = "none";
                    document.getElementById("OuderRechten").style.display = "none";
                    document.getElementById("KindReden").style.display = "none";
                }
            }
        </script>



    </form>
</div>