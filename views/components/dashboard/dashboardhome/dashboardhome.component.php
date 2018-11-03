<?php
$ongelezenberichten = $app['database']->unreadMessages($_SESSION['id']);
?>
<br>
<div class="container-fluid">

<div class="col-md-8 float-left">
    <?php
        if($_SESSION['function'] == 'Admin') {
            echo '
             <div class="row">
<div class="col-md-3"></div>
        <div class="col-sm-4 py-2">
            <div class="card h-100">

                <div class="card-block text-center">
                    <div class="card-header">
                        <a href="/dashboard/gebruikersform"><h2><i class="fa fa-user-plus e-o fa-5x"></i></h2></a>
                    </div>
                </div>

                <div class="card-body">
                    <h4 class="card-title">Maak een nieuwe gebruiker aan</h4>
                </div>
                <div class="card-footer text-right">


                    <a href="/dashboard/gebruikersform" class="btn btn-primary" role="button">Maak aan</a>

                </div>

            </div>
        </div>
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
        </div>
        <br>
        ';}
        echo '
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-5">
                <div class="card text-center">';

if(count($ongelezenberichten) == 0){
    echo '<div class="col-auto" style="font-size: 24px;">
                        <i class="fas fa-envelope-open fa-9x"></i>
                    </div>';}
    else {
        echo '<div class="col-auto" style="font-size: 24px;">
                        <i class="fas fa-envelope fa-9x"></i><span class="badge badge-primary badge-pill">'.count($ongelezenberichten).'</span>
                    </div>';
    }


                    
                    echo '<a href="/dashboard/berichten" class="btn btn-primary" role="button">Bekijk berichten</a>
                
            </div>
        </div>
    </div>
    </div>
        


    </div>
    </div>
    
            ';





echo '</div>
        <div class="col-md-4 float-right">
<h4>Evenementen</h4>
            <hr>';

    foreach ($results as $items) {
        echo '
<div class="card">
        <div class="row no-gutters">
            <div class="col-auto">
                <img src="'. $items['pictures'] .'" width="150px" alt="">
            </div>
            <div class="col">
                <div class="card-block px-2">
                
                    <h4 class="card-title">' . $items['eventname'] . '</h4>
                    <p class="card-text"><small class="text-muted">' . $items['date_event'] . '</small></p>';


        if (strlen($items['description']) >= 89){
            echo '<div class="container">
  <div class="row ">
    <div class="col-md-12">
      <div id="summary">
        <p class="collapse" id="collapseSummary'. $items['id'] .'">
          '.substr($items['description'], 0).'
        </p>
        <a class="collapsed" data-toggle="collapse" href="#collapseSummary'. $items['id'] .'" aria-expanded="false" aria-controls="collapseSummary"></a>
      </div></div></div>';
        }
        else {
            echo($items['description']);
        }
        echo '
                
                
  <br>
                </div>
                </div>
            </div>
        </div>
        
    </div>
    <br>
    ';
    };
    ?>



    </div>












</div>

<style>


    #summary p.collapse:not(.show) {
        height: 54px !important;
        overflow: hidden;

        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }

    #summary p.collapsing {
        min-height: 54px !important;
    }

    #summary a.collapsed:after  {
        content: 'Lees meer';
    }

    #summary a:not(.collapsed):after {
        content: 'Lees minder';
    }
</style>



<!--


if (strlen($items['description']) >= 89){
            echo '<p>'.substr($items['description'], 0, strpos($items['description'], ' ', 90)).'<span class="collapse" style="relative" id="collapseExample'. $items['id'].'">
              '.substr($items['description'], strpos($items['description'], ' ', 90)).'</span>

  <a data-toggle="collapse" href="#collapseExample'. $items['id'] .'" role="button" aria-expanded="false" aria-controls="collapseExample" onclick="changetext()">lees
  </a></p>';
        }
        else {
            echo($items['description']);
        }



<div class="row">
    <div class="card">
        <div class="row no-gutters">
            <div class="col-auto" style="font-size: 24px;">
                <i class="fas fa-envelope fa-10x"></i><span class="badge badge-primary badge-pill"><?=count($ongelezenberichten)?></span>
            </div>
            <div class="col">
                <div class="card-block px-2">
                    <h4 class="card-title"></h4>
                    <p class="card-text"><small class="text-muted"></small></p>
                    <p class="card-text">

                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>-->




