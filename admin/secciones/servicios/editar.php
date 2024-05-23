<?php
include('../../ConexionBD/bd.php');

//Recuperar los datos del ID correspondiente seleccionado
if (isset($_GET['txtID'])) {
    $txtID = (isset($_GET['txtID'])) ? $_GET['txtID'] : "";
    $icono = (isset($_POST{'icono'})) ? $_POST['icono'] : "";
    $titulo = (isset($_POST{'titulo'})) ? $_POST['titulo'] : "";
    $descripcion = (isset($_POST{'descripcion'})) ? $_POST['descripcion'] : "";


    $sentencia = $con->prepare("UPDATE servicios SET icono = '$icono', titulo = '$titulo', descripcion = '$descripcion' where id=:id");
    $sentencia->bindParam(":id", $txtID);
    $sentencia->execute();
    $registro = $sentencia->fetch(PDO::FETCH_LAZY);

    // $sentencia->close();
}

include("../../templates/header.php"); ?>

<div class="card">
    <div class="card-header">
        Editar Servicios
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="txtID" class="form-label">ID:</label>
                <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="ID" />
            </div>


            <div class="mb-3">
                <label for="" class="form-label">Icono:</label>
                <input type="text" class="form-control" name="icono" id="icono" aria-describedby="helpId" placeholder="icono" />
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Titulo:</label>
                <input type="text" class="form-control" name="titulo" id="titulo" aria-describedby="helpId" placeholder="titulo" />
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Descripcion:</label>
                <input type="text" class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="descripcion" />
            </div>
            <button type="submit" class="btn btn-success">
                Agregar
            </button>
            <a name="" id="" class="btn btn-primary" href="index.php" role="button">Regresar</a>
        </form>
    </div>
    <div class="card-footer text-muted">
    </div>

    <?php include("../../templates/footer.php"); ?>