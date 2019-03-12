<?php
$data = [
    "id" => $_GET['id'],
    "title" => $_POST['title'],
    "content" => $_POST['content']
];

$table="tasks";
require 'database/QueryBuilder.php';
$db = new QueryBuilder;
$tasks = $db->update($table,$data);

header("Location:./"); exit;

