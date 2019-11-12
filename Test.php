<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/10/12
 * Time: 10:00
 */


abstract class  test1{
    public function add(){

    }
    abstract function add1();
    abstract static function add7();
}

trait test4{
    abstract function add5();
    public function add6(){

    }
}

interface  test2{

    public function add();
    static public function add2();

}

interface  test3{

    public function  add3();
}

class A extends test1 implements test2,test3 {
    use test4;

    public function add1(){

    }
    public function add()
    {
        parent::add();
    }
    public static function add2()
    {

    }

    public static function add7()
    {

    }

    public function add3()
    {

    }
    public function add5()
    {

    }
}
class  B {

    protected $a;
    public function __construct()
    {
        $this->a = new A();
    }

    public function add(){

    }

}


