<?php
$data = [
    "id" => $_GET['id'],
    "title" => $_POST['title'],
    "comment" => $_POST['comment'],
    "data" => $_POST['data']
];

$table="posts";
require 'database/QueryBuilder.php';
$db = new QueryBuilder;
$posts = $db->update($table,$data);

header("Location:./"); exit;

