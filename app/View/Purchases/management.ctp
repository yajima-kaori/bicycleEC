<table>
  <tr>
  <td>id</td>
  <td>member_id</td>
  <td>product_id</td>
  <td>OK_flag</td>
  <td>NG_flag</td>
  <td>登録日時</td>
  <td>更新日時</td>
  <td></td>
  </tr>
  <?php foreach($purchases as $purchase) :?>
  <tr>
  <td><?= $purchase['Purchase']['id'] ?></td>
  <td><?= $purchase['Purchase']['member_id'] ?></td>
  <td><?= $purchase['Purchase']['product_id'] ?></td>
  <td><?= $purchase['Purchase']['OK_flag'] ?></td>
  <td><?= $purchase['Purchase']['NG_flag'] ?></td>
  <td><?= $purchase['Purchase']['created'] ?></td>
  <td><?= $purchase['Purchase']['updated'] ?></td>
  <td>
  <?= $this->Form->create('Purchase'); ?>
  <?= $this->Form->hidden('id') ?>
  <?= $this->Form->end('対応完了する') ?>
  </td>
  </tr>
  <?php endforeach; ?>

</table>

