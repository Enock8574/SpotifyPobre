<?php
//Solo usuarios logueados pueden subir archivos
//Se valida que sean MP3 o WAV
require_once 'config.php';

if(!isset($_SESSION['user_id'])){
    header("Location: ../login.php");
    exit;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['music'])){
    $file = $_FILES['music'];
    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($file['name']);
    $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    //Validar que sea un archivo de audio
    if(in_array($file_type, ['mp3','wav'])){
        if(move_uploaded_file($file['tmp_name'], $target_file)){
            echo "Archivo subido con exito.";
        }else{
            echo "Error al subir el archivo.";
        }
    }else{
        echo "Solo se permiten archivos MP3 o WAV.";
    }
}
?>