<?php
interface A {
    function m1();
    function m2();

}
abstract class B implements A 
{
    function m1(){
        echo 'A-m1';
    }
}
$c->new B();
$c->m1();
?>