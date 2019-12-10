<?php
/**
 * @desc   PhpStorm
 * @author Chris
 * @time   2019/12/11 0:28
 */


abstract class Beveage
{
    protected $description;

    public function __construct()
    {
        $this->description = "咖啡";
    }

    abstract function cost();

    abstract function getDescription();
}