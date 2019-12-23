<?php
//  include('header.php');
// require_once('includes/init.php');
// require_once('includes/init.php');
// require_once('includes/database.php');
// require_once('includes/config.php');

?>

<style>
.content{
    width:900px;
    height:3000px;
    background-color: #eee;
    padding:20px;
}
</style>
<div class="main">
    <div class="content">
        <?php

            require_once('includes/init.php');
            $sql="select * from `users`";
            // $sql = "insert into `users`(`username`,`password`,`email`)VALUES('ali','123456','ali@yahoo.com')";
            // $sql = "update `users` set`username`='ali' where`id`='3'";



            // $sql = "select * from `users`";
            // $result = $dataBase-> Query($sql);
            
            // while($row=mysqli_fetch_array($result)){
            //     echo $row['username']."<hr />";
            // }


            // var_dump($dataBase->Query($sql));





            // if($dataBase->connection){
            //     $user = new User();
            //     $users = $user->find_all_users();
            //     while($row=mysqli_fetch_array($users)){

            //         echo $row['email']."<hr />";

            //     };


            // }



            if($dataBase->connection){
                // $user = new User();
                // $res= $user->find_users_by_id(1);
                // echo $res['username'];


                // $user = User::find_users_by_id(1);
                // echo $user['email'];


                // $user = User::find_all_users();
                // while($row=mysqli_fetch_array($user)){

                //     echo $row['username']."<hr>";
                // }


                $found_user= User::find_users_by_id(3);
                $user = new User();
                $user->id= $found_user['id'];         
                $user->username= $found_user['username'];         
                $user->email= $found_user['email'];         
                $user->password= $found_user['password'];  
                
                echo $user->id."<hr>";
                echo $user->username."<hr>";
                echo $user->email."<hr>";
                echo $user->password."<hr>";




            }





        ?>

    <div class="clear"></div>
    </div>


    <div class="clear"></div>
</div>