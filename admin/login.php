<?php

require_once ("includes/init.php");
if ($session->is_signed_in()){
    redirect("index.php");
}
if (@$_POST['login']){
    $username= trim($_POST["username"]);
    $password= trim($_POST["password"]);
    $userFound=users::verifyUsers($username, $password);

    if($userFound){
        $session->login($userFound);
        redirect("index.php");
    }else{
       $Message= "<div class='err-pass-un font17 text-center'>نام کاربری یا گذرواژه صحیح نمی باشد<div/>";
    }

}
?>


<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../FrameWork/bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../FrameWork/bootstrap-3.3.7-dist/css/bootstrap-rtl.css">
    <link rel="stylesheet" href="../Css/style.css">
    <link rel="stylesheet" href="../Css/login.css">
    <title>صفحه ورود</title>
</head>
<body style="background: #eee;">
<div class="box">
    <div class="form-group text-center">
        <form action="" method="post">
            <div class="state-account font15">
                ورود به حساب کاربری
            </div>
            <br>
            <div class="head">
                <img src="../images/YRC-Logo.png" width="100px" height="100px" style="float: right; margin-bottom: 20px"/>
                <span style="font:18px yekan;float: right;margin:20px 15px;">باشگاه پژوهشگران جوان</span>
            </div>
            <div class="row">
                <div class="col-md-12"></div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control font15" name="username" id="username" placeholder="نام کاربری"
                       required="required">
            </div>
            <div class="form-group">
                <input type="password" class="form-control font15" name="password" id="password" placeholder=" رمز عبور"
                       required="required">
            </div>
            <input type="submit" value="ورود" id="login" class="btn btn-info font15" name="login">

        </form>

    </div>

    <?php
    echo @$Message
    ?>
<!--    <style>-->
<!--        input::placeholder {-->
<!--            text-align: right;-->
<!--        }-->
<!--    </style>-->
<!--    <div class="clear"></div>-->
</div>
</body>
</html>
