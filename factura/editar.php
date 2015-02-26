<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
</head>

<body>
<div id="main">
<?php
$total=$_POST["total"];
$descripcion=$_POST["descripcion"];
$idFactura=$_POST["idFactura"];

//$nombre="carlos";
//$idUsuario=3;

echo "Edici&oacute;n en proceso ....  </br>";

include_once("FacturaCollector.php");
$FacturaCollectorObj = new FacturaCollector();
$FacturaCollectorObj->updateFactura($idFactura,$descripcion,$total);

echo "id :".$idFactura." actualizado a:".$descripcion. " y tambien a :".$total. " </br>";
?>
<div><a href="mostrar.php">Volver al Inicio</a></div>
</div>
</body>
</html>
