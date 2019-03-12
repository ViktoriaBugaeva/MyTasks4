<?php

require 'database/QueryBuilder.php';
$db = new QueryBuilder;

$id=$_GET['id'];
$table="tasks";

$db->delete($table, $id);

header("Location:./");