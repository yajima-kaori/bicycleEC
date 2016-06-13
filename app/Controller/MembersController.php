<?php

class MembersController extends AppController{

  public function beforeFilter(){
    parent::beforeFilter();

    $this->Auth->allow('add');
  }

  public function add(){

    if($this->Auth->user()){
      return $this->redirect($this->Auth->redirectUrl());
    }

    if($this->request->is('post')){
       $this->Member->create();
       if($this->Member->save($this->request->data)){
          $this->Flash->success('ユーザーを登録しました');
          return $this->redirect(['action' => 'login']);
       }
    }

  }

  public function edit(){
    if($this->request->is(['post','put'])){

      if($this->Member->save($this->request->data)){
        $this->Flash->success('会員情報を変更しました');

      $user = $this->Member->find('first',[
                'fields' => ['id','email'],
                'conditions' =>['id' => $this->Auth->user('id')]
                ]);
     $this->Auth->login($user['Member']);

     return $this->redirect($this->Auth->redirectUrl());
     }
   }else{
      $this->request->data = $this->Member->findById($this->Auth->user('id'));
    }
  }

  public function changePassword() {

      if ($this->request->is(['post', 'put'])) {

          if ($this->Member->save($this->request->data)) {
              $this->Flash->success('パスワードを更新しました');

              return $this->redirect($this->Auth->redirectUrl());
          }
      } else {
          $this->request->data = ['Member' => ['id' => $this->Auth->user('id')]];
      }
  }

    public function login() {

        if ($this->Auth->user()) {
            return $this->redirect($this->Auth->redirectUrl());
        }

        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                $this->redirect($this->Auth->redirectUrl());
            }

            $this->Flash->error('メールアドレスかパスワードが違います');
        }
    }


    public function logout(){
      $this->redirect($this->Auth->logout());
    }


}