<div class="container">
<br>

    <form method='get' action='/nieuwbericht'>
        <button class='btn btn-primary' type='submit'>
            <i class="fa fa-plus"></i> Nieuw
        </button>
    </form>

<br>
    <?php
    if($_SESSION['function'] == 'Admin'){echo '<h4>Berichten van andere gebruikers</h4>';}
    ?>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>datum</th>
            <th>onderwerp</th>
            <th>emailadres</th>
            <th></th>
        </tr>

        </thead>

        <tbody>
        <?php
        foreach ($berichten as $items) {

            echo "<tr><td>" . $items->datum . "</td><td>" . $items->onderwerp . "</td><td>" . $items->email . "</td><td>
                    <form method='get' action='/berichtlezen'>
                        <button class='btn btn-primary' type='submit'>
                            <i class=\"fa fa-chevron-right fa-lg\" aria-hidden=\"true\">
                                <input name='id' value='$items->id' hidden>
                            </i>
                        </button>
                    </form>
                    </td></tr>";
        }

        ?>


        </tbody>
    </table>
<br>



    <?php

    if($_SESSION['function'] == 'Admin'){

        echo '
           <h4>Berichten van website</h4>
        <table class="table table-hover">
        <thead>
        <tr>
            <th>datum</th>
            <th>onderwerp</th>
            <th>emailadres</th>
            <th></th>
        </tr>

        </thead>

        <tbody>';

        foreach ($Adminberichten as $items) {

            echo "<tr><td>" . $items->datum . "</td><td>" . $items->onderwerp . "</td><td>" . $items->email . "</td><td>
                    <form method='get' action='/berichtlezen'>
                        <button class='btn btn-primary' type='submit'>
                            <i class=\"fa fa-chevron-right fa-lg\" aria-hidden=\"true\">
                                <input name='id' value='$items->id' hidden>
                            </i>
                        </button>
                    </form>
                    </td></tr>";
        }

echo "        


        </tbody>
    </table>";
    }

    ?>
</div>

