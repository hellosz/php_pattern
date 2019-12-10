<?php
/**
 * @desc   PhpStorm
 * @author Chris
 * @time   2019/12/11 2:09
 */


class Proxy implements MySubject
{
    private $subject;

    public function __construct(MySubject $class)
    {
        $this->subject = new $class();
    }
    public function request()
    {
        $this->preRequest();
        $this->subject->request();
        $this->afterRequest();
    }

    protected function preRequest()
    {
        echo "执行请求前置操作<br>";
    }

    protected function afterRequest()
    {
        echo "执行请求后置操作<br>";
    }


}