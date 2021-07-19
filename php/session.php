	<?php
  
require_once('init.php');

class Session{
    private $signed_in;
    private $user_name;
    private $isAdmin;
    
    

    public function __construct(){
        session_start();
        $this->check_login();
    }
    
     private function check_login(){
        if (isset($_SESSION['user_name'])){
            $this->user_name=$_SESSION['user_name'];
            $this->signed_in=true;
        }
        else{
            unset($this->user_name);
            $this->signed_in=false;
        }
    }
    
    public function login($user){
        if($user){
            $this->user_name=$user->user_name;
            $_SESSION['user_name']=$user->user_name;
            $_SESSION['isAdmin']=$user->isAdmin;
            $this->signed_in=true;
        }
    }
    
       
    public function logout(){
        echo 'logout';
        unset($_SESSION['user_name']);
        unset($this->user_name);
        $this->signed_in=false;

        
    }
    
    public function __get($property){
        if (property_exists($this,$property))
            return $this->$property;
    }
     
}
$session=new Session();


    
?>

