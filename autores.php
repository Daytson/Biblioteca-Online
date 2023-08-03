<?php include 'template/header.php' ?>

<?php
include_once "model/conexion.php";
$sentencia = $bd->query("select * from autores");
$autores = $sentencia->fetchAll(PDO::FETCH_OBJ);
//print_r($autores);
?>

<div class="card">
        <div class="card-header">
          Listado de Autores
        </div>
        <div class="p-4">
          <table class="table align-middle">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Telefono</th>
                        <th scope="col" colspan="2">Opciones</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    foreach ($autores as $dato) {


                    ?>

                        <tr class="">
                        <td scope="row"><?php echo $dato->id_autor; ?></td>
                        <td><?php echo $dato->nombre; ?></td>
                        <td><?php echo $dato->apellido; ?></td>
                        <td><?php echo $dato->telefono; ?></td>
                        <td><a class="text-success" href="editar_autores.php?id_autor=<?php echo $dato->id_autor; ?>"><i class="bi bi-brush"></i></a></td>
                        <td><a class="text-danger" onclick="return confirm('Estas seguro de eliminar?');" href="eliminar_autor.php?id_autor=<?php echo $dato->id_autor; ?>"><i class="bi bi-trash"></i></a></td>
                        </tr>

                    <?php
                    }
                    ?>

                </tbody>
          </table>
        
        </div>
    </div>
</div>
&nbsp;
<?php include 'template/footer.php' ?>