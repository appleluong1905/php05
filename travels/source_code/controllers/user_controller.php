<?php
include_once("models/user.php");

class UserController {
 public $model;
 
 public function __construct()  
    {  
        $this->model = new User();

    } 
 
 public function invoke()
 {
  
  $reslt = $this->model->getlogin();     // it call the getlogin() function of model class and store the return value of this function into the reslt variable.
  if($reslt == 'login')
  {
   include 'views/users/after_login.php';
  }
  else
  {
   include 'views/users/login.php';
  }
  
 }
}

?>