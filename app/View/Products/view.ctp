<div>
  <span><h2><?= $product['Product']['name']; ?></h2></span>
</div>

<div>
  <table>
      <tbody>
        <tr>
          <td rowspan="4"><?= $this->Product->photoImage($product,['style' => 'width:260px;height:180px'])?>
          </td>
          <td><?= $product['Product']['name']; ?></td>
        </tr>
        <tr>
          <td>¥<?= number_format($product['Product']['price']); ?></td>
        </tr>
        <tr>
          <td><?= $product['Product']['body']; ?></td>
        </tr>
        <tr>
          <?php if(count($product['Review']) > 0) : ?>
          <?= $this->Product->scoreList()[round($averageScore)]; ?>&nbsp;
              ( <?= $averageScore; ?> )
          <?php else: ?>
          <p>まだ、レビューがありません。</p>
          <?php endif; ?>
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

<?php if (count($product['Review']) > 0) : ?>
    <div style="margin-top: 30px;">
        <span>レビュー一覧</span>
        <table>
            <thead>
                <tr>
                    <th style="width: 10%;">評価</th>
                    <th style="width: 20%;">タイトル</th>
                    <th>内容</th>
                    <th style="width: 20%;">会員</th>
                    <th style="width: 10%;">訪問日</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($product['Review'] as $review): ?>
                <tr>
                    <td><?= $this->Product->scoreList()[$review['score']]; ?></td>
                    <td><?= $review['title']; ?></td>
                    <td><?= $review['body']; ?></td>
                    <td><?= $review['Member']['email']; ?></td>
                    <td><?= $this->Time->format($review['created'], '%Y/%m/%d'); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php else: ?>
    <div style="margin-top: 30px;">
        <p>まだ、レビューがありません。</p>
    </div>
<?php endif; ?>

<?php if ($currentUser) : ?>
    <div style="margin-top: 20px;">
        <div style="text-align: right;">
            <?= $this->Html->link(
                'レビューを' . $reviewLabel . 'する',
                [
                    'controller' => 'reviews',
                    'action' => 'edit',
                    'product_id' => $product['Product']['id'],
                ]
            ); ?>
        </div>
    </div>
<?php endif; ?>