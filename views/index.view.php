<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Gezinshuis Regterink</title>
        <link rel="shortcut icon" type="image/x-icon" href="assets/Logo-gezinshuis/Icon/Regterinklogo.ico" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link rel="stylesheet" href="views/index.view.css">
    </head>
    <body>
    <?php
    require 'components/navbar/navbar.component.php';
    require 'views/components/carousel/caroesel.component.php';
    ?>


    <div class="jumbotron jumbotron-fluid withbackground">
        <div class="container">
            <h1 class="display-4">Gezinshuis Regterink</h1>
            <p class="lead">Het gezinshuis op trots om te zijn!</p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="card-body">
                    <h5 class="card-title">Evenementen</h5>
                    <p class="card-text">Als gezin moeten er natuurlijk ook leuke momenten zijn, Daarom organiseren we regelmatig wat!</p>
                    <a href="/evenementen" class="btn btn-primary">Bekijk wat we gaan doen</a>
                </div>
            </div>
            <div class="col-6">

                    <img class="card-img-top" src="assets/Logo-gezinshuis/fotos/pexels-photo1.jpeg" alt="fairground">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
        <div class="col-6">

            <img class="card-img-top" src="assets/Logo-gezinshuis/fotos/pexels-photo2.jpeg" alt="fairground">
        </div>

            <div class="col-6">
                <div class="card-body">
                    <h5 class="card-title">Even iets over ons!</h5>
                    <p class="card-text">Wij zijn natuurlijk niet zomaar zo groot geworden bekijk hier informatie over ons</p>
                    <a href="/about" class="btn btn-primary">Over ons!</a>
                </div>
            </div>
        </div>
    </div>
    <div class="jumbotron jumbotron-fluid personel">
        <div class="container">
            <div class="row">

                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="https://randomuser.me/api/portraits/women/79.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h3>John Doe</h3>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="https://randomuser.me/api/portraits/lego/3.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h3>John Doe</h3>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="https://randomuser.me/api/portraits/men/81.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h3>John Doe</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        require 'components/footer/footer.component.php';
    ?>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    </body>
</html>