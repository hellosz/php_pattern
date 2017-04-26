<?php
/**
 *对象适配器测试
 */
//require_once 'ObjectAdapter.php';
//echo '对象适配器模式：<br/>';
//$objectAdapter = new ObjectAdapter(new Adaptee);
//$objectAdapter->europlug();
//echo '<hr/>';

/**
 *类适配器测试
 */
require_once 'ClassAdapter.php';
echo '类适配器模式：<br/>';
$objectAdapter = new ClassAdapter();
$objectAdapter->europlug();
echo '<hr/>';