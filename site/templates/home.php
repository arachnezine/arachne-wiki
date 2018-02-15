<?php snippet('header') ?>

  <main class="main" role="main">
    <!-- intro -->
    <div class="w--half">
      <?= $page->text()->kt() ?>
    </div>

    <!-- login -->
    <a href="<?= page('login') ?>" class="w--half">Login</a>
  </main>


<?php snippet('footer') ?>
