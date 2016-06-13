<?php

class ReviewsController extends AppController{

  public $uses = ['Review','Product'];

  public function edit($productId = null){

    if(!$this->Product->exists($productId)){
      throw new NotFoundException('レストランがみつかりません｡');
    }

    $memberId = $this->Auth->user('id');

    if($this->request->is(['post','put'])){
      $message = 'レビューを更新しました';
      if(empty($this->request->data['Review']['id'])){
        $message = 'レビューを登録しました｡';
        $this->Review->create();
      }
      $this->request->data['Review']['member_id'] = $memberId;

      if($this->Review->save($this->request->data)){
        $this->Flash->success($message);

        return $this->redirect([
              'controller' => 'products',
              'action' => 'view',
              $productId
              ]);
      }
    }else{
      $this->request->data = $this->Review->getData($productId,$memberId);
    }

    $isNew = empty($this->request->data);

    $this->set('productId',$productId);
    $this->set('isNew',$isNew);


  }
}