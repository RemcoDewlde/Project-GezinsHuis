<link rel="stylesheet" href="login.style.css">
<div class="container">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <!-- Default form login -->
            <form class="text-center border border-light p-5" action="core/database/wachtwoordvergeten.php" method="post">

                <p class="h4 mb-4">Sign in</p>
                <p>Wachtwoord vergeten? Vul je mail in en we sturen je een mailtje met instructies.</p>

                <!-- Email -->

                <div class="group">
                    <input type="email" id="mail" name="mail" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Email</label>
                </div>









                <!-- Sign in button -->
                <button class="btn btn-primary btn-block my-4" type="submit">Verstuur mail</button>


            </form>
            <!-- Default form login -->
        </div>
        <div class="col-lg-3"></div>
    </div>
</div>

