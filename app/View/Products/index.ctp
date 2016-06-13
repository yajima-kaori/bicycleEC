<h2>商品一覧</h2>

<?php if ($currentUser) : ?>
    <div style="text-align: right;">
        <span><?= $this->Html->link('新規追加', ['action' => 'add']) ?></span>
    </div>
<?php endif; ?>

<div>
    <?php foreach($products as $product) :?>
      <div class="item">
            <div>
            <?= $this->Html->link(
                $this->Product->photoImage($product,['style' => 'width:260px;height:180px']),
                ['action' => 'view',$product['Product']['id']],
                ['escape' => false]
              );
           ?>
            </div>
            <div style="text-align:center;">
            <?= $this->Html->link(
                $product['Product']['name'],
                ['action' => 'view',$product['Product']['id']]

                );
           ?>
           </div>
            <div style="text-align:center;">
            ¥<?= number_format($product['Product']['price']); ?>
           </div>
      </div>
    <?php endforeach; ?>
</div>

<div style="clear:both;text-align:center;">
  <?= $this->Paginator->prev('<前へ'); ?>&nbsp;
  <?= $this->Paginator->numbers(); ?>&nbsp;
  <?= $this->Paginator->next('次へ>'); ?>
</div>