<?php
$dsn = 'mysql:dbname=pasteleria_chalaca;host=127.0.0.1';
$user = 'root';
$passsword = '';

try {
    $pdo = new PDO ($dsn, 
                    $user,  
                    $passsword);
    //echo 'conexión correcta';
} catch ( PDOException $e) {
    echo 'Error al conectarnos' . $e->getMessage();
}
?>
