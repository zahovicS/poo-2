<?php 
include "base.php";
include "hijo.php";
include "clase.php";
$obj=new hijo("zahovic","Saravia Suarez","Tecnico","Computacion");
$obj->mostrar();
echo "<br />";
clase::$nombres="zahovic saravia suarez";
clase::mostrar();
?>
