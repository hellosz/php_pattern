<?php
/**
 * @desc   装饰器模式
 * @author Chris
 * @time   2019/12/10 23:43
 */

include_once("Beveage.php");
include_once("CondimentDecoractor.php");
include_once("Espresso.php");
include_once("Moca.php");

$espresson = new Espresso();
echo get_class($espresson),$espresson->getDescription(),"价格：",$espresson->cost(),"<br>";

$moca = new Moca($espresson);
echo get_class($moca),$moca->getDescription(),"价格：",$moca->cost();