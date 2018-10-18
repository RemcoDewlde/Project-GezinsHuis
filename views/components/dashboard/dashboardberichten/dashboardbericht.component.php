<link rel="stylesheet" href="views/components/contact/contact.component.css">
<div class="container">
    <form method="post" action="/bericht">
        <?php
            foreach($berichten as $items){
                echo "<div class=\"form-group row\">
            <div class=\"col\">
                <label for=\"berichtDatum\">naam</label>
                <input type=\"text\" readonly class=\"form-control\" id=\"formdatum\" name=\"datum\" value=\"$items->datum\" required>
            </div>
        </div>
        <div class=\"form-group row\">
            <div class=\"col\">
                <label for=\"berichtNaam\">naam</label>
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
            <label for=\"berichtBericht\">bericht</label>
            
            <textarea readonly class=\"form-control\" id=\"formBericht\" rows=\"4\" name=\"bericht\" required>$items->bericht</textarea>
            </div>
        </div>";
            }
        ?>



    </form>
</div>