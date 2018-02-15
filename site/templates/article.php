<?php if(!$site->user()) go('/') ?>
<?php snippet('header') ?>

  <main class="" role="main">
    <h1><?= $page->title()->html() ?></h1>
    → <a href="<?= $page->ref() ?>">ref-url</a>

    <div class="">
      <?= $page->text()->kt() ?>
    </div>
  </main>

<?php snippet('footer') ?>
