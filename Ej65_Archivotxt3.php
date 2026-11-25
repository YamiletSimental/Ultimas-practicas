<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro alumnos</title>
</head>
<body>
    <h2>Registro de alumnos de programación 3°A</h2>
    <form method="POST">
        <label> Nombres de los alumnos:</label>
        <input type="text" name="nombre" id="nombre">
        <br><br>

        <label>Edades:</label>
        <input type="number" name="edades" id="edades">
        <br><br>

        <label>Pasatiempos:</label>
        <input type="text" name="pasatiempos" id="pasatiempos">
        <br><br>

        <button type="submit" name="guardar">Guardar</button>
        <button type="submit" name="eliminar">Eliminar todo</button>
    </form>

<?php
    if (isset($_POST["guardar"])){
        $nombres = $_POST["nombres"];
        file_put_contents("ProgramacionA.txt", $nombres . PHP_EOL, FILE_APPEND);
        echo "<p>Nombres guardar correctamente.</p>";
    }
?>

<?php
    if (isset($_POST["guardar"])){
        $edades = $_POST["edades"];
        file_put_contents("ProgramacionA.txt", $edades . PHP_EOL, FILE_APPEND);
        echo "<p>Edades guardar correctamente.</p>";
    }
?>

<?php
    if (isset($_POST["guardar"])){
        $pasatiempos = $_POST["pasatiempos"];
        file_put_contents("ProgramacionA.txt", $pasatiempos . PHP_EOL, FILE_APPEND);
        echo "<p>Pasatiempos guardar correctamente.</p>";
    }
?>

<?php
    if (isset($_POST["eliminar"])){
        file_put_contents("ProgramacionA.txt", "");
        echo "<p>Informacion eliminada.</p>";

    }
?>

    <h3>Lista de Alumnos de 3°A registrados</h3>

<?php
    if (file_exists("ProgramacionA.txt")){
        $contenido = file_get_contents("ProgramacionA.txt");
        echo nl2br($contenido);
    }
    else
    {echo "no existen registros."; }
?>

</body>
</html>