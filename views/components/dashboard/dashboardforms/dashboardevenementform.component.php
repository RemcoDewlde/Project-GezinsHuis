<div class="container container-fluid">
<form method="post">

        <div class="form-group row">
            <label for="evenementTitel">Evenement titel</label>
            <input type="email" class="form-control" id="evenementTitel" placeholder="Titel">
        </div>


        <div class="form-group row">
            <label for="exampleInputFile">Thumbnail</label>
            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
            <small id="bestandHulp" class="form-text text-muted">Het bestand is op zijn mooist als het op zijn minst 524 x 640 is</small>
        </div>


        <div class="form-group row">
            <label for="example-date-input">Date</label>

            <input id="datepicker" width="1200" />
        </div>


        <div class="form-group row">
            <label for="exampleFormControlTextarea3">Editor</label>
            <div id="summernote"></div>
        </div>

<!--Summernote editor-->
<script>
    $('#summernote').summernote({
        tabsize: 2,
        width: 1200,
        height: 200
    });
</script>

    <!--Datepicker-->
    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>


</form>
</div>