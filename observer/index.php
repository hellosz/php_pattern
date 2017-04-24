<?php
require_once('CommonLoader.php');
//测试观察者模式

$subject = new SubSubject();
//添加观察者
$subject->addObserver(new GiftObserver());
$subject->addObserver(new InviteObserver());
$subject->doAction();