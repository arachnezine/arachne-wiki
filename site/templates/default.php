<?php if(!$site->user()) go('/') ?>
<?php snippet('header') ?>

  <main class="" role="main">
   <h1><?= $page->title()->html() ?></h1>
   <div class="">
      <?= $page->text()->kirbytext() ?>
    </div>
  </main>

<?php snippet('footer') ?>
