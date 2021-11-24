<?php 
include("head.html");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylos/stilos.css">
    <title>Document</title>
</head>
<body>
    <div id="l">
    <form id="from" action="admiUsuarios.php" method='post'>
    <p>Nombre:<input type="text" name="nombre"></p>
    <p>Apellidos:<input type="text" name="apellidos"></p>   
    <p>Correo:<input type="text" name="correo"></p>
    <input type='submit' name='insertar' value='insertar'>
    </form>
</div>
</body>
</html>


<?php 
include("foter.html");  
?>