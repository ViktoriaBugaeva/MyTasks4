<?php

require 'database/QueryBuilder.php';
$db = new QueryBuilder;

$id =$_GET['id'];
$table="posts";
$post = $db->getOne($table,$id);

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
                    <h1>Edit Post</h1>
                    <form action="update.php?id=<?= $post['id'];?>" method="post">
                        <div class="form-group">
                            <input type="text" name="title" class="form-control" value="<?= $post['title'];?>">
                        </div>
                        <div class="form-group">
                            <textarea name="comment" class="form-control"><?= $post['comment'];?></textarea>
                        </div>
                        <div class="form-group">
                            <textarea name="data" class="form-control"><?= $post['data'];?></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-warning" type="submit">Submit</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>