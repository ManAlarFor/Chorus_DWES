<nav class="navbar navbar-expand-lg navbar-light bg-purpGrad border-purple sticky-top">

<div class="container-fluid">

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item">

                <a class="nav-link" href="#" id="navbar" role="button" data-bs-toggle="" aria-expanded="false">
                    <i class="bi bi-search"></i>
                </a>

            </li>

            <li class="profile-pic">
                <a class="nav-link" href="/"><img src="/assets/img/chorusIcon.png" alt=""></a>
            </li>

        </ul>


        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 profile-menu"> 

            <li class="nav-item ">

            <?php 

                if(!empty($_SESSION)):

                    $usuario = unserialize($_SESSION["_usuario"]) ;

            ?>

                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 profile-menu"> 
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="profile-pic">
                            <img src="<?= ($usuario->perfil)?$usuario->perfil:"/assets/img/defaultProfile.jpg" ?>" alt="Profile Picture">
                        </div>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/subpages/profile.php"><i class="fas fa-sliders-h fa-fw"></i> Perfil</a></li>
                        <li><hr class="dropdown-divider"></li>

                        <form action="/subpages/logOut.php" method="post">
                            <li><button class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-fw"></i> Cerrar Sesión</button></li>
                        </form>

                    </ul>
                    </li>
                </ul>

            <?php 

                else:

            ?>

                <a class="nav-link -toggle" href="/subpages/login.php" id="navbar" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="profile-pic">
                        <img id="perfil" class="img-fluid rounded-circle border-purple" src="./assets/img/defaultProfile.jpg" id="navbar" role="button" alt="Default Profile">
                    </div>
                </a>

                
            <?php 

                endif;

            ?>

            </li>
        </ul>
    </div>

</div>
</nav>