<?php
/**
 * @desc   PhpStorm
 * @author Chris
 * @time   2019/12/10 22:03
 */

/**
 * KFC B套餐
 * Class MealBuilder
 */
class MealBuilderB extends MealBuilder
{
    public function buildDrink()
    {
        $this->meal->setDrink("橙汁");
    }

    public function buildFood()
    {
        $this->meal->setFood("鳕鱼汉堡");
    }
}