<?php

class User{

    public $id;
    public $username;
    public $email;
    public $password;
    


    public static function find_all_users(){
        // global $dataBase;
        // $result= $dataBase-> Query("select * from `users`");
        // vaghti az static estefade konim dg do khat code bala ro nemikhaym

        return self::find_this_query("select * from `users`");

        // return !empty($result) ? array_shift($result):false ;
    }
    public static function find_users_by_id($user_id){
        // global $dataBase;
        // $result= $dataBase-> Query("select * from `users` where `id`='$user_id' ");
        // vaghti az static estefade konim dg do khat code bala ro nemikhaym
        $result=self::find_this_query("select * from `users` where `id`='$user_id' ");
        // $found_user=mysqli_fetch_array($result);
        // return $found_user;
        return !empty($result) ? array_shift($result):false ;
    }

    public static function find_this_query($sql){
        global $dataBase;
        $result_set=$dataBase-> Query($sql);
        // $the_object_array[]=array();
        while($row=mysqli_fetch_array($result_set)){
            $the_object_array[]=self::instant($row);
        }
        return $the_object_array;

    }
    public static function instant($the_record){

        $the_object = new User();
        foreach($the_record as $the_attribute => $value){
            if($the_object->has_the_attribute($the_attribute)){
                $the_object->$the_attribute= $value;
            }
        }
        // $user = new User();
        // $user->id= $found_user['id'];         
        // $user->username= $found_user['username'];         
        // $user->email= $found_user['email'];         
        // $user->password= $found_user['password'];  
        return $the_object;
    }
    private function has_the_attribute($the_attribute){
        $object_properties = get_object_vars($this);
        return array_key_exists($the_attribute,$object_properties);
    }
}



?>