<?php
//Usamos PDO para mayor seguridad contra inyecciones SQL.
//La sesion se inicia aqui para gestionar el login.
session_start();

//Configuracion de la base de datos
$host = 'localhost';
$dbname = 'musicapp_db';
$username = 'root';
$password = '';

try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    die("Error de Conexion: ". $e->getMessage());
}
?>