
<nav class="navbar navbar-expand-lg navbar-light bg-purpGrad border-purple">

<div class="container-fluid">

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item">

                <a class="nav-link" href="#" id="navbar" role="button" data-bs-toggle="" aria-expanded="false">
                    <i class="bi bi-search"></i>
                </a>

            </li>

            <li class="profile-pic">
                <a class="nav-link" href="#"><img src="./assets/img/chorusIcon.png" alt=""></a>
            </li>

        </ul>


        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 profile-menu"> 

            <li class="nav-item ">

                <a class="nav-link -toggle" href="<?php echo((session_status() === PHP_SESSION_ACTIVE))? "/subpages/profile.php" : "/subpages/login.php" ;?>" id="navbar" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="profile-pic">
                        <img id="perfil" class="img-fluid rounded-circle border-purple" src="./assets/img/defaultProfile.jpg" alt="Default Profile">
                    </div>
                </a>

            </li>
        </ul>
    </div>

</div>
</nav>