<?php
/**
 *Create by PhpStorm
 *User      Chris
 *Datetime  2019-11-14 18:10
 *Describe  使用单例模式，工厂模式还有注册树模式
 */


/*
 * 单例模式
 */
class Resume
{
    //简历内容
    private $content;

    protected static $instance;

    private function __construct($content="php高级软件工程师应聘简历"){
        $this->content = $content;
    }

    public static function getInstance($content){
        //判断是否为自身实例
        if(!self::$instance instanceof self) {
            self::$instance = new Resume($content);
        }

        return self::$instance;
    }
}

//工厂模式
class Factory
{
    public static function create(){
        //返回生成的实例
        return Resume::getInstance('简历模板');
    }
}

//注册树模式
class Register
{
    //静态池
    private static $pool = [];

    //设置静态池内容
    public static function set($alias, $content){
        self::$pool[$alias] = $content;
    }

    //获取静态池内容
    public static function get($alias){
        if(isset(self::$pool[$alias])){
            return self::$pool[$alias];
        }
        //默认返回false
        return false;
    }

    //清空静态池内容
    public static function _unset($alias){
        unset(self::$pool[$alias]);
    }
}

//设置
Register::set("resume", Factory::create());


//输出
var_dump(Register::get('resume'));

//清除
Register::_unset('resume');
var_dump(Register::get('resume'));

