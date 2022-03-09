<?php
    require_once('includes/connection.php');
    //header("location:index.php");

    $conexion = new conexion();
    //$rows = $conexion->connect('SELECT * FROM usuarios');
    $viaje_nombre_ruta = $_POST["viaje_nombre_ruta"];
    $viaje_concepto = $_POST["viaje_concepto"];
    $viaje_fecha = $_POST["viaje_fecha"];
    $viaje_atiempo = $_POST["viaje_atiempo"];
    $viaje_tarde = $_POST["viaje_tarde"];
    $viaje_total = $viaje_atiempo + $viaje_tarde;
    $viaje_resultado = $viaje_atiempo / $viaje_total;

    // Attempt insert query execution
    try{
        $sql = "INSERT INTO viajesmedidos (viajes_nombre_ruta, concepto, fecha, viaje_atiempo, viaje_tarde, viaje_total, resultado) 
        VALUES ('".$viaje_nombre_ruta."','".$viaje_concepto."','".$viaje_fecha."','".$viaje_atiempo."','".$viaje_tarde."','".$viaje_total."','".$viaje_resultado."');";
        
        $conexion->connect($sql);
    } catch(PDOException $e){
        die("ERROR: Could not able to execute $sql. " . $e->getMessage());
    }
    
    // Close connection
?>