<?php
/**
 * 抽象工厂模式
 */

//抽象工厂类
interface Factory{
    //生产鸭脖
    public function generateDuckNeck();
    //生产鸭架
    public function generateDuckClavicle();
}

//具体工厂类A：周黑鸭工厂
class ZhouhyFactory implements Factory{
    //生产周黑鸭鸭脖
    public function generateDuckNeck(){
        return new ZhouhyDuckNeck();
    }
    //生产周黑鸭鸭锁骨
    public function generateDuckClavicle(){
        return new ZhouhyDuckClavicle();
    }
}

//具体工厂类B：绝味工厂
class JuewFactory implements Factory{
    //生产绝味鸭脖
    public function generateDuckNeck(){
        return new JuewDuckNeck();
    }
    //生产绝味鸭锁骨
    public function generateDuckClavicle(){
        return new JuewDuckClavicle();
    }
}
//产品A抽象类：鸭脖
abstract class DuckNeck{
    public abstract function getName();
}

//产品A的实现A1：周黑鸭鸭脖
class ZhouhyDuckNeck extends DuckNeck{
    public function getName(){
        return '周黑鸭鸭脖';
    }
}
//产品A的实现A2：绝味鸭脖
class JuewDuckNeck extends DuckNeck{
    public function getName(){
        return '绝味鸭脖';
    }
}


//产品B抽象类：鸭锁骨
abstract class DuckClavicle{
    public abstract function getName();
}

//产品B的实现B1：周黑鸭鸭锁骨
class ZhouhyDuckClavicle extends DuckClavicle{
    public function getName(){
        return '周黑鸭鸭锁骨';
    }
}
//产品B的实现B2：绝味鸭锁骨
class JuewDuckClavicle extends DuckClavicle{
    public function getName(){
        return '绝味鸭锁骨';
    }
}


