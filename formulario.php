<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php include('conexion.php');?>
    <h1>Formulario</h1>
    <ul>
        <li>
        <a href="index.php">Inicio</a>
        </li>
        <li>
        <a href="formulario.php">Formulario</a>
        </li>
    </ul>
    
    
    <form action="insertar.php" method="POST">
        <label for="tarea">Tarea:</label>
        <input type="text" name="tarea">
        <br><br>
        <label for="descripcion">descripcion:</label>
        <input type="textarea" name="descripcion">
        <br><br>
        <label for="etiqueta">Etiqueta:</label>
        <select name="etiqueta">
            <option value="escuela">Escuela</option>
            <option value="personal">Personal</option>
            <option value="trabajo">Trabajo</option>
        </select>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
    <br>

    <?php
        include('insertar.php');
    ?>

    <?php
        include('recuperar.php');
    ?>
</body>
</html>