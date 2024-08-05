<!-- app/views/includes/header.php -->
<header class="header py-3">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center">Biblioteca Virtual</h1>
            </div>
        </div>
    </div>
</header>

<!-- nav mamalon -->
<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="<?php echo APP_URL; ?>utentePrincipale/nav=nav2">
        <img src="<?php echo APP_URL; ?>app/views/img/2-1.png" alt="Logo" style="width: 40px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo APP_URL; ?>utentePrincipale/nav=nav2">Inicio</a>
            </li> 
            <li class="nav-item">
                <a class="nav-link" href="<?php echo APP_URL; ?>utenteLibri/nav=nav2">Libros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo APP_URL; ?>utenteRegolamento/nav=nav2">Reglamento</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo APP_URL; ?>profilo/nav=nav2">Perfil</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo APP_URL; ?>?action=logout">Cerrar sesión</a>

            </li>
        </ul>
    </div>
</nav>
