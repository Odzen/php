<!DOCTYPE html>
<html>
    <head>
        <title>Unidad 2 - Ejemplo 8 - 1</title>
        <meta http-equiv="Content-Type" 
              content="text/html; charset=ISO-8859-1" />
    </head>
    <body>
        <h3>Ejemplo de arreglo con llaves num&eacute;ricas</h3>
        <?php
        */*cree un arreglo que contenga un pequeño directorio
telefónico con 3 personas con los siguientes datos: Nombre, Dirección, Teléfono y Fecha
de cumpleaños. Muestre todos los datos del arreglo en el navegador.
Nota: para este ejercicio es necesario buscar información sobre cómo se crea un array
multidimensional.
         */
        
        $listadoProductosCodigoNombre = array(
            array()
            "Nombre" => "Arroz x libra",
            "Direccion" => "Frasco aceite x 1000 mls.",
            "Telefono"=> "Mantequilla x 250 grs.",
	    "Fecha de Cumpleanos" => ""
        );
        ?>
        <p>
            <?php
            $codigoProducto = 1234;
            echo "El producto con c&oacute;digo $codigoProducto es: "
            . "$listadoProductosCodigoNombre[$codigoProducto]";
            ?>
        </p> 
    </body>
</html>
