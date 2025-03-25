<!DOCTYPE html>
<html>
    <head>
        <title>Inicio de Sesión</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://atugatran.github.io/FontAwesome6Pro/css/all.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body>
        <section class="vh-100">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-xl-10 p-5 shadow-lg" style="background-color:rgb(134, 89, 41);">
                        <div class="card" style="border-radius: 1rem;">
                            <div class="row g-0">
                                <div class="col-md-6 col-lg-5 d-none d-md-block p-5">
                                    <img src="img/vector.jpg" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                                </div>
                                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                    <div class="card-body p-4 p-lg-5 text-black">
                                        <div class="text-center">
                                            <img class="pb-2" src="img/constructor.png" width="100" height="100"/>
                                            <h1 class="fs-4 card-title fw-bold mb-4">SISTEMA WEB DE ADMINISTRACIÓN PARA LA MICROEMPRESA "GUZMÁN"</h1>
                                        </div>
                                        <form novalidate="" id="login">
                                            <div class="mb-3">
                                                <label class="mb-2 text-muted" for="email">Correo electrónico</label>
                                                <input type="email" id="Correo_usu" class="form-control" name="correo" value="" required autofocus>
                                                <div class="invalid-feedback">Email is invalid</div>
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="text-muted" for="password">Contraseña</label>
                                                <input type="password" id="pass" class="form-control" name="pass" required>
                                                <div class="invalid-feedback">Password is required</div>
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>

                                            <div class="text-center pb-3">
                                                <button type="submit" class="btn btn-dark btn-lg ms-auto">Acceder</button>
                                            </div>
                                            <div class="mb-3">
                                                <a href="#" class="float-start small" data-bs-toggle="modal" data-bs-target="#mRecuperar">¿Olvidaste tu contraseña?</a>
                                                <a href="#" class="float-end small" data-bs-toggle="modal" data-bs-target="#myModal">Crear una cuenta</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Modal para Recuperar Contraseña -->
        <div class="modal fade" id="mRecuperar">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-success text-white">
                        <h4 class="modal-title w-100 text-center">Recuperación de Contraseña</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form novalidate="" id="folvide">
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="email">Correo electrónico</label>
                                <input id="rcorreo" type="email" class="form-control" name="email" value="" required autofocus>
                                <div class="invalid-feedback">Email is invalid</div>
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                            <div class="d-flex align-items-center">
                                <button type="submit" class="btn btn-primary btn-sm-2">Recuperar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal para Crear cuenta -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header bg-success text-white">
                        <h4 class="modal-title w-100 text-center">Registro de usuario</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form id="registroForm" action="{{route("register.store")}}" method="get" class="needs-validation" novalidate>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="nombre" placeholder="Nombre Completo" required>
                                <div class="invalid-feedback">Ingresa tu nombre completo.</div>
                            </div>

                            <div class="input-group mb-3">
                                <input type="email" class="form-control" name="correo" placeholder="Correo Electrónico" required>
                                <div class="invalid-feedback">Ingresa un correo válido.</div>
                            </div>

                            <hr>

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="usuario" placeholder="Nombre de Usuario" required>
                                <div class="invalid-feedback">Ingresa un nombre de usuario.</div>
                            </div>

                            <div class="input-group mb-3">
                                <input type="password" class="form-control" name="contrasennia" placeholder="Ingrese Contraseña Segura" required>
                                <div class="invalid-feedback">Ingresa una contraseña válida.</div>
                            </div>

                            <div class="input-group mb-3">
                                <input type="password" class="form-control" name="recontrasennia" placeholder="Confirma tu Contraseña" required>
                                <div class="invalid-feedback">Confirma tu contraseña.</div>
                            </div>

                            <button type="submit" class="btn btn-primary w-30">Registrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="validacion/recuperar.js"></script>
        <script src="validacion/login.js"></script>
{{--        <script src="validacion/registro.js"></script>--}}
    </body>
</html>
