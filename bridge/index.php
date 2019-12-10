<?php
/**
 * @desc   桥接模式
 * @author Chris
 * @time   2019/12/10 23:31
 */
//引入外部文件
include_once("MessageInterface.php");
include_once("AbstractMessage.php");
include_once("InfoMessage.php");
include_once("WarningMessage.php");
include_once("SMSMessage.php");
include_once("QQMessage.php");

$message = <<<EOF
面向对象学习是一个很枯燥的过程，因为很多东西都是抽象不具体的，不要依赖过往的经验具体化后才能体会其中的深意以及得到之处;
但是我想通过学习设计模式，提升自己的编程思维，目标达到下一个层次。
EOF;
$to = "Chris";

//使用QQ发送普通消息
$qq = new QQMessage();
$infoMsg = new InfoMessage($qq);
$infoMsg->sendMessage($message, $to);

echo "<hr>";

//使用短信发送紧急消息
$sms = new SMSMessage();
$warningMsg = new WarningMessage($sms);
$warningMsg->sendMessage($message, $to);

