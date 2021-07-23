
<?php $title = "Blog de Yaya" ?>
 
<?php ob_start(); ?>


    <?php


    foreach ($posts as $post) :

    ?>
        <article>
            <header>
             <a href="<?= 'http://localhost/yba_blog_p5/index.php?action=post&id='. $post['id']?>"> 
             <h1 class = "postTitle"><?= $post['title'] ?></h1>
             </a>
                <time> <?= $post['date']; ?></time>
            </header>
            <p> <?= $post['content']; ?></p>
<!--          <p>  /// getUser(array(1)); </p> -->
        </article>
    <hr />




    <?php endforeach ?>

<?php $content = ob_get_clean(); ?>

<?php require ('template.php'); ?>