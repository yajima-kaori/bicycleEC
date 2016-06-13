<?php
    $titleLabel = $isNew ? '投稿' : '編集';
    $submitLabel = $isNew ? '投稿' : '更新';
?>

  <h2>レビュー</h2>

  <?= $this->Form->create('Review'); ?>
  <?= $this->Form->input('score',[
        'label' => '点数',
        'type' => 'select',
        'options' => $this->Product->scoreList()
  ]);
  ?>

<?= $this->Form->input('title', ['label' => 'タイトル']); ?>
<?= $this->Form->input('body', ['label' => '内容']); ?>
<?= $this->Form->hidden('id'); ?>
<?= $this->Form->hidden('product_id', ['value' => $productId]); ?>
<?= $this->Form->end($submitLabel); ?>
