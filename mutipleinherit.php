<?php
// Class Inheritance
class Inheritance
{
public function example()
{
            echo "Hi";
}
}
// Trait formultiple
trait formultiple
{
public function examplem()
{
            echo "\t Traits";
}
}
class Sample extends Inheritance
{
use formultiple;
public function MultipleInheritance()
{
            echo "\n Multiple-Inheritance";
}
}
$check = new Sample();
$check->example();
$check->examplem();
$check->MultipleInheritance();
?>