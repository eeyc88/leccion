<!DOCTYPE html>
<html lang="es" class="">
<head>
<meta charset='utf-8'>
</head>
<?php
include_once("FacturaCollector.php");
$FacturaCollectorObj = new FacturaCollector();
?>
<body>
<div id="main">
<table>
<tr><td><a href="formularioFacturaInsert.php">Nuevo</a></td></tr>
<?php
foreach ($FacturaCollectorObj->readFacturas() as $ObjFactura){
  echo "<tr>";
  echo "<td>".$ObjFactura->getIdFactura() ."</td>";
  echo "<td>".$ObjFactura->getDescripcion() ."</td>";
  echo "<td>".$ObjFactura->getTotal() ."</td>";
  echo "<td><a href='formularioFacturaEditar.php?id=".$ObjFactura->getIdFactura()."'>editar</a></td>";
  echo "<td><a href='eliminar.php?id=".$ObjFactura->getIdFactura()."'>eliminar</a></td>"; 
  echo "</tr>"; 
}
?>
</table>
</div>
</body>
</html>
