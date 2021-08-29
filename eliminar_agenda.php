<?php
include("baseDatos.php");
    if(isset( $_GET["id"]) ){
        $id = $_GET["id"];
        $query = "DELETE FROM agenda WHERE id = $id ";
        echo $query;
        $result = mysqli_query( $conexion, $query);

        if(!$result)
            die("Error al eliminar ...");
        else
        {
            $_SESSION["mensaje"]="Registro eliminado exitosamente =)";
            header("Location:index.php");
        }
    }
?>