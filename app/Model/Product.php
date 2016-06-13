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
        'className' => 'Review'
    ]
  ];

}