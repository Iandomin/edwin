<?php

include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre_articulo'];
$precio=$_POST['precio'];
$proveedor=$_POST['proveedor'];
$produc=$_POST['nombre_producto'];
$serie=$_POST['numero_de_serie'];

$sql="UPDATE articulos SET  precio='$precio',proveedor='$proveedor',nombrte_producto='$produc',numero_de_serie='$serie' WHERE nombre_articulo='$nombre'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: articulos.php");
    }
?>