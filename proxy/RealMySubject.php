<?php
/**
 * @desc   PhpStorm
 * @author Chris
 * @time   2019/12/11 2:05
 */


class RealMySubject implements MySubject
{
    /**
     * 发送请求
     *
     * @return mixed
     */
    public function request()
    {
        echo "向客户发送请求";
    }
}