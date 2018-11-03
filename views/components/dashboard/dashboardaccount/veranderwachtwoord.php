
<div class="container">
<br>
<form action="/account" id="cancel"></form>
<form action="nieuwwachtwoord" method="post">

        <div class="form-group row">
            <div class="col-md-2">
                <label>Huidig wachtwoord</label>
            </div>
            <div class="col-md-6">
                <div class="input-group mb-3">
                    <input type="password" class="form-control" id="myInput1" name="curpassword" required>
                    <div class="input-group-prepend">
                        <button type="button" class="input-group-addon" onclick="myFunction1()"> <span id="myImg1" class="fa fa-eye-slash"></span></button>
                    </div>
                </div>
            </div>
        </div>



        <div class="form-group row">
            <div class="col-md-2">
                <label>Nieuw wachtwoord</label>
            </div>
            <div class="col-md-6">
                <div class="input-group mb-3">
                    <input type="password" class="form-control" id="myInput2" name="newpassword" required>
                    <div class="input-group-prepend">
                        <button type="button" onclick="myFunction2()" class="input-group-addon"> <span id="myImg2" class="fa fa-eye-slash"></span></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-2">
                <label>Herhaling wachtwoord</label>
            </div>
            <div class="col-md-6">
                <div class="input-group mb-3">
                    <input type="password" class="form-control" id="myInput3" name="passwordmatch" required>
                    <div class="input-group-prepend">
                        <button type="button" onclick="myFunction3()" class="input-group-addon"> <span id="myImg3" class="fa fa-eye-slash"></span></button>
                    </div>
                </div>
            </div>
        </div>





        <button type="submit" class="btn" form="cancel">Cancel</button>
        <button type="submit" class="btn btn-primary">Verander wachtwoord</button>
    </div>

</form>

<script>


    function myFunction1() {
        var x = document.getElementById("myInput1");
        var y = document.getElementById("myImg1");
        if (x.type === "password") {
            x.type = "text";
            y.className = "fa fa-eye";
        } else {
            y.className = "fa fa-eye-slash";
            x.type = "password";
        }
    }
    function myFunction2() {
        var x = document.getElementById("myInput2");
        var y = document.getElementById("myImg2");
        if (x.type === "password") {
            x.type = "text";
            y.className = "fa fa-eye";
        } else {
            x.type = "password";
            y.className = "fa fa-eye-slash";
        }
    }
    function myFunction3() {
        var x = document.getElementById("myInput3");
        var y = document.getElementById("myImg3");
        if (x.type === "password") {
            x.type = "text";
            y.className = "fa fa-eye";
        } else {
            x.type = "password";
            y.className = "fa fa-eye-slash";
        }
    }
</script>

