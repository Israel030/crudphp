<?php 
include('../../ConexionBD/bd.php');


if(isset($_GET['txtID'])){
    $txtID=(isset($_GET['Descripcion']))?$_GET['txtID']:"";
    $Descripcion=(isset($_GET['Descripcion']))?$_GET['Descripcion']:"";
    $Cliente=(isset($_GET['Cliente']))?$_GET['Cliente']:"";
    $Categoria=(isset($_GET['Categoria']))?$_GET['Categoria']:"";
    $link=(isset($_GET['link']))?$_GET['link']:"";

    $sentencia=$con->prepare("UPDATE productos 
    SET Descripcion = '$Descripcion', Cliente = '$Cliente', Categoria = '$Categoria', link = '$link '
    WHERE id=:id");
    $sentencia->bindParam(":id",$txtID);
    $sentencia->execute();
    // $registro=$sentencia->fetch(PDO::FETCH_LAZY);

}

include("../../templates/header.php");?>

<div class="card">
    <div class="card-header">
        Editar Productos
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">

    <div class="mb-3">
        <label for="txtID" class="form-label">ID:</label>
        <input
            type="text"
            class="form-control"
            name="id"
            id="id"
            aria-describedby="helpId"
            placeholder="ID"
        />
    </div>
    

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
<?php include("../../templates/footer.php");?>