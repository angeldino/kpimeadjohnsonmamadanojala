<?php
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Mead Johnson - KPI</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css">
    </head>

    <body class="body">
    <div class="body_menu">
            <ul class="menu">
                <a href="indicador.php"><li>Indicador</li></a>
                <a href="index.php"><li>Captura</li></a>
                <a href="consulta.php"><li>Consulta</li></a>
                <a href="contacto.php"><li>Contacto</li></a>
                <div class="titulo">
                    KEY PERFORMANCE INDICATOR - MEAD JOHNSON
                </div>
            </ul>
        </div>

        <div class="formulario">
            <form action="post.php" method="POST">
                <label for="fname">Ruta de viaje:</label><br>
                <select name="viaje_nombre_ruta" id="viaje_nombre_ruta">
                    <option value="El Paso a Chihuahua y Delicias">El Paso a Chihuahua y Delicias</option>
                    <option value="Chihuahua a El Paso">Chihuahua a El Paso</option>
                    <option value="Manzanillo a Chihuahua">Manzanillo a Chihuahua</option>
                    <option value="Veracruz a Chihuahua">Veracruz a Chihuahua</option>
                    <option value="Chihuahua a Manzanillo">Chihuahua a Manzanillo</option>
                    <option value="Chihuahua a Altamira">Chihuahua a Altamira</option>
                </select><br><br>

                <label for="fname">Concepto:</label><br>
                <select name="viaje_concepto" id="viaje_concepto">
                    <option value="Cajas no rechazadas">Cajas no rechazadas</option>
                    <option value="Calt">Calt</option>
                    <option value="Colocación">Colocación</option>
                    <option value="Corporativo">Corporativo</option>
                    <option value="Datos">Datos</option>
                    <option value="Descarga">Descarga</option>
                    <option value="Despacho">Despacho</option>
                    <option value="Directa">Directa</option>
                    <option value="Documentación">Documentación</option>
                    <option value="Inspección">Inspección</option>
                    <option value="Inspección canina">Inspección canina</option>
                    <option value="Inspección de cajas">Inspección de cajas</option>
                </select><br><br>

                <label for="fname">A tiempo:</label><br>
                <input type="number" id="viaje_atiempo" name="viaje_atiempo"><br><br>
                <label for="lname">Tarde:</label><br>
                <input type="number" id="viaje_tarde" name="viaje_tarde"><br><br>
                <label for="lname">Fecha:</label><br>
                <input type="date" id="viaje_fecha" name="viaje_fecha"><br><br>
                <input type="submit" value="Guardar">
            </form>
        </div>

    </body>
</html>