
<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}
?>

<link rel="stylesheet" href="<?php echo APP_URL; ?>app/views/css/inizio.css">
    <div class="d-flex flex-column min-vh-100">
    
      
        <!-- contenido -->
        <main class="container mt-5 flex-fill">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title text-center main-text">Inicio de Sesión</h3>
                            <form>
                                <div class="form-group">
                                    <label for="email" class="main-text">Correo Electrónico</label>
                                    <input type="email" class="form-control" id="email" placeholder="Ingrese su correo electrónico">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="main-text">Contraseña</label>
                                    <input type="password" class="form-control" id="password" placeholder="Ingrese su contraseña">
                                </div>
                                <div class="d-flex justify-content-between">
                                    <a href="<?php echo APP_URL; ?>utentePrincipale/" class="btn btn-primary">Iniciar Sesión</a>

                                    <!--esto por el momento se quedara asi mientras hago pruebas de cambios de vista<button type="submit" class="btn btn-primary">Iniciar Sesión</button>-->
                                    <button type="button" class="btn btn-danger">Iniciar con Google</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>


    </div>