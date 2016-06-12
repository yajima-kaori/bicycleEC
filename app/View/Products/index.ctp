<h2>商品一覧</h2>

<table>
  <tbody>
  <?php foreach($products as $product) :?>
    <tr>
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
  <?= $this->Pagenator->prev('<前へ'); ?>&nbsp;
  <?= $this->Pagenator->numbers(); ?>&nbsp;
  <?= $this->Pagenator->next('次へ>'); ?>
</div>