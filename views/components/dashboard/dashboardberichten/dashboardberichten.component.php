<div class="container">
    <table class="table table-hover">
    <thead>
        <tr>
            <th>datum</th>
            <th>naam</th>
            <th>emailadres</th>
        </tr>

    </thead>

    <tbody>
    <?php
            foreach($berichten as $items){

                    echo "<tr><td>" . $items -> datum . "</td><td>". $items -> naam . "</td><td>" . $items -> email . "</td><td>
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
</div>

