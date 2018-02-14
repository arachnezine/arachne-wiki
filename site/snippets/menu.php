<navrole="navigation">
  <ul>
    <?php foreach($site->breadcrumb() as $item): ?>
    <li class="<?= r($item->isOpen(), ' is-active') ?>">
      <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
      <?php e($item != $site->breadcrumb()->last(), ' /') ?>
    </li>
    <?php endforeach ?>
  </ul>
</nav>
