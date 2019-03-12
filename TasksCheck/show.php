<?php
require 'database/QueryBuilder.php';
$db = new QueryBuilder;
$id =$_GET['id'];
$post = $db->getOne("posts",$id);

?>
<!doctype html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?= $post['id'];?></h1>
                    <p>
                        <?= $post['title'];?>
                    </p>
                    <p>
                        <?= $post['comment'];?>
                    </p>
                    <p>
                        <?= $post['data'];?>
                    </p>
                    
                    <a href="./">Go Back</a>
                </div>
            </div>
        </div>
    </body>
</html>