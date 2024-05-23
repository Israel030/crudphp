<?php 
//incluimos la base de datos
include('../../ConexionBD/bd.php');

//comprobar si se hace un envio POST
if($_POST){
    // print_r($_POST);
//Recepcionamos los valores del formulario
    $icono=(isset($_POST{'icono'}))?$_POST['icono']:"";
    $titulo=(isset($_POST{'titulo'}))?$_POST['titulo']:"";
    $descripcion=(isset($_POST{'descripcion'}))?$_POST['descripcion']:"";

    $sentencia = $con->prepare("INSERT INTO `servicios` (`ID`, `icono`, `titulo`, `descripcion`) 
    VALUES (NULL, :icono, :titulo, :descripcion)");

    $sentencia->bindParam(":icono",$icono);
    $sentencia->bindParam(":titulo",$titulo);
    $sentencia->bindParam(":descripcion",$descripcion);
    $sentencia->execute();

header("Location: index.php");

}

include("../../templates/header.php");?>


<div class="card">
    <div class="card-header">
        Crear Servicios
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="" class="form-label">Icono:</label>
                <input type="text"class="form-control"name="icono" id="icono" aria-describedby="helpId" placeholder="icono"/>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Titulo:</label>
                <input
                    type="text"
                    class="form-control"
                    name="titulo"
                    id="titulo"
                    aria-describedby="helpId"
                    placeholder="titulo"
                />
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Descripcion:</label>
                <input
                    type="text"
                    class="form-control"
                    name="descripcion"
                    id="descripcion"
                    aria-describedby="helpId"
                    placeholder="descripcion"
                />
            </div>
            <button
                type="submit"
                class="btn btn-success"
            >
                Agregar
            </button>
            <a
                name=""
                id=""
                class="btn btn-primary"
                href="index.php"
                role="button"
                >Regresar</a
            >
        </form>
    </div>
    <div class="card-footer text-muted">

    </div>
</div>
<?php include("../../templates/footer.php");?>