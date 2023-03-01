<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once 'connection.php';
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $facultad = $_POST["facultad"];
    $my_query = "insert into carrera(nombre, descripcion, facultad) 
    values('".$nombre."', '".$descripcion."', '".$facultad."')";
    $result = $mysql -> query($my_query);
    if($result == true){
        echo "Registro guardado satisfactoriamente...";
    }else{
        echo"Error al guardar registro...";
    }
}else{
    echo"Error desconocido";
}
?>