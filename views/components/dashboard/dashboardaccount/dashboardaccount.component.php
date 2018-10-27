

<div class="container">
    <form action="<?=$_SESSION['previous_uri']?>" id="cancel"></form>
    <form action="veranderaccount" method="post">
        <div class="form-group row">
            <div class="col-md-2">
                <label>Nickname</label>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" value="<?=$_SESSION['nickname']?>" name="nickname" disabled>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-2">
                <label>Voornaam</label>
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" value="<?=$_SESSION['fname']?>" name="fname" disabled>
            </div>
            <div class="col-md-2">
                <label>Achternaam</label>
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" value="<?=$_SESSION['lname']?>" name="lname" disabled>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-2">
                <label>Email</label>
            </div>
            <div class="col-md-6">
                <input type="email" class="form-control" value="<?=$_SESSION['email']?>" name="email" required>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-2">
                <label>Telefoonnummer</label>
            </div>
            <div class="col-md-6">
                <input type="tel" class="form-control" value="<?=$_SESSION['mobile']?>" name="mobile" required>
            </div>
        </div>



        <div class="form-group row">
            <div class="col-md-2">
                <label>Wachtwoord</label>
            </div>
            <div class="col-md-6">
                <a href="account/veranderwachtwoord">
                    Verander wachtwoord
                </a>
            </div>
        </div>







        <button type="submit" class="btn" form="cancel">Cancel</button>
        <button type="submit" class="btn btn-primary">Verander gegevens</button>





    </form>
</div>


