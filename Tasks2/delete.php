<?php
$id = $_GET['id'];


$sql = 'DELETE FROM tasks WHERE id=:id';
$statement = $pdo->prepare($sql);
$statement->bindParam(":id", $id);
$statement->execute();

header("Location: http://localhost/MyTasks/Tasks2/");