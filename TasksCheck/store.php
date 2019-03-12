<?php

require 'database/QueryBuilder.php';
$db = new QueryBuilder;
//$table="post";
$data=[
    "title" => $_POST['title'],
    "comment" => $_POST['comment'],
    "data" => $_POST['data']
        ];
$db->store("posts",$data);

header("Location:./");exit;