<?php

$conexion = mysqli_connect('localhost','root','','sencoe') or die(mysql_error($mysqli));

diferencia($conexion);

function diferencia($conexion){
    if(isset($_POST['enviar'])){
        insertar($conexion);

    }
    if(isset($_POST['eliminar'])){
        eliminar($conexion);

    }
    
}


insertar($conexion);

function insertar($conexion){
    $nomUsuario = $_POST['nomUsuario'];
    $passUsuario = $_POST['passUsuario'];
    $apeUsuario = $_POST['apeUsuario'];
    $dirUsuario = $_POST['dirUsuario'];
    
    $consulta = "INSERT INTO usuario(nomUsuario,passUsuario,apeUsuario,dirUsuario) VALUES ('$nomUsuario','$passUsuario','$apeUsuario','$dirUsuario')";
    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
}


function eliminar($conexion){
    $nomUsuario=$_POST['nomUsuario'];

    $consulta = "DELETE FROM usuario WHERE nomUsuario='$nomUsuario'";
    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
}


?>
