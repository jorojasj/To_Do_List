<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tarea = $_POST["tarea"];
    if (!empty($tarea)) {
        // Agregar la nueva tarea al archivo tareas.txt
        $archivo = fopen("tareas.txt", "a");
        fwrite($archivo, $tarea . "|Pendiente" . PHP_EOL);
        fclose($archivo);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Nueva Tarea</title>
</head>
<body>
    <h1>Agregar Nueva Tarea</h1>
    <form action="agregar.php" method="post">
        <input type="text" name="tarea" placeholder="Ingrese la nueva tarea" required>
        <button type="submit">Agregar</button>
    </form>
    <a href="index.php">Volver a la Lista de Tareas</a>
</body>
</html>
