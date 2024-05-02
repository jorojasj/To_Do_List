<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tareas</title>
</head>
<body>
    <h1>Lista de Tareas</h1>
    <h2>Pendientes</h2>
    <ul>
        <?php
        $tasks = file("tasks.txt", FILE_IGNORE_NEW_LINES);
        foreach ($tasks as $task) {
            if ($task[strlen($task) - 1] === '0') {
                echo "<li>$task</li>";
            }
        }
        ?>
    </ul>
    <h2>Completadas</h2>
    <ul>
        <?php
        foreach ($tasks as $task) {
            if ($task[strlen($task) - 1] === '1') {
                echo "<li>$task</li>";
            }
        }
        ?>
    </ul>
    <a href="agregar.php">Agregar Nueva Tarea</a>
    <a href="completar.php">Marcar Tarea como Completada</a>
</body>
</html>
