<?php
$id = $_GET['id'];

require 'database/QueryBuilder.php';
$db = new QueryBuilder;
$tasks = $db->deleteTask($id);

header("Location:./");