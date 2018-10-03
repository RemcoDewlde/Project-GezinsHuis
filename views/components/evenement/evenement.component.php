<div class="container">

    <div class="row">



           <div class="col-sm-4 py-2">
               <div class="card h-100">

                   <div class="card-block text-center">
                       <div class="card-header">
                       <a href="#"><h2><i class="fa fa-plus-square   e-o fa-5x"></i></h2></div></a>
                   </div>

                    <div class="card-body">
                        <h4 class="card-title">Maak een nieuw evenement aan</h4>
                    </div>
                   <div class="card-footer text-right">

                       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#evenementModal">
                           Maak aan
                       </button>


                   </div>

               </div>
            </div>

        <?php
        require'views/components/evenementmodel/evenementmodal.component.php'
        ?>


        <!--Zonder admin knoppen-->
        <div class="col-sm-4 py-2">
            <div class="card h-100">
                <img class="card-img-top" src="https://via.placeholder.com/800x400" alt="">
                <div class="card-body">
                    <p class="card-text"><small class="text-muted">2 Oktober 2018</small></p>
                    <h4 class="card-title">Lorem ipsum</h4>
                    <p class="card-text">
                        dolor sit amet, consectetur adipisicing elit, sed do eiu smod
                        tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip <a href="#" class="card-link">Lees verder..</a>
                    </p>
                </div>
            </div>
        </div>



        <!--Met admin knoppen-->
        <div class="col-sm-4 py-2">
            <div class="card h-100">

                <img class="card-img-top" src="https://via.placeholder.com/800x400" alt="">

                <div class="card-body">
                    <p class="card-text"><small class="text-muted">2 Oktober 2018</small></p>
                    <h4 class="card-title">Lorem ipsum</h4>
                    <p class="card-text">
                        dolor sit amet, consectetur adipisicing elit, sed do eiu smod
                        tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip <a href="#" class="card-link">Lees verder..</a>
                    </p>
                </div>

                <!--Twee knoppen voor admin= delete en aanpassen, bij aanpassen sturen naar een form, hier kan hij de veranderingen toepassen of verwijderen-->
                <div class="card-footer text-right">
                    <a class="btn btn-default" href="#" aria-label="Settings">
                        <i class="fa fa-cog" aria-hidden="true"></i>
                    </a>

                    <a class="btn btn-danger" href="#" aria-label="Delete">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                    </a>
                </div>


            </div>
        </div>





    </div>
</div>


