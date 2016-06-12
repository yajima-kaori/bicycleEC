<div>
  <span><h2><?= $product['Product']['name']; ?></h2></span>
  <span><h3>¥<?= number_format($product['Product']['price']); ?></h3></span>
</div>

<div>
  <span>商品情報</span>
  <table>
      <tbody>
        <tr>
          <td><?= $product['Product']['name']; ?></td>
        </tr>
        <tr>
          <td>¥<?= number_format($product['Product']['price']); ?></td>
        </tr>
        <tr>
          <td><?= $product['Product']['body']; ?></td>
        </tr>
        <tr>
          <td><button><?= $this->Html->link(
            'カートに入れる',
            ['action' => 'purchase',$product['Product']['id']]
            );
            ?></button></td>
        </tr>
      </tbody>
  </table>
</div>