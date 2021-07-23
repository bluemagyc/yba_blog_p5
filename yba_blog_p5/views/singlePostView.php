
<?php $title = 'Yaya\'s Blog'; ?>

<?php ob_start() ;?>


<article>
    <header>
        <h1 class="postTitle"> <?= $post['title']; ?></h1>
        <time><?= $post['date'] ?></time>
    </header>

    <p> <?= $post['content'] ?></p>
    </article>

    <hr />
<header>
    <h1 class="titleResponses"> Réponses à : <? $post['title'] ; ?> </h1>
</header>
    <?php foreach ($comments as $comment) :?>
    <div><?= $comment['content']; ?></div>


    <?php endforeach; ?>


<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>


