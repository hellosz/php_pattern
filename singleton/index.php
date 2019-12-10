<?php
include_once('Factory.php');

/**
 * 参考案例
 *SebastianBergmann\Comparator\Factory
 *
 */
$factory  = Factory::getInstance();
$factory2  = Factory::getInstance();

if ($factory === $factory2) {
    echo "完全相等的对象";
} else {
    echo "不完全相等的对象";
}


