<!DOCTYPE html>
<html lang="en">
    <body>
        <div>
            <footer>
                <p class="italic"><strong><a href="<?=ROOT_URL?>" title="Homeage">Simple Blog</a></strong> мой пример простого Блога &nbsp; | &nbsp;
                <?php if (!empty($_SESSION['is_logged'])): ?>
                    You are connected as Admin - <a href="<?=ROOT_URL?>?p=admin&amp;a=logout">Logout</a> &nbsp; | &nbsp;
                    <a href="<?=ROOT_URL?>?p=blog&amp;a=all">View All Blog Posts</a>
                <?php else: ?>
                    <a href="<?=ROOT_URL?>?p=admin&amp;a=login">Admin Login</a>
                <?php endif ?>
                </p>
            </footer>
        </div>
    </body>
</html>