<?php
/**
 *观察者模式-观察者接口
*/
interface Observer {
   //执行操作
    public function update();
}

//邀请活动对象观察者
class InviteObserver implements Observer{
    //实现操作
    public function update(){
        echo '邀请活动对象执行操作!<br/>';
    }
}
//礼券活动对象观察者
class GiftObserver implements Observer{
    //实现操作
    public function update(){
        echo '礼券活动对象执行操作<br/>';
    }
}