<h2>商品一覧</h2>

<table>
  <tbody>
  <?php foreach($products as $product) :?>
    <tr>
        <td>
        <?= $this->Html->link(
            $product['Product']['name'],
            ['action' => 'view',$product['Product']['product_id']]

            );
         ?>
        </td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>