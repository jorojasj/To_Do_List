<?php
$index = $_POST['task'];
$tasks = file("tasks.txt", FILE_IGNORE_NEW_LINES);
$tasks[$index] = substr($tasks[$index], 0, -1) . "1"; // Cambia el último caracter a 1 (completada)
file_put_contents("tasks.txt", implode("\n", $tasks));

header("Location: index.php");
?>
