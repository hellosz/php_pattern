<?php
/**
 * 迭代器模式.
 * User: tneng
 * Date: 2017-9-10
 * Time: 21:32
 */

/**
 * 迭代器模式
 * 1.遍历集合
 * 2.封装内部实现
 */

class MyIterator implements Iterator
{
    //保存内部集合
    private $_collect = [];

    //集合指针
    private $_key = 0;

    public function __construct($collect  = [])
    {
        $this->_collect = $collect;
    }

    //获取当前元素
    public function current()
    {
        return $this->valid() ? $this->_collect[$this->key()] : false;
    }

    //指针指向下一个元素
    public function next()
    {
        $this->_key++;
    }

    //获取当前指针
    public function key()
    {
       return $this->_key;
    }

    //判断当前指针是否有有效
    public function valid()
    {
        return isset($this->_collect[$this->key()]) ? true : false;
    }

    //初始化指针
    public function rewind()
    {
        $this->_key = 0;
    }
}



