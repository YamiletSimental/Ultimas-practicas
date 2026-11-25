<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro alumnos</title>
</head>
<body>
    <h2>Registro de alumnos de programación 3°A</h2>
    <form method="POST">
        <label> Nombre del alumno:</label>
        <input type="text" name="nombre" id="nombre">
        <br><br>

        <button type="submit" name="guardar">Guardar</button>
    </form>

<?php
    if (isset($_POST["guardar"])){
        $nombre = $_POST["nombre"];
        file_put_contents("ProgramacionA.txt", $nombre . PHP_EOL, FILE_APPEND);
        echo "<p>Nombre guardar correctamente.</p>";
    }
?>

    <h3>Lista de Alumnos de 3°A registrados</h3>

<?php
    if (file_exists("ProgramacionA.txt")){
        $contenido = file_get_contents("ProgramacionA.txt");
        echo nl2br($contenido);}
    else
    {echo "no existen registros."; }
?>

</body>
</html>