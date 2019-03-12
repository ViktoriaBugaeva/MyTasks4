<?php
require 'database/QueryBuilder.php';
$db = new QueryBuilder;
$posts = $db->all("posts");
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
                    <h1>All Posts</h1>
                    <a href="create.php" class="btn btn-success">Add Post</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Comment</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($posts as $post):?>
                            <tr>
                                <td><?= $post['id'];?></td>
                                <td><?= $post['title'];?></td>
                                <td><?= $post['comment'];?></td>
                                <td><?= $post['data'];?></td>
                                <td>
                                    <a href="show.php?id=<?= $post['id'];?>" class="btn btn-info">
                                        Show
                                    </a>
                                    <a href="edit.php?id=<?= $post['id'];?>" class="btn btn-warning">
                                        Edit
                                    </a>
                                    <a onclick="return confirm('are you sure?');" href="delete.php?id=<?= $post['id'];?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>