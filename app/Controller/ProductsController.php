<?php

class ProductsController extends AppController{

  public function index(){
    $this->set('products',$this->Product->find('all'));
  }

  public function view($product_id = null){
    if(!$this->Product->exists($product_id)){
      throw new NotFoundException('Not Found');
    }

    $this->set('product',$this->Product->findById($product_id));
  }

}