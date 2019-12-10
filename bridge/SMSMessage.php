<?php
/**
 * @desc   PhpStorm
 * @author Chris
 * @time   2019/12/10 23:18
 */


class SMSMessage implements MessageInterface
{
    public function send($message, $to)
    {
        echo "使用SMS发送信息给", $to, ",消息内容如下:<br>", $message;
    }
}