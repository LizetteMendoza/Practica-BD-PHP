<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"  href="estilos.css">
</head>
<body>

    <?php 
    include('navbar.php');
    include('conexion.php');?>
    <h1>Agregar tareas</h1>
    <div class="contenedor-form">
    <form action="insertar.php" method="POST">
        <label for="tarea" class="form-label">Tarea:</label>
        <input type="text" name="tarea" >
        <br><br>
        <label for="descripcion" class="form-label">descripcion:</label>
        <input type="textarea" name="descripcion" >
        <br><br>
        <label for="etiqueta" class="form-label">Etiqueta:</label>
        <select name="etiqueta">
            <option value="escuela">Escuela</option>
            <option value="personal">Personal</option>
            <option value="trabajo">Trabajo</option>
        </select>
        <br><br>
        <input type="submit" value="Enviar" class="btn btn-primary">
    </form>
    </div>
    
    <br>

    <?php
        include('insertar.php');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" 
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" 
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>