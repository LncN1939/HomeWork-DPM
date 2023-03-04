<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once 'connection.php';
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $facultad = $_POST["facultad"];
    $mode = $_POST["mode"];

    if ($mode == 1) {
        $my_query = "select * from carrera where id =" . $id . ";";
        echo "Search by code";
    }else if($mode == 2){
        $my_query = "select * from carrera where nombre like '%".$nombre."%';";
        echo "Search by name";
    }else if($mode == 3){
        $my_query = "select * from carrera where Id_Facultad =" . $facultad . ";";
        echo "Search by facultad";
    }

    include_once('generic_return.php');
}else{
    echo "/n Not exist this record";
}

?>
