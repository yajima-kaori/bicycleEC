<?php

class PurchasesController extends AppController{

  public $uses = ['Product','Member','Purchase'];

  public $components = [
      'Paginator' => [
          'limit' => 50,
          'order' => ['created' => 'desc']
      ],
      'Session'
  ];

    public function beforeFilter(){
    parent::beforeFilter();

    $this->Auth->allow('management');
    }

    public function approval($id = null){

      $product_id = $this->Session->read('product_id');
      $member_id = $this->Session->read('member_id');

      // var_dump($product_id);
      // var_dump($member_id);

      $product = $this->Product->findById($product_id);
      $member = $this->Member->findById($member_id);
      // var_dump($product['Product']['price']);
      // var_dump($member);
      $this->set('product',$product);
      $this->set('member',$member);

    }

    // if($this->request->is(['post','put'])){
    //   if($this->Purchases->)
    // }

    public function completion(){
      // $this->approval();
      // var_dump($member);
      $product_id = $this->Session->read('product_id');
      $member_id = $this->Session->read('member_id');
      $product = $this->Product->findById($product_id);
      $member = $this->Member->findById($member_id);

      // var_dump($member['Member']['id']);

      $data = ['Purchase' =>
              ['member_id' => $member['Member']['id'],
               'product_id' => $product['Product']['id'],
               'OK_flag' => 0,
               'NG_flag' => 1,
               ]
              ];

      $this->Purchase->save($data);

    }

    public function management(){

      $this->set('purchases',$this->Purchase->find('all'));

      if($this->request->is(['post','put'])){
        // var_dump($_POST['data']['Purchase']);

        $id = $this->request->data($_POST['data']['Purchase']);

        $data = ['Purchase' =>
                   ['id' => $id,
                    'OK_flag' => 1,
                    'NG_flag' => 0,
                   ]
                ];
        $fields = ['OK_flag','NG_flag'];

        if($this->Purchase->save($data, false, $fields)){

           $this->Flash->success('対応完了しました｡');
          }

          $this->Flash->error('エラーが発生しました');

       }
    }


}