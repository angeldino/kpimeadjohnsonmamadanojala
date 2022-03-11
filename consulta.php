<!DOCTYPE html>
<html>
    <head>
        <title>Mead Johnson - Captura</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css">
    </head>
    
    <body>
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

        <div class="tabla">
            <div class="titulo_consulta">Consulta de resultados</div>
            <form id="consulta" class="consulta">
                <label for="fname">Mes:</label><br>
                <select>
                    <option value="01">Enero</option>
                    <option value="02">Febrero</option>
                    <option value="03">Marzo</option>
                    <option value="04">Abril</option>
                    <option value="05">Mayo</option>
                    <option value="06">Junio</option>
                    <option value="07">Julio</option>
                    <option value="08">Agosto</option>
                    <option value="09">Septiembre</option>
                    <option value="10">Octubre</option>
                    <option value="11">Noviembre</option>
                    <option value="12">Diciembre</option>
                </select><br><br>
                
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
            </form>
        </div>

    <div class="mostrar_consulta">
        <table>
            <tr>
                <td>Dia</td>
                <td>A Tiempo</td>
                <td>Tarde</td>
                <td>Total</td>
                <td>Resultado</td>
            </tr>
        </table>
    </div>
    </body>
</html>