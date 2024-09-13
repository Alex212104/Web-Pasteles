<?php
require_once('connection.php');
$sql = 'SELECT * FROM status';
$statement = $pdo -> prepare($sql);
$statement -> execute(array());
$result = $statement -> fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse | Pasteleria Chalaca</title>
    <link rel="shortcut icon" href="img/logo.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="css/registro.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="./css/flexboxgrid.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.compat.min.css">
    
</head>
<body>
    <div class="row main-container-login middle-xs center-xs">
        <div class="col-md-8 col-sm-10 col-xs-11 col-lg-7">
            <div class="box">
                <div class="card animated fadeInDown">
                    <header class="main-header-registro">
                        <nav class="main-nav">
                            <a href="index.html" class="nav-link">Inicio</a>
                            <a href="catalogo.php" class="nav-link">Catálogo</a>
                            <a href="nosotros.html"class="nav-link">Nosotros</a>
                            <a href="contacto.html"class="nav-link">Contáctanos</a>
                            <a href="login.php"class="nav-link">Iniciar Sesión</a>
                        </nav>
                    </header> 
                </div>
            </div>
        </div>
    </div>
    
    <div class="login-box">
        <img class= "avatar" src="img/logo.jpeg" alt="logo de pasteleria chalaca">
        <h1>Registrarse</h1>
        <form action= "proceso.php" class="formulario" method="POST" >
            <input name="name" type="text" placeholder="Ingresar Nombres y Apellido" autocomplete="off" required> 
            <input name="phone" type="text" placeholder="Ingresar Número Telefónico" required>
            <input name="email" type="text" placeholder="Ingresar Correo Electrónico" required>
            <input name="nickname" type="text" placeholder="Ingresar Nombre de Usuario" required>
            <input name="pass" type="password" placeholder="Ingresar Contraseña" required>
            <input name="register" type="submit" value="Sing Up" class="button">
            <a href="login.html" class="simple">¿Ya tiene cuenta?</a></p>
        </form>
    </div>
</body>
</html>