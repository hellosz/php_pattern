<?php
/**
 *观察者模式-主题接口
 * User: ntian
 * Date: 2017/4/24
 */
interface Subject{
   //添加观察者
    public function addObserver(Observer $observer);
   //移除观察者
    public function removeObserver(Observer $observer);
    //通知观察者
    public function notify();
}
/**
 *观察者模式-主题实现
 */

class SubSubject implements Subject{
    //所有监听的观察者
    private $observers = [];

    //添加观察者
    public function addObserver(Observer $observer){
        //不存在时，添加其中
        if(!in_array($observer, $this->observers)){
            $this->observers[] = $observer;
        }
    }

    //移除观察者
    public function removeObserver(Observer $observer){
        if(false != ($index = array_search($observer, $this->observers))){
            unset($this->observers[$index]);
        }
    }

    //执行操作
    public function doAction(){
        echo __CLASS__.'的状态发生了变化<br/>';
        $this->notify();
    }

    //通知观察者
    public function notify(){
        //循环调用观察者的操作
        foreach($this->observers as $observer){
            $observer->update();
        }
    }
}

