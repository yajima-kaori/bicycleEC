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

      public function getData($productId,$memberId){

        $options =[
          'conditions' => [
            'product_id' => $productId,
            'member_id' => $memberId
          ]
        ];

        return $this->find('first',$options);
      }

      public function getAveScoreByProductId($productId){

         $options =[
              'fileds' => 'AVG(score) as avg',
              'conditions' => ['product_id' => $productId],
              'group' => ['product_id']
         ];

          $data = $this->find('first',$options);

          $avg = 0;

          if(!empty($data[0]['avg'])){
            $avg = round($data[0]['ave'],1);
          }

          return $avg;

      }

}