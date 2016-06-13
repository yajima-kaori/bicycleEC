<?php

class MembersController extends AppController{

  public function beforeFilter(){
    parent::beforeFilter();

    $this->Auth->allow('add');
  }

  public function add(){

    if($this->request->is('post')){
       $this->Member->create();
       if($this->Member->save($this->request->data)){
          $this->Flash->success('ユーザーを登録しました');
          return $this->redirect(['action' => 'login']);
       }
    }

  }

  public function login(){
    if($this->request->is('post')){
      if($this->Auth->login()){
        $this->redirect($this->Auth->redirectUrl());
      }

      $this->Flash->error('メールアドレスかパスワードが違います｡');
    }
  }

    public function logout(){
      $this->redirect($this->Auth->logout());
    }


}