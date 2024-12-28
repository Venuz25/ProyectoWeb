<?php include('/C:/xampp/htdocs/ProyectoWeb/php/acuse/verificarAcuse.php'); ?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>.::Solicitud::.</title>

        <link rel="icon" href="img/iconos/confirmacion.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="styles/confirmacion.css">

        <!--General-->
        <link rel="stylesheet" href="styles/styleGeneral.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
              <button type="button" class="btn btn-primary"><a href="/ProyectoWeb/php/admin/verificarSesion.php" class="px-2">Admin</a></button>
            </ul>            
        </div>
    </nav>

    <header class="py-3 mb-4 border-bottom">
        <div class="d-flex align-items-center justify-content-between px-2">
            <a href="https://www.escom.ipn.mx" target="_blank">
              <img src="img/escudo_ESCOM.png" alt="Escudo ESCOM" class="logo">
            </a>
            <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none">
                <span id="titulo">Lockers ESCOM</span>
            </a>
            <a href="https://www.ipn.mx" target="_blank">
              <img src="/ProyectoWeb/img/logotipo_ipn.png" alt="Escudo ESCOM" class="logo">
            </a>            
        </div>
    </header>
    <!--Encabezado-->

        <main>
            <div id="texto">
                <h3>Sus datos fueron guardados correctamente</h3>
                <img src="/ProyectoWeb/img/imgConfirmacion.gif" alt="Pendientes" class="buentrabajo">
            </div>
            <a href="index.html" class="btn btn-outline-dark btnReg">Volver</a>             
        </main>
    </body>
</html>