<?php
/**
 * @desc   PhpStorm
 * @author Chris
 * @time   2019/12/10 23:22
 */


abstract class AbstractMessage
{
    protected $msgInterface;

    public function __construct(MessageInterface $msgInterface)
    {
        $this->msgInterface = $msgInterface;
    }

    public function sendMessage($message, $to)
    {
        $this->msgInterface->send($message, $to);
    }
}