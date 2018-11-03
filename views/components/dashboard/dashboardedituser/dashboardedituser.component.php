<div class="col-8 offset-2" style="margin-top: 1vh">
    <form action="safe_useredit" method="post">
        <?php
        echo '
            <input type="hidden" name="id" value="' . $result[0]["id"] . '">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Voor en achternaam</span>
                </div>
                <input type="text" aria-label="First name" class="form-control" name="fname" value="' . $result[0]["fname"] . '">
                <input type="text" aria-label="Last name" class="form-control" name="lname" value="' . $result[0]["lname"] . '">
            </div>';

        echo '
            <div class="input-group mb-3" style="margin-top: 1vh">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="eMail" aria-label="email" name="email" value="' . $result[0]["email"] . '">
            </div>';

        echo '
            <div class="input-group mb-3" style="margin-top: 1vh">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-phone"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="eMail" aria-label="email" name="mobile" value="' . $result[0]["mobile"] . '">
            </div>';

        echo '<div class="input-group mb-3">
                 <div class="input-group-prepend">
                   <span class="input-group-text" id="basic-addon1"><i class="fas fa-user-tie"></i></span>
                 </div>
             <input type="text" class="form-control" placeholder="Nickname" aria-label="nickname" name="nickname" value="' . $profile[0]['nickname'] . '">
           </div>';

        echo '<div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">functie:</label>
                  </div>
                  <select class="custom-select" id="inputGroupSelect01" name="function">
                    <option "' . $result[0]["function"] . '" disabled selected>' . $result[0]["function"] . '</option>
                    
                    <option value="Admin">Admin</option>
                    <option value="Ouder">Ouder</option>
                    <option value="Specialist">Specialist</option>
                    <option value="Kind">Kind</option>
                  </select>
            </div>
            <br>
            <button class="btn btn-primary" type="submit"> Veranderingen opslaan</button>
            <button class="btn btn-danger" type="reset"> Reset</button>
    </form>
    <hr>';

        echo '
              <form action="addChildToParent" method="post">
              ';

        if ($result[0]["function"] == "Ouder") {
            echo '
            <input type="hidden" name="id" value="' . $result[0]["id"] . '">
            <input type="hidden" name="function" value="' . $result[0]["function"] . '">
            <h3>Voeg kind toe aan gebruiker</h3>
            <br>
            <select class="custom-select" id="inputGroupSelect01" name="kind">
                <option>Kind...</option>
            ';
            foreach ($children as $child) {
                echo '<option value="' . $child["id"] . '">' . $child["fname"] . " " . $child["lname"] . '</option>';
            }
            echo '
                    </select>
                    <button class="btn btn-primary" type="submit" style="margin-top: 1vh">kind toevoegen aan gebruiker</button>
                </form>';
        }
        ?>

        <?php
        echo '
        <form action="addDoctorToChild" method="post">
        ';

        if ($result[0]["function"] == "Specialist") {
            echo '
        <input type="hidden" name="id" value="' . $result[0]["id"] . '">
        <input type="hidden" name="function" value="' . $result[0]["function"] . '">
        <h3>Koppel specialist aan kind</h3>
        <br>
        <select class="custom-select" id="inputGroupSelect01" name="kind">
            <option>Specialist...</option>
        ';
            foreach ($children as $child) {
                echo '<option value="' . $child["id"] . '">' . $child["fname"] . " " . $child["lname"] . '</option>';
            }
            echo '
                    </select>
                    <button class="btn btn-primary" type="submit" style="margin-top: 1vh">kind toevoegen aan gebruiker</button>
                </form>';
        }
        ?>

        <form action="resetpassword" method="post">
            <?php
            echo '<hr>
              <h3>Reset wachtwoord</h3>
            ';
            echo '
                <input type="hidden" name="id" value="' . $result[0]["id"] . '">
                <div class="input-group mb-3">
                  <input type="password" name="password" class="form-control" placeholder="Nieuw wachtwoord" aria-label="password" required>
                </div>';

            echo '<div class="input-group mb-3">
                  <input type="password" name="checkpass" class="form-control" placeholder="Herhaal wachtwoord" aria-label="password" required>
                </div>';

            ?>
            <button class="btn btn-primary" type="submit">Wachtwoord veranderen</button>
        </form>


</div>