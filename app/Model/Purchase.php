<?php
// App::uses('Controller/Component/Auth');

class Purchase extends AppModel {

      public $belongsTo = [
        'Member' => [
            'className' => 'Member'
        ],
        'Product' => [
            'className' => 'Product'
        ]
    ];





}


