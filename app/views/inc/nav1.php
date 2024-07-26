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
    <a class="navbar-brand" href="<?php echo APP_URL; ?>principale/">
        <img src="<?php echo APP_URL; ?>app/views/img/2-1.png" alt="Logo" style="width: 40px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo APP_URL; ?>principale/">Inicio</a>
            </li> 
            <li class="nav-item">
                <a class="nav-link" href="<?php echo APP_URL; ?>iniziaSessione/">Inicio Sesión</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo APP_URL; ?>documentazione/">Registro</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo APP_URL; ?>libri/">Libros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo APP_URL; ?>regolamento/">Reglamento</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./img/st,small,507x507-pad,600x600,f8f8f8.jpg">.</a>
            </li>
        </ul>
    </div>
</nav>
