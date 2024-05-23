<?php 
include('../../ConexionBD/bd.php');

if($_POST){
//recepcionamos los valores del formulario
$Descripcion=(isset($_POST{'Descripcion'}))?$_POST['Descripcion']:"";
$Cliente=(isset($_POST{'Cliente'}))?$_POST['Cliente']:"";
$Categoria=(isset($_POST{'Categoria'}))?$_POST['Categoria']:"";
$link=(isset($_POST{'link'}))?$_POST['link']:"";

$sentencia = $con->prepare("INSERT INTO `productos` (`id`,`descripcion`,`cliente`,`categoria`,`link`)
VALUES (NULL, :descripcion, :cliente, :categoria, :link)");

$sentencia->bindParam(":descripcion",$Descripcion);
$sentencia->bindParam(":cliente",$Cliente);
$sentencia->bindParam(":categoria",$Categoria);
$sentencia->bindParam(":link",$link);
$sentencia->execute();

}

include("../../templates/header.php");?>

<div class="card">
    <div class="card-header">
        Agregar Productos
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="" class="form-label">Descripcion:</label>
                <input type="text"class="form-control"name="Descripcion" id="Descripcion" aria-describedby="helpId" placeholder="Descripcion"/>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Cliente:</label>
                <input
                    type="text"
                    class="form-control"
                    name="Cliente"
                    id="Cliente"
                    aria-describedby="helpId"
                    placeholder="Cliente"
                />
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Categoria:</label>
                <input
                    type="text"
                    class="form-control"
                    name="Categoria"
                    id="Categoria"
                    aria-describedby="helpId"
                    placeholder="Categoria"
                />
            </div>
            <div class="mb-3">
                <label for="" class="form-label">link:</label>
                <input
                    type="text"
                    class="form-control"
                    name="link"
                    id="link"
                    aria-describedby="helpId"
                    placeholder="link"
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