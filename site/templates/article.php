<?php if(!$site->user()) go('/') ?>
<?php snippet('header') ?>

  <main class="" role="main">
    <h1><?= $page->title()->html() ?></h1>
    <?= $page->modified('d-m-Y H:m:s') ?>
    <?php if($page->ref() != ''): ?>
      → <a href="<?= $page->ref() ?>">ref-url</a>
    <?php endif ?>

    <div class="">
      <?= $page->text()->kt() ?>
    </div>
  </main>

<?php snippet('footer') ?>
