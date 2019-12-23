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
            // $sql="select * from `users`";
            // $sql = "insert into `users`(`username`,`password`,`email`)VALUES('ali','123456','ali@yahoo.com')";
            // $sql = "update `users` set`username`='sara' where`id`='3'";
            $sql = "select * from `users`";
            $result = $dataBase-> Query($sql);
            
            while($row=mysqli_fetch_array($result)){
                echo $row['username']."<hr />";
            }


            // var_dump($dataBase->Query($sql));

        ?>

    <div class="clear"></div>
    </div>


    <div class="clear"></div>
</div>