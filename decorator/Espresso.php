<?php
/**
 * @desc   PhpStorm
 * @author Chris
 * @time   2019/12/11 1:03
 */
class Espresso extends Beveage
{
    public function __construct()
    {
        $this->description = "Espresso";
    }
    public function getDescription()
    {
        return $this->description;
    }

    public function cost()
    {
        return 5;
    }


}