<?php
include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre_articulo'];
$precio=$_POST['precio'];
$proveedor=$_POST['proveedor'];
$produc=$_POST['nombre_producto'];
$serie=$_POST['numero_de_serie'];

$sql="INSERT INTO alumno VALUES('$nombre','$precio','$proveedor','$produc','$serie')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: articulos.php");
    
}else {
}
?>