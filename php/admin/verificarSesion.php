<?php
    session_start();
    if (isset($_SESSION['usuario'])) {
        header("Location: /ProyectoWeb/asignacion.php");
        exit();
    } else {
        header("Location: /ProyectoWeb/admin.html");
        exit();
    }
?>