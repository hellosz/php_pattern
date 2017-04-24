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

