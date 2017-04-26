<?php
/**
 * 类适配器模式
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

//类适配器(将国内规范的插头转换成欧洲规范的插头)
class ClassAdapter extends Adaptee implements Target{
    public function europlug()
    {
        echo '通过适配器，国内规范的插头转换成欧洲规范的插头！<br/>';
        //调用是适配者的方法
        $this->chineseplug();
    }
}