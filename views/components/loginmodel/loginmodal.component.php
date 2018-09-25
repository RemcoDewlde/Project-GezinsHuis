<!-- Modal form -->
<div class="modal fade" id="loginModal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal header -->
            <div class="modal-header">
                <h4 class="modal-title">Aanmelden</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>   <!-- Knop om modal te sluiten(X) -->
            </div>

            <form action="/action_page.php" target="_self">
                <!-- Modal body -->
                <div class="modal-body">

                    <div class="form-group">
                        <label for="loginEmail">Gebruikersnaam</label>
                        <input type="email" class="form-control" id="loginEmail" aria-describedby="email" placeholder="Gebruikersnaam">
                    </div>
                    <div class="form-group">
                        <label for="loginWachtwoord">Wachtwoord</label>
                        <input type="password" class="form-control" id="loginWachtwoord" placeholder="Wachtwoord">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="loginCheck">
                        <label class="form-check-label" for="loginCheck">Aangemeld blijven</label>
                    </div>
                    <div class="form-group">
                        <small id="loginHelp" class="form-text text-muted"><a href="">Wachtwoord vergeten</a></small>
                        <small id="loginRegistreer" class="form-text text-muted"><a href="">Nog geen account? Registreer</a></small>
                    </div>

                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Login</button>    <!-- Knop om functie uit te voeren die beschreven is in action_page.php -->
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>    <!-- Knop om modal te sluiten(Close) -->
                </div>
            </form>

        </div>
    </div>
</div>