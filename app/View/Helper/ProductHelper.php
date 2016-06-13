<?php

class ProductHelper extends AppHelper{

 public $helpers = ['Html'];

  public function photoImage($product,$options = []){

    $photo = Configure::read('Photo');

    $path = $photo . $product['Product']['photo'];

    return $this->Html->image($path,$options);

  }

  public function scoreList(){
    return[
            1 => '★☆☆☆☆',
            2 => '★★☆☆☆',
            3 => '★★★☆☆',
            4 => '★★★★☆',
            5 => '★★★★★',
          ];
  }


}