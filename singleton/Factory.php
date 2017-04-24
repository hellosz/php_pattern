<?php
//单例模式

class Factory{
    //1.静态变量缓存资源
    private static $instance;

    private static $config = [
        'dns' => 'mysql:host=localhost;dbname=laravel5',
        'username' => 'root',
        'password' => ''
    ];

    //2.防止外部创建对象
    private function __construct(){

    }
    //获取&创建实例
    public static function getInstance(){
        if(empty(self::$instance)){
            self::$instance = new PDO(self::$config['dns'], self::$config['username'], self::$config['password']);
        }
        return self::$instance;
    }

    //防止使用克隆方法
    private function __clone(){

    }
}