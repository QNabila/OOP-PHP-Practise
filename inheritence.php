<!-- Inheritance allows us to write the code only once in the parent, and then use the code in both the parent and the child classes.
 -->
 <?php
 class User {
  //Declare the $username as protected
  protected $username;
 
  public function setUsername($name) 
  {
    $this -> username = $name;
  }  
}
 
 
class Admin extends User {
  public function expressYourRole()
  {
    return strtolower(__CLASS__);
  }
      
  public function sayHello()
  {
    return "Hello admin, " . $this -> username;
  }
}
  
  
$admin1 = new Admin();
$admin1 -> setUsername("Balthazar");
echo $admin1 -> sayHello();
?>