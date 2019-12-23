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
        // return $result;
        return self::find_this_query("select * from `users`");
    }
    public static function find_users_by_id($user_id){
        // global $dataBase;
        // $result= $dataBase-> Query("select * from `users` where `id`='$user_id' ");
        // vaghti az static estefade konim dg do khat code bala ro nemikhaym
        $result=self::find_this_query("select * from `users` where `id`='$user_id' ");
        $found_user=mysqli_fetch_array($result);
        return $found_user;
    }

    public static function find_this_query($sql){
        global $dataBase;
        $result_set=$dataBase-> Query($sql);
        return $result_set;
    }
}



?>