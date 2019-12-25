<?php

require_once("includes/init.php");
if ($session->is_signed_in()) {
    redirect("index.php");
}
if (@$_POST['login']) {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    $userFound = users::verifyUsers($username, $password);

    if ($userFound) {
        $session->login($userFound);
        redirect("index.php");
    } else {
        $Message = "<div class='err-pass-un text-center'>نام کاربری یا گذرواژه صحیح نمی باشد<div/>";
    }

}
?>


<!--<!doctype html>-->
<!--<html lang="fa" dir="rtl">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <link rel="stylesheet" href="../FrameWork/bootstrap-3.3.7-dist/css/bootstrap.css">-->
<!--    <link rel="stylesheet" href="../FrameWork/bootstrap-3.3.7-dist/css/bootstrap-rtl.css">-->
<!--    <link rel="stylesheet" href="../Css/style.css">-->
<!--    <link rel="stylesheet" href="../Css/login.css">-->
<!--    <title>صفحه ورود</title>-->
<!--</head>-->
<!--<body style="background: #eee;">-->
<!--<div class="box">-->
<!--    <div class="form-group text-center">-->
<!--        <form action="" method="post">-->
<!--            <div class="state-account font15">-->
<!--                ورود به حساب کاربری-->
<!--            </div>-->
<!--            <br>-->
<!--            <div class="head">-->
<!--                <img src="../images/YRC-Logo.png" width="100px" height="100px" style="float: right; margin-bottom: 20px"/>-->
<!--                <span style="font:18px yekan;float: right;margin:20px 15px;">باشگاه پژوهشگران جوان</span>-->
<!--            </div>-->
<!--            <div class="row">-->
<!--                <div class="col-md-12"></div>-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <input type="text" class="form-control font15" name="username" id="username" placeholder="نام کاربری"-->
<!--                       required="required">-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <input type="password" class="form-control font15" name="password" id="password" placeholder=" رمز عبور"-->
<!--                       required="required">-->
<!--            </div>-->
<!--            <input type="submit" value="ورود" id="login" class="btn btn-info font15" name="login">-->
<!---->
<!--        </form>-->
<!---->
<!--    </div>-->


<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>باشگاه پژوهشگران جوان و نخبگان</title>
    <link rel="icon" href="../images/YRC-Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../FrameWork/bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../FrameWork/bootstrap-3.3.7-dist/css/bootstrap-rtl.css">
<!--    <link rel="stylesheet" href="../Css/style.css">-->
    <link rel="stylesheet" href="../Css/adminLogin.css">

    <link rel="stylesheet" type="text/css" href="https://static.neshan.org/sdk/openlayers/5.3.0/ol.css">
    <!-- The line below is only needed for old environments like Internet Explorer and Android 4.x -->
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=requestAnimationFrame,Element.prototype.classList,URL"></script>
    <script type="text/javascript" src="https://static.neshan.org/sdk/openlayers/5.3.0/ol.js"></script>

</head>

<body>
<header>
    <div class="first-div-h">
        <ul class="nav main-nav nav-pills">
            <li role="presentation"><a class="font15" href="index.php"><i class="glyphicon glyphicon-home"></i> صفحه
                    اصلی</a></li>
            <!-- <li role="presentation"><a class="font15" style="font-weight: bold;" href="#">ورود / ثبت نام</a></li> -->
            <!-- <li role="presentation"><a class="font13" style="font-weight: bold;" href="#">درباه ی ما</a></li> -->
            <li role="presentation"><a class="font15" href="#">تماس با ما</a></li>
        </ul>
        <span class="img-2lines hidden-sm hidden-xs hidden-md"></span>
        <span class="date font17" id="date"></span>
        <span class="time font17" id="time"></span>
        <span class="log-btn font17 date">ورود / ثبت نام</span>
    </div>
</header>

<main>
    <div class="title-of-login">
        <ul class="text-center tabs">
            <li class=" Active">ثبت نام</li >
            <li class="">ورود</li>
        </ul>

        <div class="tabs-content text-center font19">
            <section id="sec-log-reg">
                <form action="" method="">
                    <div class="form-group">
                        <input required="required" type="text" class="form-control" id="exampleInputText" placeholder="نام و نام خانوادگی (به فارسی)"/><br>
                        <input required="required" type="email" class="form-control" id="exampleInputEmail1" placeholder="ایمیل خود را وارد کنید">
                        <input required="required" type="password" class="form-control" id="exampleInputPassword1" placeholder="رمز عبور ">

                        <div class="checkbox">
                            <label>
                                <input style="width: 17px;" type="checkbox"> قوانین را مطالعه کردم و با آن موافقم
                            </label>
                        </div>
                        <button style="margin-top: 10px; box-shadow: 1px 1px 4px 0px rgb(87, 87, 87); width: 40%;" type="submit" class="btn btn-success font15">ثبـت نام</button>
                    </div>
                </form>
            </section>
            <section id="sec-log-reg">
                <form action="" method="post">
                    <div class="form-group">
                        <input required="required" name="username" type="text" class="form-control" id="username" placeholder="ایمیل خود را وارد کنید"><br>
                        <input required="required" name="password" type="password" class="form-control" id="password" placeholder="رمز عبور خود را وارد کنید">

                        <!-- <div class="checkbox">
                            <label>
                              <input style="width: 17px;" type="checkbox"> قوانین را مطالعه کردم و با آن موافقم
                            </label>
                          </div> -->
                        <h4><a href="#">بازیابی رمز عبور(در صورت فراموشی رمز)</a></h4>
                        <input style="margin-top: 10px; box-shadow: 1px 1px 4px 0px rgb(87, 87, 87); width: 40%;" value="ورود" id="login" name="login" type="submit" class="btn btn-success input-btn font15">
                    </div>
                </form>
            </section>
            <?php
            echo @$Message;
            ?>
        </div>

    </div>
</main>

    <footer>
        <div class="first-div-f">
            <ul class="ul-for-title">
                <!-- <li class="font17 text-center">باشگاه پژوهشگران جوان و نخبگان،</li> -->
                <li class="text-center"><img class="bpj-logo hidden-xs" src="../images/Logo.png"
                                             alt=" عکس تصویر باشگاه پژوهشگران جوان و نخبگان"></li>
                <li class="font19 text-center hidden-xs">دانشگاه آزاد اسلامی واحد صفادشت</li>
                <li class="text-center"><img class="small-logo visible-xs" src="../images/YRC-Logo.png"
                                             alt=" عکس تصویر باشگاه پژوهشگران جوان و نخبگان"></li>
                <li class="font17 text-center visible-xs">باشگاه پژوهشگران جوان و نخبگان</li>
                <li class="font15 text-center visible-xs">دانشگاه آزاد اسلامی واحد صفادشت</li>
                <li class="font13 text-right">کليه حقوق اين سايت متعلق به دانشگاه آزاد اسلامی، واحد صفادشت می‌باشد.</li>

            </ul>
        </div>
        <div></div>
    </footer>

<script src="../javaScripts/jquery-3.4.1.js"></script>
<script src="../javaScripts/bpj.js"></script>
<script src="../javaScripts/contact.js"></script>

</body>



<!--    <style>-->
<!--        input::placeholder {-->
<!--            text-align: right;-->
<!--        }-->
<!--    </style>-->
<!--    <div class="clear"></div>-->
<!--</div>-->
<!--</body>-->
</html>
