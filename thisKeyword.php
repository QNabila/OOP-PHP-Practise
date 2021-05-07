<?php

class Car{
    //the properties
    public $comp;
    public $color="beige";
    public $hasSunRoof = true;
    //method that says hello
    public function hello(){
        return "Beep I am a ". $this ->comp. "and I am a ".$this->color;
    }
}
   //We create a obj from the class
   $bmw = new Car();
   $mercedes= new Car();

   //set the values of the class properties
   $bmw->comp="BMW";
   $bmw->color="Black";
   $mercedes->comp="Mercedes Benz";

   //call the hello method for $bmw obj
   echo $bmw->hello();
   echo "\n";
    //call the hello method for $mercedes obj
    echo $mercedes->hello();
?>