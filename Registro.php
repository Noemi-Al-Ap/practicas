<?php "include/conexion.php";
"include/acciones.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>registro de ususario</title>
</head>
<body>
    <div class="container m-0 context justify-center py-2">
        <div class="row text -center">
        <h1 class="text-success">Registro</h1>
</div>
<form class="text_center" id="Registro"  action="?php echo $_Server ['php_SELF'];?>"method="POST" > 
    <div class="row text_center">
        <div class="col-sm-12 col-md-12 col-lg-12">
        <input type="text"name="Nombre"class="form-control" placeholder="Nombre"required>
</div>
</div>
<div class="row text-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
        <input type="text"name="Apellidos"class="form-control" placeholder="Apellidos"required>
</div>
</div>
<div class="row text-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
        <input type="text"name="Direccion" class=form-control placeholder="Direccion" required>
</div>
</div>
<div class="row text-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
        <input type="text"name="Telefono"class="form-control" placeholder="55-55-55-55-55"required>
</div>
</div>
<div class="row text-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
        <input type="date"name="Fecha" class="form-control"required>
</div>
</div>
<div class="row text-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
        <input type="Email"name="form-control" placeholder="Email"class="form-control"required>
</div>
</div>
<div class="row text-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
        <input type="Submit"value="Registrar" name="btn"class="btn btn-success">
</div>
</div>
</form>
</body>
</html>