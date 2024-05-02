<?php
$task = $_POST['task'];
$task = trim($task); // Elimina espacios en blanco al inicio y al final
$task .= "0\n"; // 0 indica que la tarea está pendiente

file_put_contents("tasks.txt", $task, FILE_APPEND | LOCK_EX);

header("Location: index.php");
?>
