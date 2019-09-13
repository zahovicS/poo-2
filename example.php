<?php 
include "Transporte.php";
include "autos.php";
include "aviones.php";

$objAuto=new autos(4,4,4);
$objAuto->Encender_Auto();
$objAuto->info();
echo "<br />";
echo "<br />";
echo "<br />";
$objAvion=new aviones(2);
$objAvion->Encender_Avion();
$objAvion->informacion();
?>