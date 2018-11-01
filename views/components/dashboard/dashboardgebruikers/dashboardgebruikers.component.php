<div class="container">

    <div class="row">

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

                    <button type="button" class="btn btn-primary" href="/dashboard/gebruikersform">
                        Maak aan
                    </button>

                </div>

            </div>
        </div>

        <?php
        foreach ($results as $items) {
            echo '<div class="col-sm-4 py-2">
                        <div class="card h-100">';
            if ($_SESSION['function'] == 'Admin') {
                echo '<img class="card-img-top" src="https://via.placeholder.com/800x400" alt="">';
            }
            echo '<form action="/dashboard/gebruiker" method="get"><input hidden value="' . $items->id . '" name="id"><a onclick="$(this).closest(\'form\').submit()" href="#">
                              <div class="card-body">
                                <h4 class="card-title">' . $items->fname . " " . $items->lname . '</h4>
                                <p class="card-text">
                                    ' . $items->email . '
                                    <br>
                                    ' . $items->mobile . '
                                    <br>
                                    ' . $items->function . '
                                </p>
                            </div>
                            </a>
                            </form>';
            if ($_SESSION['function'] == 'Admin') {
                echo '
                            <div class="card-footer text-right" style="float:right">
                                <a class="btn btn-primary" href="/" aria-label="Settings">
                                    <i class="fa fa-cog" aria-hidden="true"></i>
                                </a>
                                <form action="delete_user" method="post" style="float:right">
                                    <button class="btn btn-danger" data-toggle="modal" aria-label="Delete" name="id" value="' . $items->id . '">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </div>';
            }
            echo ' </div>
                    </div>';

        }
        ?>

        <?php
        require 'views/components/dashboard/dashboardwarningmodal/dashboardwarningmodalgebruiker.component.php';
        ?>

    </div>
</div>