<link rel="stylesheet" href="views/components/evenement/evenement.component.css">
<div class="container">
    <div class="row">

        <?php
        foreach ($results as $items) {
                echo '<div class="col-sm-5 py-2">
                <div class="card h-100">
                    <img class="card-img-top" src="assets/temp/birthday-cake-cake-birthday-cupcakes-40183.jpeg" alt="">
                    <div class="card-body">
                        <p class="card-text"><small class="text-muted">' . $items['date_event'] . '</small></p>
                        <h4 class="card-title">' . $items['eventname'] . '</h4>
                        <p class="card-text">
                            ' . $items['description'] . '
                        </p>
                    </div>
                </div>
            </div>';
            };
        ?>




    </div>
</div>

