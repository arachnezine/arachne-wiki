<div>
  <?php foreach($site->breadcrumb() as $item): ?>
    <a href="<?= $item->url() ?>" class="<?= r($item->isOpen(), ' is-active') ?>"><?= $item->title()->html() ?></a>
    <?php e($item != $site->breadcrumb()->last(), ' / ') ?>
  <?php endforeach ?>
</div>
