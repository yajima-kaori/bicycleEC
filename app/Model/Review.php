<?php

class Review extends AppModel{

      public $belongsTo = [
          'Member' => [
              'className' => 'Member'
          ],
          'Product' => [
              'className' => 'Product'
          ],


      ];

      public $validate = [
        'title' => [
            'rule' => 'notBlank'
        ],
        'body' => [
            'rule' => 'notBlank'
        ],
        'score' => [
            'numeric' => [
                'rule' => 'numeric',
                'message' => '数値を入力してください'
            ]
        ]
    ];
}
      public function getData($productId,$memberId){

        $options =[
          'conditions' => [
            'product_id' => $productId,
            'member_id' => $memberId
          ]
        ];

        return $this->find('first',$options);
      }

}