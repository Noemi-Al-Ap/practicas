<?php
 'include/conexion.php';
       'include/action.phps';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" type="text/css " href="css/bootstrap.min.css">
    <title>Registro</title>
</head>
<body>
<div class="container m-0 content-justify-center py-2">
    <div class ="row text-center">
        <h1 class="text-center">Plantel</h1>
    </div>
<form id="Registro" Action="<?php echo $_SERVER['php_SELF'];?>"
Method="Post">
<div class="row text-center">
    <div class="Col-sm-12 col-md-12 Col-lg-12">
        <input type="text" name="Nombre Plantel" class="Form-control" placeholder="Nombre Plantel" required>

    </div>
</div>
<div class="row text-center">
    <div class="Col-sm-12 Col-md-12 Col-lg-12">
        <input type="text" name="Clave Plantel" class="Form-control" placeholder="Clave Plantel" required>

    </div>
</div>
<div class="row text-center">
    <div class="Col-sm-12 Col-md-12 Col-lg-12">
        <input type="text" name="Direccion" class="Form-control" placeholder="Direccion" required>

    </div>
</div>

<div class="row text-center">
    <div class="Col-sm-12 Col-md-12 Col-lg-12">
        <input type="tel" name="Telefono" class="Form-control" placeholder="55-55-55-55-55" required>

    </div>
</div>

<div class="row text-center">
    <div class="Col-sm-12 Col-md-12 Col-lg-12">
        <input type="text" name="Responsable" class="Form-control" placeholder="Responsable" required>

    </div>
</div>
</form>
<div class="row text-center">
    <div class="Col-sm-12 Col-md-12 Col-lg-12">
        <input type="Submit" value="Registrar" name="btn" class=" btn btn-success" >

    </div>
</div>

</body>
</html>

