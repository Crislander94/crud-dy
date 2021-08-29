<?php
    include("baseDatos.php");
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(
            isset($_POST['titulo']) &&
            isset($_POST['descripcion'])
        ){
            $titulo = $_POST["titulo"];
            $descripcion = $_POST["descripcion"];
            $query = "INSERT INTO agenda(titulo, descripcion) VALUES ('$titulo','$descripcion')";
            $result = mysqli_query( $conexion, $query);
            if(!$result)
                die("Error al guardar ...");
            else
            {
                $_SESSION["mensaje"]="Registro guardado exitosamente =)";
                header("Location:index.php");
            }
        }
    }