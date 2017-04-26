<?php
/**
 * 简单工厂模式测试
 */
//include_once('SimpleFactory.php');
//$product = SimpleFacory::generate(B);
//echo '创建产品如下：<br>';
//echo $product->getName();


///**
// * 工厂方法模式(又叫多态工厂模式)测试
// */
//include_once('PolimorphicFactory.php');
////写数据库日志
//$databaseLog = DatabaseLogFactory::createLog();
//$databaseLog->writeLog();
////写文件日志
//$fileLog = FileLogFactory::createLog();
//$fileLog->writeLog();

/**
 * 抽象工厂模式测试
 */
include_once('AbstractFactory.php');
//周黑鸭工厂
$factory= new ZhouhyFactory();
echo $factory->generateDuckNeck()->getName();
echo '<br/.>';
echo $factory->generateDuckClavicle()->getName();
echo '<br/.>';

//绝味工厂
$factory= new JuewFactory();
echo $factory->generateDuckNeck()->getName();
echo '<br/.>';
echo $factory->generateDuckClavicle()->getName();
echo '<br/.>';


