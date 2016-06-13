<h2>商品一覧</h2>

<table>
  <tbody>
  <?php foreach($products as $product) :?>
    <tr>
        <td>
          <?= $this->Html->link(
              $this->Product->photoImage($product,['style' => 'width:100%']),
              ['action' => 'view',$product['Product']['id']],
              ['escape' => false]
            );
         ?>
        </td>
        <td><?= $this->Html->image('aiueo.png',['alt'=>'']); ?>
        </td>
        <td>
        <?= $this->Html->link(
            $product['Product']['name'],
            ['action' => 'view',$product['Product']['id']]

            );
         ?>
        </td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>

<div>
  <?= $this->Paginator->prev('<前へ'); ?>&nbsp;
  <?= $this->Paginator->numbers(); ?>&nbsp;
  <?= $this->Paginator->next('次へ>'); ?>
</div>