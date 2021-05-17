<!-- Tried to write the solution with a getter method inside the parent that can be used from the child class. -->
<!-- here username can be private -->
<?php
class User {
  private $username;
 
  public function setUsername($name) 
  {
    $this -> username = $name;
  }
      
  public function getUsername()
  {
    return $this -> username;
  }  
}
 
 
class Admin extends User{
  public function expressYourRole()
  {
    return strtolower(__CLASS__);
  }
      
  public function sayHello()
  {
    return "Hello admin, " . $this -> getUsername();
  }
}
  
  
$admin1 = new Admin();
$admin1 -> setUsername("Balthazar");
echo $admin1 -> sayHello();
?>