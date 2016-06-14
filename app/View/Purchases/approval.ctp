<div class="cart"><h2>ショッピングカート</h2></div>


<table>
  <tr>
    <td rowspan="3"><?= $this->Product->photoImage($product,['style' => 'width:260px;height:180px']);?>
    </td>
    <td><?= $product['Product']['name']; ?></td>
    <td rowspan="3" style="text-align:center;line-height: 200px;">数量 : <?= count($product['Product']['id'])?></td>
  </tr>
  <tr>
    <td>¥<?= number_format($product['Product']['price']); ?></td>
  </tr>
  <tr>
    <td><?= $product['Product']['body']; ?></td>
  </tr>
</table>

          <div style="text-align:center">
          <button id="cart"><?= $this->Html->link(
            '購入する',
            ['action' => 'completion']
            );
            ?></button></td>
          </div>