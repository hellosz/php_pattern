<?php
/**
 * @desc   PhpStorm
 * @author Chris
 * @time   2019/12/10 22:00
 */

class Meal
{
    private $drink;

    private $food;

    /**
     * @return mixed
     */
    public function getDrink()
    {
        return $this->drink;
    }

    /**
     * @param mixed $drink
     */
    public function setDrink($drink)
    {
        $this->drink = $drink;
    }

    /**
     * @return mixed
     */
    public function getFood()
    {
        return $this->food;
    }

    /**
     * @param mixed $food
     */
    public function setFood($food)
    {
        $this->food = $food;
    }

    public function __toString()
    {
        $str = "本套餐包含" . $this->getFood() . "和" . $this->getDrink() . "，请您慢用!";
        return $str;
    }
}