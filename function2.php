<?php
class Car
{
    public $color='red';
    public $comp;
    public $hasSunRoof=true;

    public function hello()
    {
        return 'beep';
    }
} 
//Create instance
   $bmw = new Car();
   $mercedes= new Car();

//get the values
   echo $bmw->color;
   echo"<br/>";
   echo $mercedes->color;
   echo"<br/>";

   //Set the values
   $bmw->color='blue';
   $mercedes->color='red';

   //Again get the values
   echo $bmw->color;
   echo "<br />";
echo $mercedes -> color; //beige
echo"<br/>";

   //use the method to get a beep
   echo $bmw-> hello();





