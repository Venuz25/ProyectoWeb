<?php
    $conn = new mysqli("localhost", "root", "", "lockers_db");

    if ($conn->connect_error) {
        die(json_encode(['error' => 'Error de conexión: ' . $conn->connect_error]));
    }
    
    $noCasillero = intval($_GET['noCasillero']);
    
    $sql = "SELECT c.noCasillero, c.altura, c.estado, a.boleta, a.nombre, a.primerAp, a.segundoAp 
            FROM casilleros c
            LEFT JOIN alumnos a ON c.boletaAsignada = a.boleta
            WHERE c.noCasillero = $noCasillero";
    
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        echo json_encode($data);
    } else {
        echo json_encode(['error' => 'No se encontró información para este casillero.']);
    }
    
?>