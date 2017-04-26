<?php
//定义常量
define('A', 'ProdectA');
define('B', 'ProdectB');
/**
 *简单工厂模式
 *Author: ntian
 */
class SimpleFacory{
    public static function generate($type){
        $product = false;
        if($type == A){
            $product = new ProductA;
        }elseif($type == B){
        $product = new ProductB;
    }
        return $product;
    }
}

//产品接口
abstract class Product{
   //产品名称
    private $name;
    //获取产品名称
    abstract function getName();
}

//产品A
class ProductA extends Product{
    private $name = "产品A";
    public function getName(){
        return $this->name;
    }
}

//产品A
class ProductB extends Product{
    private $name = "产品B";
    public function getName(){
        return $this->name;
    }
}