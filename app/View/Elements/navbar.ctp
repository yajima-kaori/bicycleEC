<div id="navbar">
  <ul>
      <li><?= $this->Html->link('bicycleEC','/'); ?></li>
      <li><?= $this->Html->link(
            '商品一覧',
            ['controller' => 'products','action' => 'index']
            ); ?>
      </li>
  </ul>
</div>