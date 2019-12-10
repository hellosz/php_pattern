<?php
/**
 * @desc   代理模式
 * @author Chris
 * @time   2019/12/11 2:05
 */

include_once("MySubject.php");
include_once("Proxy.php");
include_once("RealMySubject.php");

$proxy = new Proxy(new RealMySubject());
$proxy->request();