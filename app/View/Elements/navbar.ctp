<div id="navbar">
  <ul>
      <li><?= $this->Html->link('bicycleEC','/'); ?></li>
      <li><?= $this->Html->link(
            '商品一覧',
            ['controller' => 'products','action' => 'index']
            ); ?>
      </li>
      <li style="float: right;">
            <?= $this->Html->link(
            '新規会員登録',
            ['controller' => 'members','action' => 'add']

          ); ?>
      </li>
  </ul>
</div>