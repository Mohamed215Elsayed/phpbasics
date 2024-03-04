<?php
/*
class & object
class = the Blueprint that u can create objects from.
object = the instance of the class
example Apple
class  = Apple Blueprint design
object = iphones that chaina made
Application = Apple store

example Web Application registration
class  = code to add a new Member
object = new Members that be added
Application = Web Application registration
*/
class Apple
{
    public $color;
    public $weight;
}

$iphone = new Apple();
$iphone->color = 'red';
$iphone->weight = 150;
echo $iphone->color;