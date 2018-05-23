<?php 

include 'connection.php'; 




$result = $conn->query("select reporte.*,reporte_local.*,usuario.nombre,usuario.idrol,categoria.* from reporte inner join reporte_local on reporte.idreporte = reporte_local.idreporte_local INNER JOIN usuario on reporte.idoperador = usuario.idusuario INNER JOIN categoria on categoria.idcategoria = reporte.idcategoria ");


//echo json_encode($reporte);


while ($reporte = $result->fetch_assoc()) {
    include 'plantilla.php'; 
}






?>
