<?php
namespace Common;
/**
 * 公用加载类
 * Class CommonLoader
 * @package common
 */
class CommonLoader{
    public static function autoloader($class){
        $class_name = __NAMESPACE__.'/'.$class.'.php';
        if(file_exists($class_name)){
            include_once($class_name);
        }
    }
}
