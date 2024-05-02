<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Tarea</title>
</head>
<body>
    <h1>Agregar Nueva Tarea</h1>
    <form action="add_task.php" method="post">
        <input type="text" name="task" placeholder="Ingrese su tarea" required>
        <button type="submit">Agregar Tarea</button>
    </form>
    <a href="index.php">Volver a la Lista de Tareas</a>
</body>
</html>
