<?php
require_once('connection.php');
if(isset($_POST['register'])){

    $sql = 'INSERT INTO users (name, phone, email, nickname, pass) VALUES (?,?,?,?,?)';
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $nickname = isset($_POST['nickname']) ? $_POST['nickname'] : '';
    //$status_id = isset($_POST['status_id']) ? $_POST['status_id'] : '';
    $pass = isset($_POST['pass']) ? $_POST['pass'] : '';
    $statement = $pdo->prepare($sql);
    $statement->execute(array($name, $phone, $email, $nickname, $pass));
}
header('location:catalogo.html');
?>