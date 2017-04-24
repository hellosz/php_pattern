<?php
include_once('CommonLoader.php');
/**
 *观察者模式-用户邀请观察者
 * User: ntian
 * Date: 2017/4/24
 */

class InviteObserver implements Observer{
    //实现update操作
    public function update(){
        echo '成功给邀请用户发放奖励!<br/>';
    }
}