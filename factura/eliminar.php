<html>
<head>
</head>

<body>
<div id="main">
<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];

//incluir la libreria de DemoCollector
include_once("FacturaCollector.php");
//creo una instancia de DemoCollector
$FacturaCollectorObj = new FacturaCollector();
//Ejecuto el metodo para eliminar el objeto Demo indicando el id
$FacturaCollectorObj->deleteFactura($id);

// muestro mensaje de que se ha eliminado el objeto Demo
echo "valor id". htmlspecialchars($id) ."  ha sido eliminado correctamente.";
?>
<div><a href="mostrar.php">Volver al Inicio</a></div>
</div>
</body>
</html>
