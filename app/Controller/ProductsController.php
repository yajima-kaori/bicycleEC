<?php

class ProductsController extends AppController{

  public $uses = ['Product','Review'];

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

    $reviewLabel = '投稿';

    if($this->Auth->user() && $this->Review->getData($id,$this->Auth->user('id'))){
      $reviewLabel = '編集';
    }

    $averageScore = $this->Review->getAveScoreByProductId($id);

    $this->Product->recursive = 2;
    $product = $this->Product->findById($id);

    $this->set('reviewLabel', $reviewLabel);
    $this->set('averageScore', $averageScore);
    $this->set('product',$product);

  }

  public function purchase($id = null){
      if(!$this->Product->exists($id)){
      throw new NotFoundException('Not Found');
    }

    $this->set('product',$this->Product->findById($id));
  }

}