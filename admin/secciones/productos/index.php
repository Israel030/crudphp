<?php 
include('../../ConexionBD/bd.php');

if(isset($_GET['txtID'])){
    $sentencia=$con->prepare("DELETE FROM productos where id=:id");
    $txtID=(isset($_GET['txtID']) )?$_GET['txtID']:"";
    $sentencia->bindParam(":id",$txtID);
    $sentencia->execute();
}

//seleccionar y mostrar todos los campos de la tabla productos
$sentencia=$con->prepare("SELECT * FROM `productos`");
$sentencia->execute();
$lista_productos=$sentencia->fetchAll(PDO::FETCH_ASSOC);

include("../../templates/header.php");?>

<div class="card">
    <div class="card-header">
    <a
        name=""
        id=""
        class="btn btn-primary"
        href="crear.php"
        role="button"
        >Agregar</a
    >
        
    Productos
    </div>
    <div class="card-body">
        <div
            class="table-responsive"
        >
            <table
                class="table table-primary"
            >
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">url</th>
                        <th scope="col">Accion</th>                        
                    </tr>
                </thead>
                <tbody>
                    <!-- MOSTRAR LOS DATOS DE LA BASE DE DATOS -->
                    <?php foreach($lista_productos as $registros){ ?>
                    <tr class="">
                        <td><?php echo $registros['id'] ?></td>
                        <td><?php echo $registros['Descripcion'] ?></td>
                        <td><?php echo $registros['Cliente'] ?></td>
                        <td><?php echo $registros['Categoria'] ?></td>
                        <td><?php echo $registros['link'] ?></td>
                        <td>
                            <a
                                name=""
                                id=""
                                class="btn btn-warning"
                                href="editar.php?txtID=<?php echo $registros['id']; ?>"
                                role="button"
                                >Editar</a
                            >
                            <a
                                name=""
                                id=""
                                class="btn btn-danger"
                                href="index.php?txtID=<?php echo $registros['id']; ?>"
                                role="button"
                                >Borrar</a
                            >
                            
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        
    </div>
</div>


<?php include("../../templates/footer.php");?>
