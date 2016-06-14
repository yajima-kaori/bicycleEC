<?php

class Product extends AppModel{

  public $actsAs = [

    'Upload.Upload' => [
      'photo' => [
          'fields' => ['dir' => 'photo_dir'],
          'deleteOnUpdate' => true,
      ]

    ]

  ];

  public $hasMany = [
    'Review' => [
        'className' => 'Review',
        'dependent' => true
    ]
  ];


  public function sess(){

    $this->Session->write('product_id', $id);
    $this->Session->write('member_id', $this->Auth->user('id'));

    // var_dump($_SESSION['product_id']);
    // var_dump($_SESSION['member_id']);
  }

}