<?php

$conexion = mysqli_connect('localhost','root','','sencoe') or die(mysql_error($mysqli));

diferencia($conexion);

function diferencia($conexion){
    if (isset($_POST['enviar'])){
        insertar($conexion);

    }
    if (isset($_POST['eliminar'])){
        eliminar($conexion);

    }
   
}


insertar ( $conexion);

function insertar($conexion){
    $nomCampaing = $_POST['nomCampaing'];
    $proPagCampaing = $_POST['proPagCampaing'];
    $noPagCampaing = $_POST['noPagCampaing'];
    $noConCampaing = $_POST['noConCampaing'];
    $damCampaing = $_POST['damCampaing'];
    $volLlaCampaing = $_POST['volLlaCampaing'];
    $otrIdiCampaing = $_POST['otrIdiCampaing'];
    $fueSerCampaing = $_POST['fueSerCampaing'];
    $idLocDesCampaing = $_POST['idLocDesCampaing'];
    $pbxCampaing = $_POST['pbxCampaing'];

    
    $consulta = "INSERT INTO campaign(nomCampaing,proPagCampaing,noPagCampaing,noConCampaing,damCampaing,volLlaCampaing,otrIdiCampaing,fueSerCampaing,idLocDesCampaing,pbxCampaing)VALUES ('$nomCampaing','$proPagCampaing','$noPagCampaing','$noConCampaing','$damCampaing','$volLlaCampaing','$otrIdiCampaing','$fueSerCampaing','$idLocDesCampaing','$pbxCampaing')";
    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
}


function eliminar($conexion){
    $nomCampaing=$_POST['nomCampaing'];

    $consulta = "DELETE FROM campaign WHERE nomCampaing='$nomCampaing'";
    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
}

?>
