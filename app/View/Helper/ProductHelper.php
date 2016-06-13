<?php

class ProductHelper extends AppHelper{

 public $helpers = ['Html'];

  public function photoImage($product,$options = []){

    $photo = Configure::read('Photo');

    $path = $photo . $product['Product']['photo'];

    return $this->Html->image($path,$options);

  }


}