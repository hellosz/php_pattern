<?php
include_once 'Strategy.php';
//策略模式测试

//创建实例对象
$mine = new Mine();
//设置旅游策略：本地旅行
$mine->setStrategy(new LocaltravelStrategy());
//执行
$mine->organizeTravel();
