<?php 
    include("../baseDatos.php");
    if(isset($_GET['id'])){
        $id = trim($_GET['id']);
        $query = "select * from agenda where id = $id";
        $result = mysqli_query( $conexion, $query);
        while ( $row = mysqli_fetch_assoc($result)){
            $titulo = $row['titulo'];
            $descripcion = $row['descripcion'];
        }
    }
?>
<?php include("../include/header.php") ?>
    <div class="container p-4">
        <form action="../edit.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
            <div class="form-group">
                <label for="titulo" class="label-control">Titulo</label>
                <input type="text" class="form-control" name="titulo" id="titulo" value="<?php echo $titulo; ?>">
            </div>
            <div class="form-group">
                <label for="titulo" class="label-control">Titulo</label>
                <textarea type="text" class="form-control" name="descripcion" id="descripcion"><?php echo $descripcion; ?></textarea>
            </div>
            <button class="btn btn-success btn-block" type="submit">Editar</button>
        </form>
    </div>
<?php include("../include/footer.php") ?>