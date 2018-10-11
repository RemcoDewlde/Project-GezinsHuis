<div class="container container-fluid">
    <form method="post">



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
                <input class="form-control" type="text" id="example-text-input" name="achterNaam">
            </div>
        </div>


        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Wachtwoord</label>
            <div class="col-10">
                <input class="form-control" type="text" id="example-text-input" name="achterNaam">
            </div>
        </div>


        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Herhaal wachtwoord</label>
            <div class="col-10">
                <input class="form-control" type="text" id="example-text-input" name="achterNaam">
            </div>
        </div>



        <div class="form-group row">
            <label  for="example-text-input" class="col-2 col-form-label">Functie</label>
            <div class="col-10">
            <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect"  onchange="yesnoCheck(this);">
                <option selected>Choose...</option>
                <option value="Admin">Admin</option>
                <option value="Specialist">Specialist</option>
                <option value="Ouders">Ouder</option>
                <option value="Kind">Kind</option>
            </select>
        </div>
    </div>








        <div class="form-group row">
            <label for="example-date-input">Date</label>
            <div class="col-8">
                <input id="datepicker" width="1000" />
            </div>
        </div>

        <div class="form-group row" id="Admin1" style="display: none;">
            <label for="example-text-input" class="col-2 col-form-label">TestAdmin</label>
            <div class="col-10">
                <input class="form-control" type="text" id="example-text-input" name="achterNaam">
            </div>
        </div>

        <div class="form-group row" id="Kind1" style="display: none;">
            <label for="example-text-input" class="col-2 col-form-label">TestKind</label>
            <div class="col-10">
                <input class="form-control" type="text" id="example-text-input" name="achterNaam">
            </div>
        </div>

        <div class="form-group row" id="Kind2" style="display: none;">
            <label for="example-text-input" class="col-2 col-form-label">TestKind2</label>
            <div class="col-10">
                <input class="form-control" type="text" id="example-text-input" name="achterNaam">
            </div>
        </div>



        <!--Datepicker-->
        <script>
            $('#datepicker').datepicker({
                uiLibrary: 'bootstrap4'
            });
        </script>


        <script>
            function yesnoCheck(that) {
                if (that.value == "Admin") {

                    document.getElementById("Admin1").style.display = "block";
                    document.getElementById("Kind1").style.display = "none";
                    document.getElementById("Kind2").style.display = "none";
                }
                else if(that.value == "Kind") {

                    document.getElementById("Kind1").style.display = "block";
                    document.getElementById("Kind2").style.display = "block";
                    document.getElementById("Admin1").style.display = "none";
                }

                /**else if(that.value == "") {
                    document.getElementById("ifYes").style.display = "none";
                }

                else if(that.value == "") {
                    document.getElementById("ifYes").style.display = "none";
                }
*/
                else{
                    document.getElementById("Admin1").style.display = "none";
                    document.getElementById("Kind1").style.display = "none";
                }
            }
        </script>



    </form>
</div>