<?PHP
//Your practice code
 abstract class User
 {
     protected $username;
     abstract public function stateYourRole();
     public function setUsername($name)
     {
        $this-> username= $name;
     }
     public function getUsername()
     {
         return $this->username;
     }

 }
 class Admin extends User{
     public function stateYourRole()
     {
         return "admin";
     }
 }
 class Viewer extends User
 {
      public function stateYourRole()
      {
          
      }
     
 }
 $Admin1 = new Admin();
 $Admin1->setUsername("nabila");
 echo $Admin1->getUsername()."\n";
 echo $Admin1->stateYourRole();
 ?>