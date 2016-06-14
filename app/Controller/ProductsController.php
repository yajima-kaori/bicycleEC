<?php

class ProductsController extends AppController{

  public $uses = ['Product','Review'];

  public $helpers = ['Product'];

  public $components = [
      'Paginator' => [
          'limit' => 10,
          'order' => ['created' => 'desc']
      ],
      'Session'
  ];

  public function beforeFilter(){
    parent::beforeFilter();

    $this->Auth->allow('index','view');
  }

  public function index(){
    $this->set('products',$this->Paginator->paginate());
    // $this->set('products',$this->Product->find('all'));

    $this->Product->virtualFields['cnt'] = 0;
    $this->Product->virtualFields['avg'] = 0;
    $this->Product->recursive = -1;

    $this->Paginator->settings = [
          'Product' => [
              'limit' => 10,
              'order' => [
                  'Product.created' => 'desc',
                  'Product.name' => 'asc',
              ],

              'joins' => [
                  [
                      'type' => 'LEFT',
                      'table' => 'reviews',
                      'alias' => 'Review',
                      'conditions' => 'Product.id = Review.product_id',
                  ],
              ],

              'fields' => [
                  'Product.id', 'Product.name', 'Product.price','Product.photo',
                  'count(Review.id) as Product__cnt',
                  'avg(Review.score) as Product__avg',
              ],
              'group' => ['Product.id'],
          ],
      ];
          $products = $this->Paginator->paginate('Product');

          // debug($products);
          // exit;
         $this->set('products', $products);

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


    $this->Session->write('product_id', $id);
    $this->Session->write('member_id', $this->Auth->user('id'));

    // var_dump($_SESSION['product_id']);
    // var_dump($_SESSION['member_id']);

  }


}