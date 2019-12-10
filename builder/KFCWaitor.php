<?php
/**
 * @desc   PhpStorm
 * @author Chris
 * @time   2019/12/10 22:14
 */
class KFCWaitor
{
    private $mealBuilder;

    public function setBuilder(MealBuilder $mealBuilder)
    {
        $this->mealBuilder = $mealBuilder;
    }

    public function construct()
    {
        //创建饮品
        $this->mealBuilder->buildDrink();

        //创建食物
        $this->mealBuilder->buildFood();

        return $this->mealBuilder->getMeal();
    }
}