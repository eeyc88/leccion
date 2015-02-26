<html>
<head>
</head>

<body>
<div id="main">
<?php
$valor1=$_POST["descripcion"];
$valor2=$_POST["total"];
//$valor="manuel";
echo 'Hola ' . htmlspecialchars($valor1,$valor2) . '!';

include_once("FacturaCollector.php");

$FacturaCollectorObj = new FacturaCollector();
$FacturaCollectorObj->createFactura($valor1,$valor2);

echo "valor agregado </br>";
?>
<div><a href="mostrar.php">Volver al Inicio</a></div>
</div>
</body>
</html>
