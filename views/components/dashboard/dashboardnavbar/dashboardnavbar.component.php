<?php

if ($current == 'dashboard'){$_SESSION['previous_uri'] = 'dashboard';}
elseif($current == 'dashboard/gebruikers'){$_SESSION['previous_uri'] = 'dashboard/gebruikers';}
elseif($current == 'dashboard/evenement'){$_SESSION['previous_uri'] = 'dashboard/evenement';}
elseif($current == 'dashboard/commentaar'){$_SESSION['previous_uri'] = 'dashboard/commentaar';}
elseif($current == 'dashboard/berichten'){$_SESSION['previous_uri'] = 'dashboard/berichten';}
?>

<link rel="stylesheet" href="../views/components/dashboard/dashboardnavbar/dashboardnavbar.style.css">



<!--Navbar items-->
<div class="container-fluid">

    <div class="row d-flex d-md-block flex-nowrap wrapper">
        <div class="col-md-3 float-left col-1 pl-0 pr-0 collapse width" id="sidebar">
            <div class="list-group border-0 card text-center text-md-left customfix">


                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" id="dismiss">
                    <i class="fas fa-arrow-left"></i>
                </button>

                <div class="sidebar-header">
                    <img src="../assets/Logo-gezinshuis/Breed/GezinshuisRegterink_Logo.png"  class="logo">

                </div>
                <a href="/dashboard" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-home fa-lg"></i> <span class="d-none d-md-inline">Home</span></a>
                <a href="/dashboard/gebruikers" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-user fa-lg"></i> <span class="d-none d-md-inline">Gebruikers</span></a>
                <a href="/dashboard/evenement" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-calendar fa-lg"></i> <span class="d-none d-md-inline">Evenementen</span></a>
                <a href="/dashboard/berichten" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-envelope fa-lg" aria-hidden="true"></i> <span class="d-none d-md-inline">Berichten</span><span class="badge badge-primary badge-pill">12</span></a>


            </div>
        </div>
    </div>
</div>


<!--Top navbar-->
<div class="pos-f-t">
    <nav class="navbar navbar-dark bg-dark" id="navbar" role="navigation">
        <!--Hamburger icon-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars py-2 p-1"></span>
        </button>
        <div class="navbar-expand-md">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                        <i class="fa fa-user"></i> <span class="d-none d-md-inline"><?=$_SESSION['nickname']?></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/account"><i class="fa fa-user"></i> <span class="d-none d-md-inline">Bekijk account</span></a>
                        <a class="dropdown-item" href="#"><i class="fa fa-users"></i> <span class="d-none d-md-inline">Wissel van account</span></a>
                        <a class="dropdown-item" href="/loguit"><i class="fa fa-sign-out"></i> <span class="d-none d-md-inline">Log uit</span></a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>






