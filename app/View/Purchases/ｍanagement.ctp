<table>
  <tr>
  <td>id</td>
  <td>member_id</td>
  <td>product_id</td>
  <td>OK_flag</td>
  <td>NG_flag</td>
  <td>登録日時</td>
  <td>更新日時</td>
  <td>対応有無</td>
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
  <td><<button>対応する</button>
    </td>
  </tr>

  <?php endforeach; ?>

</table>

