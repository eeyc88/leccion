<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>formulario Factura</title>
</head>
<body>

<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];
include_once("FacturaCollector.php");
include_once("Factura.php");
$FacturaCollectorObj = new FacturaCollector();
$ObjFactura = $FacturaCollectorObj->showFactura($id);
?>
<h2>Editar Objeto Factura </h2>
<form action="editar.php" method="post" >
<p>
Id: <input type="text" name="idFactura" value="<?php echo $ObjFactura->getIdFactura(); ?>" readonly />
</p>

<p>
Descripcion: <input type="text" name="descripcion"  value="<?php echo $ObjFactura->getDescripcion(); ?>" autofocus required />
</p>
<a href="mostrar.php">Cancelar</a>
<input type="submit" value="Guardar" />

</form>
