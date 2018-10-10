<div class="container">

    <div class="row">

        <div class="col-sm-4 py-2">
            <div class="card h-100">

                <div class="card-block text-center">
                    <div class="card-header">
                        <a href="" data-target="#evenementModal" data-toggle="modal"><h2><i class="fa fa-user-plus e-o fa-5x"></i></h2></a>
                    </div>
                </div>

                <div class="card-body">
                    <h4 class="card-title">Maak een nieuwe gebruiker aan</h4>
                </div>
                <div class="card-footer text-right">

                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#evenementModal">
                        Maak aan
                    </button>

                </div>

            </div>
        </div>

    <?php
        foreach ($results as $items) {
            echo '<div class="col-sm-4 py-2">
                        <div class="card h-100">
                            <img class="card-img-top" src="https://via.placeholder.com/800x400" alt="">
                            <div class="card-body">
                                <p class="card-text"><small class="text-muted"> roleid: '. $items -> roleid.'</small></p>
                                <h4 class="card-title">'. $items -> fname ." ". $items -> lname. '</h4>
                                <p class="card-text">
                                    '. $items -> email .'
                                    <br>
                                    '. $items -> mobile.'
                                    <br>
                                    '.$items -> roleid.'
                                </p>
                            </div>
                            <div class="card-footer text-right">
                                <a class="btn btn-primary" href="#" aria-label="Settings">
                                    <i class="fa fa-cog" aria-hidden="true"></i>
                                </a>
                                <a class="btn btn-danger" data-toggle="modal" aria-label="Delete" href="#gebruikerVerwijderMelding">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>';
        }
        ?>

    <?php
     require 'views/components/dashboard/dashboardwarningmodal/dashboardwarningmodalgebruiker.component.php';
    ?>

    </div>
</div>