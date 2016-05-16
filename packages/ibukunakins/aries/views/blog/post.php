<?php $view->script('post', 'blog:app/bundle/post.js', 'vue') ?>

    <div class="blog-post">
        <h2 class="blog-post-title"><?= $post->title ?></h2>
        <?php if ($image = $post->get('image.src')): ?>
        <img class="img-thumbnail" src="<?= $image ?>" alt="<?= $post->get('image.alt') ?>">
        <?php endif ?>
        <p class="blog-post-meta"><?= __('Written by %name% on %date%', ['%name%' => $post->user->name, '%date%' => '<time datetime="'.$post->date->format(\DateTime::W3C).'" v-cloak>{{ "'.$post->date->format(\DateTime::W3C).'" | date "longDate" }}</time>' ]) ?></p>
        <?= $post->content ?>
    </div>


<?= $view->render('blog/comments.php') ?>