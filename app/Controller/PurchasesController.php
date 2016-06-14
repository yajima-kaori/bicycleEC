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
               ]
              ];

      $this->Purchase->save($data);

    }
    public function management(){
      $this->set('products',$this->Purchase->find('all'));

    }
}