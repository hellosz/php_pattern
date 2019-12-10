<?php
/**
 * @desc   PhpStorm
 * @author Chris
 * @time   2019/12/10 23:01
 */

interface MessageInterface
{
    public function send($message, $to);
}