<link rel="stylesheet" href="views/components/contact/contact.component.css">
<div class="container">
<br>
    <form action="../<?= $_SESSION['previous_uri'] ?>" style="margin-top: 1vh">
        <button type="submit" class="btn btn-primary">Verlaat</button>
    </form>
    <form method="post" action="/bericht">
        <?php
        foreach ($berichten as $items) {
            echo "<div class=\"form-group row\">
            <div class=\"col\">
                <label for=\"berichtDatum\">Datum</label>
                <input type=\"text\" readonly class=\"form-control\" id=\"formdatum\" name=\"datum\" value=\"$items->datum\" required>
            </div>
        </div>
        <div class=\"form-group row\">
            <div class=\"col\">
                <label for=\"berichtNaam\">Naam</label>
                <input type=\"text\" readonly class=\"form-control\" id=\"formNaam\" name=\"naam\" value=\"$items->naam\" required>
            </div>
        </div>
        <div class=\"form-group row\">
            <div class=\"col\">
                <label for=\"berichtEmail\">email adres</label>
                <input type=\"email\" readonly class=\"form-control\" id=\"formEmail\" name=\"email\" value=\"$items->email\" required>
            </div>
        </div>
        <div class=\"form-group row\">
        <div class=\"col\">
            <label for=\"berichtBericht\">Bericht</label>
            
            <textarea readonly class=\"form-control\" id=\"formBericht\" rows=\"4\" name=\"bericht\" required>$items->bericht</textarea>
            </div>
        </div>";
        }
        ?>
    </form>
</div>