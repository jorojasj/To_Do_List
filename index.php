<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tareas</title>
</head>
<body>
    <h1>Lista de Tareas</h1>

    <h2>Tareas Pendientes</h2>
    <ul>
        <?php
        $archivo = fopen("tareas.txt", "r");
        while (!feof($archivo)) {
            $linea = fgets($archivo);
            if (!empty($linea)) {
                $datos = explode("|", $linea);
                $tarea = $datos[0];
                $estado = trim($datos[1]);
                if ($estado == "Pendiente") {
                    echo "<li>$tarea</li>";
                }
            }
        }
        fclose($archivo);
        ?>
    </ul>

    <h2>Tareas Completadas</h2>
    <ul>
        <?php
        $archivo = fopen("tareas.txt", "r");
        while (!feof($archivo)) {
            $linea = fgets($archivo);
            if (!empty($linea)) {
                $datos = explode("|", $linea);
                $tarea = $datos[0];
                $estado = trim($datos[1]);
                if ($estado == "Completada") {
                    echo "<li><input type='checkbox' disabled checked>$tarea</li>";
                }
            }
        }
        fclose($archivo);
        ?>
    </ul>

    <a href="agregar.php">Agregar Nueva Tarea</a>
    <a href="completar.php">Marcar Tarea como Completada</a>
</body>
</html>
