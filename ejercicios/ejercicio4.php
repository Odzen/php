<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 4</title>
        <meta http-equiv="Content-Type" 
              content="text/html; charset=ISO-8859-1" />
    </head>
    <body>
        <h3>Ejemrcicio 4 - Arreglos multidimensionales</h3>
        <?php
        /*cree un arreglo que contenga un pequeño directorio
telefónico con 3 personas con los siguientes datos: Nombre, Dirección, Teléfono y Fecha
de cumpleaños. Muestre todos los datos del arreglo en el navegador.
Nota: para este ejercicio es necesario buscar información sobre cómo se crea un array
multidimensional. */
         
        
        $listadoProductosCodigoNombre = array(
            array("Nombre" => "Juanse",
                "Direccion" => "123",
                "Telefono"=> 1234,
	            "Fecha de Cumpleanos" => "29/08/2000"),
            array("Nombre" => "David",
                "Direccion" => "123",
                "Telefono"=> 1234,
	            "Fecha de Cumpleanos" => "29/08/2000"),
            array("Nombre" => "Marcos",
                "Direccion" => "123",
                "Telefono"=> 1234,
	            "Fecha de Cumpleanos" => "29/08/2000")
            
        );

        print_r($listadoProductosCodigoNombre);
        ?>
        
        <p>
            <?php
            $name= 'Nombre';
            $firstName = $listadoProductosCodigoNombre[1][$name];
            echo "El primer nombre es: $firstName" ;
            ?>
        </p> 
        
    </body>
</html>
