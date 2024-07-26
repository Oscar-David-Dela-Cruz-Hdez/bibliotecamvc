<link rel="stylesheet" href="<?php echo APP_URL; ?>app/views/css/documentazione.css">

    <div class="d-flex flex-column min-vh-100">
    
      
        <!-- contenido -->
        <main class="container mt-5 flex-fill">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title text-center">Registro</h3>
                            <form id="registroForm"  method="POST" action="<?php echo APP_URL; ?>UsuarioController/registrarUsuario">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="username">Usuario</label>
                                        <input type="text" class="form-control" id="username" placeholder="Ingrese su usuario">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="name">Nombre</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese su nombre">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="lastname">Apellido Paterno</label>
                                        <input type="text" class="form-control" id="lastname" placeholder="Ingrese su apellido paterno">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lastname2">Apellido Materno</label>
                                        <input type="text" class="form-control" id="lastname2" placeholder="Ingrese su apellido materno">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Correo Electrónico</label>
                                    <input type="email" class="form-control" id="email" placeholder="Ingrese su correo electrónico">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="password">Contraseña</label>
                                        <input type="password" class="form-control" id="password" placeholder="Ingrese su contraseña">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="password2">Repetir Contraseña</label>
                                        <input type="password" class="form-control" id="password2" placeholder="Repita su contraseña">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>


    </div>
