<?php
/**
 *旅行方式策略模式接口
 * Author: ntian
 * Date: 2017/4/25
 */

interface Strategy{
    //旅行方式
    public function travel();
}

//本地旅行策略
class LocaltravelStrategy implements Strategy{
    public function travel(){
        echo '此次，公司组织旅行的地点为广州！<br/>';
    }
}

//短途策略
class ShorttravelStrategy implements Strategy{
    public function travel(){
        echo '此次，公司组织旅行的地点为清远！<br/>';
    }
}

//本地旅行策略
class LongtraverStrategy implements Strategy{
    public function travel(){
        echo '此次，公司组织旅行的地点为四川省！<br/>';
    }
}

//策略使用者
class Mine{
    private $_strategy ;

    //设置旅行策略
    public function setStrategy(Strategy $strategy){
        $this->_strategy = $strategy;
    }

    //组织旅行
    public function organizeTravel(){
        echo '我宣布，活动的组织如下：<br/>';
        $this->_strategy->travel();
    }
}

