<?php
require_once('connection.php');
if(isset($_POST['iniciar'])){
    $nickname = $_POST['nickname'];
    $pass = $_POST['pass'];

    $contador = 0;
    $sql = "SELECT * FROM users";
    $statement = $pdo -> prepare($sql);
    $statement -> execute(array());
    $result = $statement -> fetchAll();

    foreach($result as $rs){
        if($rs['nickname'] == $nickname && $rs['pass'] == $pass){
            $contador++;
        }
    }

}
if($contador == 1){
    header("location:ok.html");
}else{
    header("location:login.php");
}
?>