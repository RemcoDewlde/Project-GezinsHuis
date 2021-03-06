<link rel="stylesheet" href="login.style.css">
<div class="container">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <!-- Default form login -->
            <form class="text-center border border-light p-5" action="/trylogin" method="post">
                <p class="h4 mb-4">Sign in</p>
                <!-- Email -->
                <div class="group">

                    <?php if ($error == TRUE) {
                        echo " 
                         <input type=\"text\" id=\"mail\" class=\"errorinput\" name=\"mail\" required>
                         <span class=\"highlight\"></span>
                         <span class=\"bar bar-red\"></span>
                         <label class=\"text-danger\">Email</label>";
                    } else {
                        echo "
                        <input type=\"text\" id=\"mail\" name=\"mail\" required>
                        <span class=\"highlight\"></span>
                        <span class=\"bar\"></span>
                        <label>Email</label>";
                    }
                    ?>
                </div>

                <!-- Password -->
                <div class="group">
                    <?php if ($error == TRUE) {
                        echo " 
                     <input type=\"password\" id=\"password\" class=\"errorinput\" name=\"password\" required>
                           <span class=\"highlight\"></span>
                           <span class=\"bar bar-red\" ></span>
                           <label class=\"text-danger\">Password</label>
                           <div class=\"text-danger\">
                            Het emailadres of wachtwoord is onjuist
                        </div>";

                    } else {
                        echo "
                        <input type=\"password\" id=\"password\" name=\"password\" required>
                        <span class=\"highlight\"></span>
                        <span class=\"bar\" ></span>
                        <label>Password</label>
                        <br>
                        ";
                    }
                    ?>

                </div>
                <!-- Sign in button -->
                <button class="btn btn-primary btn-block my-4" type="submit">login</button>
            </form>
            <!-- Default form login -->
        </div>
        <div class="col-lg-3"></div>
    </div>
</div>


