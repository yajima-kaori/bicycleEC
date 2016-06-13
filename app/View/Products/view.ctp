<div>
  <span><h2><?= $product['Product']['name']; ?></h2></span>
</div>

<div>
  <table>
      <tbody>
        <tr>
          <td rowspan="3"><?= $this->Product->photoImage($product,['style' => 'width:260px;height:180px'])?>
          </td>
          <td><?= $product['Product']['name']; ?></td>
        </tr>
        <tr>
          <td>¥<?= number_format($product['Product']['price']); ?></td>
        </tr>
        <tr>
          <td><?= $product['Product']['body']; ?></td>
        </tr>
      </tbody>
  </table>
          <div style="text-align:center">
          <button id="cart"><?= $this->Html->link(
            'カートに入れる',
            ['action' => 'purchase',$product['Product']['id']]
            );
            ?></button></td>
          </div>

</div>