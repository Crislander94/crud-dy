<?php
    include("baseDatos.php");
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(
            isset($_POST['titulo']) &&
            isset($_POST['descripcion']) &&
            isset($_POST['id'])
        ){
            $titulo = $_POST['titulo'];
            $descripcion = $_POST['descripcion'];
            $id = $_POST['id'];
            $query = "UPDATE agenda set 
                        titulo = '$titulo',
                        descripcion = '$descripcion'
                        WHERE id = $id";
            $result = mysqli_query( $conexion, $query);
            if(!$result)
                die("Error al modificar ...");
            else
            {
                $_SESSION["mensaje"]="Registro modificado exitosamente =)";
                header("Location:index.php");
            }
        }
    }
    
?>