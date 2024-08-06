<style>
    .navbar-nav {
        margin: 0;
    }

    .navbar-toggler {
        display: block; /* Mostrar siempre el botón hamburguesa */
    }

    .navbar-collapse {
        display: none; /* Ocultar el menú por defecto */
    }

    .navbar-collapse.show {
        display: block; /* Mostrar el menú cuando está expandido */
    }

    @media (min-width: 992px) {
        .navbar-collapse {
            display: block !important; /* Mostrar el menú siempre en pantallas grandes */
        }
    }

    .dropdown-menu {
        position: static; /* Asegura que el menú desplegable no se posicione de manera absoluta en pantallas grandes */
    }

    
</style>
<link rel="stylesheet" href="<?php echo APP_URL; ?>app/views/css/princi.css">
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

<nav class="navbar navbar-expand-lg">
<link rel="stylesheet" href="<?php echo APP_URL; ?>app/views/css/libri.css">
    <a class="navbar-brand" href="<?php echo APP_URL; ?>bibliPrincipale/nav=nav3">
        <img src="<?php echo APP_URL; ?>app/views/img/2-1.png" alt="Logo" style="width: 40px;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo APP_URL; ?>bibliPrincipale/nav=nav3">Inicio</a>
            </li> 
        </ul>
        <ul class="navbar-nav">
            <!-- Añadir Registros -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="addRecordsDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Añadir Registros
                </a>
                <div class="dropdown-menu" aria-labelledby="addRecordsDropdown">
                    <a class="dropdown-item" href="<?php echo APP_URL; ?>bibliLibri/nav=nav3">Libros</a>
                    <a class="dropdown-item" href="<?php echo APP_URL; ?>bibliSubcategoria/nav=nav3">Subcategoria</a>
                    <a class="dropdown-item" href="<?php echo APP_URL; ?>bibliCategoria/nav=nav3">Categoria</a>
                    <a class="dropdown-item" href="<?php echo APP_URL; ?>bibliAutor/nav=nav3">Autores</a>
                </div>
            </li>
            <!-- Administrar Registros -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="manageRecordsDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Administrar Registros
                </a>
                <div class="dropdown-menu" aria-labelledby="manageRecordsDropdown">
                    
                    <a class="dropdown-item" href="<?php echo APP_URL; ?>admLibri/nav=nav3">admLibros</a>
                    <a class="dropdown-item" href="<?php echo APP_URL; ?>admSubcategoria/nav=nav3">AdmSubcategoria</a>
                    <a class="dropdown-item" href="<?php echo APP_URL; ?>admCategoria/nav=nav3">admCategoria</a>
                    <a class="dropdown-item" href="<?php echo APP_URL; ?>admAutores/nav=nav3">admAutores</a>

                </div>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo APP_URL; ?>?action=logout">Cerrar sesión</a>
            </li>
        </ul>
    </div>
</nav>