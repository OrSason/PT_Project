<?php
  
require('database.php');

class User{
    
    private $user_name;
    private $password;
    public $age;
    public $living_area;
    public $sport;
    public $time_activity;
    private $isAdmin;
    

    public static function fetch_users(){
        
        global $database;
        $result=$database->query("select * from users");
        $users=null;
        if ($result){
            $i=0;
            if ($result->num_rows>0){ 
                while($row=$result->fetch_assoc()){ 
                    $user=new User();
                    $user->instantation($row);
                    $users[$i]=$user;
                    $i+=1;
                }
            }
        }
        return $users;
    }
        
    private function has_attribute($attribute){
        
        $object_properties=get_object_vars($this);
        return array_key_exists($attribute,$object_properties);
    }
    
    private function  instantation($user_array){
        foreach ($user_array as $attribute=>$value){
            if ($result=$this->has_attribute($attribute))
                $this->$attribute=$value;
        }
    }


	public function find_user_by_name($user_name,$password){
        global $database;
        $error=null;                                                                                                                    
        $result=$database->query("select * from users where user_name='".$user_name."' and password='".$password."'");
		
        if (!$result)
            $error='Can not find the user.  Error is:'.$database->get_connection()->error;
        elseif ($result->num_rows>0){
            $found_user=$result->fetch_assoc();
			$this->instantation($found_user);
        }
        else
            $error="Can no find user by this name";
		 
        return $error;
        
    }



    public static function delete_user($user_name){
        global $database;
        $error=null;                                                                                                                    
        $result=$database->query("delete from users where user_name='".$user_name."'");
		
        if (!$result)
            $error='Can not find the user.  Error is:'.$database->get_connection()->error;
        else
            $error="Can no find user by this name";
		 
        return $error;
        
    }

    public static function add_user($user_name, $password, $age, $living_area, $sport, $time_activity){
        global $database;
        $error=null;
        $sql="Insert into users(user_name,password,age,living_area,sport,time_activity) values ('".$user_name."','".$password."','".$age."','".$living_area."','".$sport."','".$time_activity."')";
        $result=$database->query($sql);
        if (!$result)
            $error='Can not add user.  Error is:'.$database->get_connection()->error;
        return $error;
        
    }

    public function __get($property){
        if (property_exists($this,$property))
            return $this->$property;
    }

   
}

    
?>

