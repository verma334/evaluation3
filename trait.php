<?php
trait A {
    function m1(){
        echo 'A-m1';
    }
}
trait B{
    function m1(){
        echo 'B-m1';
    }
}
class C{
    use A;
}
$ob= new C();
$ob->m1();

?>