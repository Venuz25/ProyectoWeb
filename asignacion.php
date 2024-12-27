<?php include('/C:/xampp/htdocs/ProyectoWeb/php/admin/verificarSesion.php'); ?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>.::Admin::.</title>

        <link rel="icon" href="img/iconos/admin.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="styles/styleAdmin.css">

        <!--General-->
        <link rel="stylesheet" href="styles/styleGeneral.css">

        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    </head>

    <body>   
        <!--Encabezado-->
        <nav class="py-2 bg-body-tertiary">
            <div class="d-flex flex-wrap px-2">
            <ul class="nav me-auto">
                <li class="nav-item"><a href="index.html" class="nav-link link-body-emphasis px-2 active" aria-current="page">Inicio</a></li>
                <li class="nav-item"><a href="solicitud.html" class="nav-link link-body-emphasis px-2">Registro</a></li>
            </ul>
            <ul class="nav text-end">
                <button type="button" class="btn btn-light text-dark me-2"><a href="acuse.html" class="link-body-emphasis px-2" style="text-decoration: none;">Acuse</a></button>
                <button type="button" class="btn btn-primary"><a href="/ProyectoWeb/php/admin/cerrarSesion.php" class="px-2">Cerrar Sesión</a></button>
            </ul>            
            </div>
        </nav>

        <header class="py-3 mb-4 border-bottom">
            <div class="d-flex align-items-center justify-content-between px-2">
                <a href="https://www.escom.ipn.mx" target="_blank">
                <img src="img/escudo_ESCOM.png" alt="Escudo ESCOM" class="logo">
                </a>
                <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none">
                    <span id="titulo">Admin</span>
                </a>
                <a href="https://www.ipn.mx" target="_blank">
                <img src="img/logotipo_ipn.png" alt="Escudo ESCOM" class="logo">
                </a>            
            </div>
        </header>
        <!--Encabezado-->

        <main class="container py-4">
            <div id="locker-container" class="locker-container d-flex flex-wrap justify-content-center">
                <!-- Los casilleros serán cargados aquí-->
            </div>
        </main>

        <footer>
            <ul class="nav justify-content-center mb-3 border-top">
                <li class="nav-item"><a href="index.html" class="nav-link px-2 text-body-secondary">Inicio</a></li>
                <li class="nav-item"><a href="solicitud.html" class="nav-link px-2 text-body-secondary">Solicitud</a></li>
                <li class="nav-item"><a href="acuse.html" class="nav-link px-2 text-body-secondary">Acuse</a></li>
                <li class="nav-item"><a href="admin.html" class="nav-link px-2 text-body-secondary">Admin</a></li>
            </ul>

            <div class="border-top derechos">
            <p class="text-center">© 2024 Tecnologías para el Desarrollo de Aplicaciones Web</p>
            <p class="text-center">4CM4</p>
            </div>
        </footer>

        <!--Modal -->
        <div class="modal fade" id="lockerModal" tabindex="-1" aria-labelledby="lockerModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="lockerModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                </div>

                <div class="modal-footer">
                </div>
            </div>
            </div>
        </div>
    

        <script src="scripts/asignacion.js"></script>
    </body>
</html>