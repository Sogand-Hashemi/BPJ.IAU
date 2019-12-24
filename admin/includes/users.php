<?php

class Users{

    public $id;
    public $username;
    public $email;
    public $password;
//    protected static $dbTable = "users";
//    protected static $dbTableFields = ['username', 'password', 'email', 'type'];


    public static function find_all_users(){


        return self::find_this_query("select * from `users`");


    }
    public static function find_users_by_id($user_id){

        $result=self::find_this_query("select * from `users` where `id`='$user_id' ");

        return !empty($result) ? array_shift($result):false ;
    }

    public static function find_this_query($sql){
        global $dataBase;
        $result_set=$dataBase-> Query($sql);
        // $the_object_array[]=array();
        while($row=mysqli_fetch_array($result_set)){
            $the_object_array[]=self::instant($row);
        }
        return @$the_object_array;

    }
    public static function instant($the_record){

        $the_object = new Users();
        foreach($the_record as $the_attribute => $value){
            if($the_object->has_the_attribute($the_attribute)){
                $the_object->$the_attribute= $value;
            }
        }

        return $the_object;
    }
    private function has_the_attribute($the_attribute){
        $object_properties = get_object_vars($this);
        return array_key_exists($the_attribute,$object_properties);
    }

    public static function verifyUsers($username, $password){
        global $dataBase;
        $username=$dataBase->escape_string($username);
        $password=$dataBase->escape_string($password);
        $sql="select * from `users` where";
        $sql .="`username` = '$username' AND `password` = '$password' limit 1 ";
//        die($sql);
        $resultArray= self::find_this_query($sql);

        return !empty($resultArray) ? array_shift($resultArray):false;
    }
}



?>