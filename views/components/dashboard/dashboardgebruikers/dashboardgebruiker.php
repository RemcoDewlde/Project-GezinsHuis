<div class="container">
<br>


    <form action="../<?= $_SESSION['previous_uri'] ?>">
        <button type="submit" class="btn btn-primary float-left">Terug</button>
    </form>


<div class="row">
    <div class="col-md-1">



    </div>
    <div class="col-md-4"><img src="http://bcnnow.decodeproject.eu/img/users/no-image.jpg" height="295px"></div>
    <div class="col-md-6">
        <h2><?= $fname . " " . $lname ?></h2>
    <div class="form-group row">
        <label for="staticEmail" class="col-sm-6 col-form-label">Email</label>
        <div class="col-sm-6">
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $email ?>">
        </div>
    </div>
    <hr>
    <div class="form-group row">
        <label for="staticEmail" class="col-sm-6 col-form-label">Telefoonnummer</label>
        <div class="col-sm-6">
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $mobile ?>">
        </div>
    </div>
    <hr>
    <div class="form-group row">
        <label for="staticEmail" class="col-sm-6 col-form-label">Geboortedatum</label>
        <div class="col-sm-6">
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $dob ?>">
        </div>
    </div>
    <hr>
    <div class="form-group row">
        <label for="staticEmail" class="col-sm-6 col-form-label">Gebruikersnaam</label>
        <div class="col-sm-6">
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $nickname ?>">
        </div>
    </div>
    </div>
</div>





    <?php if($function == 'Kind') :?>
    <form action="plaatsopmerking" method="post">
        <input value="<?= $id ?>" name="id" hidden>
        <div class="form-group">

            <div class="col-md-2">
                <label>Opmerking</label>
            </div>
            <div class="col-md-12">
                <textarea type="text" class="form-control" rows="5" name="opmerking" maxlength="512" ></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Voeg opmerking toe</button>
    </form>

    <?php
    foreach ($opmerkingen as $opmerking) {

        echo "
<br>
<div class=\"wrap\">
            <textarea type=\"text\" class=\"form-control\" rows=\"5\" maxlength=\"512\"  disabled>
                
            </textarea>
            <span id='naam'>geplaatst door: " . $opmerking['byname']."</span>
            <span id='beschrijving'>". $opmerking['description'] ."</span>
            <span id='date'>" . $opmerking['date'] . "</span>
            </div>
            ";
    }
    ?>
</div>

<?php endif; ?>
<style>
    .wrap {
        position: relative;

    }

    #naam {
        position: absolute;
        top: 0;
        left: 0;
        margin-left: 10px;
    }
    #beschrijving {
        position: absolute;
        top: 0;
        left: 0;
        margin-top: 5vh;
        margin-left: 10px;
    }

    #date {
        position: absolute;
        bottom: 0;
        right: 0;
        margin-right: 10px;
    }
</style>