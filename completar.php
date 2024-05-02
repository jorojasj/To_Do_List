<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Completar Tarea</title>
</head>
<body>
    <h1>Marcar Tarea como Completada</h1>
    <form action="complete_task.php" method="post">
        <select name="task">
            <?php
            $tasks = file("tasks.txt", FILE_IGNORE_NEW_LINES);
            foreach ($tasks as $index => $task) {
                if ($task[strlen($task) - 1] === '0') {
                    echo "<option value='$index'>$task</option>";
                }
            }
            ?>
        </select>
        <button type="submit">Marcar como Completada</button>
    </form>
    <a href="index.php">Volver a la Lista de Tareas</a>
</body>
</html>
