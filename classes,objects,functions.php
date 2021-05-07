<?php
class User {
  // The class properties.
  public $firstName;
 
  // A method that says hello to the user $firstName.
  public function hello()
  {
    echo "hello, " .  $this -> firstName;

    return $this;
  }
 
  // A method to register the user.
  public function register()
  {
    echo " >> registered";
    return $this;
  }
 
  // A method to send the welcome email.
  public function mail()
  {
    echo " >> email sent";
  }
}
 
$user1 = new User();
$user1 -> firstName = "Jane";
 
// Chain the methods hello then register then mail.
$user1 -> hello() -> register() -> mail();
?>
<!-- Note that each method we want to chain to should return the $this keyword in order to not break the chain -->