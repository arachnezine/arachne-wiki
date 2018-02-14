<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <?= css('assets/dist/css/index.css') ?>

</head>
<body>

  <header class="" role="banner">
    <a href="<?= url() ?>" rel="home"><?= $site->title()->html() ?></a>
    <?php snippet('menu') ?>
  </header>
