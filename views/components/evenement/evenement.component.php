<link rel="stylesheet" href="views/components/evenement/evenement.component.css">
<div class="container">
    <br>

    <div class="card-decks">

        <?php
        foreach ($results as $items) {
            echo '
                    <div class="card">
                            <div class="row no-gutters">
                                <div class="col-auto">
                                    <img src="' . $items['pictures'] . '" width="150px" alt="">
                                </div>
                                <div class="col">
                                    <div class="card-block px-2">
                                        <h4 class="card-title">' . $items['eventname'] . '</h4>
                                        <p class="card-text"><small class="text-muted">' . $items['date_event'] . '</small></p>
                                        <p class="card-text">
                                            ' . $items['description'] . '</p>
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

