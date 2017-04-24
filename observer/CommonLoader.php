<?php
/**
 * 公用加载类
 * Class CommonLoader
 */
function __autoload($class){
    include_once($class.'.php');
}