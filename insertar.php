<?php
include('conexion.php');

        if (count($_POST)>0){

            $tarea = $_POST['tarea'];
            $descripcion = $_POST['descripcion'];
            $etiqueta = $_POST['etiqueta'];
            #echo"<br>". $_POST['tarea']."<br>";
            #echo"<br>". $_POST['descripcion']."<br>";
            #echo"<br>". $_POST['etiqueta']."<br>";

            #La variable $sql buarda la sentencia de inserción para la base de datos
            $sql = "INSERT INTO tareas(tarea,descripcion,etiqueta) VALUES ('$tarea','$descripcion','$etiqueta')";
            
            #Se hace la inserción en la base de datos
            $conn->exec($sql);

            echo "<br>". "guardado exitoso";
            header('Location: index.php');
    }

?>