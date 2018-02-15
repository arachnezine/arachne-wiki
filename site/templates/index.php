<?php if(!$site->user()) go('/') ?>
<?php snippet('header') ?>

  <main class="" role="main">
   <h1><?= $page->title()->html() ?></h1>
   <div class="">
      <?= $page->text()->kt() ?>
    </div>

    <ul>
    <?php foreach($page->children()->visible() as $article): ?>
      <li><a href="<?= $article->url() ?>"><?= $article->title() ?>, <?= $article->modified('d-m-Y') ?></a></li>
    <?php endforeach ?>
    </ul>

  </main>

<?php snippet('footer') ?>
