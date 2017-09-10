<?php
/**
 * 测试迭代器模式
 * User: tneng
 * Date: 2017-9-10
 * Time: 21:52
 */
include 'MyIterator.php';

//1.连续数字索引数组
$numArr = [77, 88 , 99, 'game', 'world'];
$myIterator = new MyIterator($numArr);
foreach ($myIterator as $row) {
    print_r($row);
    echo '<br/>';
}

//2.关联索引数组
$asocArr = ['a' => 'math', 'b' => 'english', 'c' => 'science'];
$ascoIterator = new MyIterator($asocArr);
foreach ($ascoIterator as $row) {
    print_r($row);
    echo '<br/>';
}
