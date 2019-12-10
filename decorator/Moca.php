<?php
/**
 * @desc   PhpStorm
 * @author Chris
 * @time   2019/12/11 1:01
 */


class Moca extends CondimentDecoractor
{

    public function __construct(Beveage $beveage)
    {
        $this->beveage = $beveage;
    }

    function cost()
    {
        return $this->beveage->cost() + 4;
    }

    function getDescription()
    {
        return $this->beveage->getDescription() . "再加糖和牛奶";
    }
}