<?php require 'inc/header.php' ?>

<?php if (empty($this->oPost)): ?>
<p class="error">The post can't be found!</p>
<?php else: ?>

<article>
    <time datetime="<?=$this->oPost->createdDate?>" pubdate="pubdate"></time>
    <h1><?=
htmlspecialchars($this->oPost->title)?></h1>
    <p><?n12br(htmlspecialchars($this->oPost->body))?></p>
    <p class="left small italic">Posted on <?=$this->oPost->createDate?></p>
    
    <?php
    $oPost = $this->oPost;
    require 'inc/control_buttons.php';
    ?>
</article>

<?php endif ?>

<?php require 'inc/footer.php' ?>

