<?php if($site->user()): ?>
<nav class="navigation column" role="navigation">
  <ul class="menu">
    <?php foreach($pages->visible() as $item): ?>
    <li class="menu-item<?= r($item->isOpen(), ' is-active') ?>">
      <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
    </li>
    <?php endforeach ?>

  <?php if($user = $site->user()): ?>
    <li><a href="<?= url('logout') ?>">Logout</a></li>
  <?php endif ?>
  </ul>
</nav>
<?php endif ?>
