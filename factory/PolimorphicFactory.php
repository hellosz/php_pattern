<?php
/**
 * 工厂方法模式（也叫多态工厂模式）
 */
//日志工厂抽象
abstract class LogFactory{
    //创建日志类
    public static  function createLog(){

    }
}

//数据库日志工厂
class DatabaseLogFactory extends LogFactory {
    public static function createLog(){
        echo '正在创建数据库日志类！<br/>';
        return new DatabaseLog();
    }
}

//文件日志工厂
class FileLogFactory extends LogFactory {
    public static function createLog(){
        echo '正在创建文件日志类！<br/>';
        return new FileLog();
    }
}

//日志类抽象
abstract class Log{
    //写日志
    public abstract function writeLog();
}
//数据库日志类
class DatabaseLog extends Log {
    public function writeLog(){
        echo '成功将日志写入到数据库中!<br/>';
    }
}
//文件日志类
class FileLog extends Log {
    public function writeLog(){
        echo '成功将日志写入到文件中!<br/>';
    }
}
