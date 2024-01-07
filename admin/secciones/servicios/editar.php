<?php 
include("../../bd.php");
//Recuperar los datos del ID correspondiente seleccionado
if(isset($_GET['txtID'])){
    $txtID=(isset($_GET['txtID']) )?$_GET['txtID']:"";
    
    $sentencia=$con->prepare("SELECT FROM servicios where id=:id");
    $sentencia->bindParam(":id",$txtID);
    $sentencia->execute();
    $registro=$sentencia->fetch(PDO::FETCH_LAZY);

    $icono=$registro['icono'];
    $titulo=$registro['titulo'];
    $descripcion=$registro['descripcion'];
    }

include("../../templates/header.php");?>

<div class="card">
    <div class="card-header">
        Editar Servicios
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">

    <div class="mb-3">
        <label for="txtID" class="form-label">ID:</label>
        <input
            type="text"
            class="form-control"
            name=""
            id=""
            aria-describedby="helpId"
            placeholder="ID"
        />
    </div>
    

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

<?php include("../../templates/footer.php");?>