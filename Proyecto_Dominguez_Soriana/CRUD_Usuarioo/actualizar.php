<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM usuarioo WHERE nombre='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="nombre" value="<?php echo $row['nombre']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="correo_electronico" placeholder="correo_electronico" value="<?php echo $row['correo_electronico']  ?>">
                                <input type="text" class="form-control mb-3" name="contrasena" placeholder="contrasena" value="<?php echo $row['contrasena']  ?>">
                                <input type="text" class="form-control mb-3" name="curp" placeholder="curp" value="<?php echo $row['curp']  ?>">
                                <input type="text" class="form-control mb-3" name="edad" placeholder="edad" value="<?php echo $row['edad']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>