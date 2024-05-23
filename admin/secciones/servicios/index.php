<?php 
include('../../ConexionBD/bd.php');
// include("../../bd.php");


//seleccionar  y mostrar todos los campos de la tabla servicios
$sentencia = $con->prepare("SELECT * FROM `servicios` where habilitado = 1");
$sentencia->execute();
$lista_servicios=$sentencia->fetchAll(PDO::FETCH_ASSOC);
// print_r($lista_servicios);

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
        
    Servicios
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
                        <th scope="col">Icono</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Accion</th>                        
                    </tr>
                </thead>
                <tbody>
                    <!-- MOSTRAR LOS DATOS DE LA BASE DE DATOS -->
                    <?php foreach($lista_servicios as $registros){ ?>
                    <tr class="">
                        <td><?php echo $registros['ID'] ?></td>
                        <td><?php echo $registros['icono'] ?></td>
                        <td><?php echo $registros['titulo'] ?></td>
                        <td><?php echo $registros['descripcion'] ?></td>
                        <td>
                            <a
                                name=""
                                id=""
                                class="btn btn-warning"
                                href="editar.php?txtID=<?php echo $registros['ID']; ?>"
                                role="button"
                                >Editar</a
                            >
                            <a
                                name=""
                                id=""
                                class="btn btn-danger"
                                href="borrar.php?txtID=<?php echo $registros['ID']; ?>"
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
