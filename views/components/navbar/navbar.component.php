<link rel="stylesheet" href="views/components/navbar/navbar.style.css">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">
        <img src="assets/Logo-gezinshuis/Breed/GezinshuisRegterink_Logo.png" class="logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">

            <?php if($current == '') :?>
                <li class="nav-item active">
                    <a class="nav-link" href="/">home <span class="sr-only">(current)</span></a>
                </li>
            <?php else :?>
                <li class="nav-item">
                    <a class="nav-link" href="/">home</a>
                </li>
            <?php endif; ?>

            <?php if($current == 'evenementen') :?>
                <li class="nav-item active">
                    <a class="nav-link" href="/evenementen">evenementen <span class="sr-only">(current)</span></a>
                </li>
            <?php else :?>
                <li class="nav-item">
                    <a class="nav-link" href="/evenementen">evenementen</a>
                </li>
            <?php endif; ?>

            <?php if($current == 'about') :?>
                <li class="nav-item active">
                    <a class="nav-link" href="/about">over ons <span class="sr-only">(current)</span></a>
                </li>
            <?php else :?>
                <li class="nav-item">
                    <a class="nav-link" href="/about">over ons</a>
                </li>
            <?php endif; ?>

            <?php if($current == 'contact') :?>
                <li class="nav-item active">
                    <a class="nav-link" href="/contact">contact <span class="sr-only">(current)</span></a>
                </li>
            <?php else :?>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">contact</a>
                </li>
            <?php endif; ?>






        </ul>
        <!-- Knop om de modal te openen -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/login">aanmelden</a>
            </li>
        </ul>
    </div>
</nav>

