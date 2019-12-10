<?php
/**
 * @desc   建造者模式实例
 * @author Chris
 * @time   2019/12/10 22:13
 */

include "KFCWaitor.php";
include "Meal.php";
include "MealBuilder.php";
include "MealBuilderA.php";
include "MealBuilderB.php";

$waitorA = new KFCWaitor();
$waitorA->setBuilder(new MealBuilderA());
$mealA = $waitorA->construct();
echo $mealA;

echo "<br>";

$waitorB = new KFCWaitor();
$waitorB->setBuilder(new MealBuilderB());
$mealB = $waitorB->construct();
echo $mealB;