<?php

include_once('Factura.php');
include_once('Collector.php');

class FacturaCollector extends Collector
{
  
  function showFactura($id) {
    $row = self::$db->getRows("SELECT * FROM factura where idFactura= ? ", array("{$id}")); 
    $ObjFactura = new Factura($row[0]{'idFactura'},$row[0]{'descripcion'},$row[0]{'total'});
    return $ObjFactura;
  }

  function createFactura($descripcion) {    
    $insertrow = self::$db->insertRow("INSERT INTO db_factura.factura (idFactura, descripcion, total) VALUES (?, ?, ?)", array(null, "{$descripcion}", "{$total}"));
  }  

  function readFacturas() {
    $rows = self::$db->getRows("SELECT * FROM factura ");        
    $arrayFactura= array();        
    foreach ($rows as $c){
      $aux = new Factura($c{'idFactura'},$c{'descripcion'},$c{'total'});
      array_push($arrayFactura, $aux);
    }
    return $arrayFactura;        
  }
  
  function updateFactura($id,$descripcion,$total) {    
    $insertrow = self::$db->updateRow("UPDATE db_factura.factura SET factura.descripcion = ? factura.total = ?  WHERE factura.idFactura = ? ", array( "{$descripcion}",$id));
  }  

  function deleteFactura($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM db_factura.factura WHERE idFactura= ?", array("{$id}"));
  }  



}
?>

