<?php include 'template/header.php' ?>

<?php
include 'model/conexion.php';
$id_autor = $_GET['id_autor'];
$sentencia = $bd->prepare("select * from autores where id_autor = ?");
$sentencia->execute([$id_autor]);
$autor = $sentencia->fetch(PDO::FETCH_OBJ);
//print_r($autor);
?>

<div class="card">
        <div class="card-header">
          Detalles de Autor
        </div>
        <div class="p-4">
          <table class="table align-middle">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Ciudad</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Pais</th>
                        <th scope="col">Codigo Postal</th>
                        <th scope="col" colspan="2">Opciones</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    foreach ($autor as $dato) {


                    ?>

                        <tr class="">
                        <td scope="row"><?php echo $dato->id_autor; ?></td>
                        <td><?php echo $dato->nombre; ?></td>
                        <td><?php echo $dato->apellido; ?></td>
                        <td><?php echo $dato->telefono; ?></td>
                        <td><?php echo $dato->direccion?></td>
                        <td><?php echo $dato->ciudad?></td>
                        <td><?php echo $dato->estado?></td>
                        <td><?php echo $dato->pais?></td>
                        <td><?php echo $dato->cod_postal?></td>
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