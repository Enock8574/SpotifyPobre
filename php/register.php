<?php
//password_hash va a cifrar la contrasema con Bcrypt
//PDO con consultas preparadas evita inyecciones SQL
require_once 'config.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
   $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
   $password = password_hash($_POST['password'], PASSWORD_BCRYPT);//Cifrado de contrasena

   try{
        $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
        $stmt->execute(['username'=>$username, 'password'=>$password]);
        header("Location: ../login.php");
        exit;
   }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
   }
}
?>