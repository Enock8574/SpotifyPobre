<?php
require_once 'config.php';
if($_SERVER['REQUEST_METHOD']==='POST'){
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT*FROM users WHERE username = :username");
    $stmt->execute(['username'=>$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
//password_verify compara la contrasena ingresada con el hash almacenado
    if($user && password_verify($password, $user['password'])){
        $_SESSION['user_id'] = $user['id'];
        header("Location: ../index.php");
        exit;
    }else{
        echo "Usuario o contrasena incorrecto.";
    }
}
?>