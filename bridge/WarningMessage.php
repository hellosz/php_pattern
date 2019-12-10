<?php
/**
 * @desc   PhpStorm
 * @author Chris
 * @time   2019/12/10 23:25
 */


class WarningMessage extends AbstractMessage
{
    public function sendMessage($message, $to)
    {
        echo "发布紧急消息:<br>";
        parent::sendMessage($message, $to);
    }
}