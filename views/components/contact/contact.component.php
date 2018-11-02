<link rel="stylesheet" href="views/components/contact/contact.component.css">
<div class="container">
    <h1 class="display-4"> contact</h1>
    <form method="post" action="/bericht">


        <div class="form-group">
            <label for="formEmail">email adres</label>
            <input type="email" class="form-control" id="formEmail" name="email" required>
        </div>
        <div class="form-group">
            <label for="formOnderwerp">onderwerp</label>
            <input type="text" class="form-control" id="formOnderwerp" name="onderwerp"required>
        </div>
    <div class="form-group">
        <label for="formBericht">bericht</label>
        <textarea class="form-control" id="formBericht" rows="4" name="bericht" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary mb-2">Verstuur bericht</button>
    </form>
</div>