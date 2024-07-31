<link rel="stylesheet" href="<?php echo APP_URL; ?>app/views/css/documentazione.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<div class="d-flex flex-column min-vh-100">
        <!-- contenido -->
        <main class="container mt-5 flex-fill">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="text-center">Registro</h2>
                            <form id="registroForm" method="POST" action="<?php echo APP_URL; ?>index.php?action=registrarUsuario">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="username" class="form-label">Usuario</label>
                                        <input type="text" class="form-control" id="username" name="username" placeholder="Ingrese su usuario" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Nombre</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese su nombre" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="lastname" class="form-label">Apellido Paterno</label>
                                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Ingrese su apellido paterno" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lastname2" class="form-label">Apellido Materno</label>
                                        <input type="text" class="form-control" id="lastname2" name="lastname2" placeholder="Ingrese su apellido materno" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Correo Electrónico</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese su correo electrónico" required>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="password" class="form-label">Contraseña</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese su contraseña" required>
                                            <button class="btn btn-outline-secondary" type="button" onclick="togglePassword('password')">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="password2" class="form-label">Repetir Contraseña</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="password2" name="password2" placeholder="Repita su contraseña" required>
                                            <button class="btn btn-outline-secondary" type="button" onclick="togglePassword('password2')">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Registrarse</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

<script src="<?php echo APP_URL; ?>app/views/js/registro.js"></script>
