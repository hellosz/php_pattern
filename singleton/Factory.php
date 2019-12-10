<?php

//单例模式
class Factory{
    //1.静态变量缓存资源
    private static $instance;

    //2.防止外部创建对象
    private function __construct(){
    }
    //获取&创建实例
    public static function getInstance(){
        if(!self::$instance instanceof self){
            self::$instance = new self;
        }
        return self::$instance;
    }
    //防止使用克隆方法创建实例
    private function __clone(){
    }
}