<?php
include_once 'Observer.php';
//测试观察者模式

$subject = new SubSubject();
$gift = new GiftObserver;
$invite = new InviteObserver;
//添加观察者
$subject->addObserver($gift);
$subject->addObserver($invite);
$subject->doAction();
echo '<br/>';
//移除观察者
$subject->removeObserver($invite);
$subject->doAction();