<?php 
class Dress{
    public $color="red"; //Property = color
    public $fabric="linen";
}
$dressobj=new Dress();
$dressobj->color="black";  //Accessing the property and changing value

var_dump($dressobj); //method
echo"</br>";
print_r($dressobj);  //method
?> 

