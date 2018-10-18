<div class="container">

    <div class="row">
        <div class="col-sm-4 py-2">
            <div class="card h-100">

                <div class="card-block text-center">
                    <div class="card-header">
                        <a href="/dashboard/evenementform"><h2><i class="fa fa-calendar-plus-o   e-o fa-5x"></i></h2></a>
                    </div>
                </div>

                <div class="card-body">
                    <h4 class="card-title">Maak een nieuw evenement aan</h4>
                </div>
                <div class="card-footer text-right">

                    <a href="/dashboard/evenementform" class="btn btn-primary" role="button">Maak aan</a>

                </div>

            </div>
        </div>

        <?php
            foreach ($results as $items) {
                echo '<div class="col-sm-4 py-2">
                        <div class="card h-100">
            
                            <img class="card-img-top" src="https://via.placeholder.com/800x400" alt="">
            
                            <div class="card-body">
                                <p class="card-text"><small class="text-muted"> '. $items-> date_event.' </small></p>
                                <h4 class="card-title">' . $items->eventname . '</h4>
                                <p class="card-text">
                                '. $items->description.'
                                     <a href="#" class="card-link">Lees verder..</a>
                                </p>
                            </div>
            
                            <!--Twee knoppen voor admin= delete en aanpassen, bij aanpassen sturen naar een form, hier kan hij de veranderingen toepassen of verwijderen-->
                            <div class="card-footer text-right">
                            <form method="post" action="event_verwijderen" style="float: right;"> 
                                <a class="btn btn-danger" data-toggle="modal" aria-label="Delete" href="#evenementVerwijderMelding">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </a>
                            </form>
                            
                            <form method="get" action="event_bewerken" style="float: right;">
                                <button name="id" value="'. $items->id .'" class="btn btn-primary" href="event_bewerken" aria-label="Settings">
                                    <i class="fa fa-cog" aria-hidden="true"></i>
                                </button>
                            </form>
                               
            
                            </div>
                        </div>
                    </div>';

            }




        ?>

        <!--Met admin knoppen-->



        <?php
        require 'views/components/dashboard/dashboardwarningmodal/dashboardwarningmodalevenement.component.php';
        ?>


    </div>
</div>
