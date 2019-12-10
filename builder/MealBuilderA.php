<?php
/**
 * @desc   PhpStorm
 * @author Chris
 * @time   2019/12/10 22:03
 */

/**
 * KFC A套餐
 * Class MealBuilder
 */
class MealBuilderA extends MealBuilder
{
    public function buildDrink()
    {
        $this->meal->setDrink("可口可乐");
    }

    public function buildFood()
    {
        $this->meal->setFood("香辣鸡翅");
    }
}