<?php

include 'conexion.php';

if(isset($_REQUEST ["btn"])){
    $fecha= $_REQUEST["fecha"];
    $numero_factura= $_REQUEST["numerofactura"];
    $nombre= $_REQUEST["nombre"];
    $celular= $_REQUEST["celular"];
    $obervaciones= $_REQUEST["observaciones"];
   

$info= Fecha de ingreso: $fecha <br>
Numero de factura: $numero_factura <br>
Nombre del cliente: $nombre <br> 
Observaciones: $observaciones <br>
Celular cliente: $celular ;
echo $info; 
}

    $fecha= $_REQUEST["fecha"];
    $numero_factura= $_REQUEST["numerofactura"];
    $nombre= $_REQUEST["nombre"];
    $celular= $_REQUEST["celular"];
    $obervaciones= $_REQUEST["observaciones"];

$sql= "INSERT INTO clientes(fecha, numerofactura, nombre, celular, observaciones) VALUES ('$fecha', '$numero_factura',
'$nombre', '$celular', '$obervaciones')";

#INSERT INTO 'clientes' ('fecha', 'numerofactura', 'nombre', 'celular', 'observaciones') VALUES ('[value-1]', '[value-2]', '[value-3]', '[value-4]', '[value-5]' )

if (!$ejecutar){ 
 dice(No es posible guardar esta informacion): '.mysqli_error())'
}

?>