<?php
require_once('connection.php');
$sql = 'SELECT * FROM pasteles WHERE name_past LIKE :search';
$caja = isset($_GET['caja']) ? $_GET['caja'] : '';
$array[':search'] = '%' . $caja . '%'; 
$statement = $pdo->prepare($sql);
$statement -> execute($array);
$result = $statement->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo | Pasteleria Chalaca</title>
    <link rel="shortcut icon" href="img/logo.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="./css/flexboxgrid.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.compat.min.css">
    <link rel="stylesheet" href="css/catalogo.css">
    
</head>

<body>
    <div class="row main-container middle-xs center-xs">
        <div class="col-md-8 col-sm-10 col-xs-11 col-lg-7">
            <div class="box">
                <div class="card animated fadeInRightBig">
                    <header class="main-header">
                        <nav class="main-nav">
                            <a href="index.html" class="nav-link">Inicio</a>
                            <a href="catalogo.php" class="nav-link">Catálogo</a>
                            <a href="nosotros.html"class="nav-link">Nosotros</a>
                            <a href="contacto.html"class="nav-link">Contáctanos</a>
                            <a href="login.php"class="nav-link">Iniciar Sesión</a>
                        </nav>
                    </header> 
                    <div class="catalogo body animated fadeInRightBig">
                        <header class="logo-header">
                            <img src="data:img/past_logo.jpg" height="185px" alt="">
                            <h1 class="text-logo pacifico title threeD">Pasteleria Chalaca</h1>
                        </header>
                        <div class="contenedor1" method="GET">
                            <form action="" class="formulario1">
                                <input type="submit" value="BUSCAR" class="boton1">
                                <input type="text" name= "caja" placeholder="Ingrese nombre" class="buscador" value="<?php echo $caja; ?>">                      
                            </form><hr>
                        </div>                        
                        <div class="pasteles">
                            <div class="row center-xs">
                                <?php
                                    foreach($result as $rs){
                                ?>
                                <div class="col-xs-10 col-sm-6 col-md-4 pastel animated fadeInDown delay-1">
                                    <div class="card">
                                        <img width="120" src="data:image/jpg;base64, <?php echo base64_encode($rs['foto_past'])?>">
                                        <div>
                                            <h3><?php echo $rs['name_past']; ?></h3>
                                        </div>
                                        <div>
                                            <?php echo $rs['price']; ?>
                                        </div>
                                        <div>
                                            <?php echo $rs['description']; ?>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }
                                ?>
                            </div>  
                        <div>
                    </div>       
                </div>                
            </div>
    </div>   
</body>
</html>