<?php include 'template/header.php' ?>

<?php
include_once "model/conexion.php";
$sentencia = $bd->query("select * from titulos");
$libros = $sentencia->fetchAll(PDO::FETCH_OBJ);
//print_r($libros);
?>

<div class="card">
        <div class="card-header">
          Listado de Libros
        </div>
        <div class="p-4">
          <table class="table align-middle">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Precio</th>
                        <th scope="col" colspan="2">Opciones</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    foreach ($libros as $dato) {


                    ?>

                        <tr class="">
                        <td scope="row"><?php echo $dato->id_titulo; ?></td>
                        <td><?php echo $dato->titulo; ?></td>
                        <td><?php echo $dato->tipo; ?></td>
                        <td><?php echo $dato->precio; ?></td>
                        <td><a class="text-success" href="editar_titulos.php?id_titulo=<?php echo $dato->id_titulo; ?>"><i class="bi bi-brush"></i></a></td>
                        <td><a class="text-danger" onclick="return confirm('Estas seguro de eliminar?');" href="eliminar_titulo.php?id_titulo=<?php echo $dato->id_titulo; ?>"><i class="bi bi-trash"></i></a></td> 
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