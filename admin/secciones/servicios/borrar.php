<?php 
include('../../ConexionBD/bd.php');



//borrar dicho registro con el ID correspondiente
// if(isset($_GET['txtID'])){
// $sentencia=$con->prepare(" UPDATE servicios set = 'habilitado' WHERE txtID = txtID");
// $txtID=(isset($_GET['txtID']) )?$_GET['txtID']:"";
// $sentencia->bindParam(":id",$txtID);
// $sentencia->execute();
// }

if (isset($_GET['txtID'])) {
    $txtID = $_GET['txtID'];

    $sql = "UPDATE servicios SET habilitado = 0  WHERE id = :id";
    $stmt = $con->prepare($sql);

    $stmt->bindParam(":id", $txtID);
    $stmt->execute();

    // Handle success or failure (optional)
//   if ($stmt->rowCount() > 0) {

//     echo "Servicio habilitado exitosamente";
//   } else {
//     echo "Error al habilitar el servicio";
//   }
header("Location: index.php");
}
?>