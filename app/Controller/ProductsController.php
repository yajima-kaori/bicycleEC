<?php

class ProductsController extends AppController{

  public $helpers = ['Product'];

  public $components = [
      'Paginator' => [
          'limit' => 10,
          'order' => ['created' => 'desc']
      ]
  ];

  public function beforeFilter(){
    parent::beforeFilter();

    $this->Auth->allow('index','view');
  }

  public function index(){
    $this->set('products',$this->Paginator->paginate());
    // $this->set('products',$this->Product->find('all'));
  }

  public function view($id = null){
    if(!$this->Product->exists($id)){
      throw new NotFoundException('Not Found');
    }

    $this->set('product',$this->Product->findById($id));
  }

  public function purchase($id = null){
      if(!$this->Product->exists($id)){
      throw new NotFoundException('Not Found');
    }

    $this->set('product',$this->Product->findById($id));
  }

}