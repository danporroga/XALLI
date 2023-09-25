<?php
//INSERT INTO `usuarios` (`usuario`, `contraseñas`) VALUES ('danporroga', 'Darkushaos1$');
include_once '../configuraciones/bd.php';

$conexion = Database::connect();
//print_r($_POST);

$cont = 0;
$cont1 = 0;
$cont2 = 0;
$cont3 = 0;
$cont4 = 0;
$cont5 = 0;
$cont6 = 0;
$cont7 = 0;
$cont8 = 0;

$CajasBG=isset($_POST['cajasG'])?$_POST['cajasG']:'';
$CajasBC=isset($_POST['cajasC'])?$_POST['cajasC']:'';
$Nombre=isset($_POST['Nombre'])?$_POST['Nombre']:'';
$Calle=isset($_POST['Calle'])?$_POST['Calle']:'';
$NInt=isset($_POST['NumInterior'])?$_POST['NumInterior']:'';
$NExt=isset($_POST['NumExterior'])?$_POST['NumExterior']:'';
$Colonia=isset($_POST['Colonia'])?$_POST['Colonia']:'';
$CP=isset($_POST['CP'])?$_POST['CP']:'';
$Mun=isset($_POST['Municipio'])?$_POST['Municipio']:'';
$Est=isset($_POST['Estado'])?$_POST['Estado']:'';
$Pais=isset($_POST['Pais'])?$_POST['Pais']:'';
$Ref=isset($_POST['ref'])?$_POST['ref']:'';

if($Nombre != ''){
    $cont++;
}

if($Calle != ''){
    $cont1++;
}

if($NExt != ''){
    $cont2++;
}

if($Colonia != ''){
    $cont3++;
}

if($CP != ''){
    $cont4++;
}

if($Mun != ''){
    $cont5++;
}

if($Est != ''){
    $cont6++;
}

if($Pais != ''){
    $cont7++;
}

if(($CajasBC==0)&&($CajasBG==0)){
    echo'<script type="text/javascript">
    alert("No se selecciono ninguna cantidad de caja");
    window.location.href="Pedidos.php";
    </script>';
}
else{
    $cont8++;
}

if(($cont==1)&&($cont1==1)&&($cont2==1)&&($cont3==1)&&($cont4==1)&&($cont5==1)&&($cont6==1)&&($cont7==1)&&($cont8==1)){
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO registro_pedidos( Cajas_Bolsa_Grande, Cajas_Bolsa_Chica, Nombre_Completo, Calle, NumInt, NumExt, Colonia, CP, Municipio, Estado, Pais, Referencias) 
    VALUES ('$CajasBG','$CajasBC','$Nombre', '$Calle', '$NInt', '$NExt', '$Colonia', '$CP', '$Mun', '$Est', '$Pais', '$Ref')";
    //$sql = "UPDATE acceso_bd SET Registro='$Registro',Fecha='$Fecha',Hora='$Hora' WHERE ID=$ID";
    $q = $conexion->prepare($sql);
    $q->execute(); 

    echo'<script type="text/javascript">
    alert("Orden tomada Exitosamente");
    window.location.href="Pedidos.php";
    </script>';
}
?>