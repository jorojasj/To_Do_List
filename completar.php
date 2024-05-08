<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["tareas"])) {
        $tareasCompletas = $_POST["tareas"];
        // Leer tareas del archivo
        $archivo = file("tareas.txt");
        // Marcar las tareas seleccionadas como completadas
        foreach ($archivo as &$linea) {
            $datos = explode("|", $linea);
            $tarea = trim($datos[0]);
            if (in_array($tarea, $tareasCompletas)) {
                $linea = str_replace("|Pendiente", "|Completada", $linea);
            }
        }
        // Guardar las tareas actualizadas en el archivo
        file_put_contents("tareas.txt", implode("", $archivo));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marcar Tarea como Completada</title>
</head>
<body>
    <h1>Marcar Tarea como Completada</h1>
    <form action="completar.php" method="post">
        <ul>
            <?php
            // Mostrar las tareas pendientes con checkbox
            $archivo = fopen("tareas.txt", "r");
            while (!feof($archivo)) {
                $linea = fgets($archivo);
                if (!empty($linea)) {
                    $datos = explode("|", $linea);
                    $tarea = $datos[0];
                    $estado = trim($datos[1]);
                    if ($estado == "Pendiente") {
                        echo "<li><input type='checkbox' name='tareas[]' value='$tarea'>$tarea</li>";
                    }
                }
            }
            fclose($archivo);
            ?>
        </ul>
        <button type="submit">Marcar como Completada</button>
    </form>
    <a href="index.php">Volver a la Lista de Tareas</a>
</body>
</html>
