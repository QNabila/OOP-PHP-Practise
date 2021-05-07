<?php
class User{
    public $firstName;
    public $lastName;
    
    public function hello(){
        return "hello,".$this->firstName;
    }
}
//Create a new obj
$user1= new User();
//Set the user $firstName and $lastName properties
$user1->firstName="Jonnie";
$user1->lastName="Roe";
// Echo the hello() method.
echo $user1->hello();
?>
