<?php
/**
 * @desc   PhpStorm
 * @author Chris
 * @time   2019/12/10 22:03
 */
abstract class MealBuilder
{
    protected $meal;

    public function __construct()
    {
        $this->meal = new Meal();
    }

    public function buildDrink(){}

    public function buildFood(){}

    public function getMeal()
    {
        return $this->meal;
    }


}