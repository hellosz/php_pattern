<?php
/**
 * 对象适配器模式
 * Author: ntian
 * Date: 2017-4-25
 */

//目标(欧洲插头)
interface Target{
    public function europlug();
}

//源(中国插头)
class Adaptee{
    public function chineseplug(){
        echo '实际正在使用国内规范的插头!';
    }
}

//对象适配器(将国内规范的插头转换成欧洲规范的插头)
class ObjectAdapter implements Target{

    private $_adaptee;//适配者实例

    //创建对象实例
    public function __construct(Adaptee $adaptee){
        $this->_adaptee = $adaptee;
    }

    public function europlug()
    {
        echo '通过适配器，国内规范的插头转换成欧洲规范的插头！<br/>';
        if($this->_adaptee  instanceof Adaptee){
            //调用是适配者的方法
            $this->_adaptee->chineseplug();
        }
    }
}