<?php 

include 'connection.php'; 
$id_reporte = $_GET['reporte'];

$result = $conn->query("select reporte.*,reporte_local.*,usuario.nombre,usuario.idrol,categoria.* from reporte inner join reporte_local on reporte.idreporte = reporte_local.idreporte_local INNER JOIN usuario on reporte.idoperador = usuario.idusuario INNER JOIN categoria on categoria.idcategoria = reporte.idcategoria where reporte.idreporte = $id_reporte");

//$result = $conn->query("select reporte.*,reporte_local.*,usuario.nombre,usuario.idrol,categoria.* from reporte inner join reporte_local on reporte.idreporte = reporte_local.idreporte_local INNER JOIN usuario on reporte.idoperador = usuario.idusuario INNER JOIN categoria on categoria.idcategoria = reporte.idcategoria ");

$reporte = $result->fetch_assoc();
//echo json_encode($reporte);


/*while ($reporte = $result->fetch_assoc()) {
    include 'plantilla.php'; 
}*/

 include 'plantilla.php'; 





?>

