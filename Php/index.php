<?php

require_once("../Userpages/includes/init.php");
require_once("../Userpages/includes/loginSignup.php")

?>

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
    <link rel="stylesheet" href="../Css/style.css">
</head>
<body>
<div class="body-cover"></div>
<div class="title-of-login">
    <ul class="text-center tabs">
        <li class=" Active">ثبت نام</li>
        <li class="">ورود</li>
    </ul>

    <div class="tabs-content text-center font19">
        <section id="sec-log-reg">
            <form action="" method="post">
                <div class="form-group">
                    <input  name="fullname" type="text" class="form-control" id="exampleInputText"
                           placeholder="نام و نام خانوادگی (به فارسی)"/><br>
                    <input  name="username" value="<?php echo $username; ?>" type="text"
                           class="form-control" id="exampleInputText"
                           placeholder="نام کاربری (به انگلیسی)"/>
                    <input  name="email" value="<?php echo $email; ?>" type="email"
                           class="form-control" id="exampleInputEmail1"
                           placeholder="ایمیل خود را وارد کنید">
                    <input  name="password" type="password" class="form-control"
                           id="exampleInputPassword1"
                           placeholder="رمز عبور ">
                    <input " name="passwordConf" type="password" class="form-control"
                           id="exampleInputPassword1"
                           placeholder="تکرار رمز عبور ">

                    <div class="checkbox">
                        <label>
                            <input required="required"  style="width: 17px;" type="checkbox"> قوانین را مطالعه کردم و با
                            آن موافقم
                        </label>
                    </div>
                    <input style="margin-top: 10px; box-shadow: 1px 1px 4px 0px rgb(87, 87, 87); width: 40%;"
                           value="ثبـــت نام" id="register" name="register" type="submit"
                           class="btn btn-success input-btn font15">
                </div>
            </form>
        </section>
        <section id="sec-log-reg">
            <form action="" method="post">
                <div class="form-group">
                    <input required="required" name="username" type="text" class="form-control" id="username"
                           placeholder="نام کاربری خود را وارد کنید"><br>
                    <input required="required" name="password" type="password" class="form-control" id="password"
                           placeholder="رمز عبور خود را وارد کنید">

                    <h4><a href="#">بازیابی رمز عبور(در صورت فراموشی رمز)</a></h4>
                    <input style="margin-top: 10px; box-shadow: 1px 1px 4px 0px rgb(87, 87, 87); width: 40%;"
                           value="ورود" id="login" name="login" type="submit" class="btn btn-success input-btn font15">
                </div>
            </form>
        </section>
    </div>
</div>

<?php
echo @$Message;
?>

<?php
echo @$Message1;
?>

<?php
if (count($errors) > 0):
    ?>
    <div class='err-pass-un text-center'>
        <!--            <i class='glyphicon glyphicon-remove exit-svg'></i>-->
        <svg class='exit-svg' id="false-cross-reject-decline" style="enable-background:new 0 0 15 15;" version="1.1"
             viewBox="0 0 15 15" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
             xmlns:xlink="http://www.w3.org/1999/xlink"><path
                    d="M7.5,0C3.364,0,0,3.364,0,7.5S3.364,15,7.5,15S15,11.636,15,7.5S11.636,0,7.5,0z M7.5,14C3.916,14,1,11.084,1,7.5  S3.916,1,7.5,1S14,3.916,14,7.5S11.084,14,7.5,14z"/>
            <polygon
                    points="10.146,4.146 7.5,6.793 4.854,4.146 4.146,4.854 6.793,7.5 4.146,10.146 4.854,10.854 7.5,8.207 10.146,10.854   10.854,10.146 8.207,7.5 10.854,4.854 "/></svg>
    <?php
    foreach ($errors as $error):
        ?>
        <div class='text-on-err-pass-un'><?php echo @$error; ?></div>
    <?php
    endforeach;
    ?>
    </div>
<?php
endif;
?>

<header>
    <div class="first-div-h">
        <ul class="nav main-nav nav-pills">
            <li role="presentation" class="active"><a class="font15" href="./index.php"><i
                            class="glyphicon glyphicon-home"></i>
                    صفحه اصلی</a></li>

            <li role="presentation"><a class="font15" href="./contactUS.php">تماس با ما</a></li>
        </ul>
        <span class="img-2lines hidden-sm hidden-xs hidden-md"></span>
        <span class="date font17" id="date"></span>
        <span class="time font17" id="time"></span>
        <a href="#"><span class="log-btn font17 date">ورود / ثبت نام</span></a>
    </div>
    <div class="second-div-h">
        <ul class="ul-for-title">
            <li class="text-center"><img class="bpj-logo hidden-xs" src="../images/Logo.png"
                                         alt=" عکس تصویر باشگاه پژوهشگران جوان و نخبگان"></li>
            <li class="font19 text-center hidden-xs">دانشگاه آزاد اسلامی واحد صفادشت</li>
            <li class="text-center"><img class="small-logo visible-xs" src="../images/YRC-Logo.png"
                                         alt=" عکس تصویر باشگاه پژوهشگران جوان و نخبگان"></li>
            <li class="font17 text-center visible-xs">باشگاه پژوهشگران جوان و نخبگان</li>
            <li class="font15 text-center visible-xs">دانشگاه آزاد اسلامی واحد صفادشت</li>
        </ul>
    </div>
</header>
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-center font21" style="margin: 40px auto;">
                <h2>برنامه ی کارگاه های باشگاه پژوهشگران جوان واحد صفادشت</h2>
            </div>
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="fix">

                    <div class="workshop-title font19 text-center">مقاله نویسی فارسی</div>
                    <div class="workshop">
                        <table class="table workshop-table text-center">
                            <tbody>
                            <tr class="active">
                                <td class="text-center font15">زمان برگزاری: 29 مهر</td>
                                <td class="text-center font17">شهریه(ریال): ---</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="workshop-title font19 text-center">جست وجو در اینترنت و کتابخانه دیجیتال</div>
                    <div class="workshop">
                        <table class="table workshop-table text-center">
                            <tbody>
                            <tr class="active">
                                <td class="text-center font15">زمان برگزاری: 20 آبان</td>
                                <td class="text-center font17">شهریه(ریال): ---</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="workshop-title font19 text-center">آموزش فتوشاپ</div>
                    <div class="workshop">
                        <table class="table workshop-table text-center">
                            <tbody>
                            <tr class="active">
                                <td class="text-center font15">زمان برگزاری: 27 آبان</td>
                                <td class="text-center font17">شهریه(ریال): 500000</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="workshop-title font19 text-center">پروپوزاال نویسی و تدوین پایان نامه</div>
                    <div class="workshop">
                        <table class="table workshop-table text-center">
                            <tbody>
                            <tr class="active">
                                <td class="text-center font15">زمان برگزاری: 1 آذر</td>
                                <td class="text-center font17">شهریه(ریال): ---</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="workshop-title font19 text-center">طراحی سایت و دیجیتال مارکتینگ</div>
                    <div class="workshop">
                        <table class="table workshop-table text-center">
                            <tbody>
                            <tr class="active">
                                <td class="text-center font15">زمان برگزاری: 9 آذر</td>
                                <td class="text-center font17">شهریه(ریال): 750000</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="workshop-title font19 text-center">آشنایی با نرم افزار abaqus (ویژه دانشجویان عمران)
                    </div>
                    <div class="workshop">
                        <table class="table workshop-table text-center">
                            <tbody>
                            <tr class="active">
                                <td class="text-center font15">زمان برگزاری: 4آذر</td>
                                <td class="text-center font17">شهریه(ریال): 750000</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="workshop-title font19 text-center">آشنایی با استارت آپ ها و شرکت در آن</div>
                    <div class="workshop">
                        <table class="table workshop-table text-center">
                            <tbody>
                            <tr class="active">
                                <td class="text-center font15">زمان برگزاری: 24 آذر</td>
                                <td class="text-center font17">شهریه(ریال): ---</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="workshop-title font19 text-center">اخلاق مداری در پژوهش</div>
                    <div class="workshop">
                        <table class="table workshop-table text-center">
                            <tbody>
                            <tr class="active">
                                <td class="text-center font15">زمان برگزاری: 30 آذر</td>
                                <td class="text-center font17">شهریه(ریال): ---</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>

    </div>
</main>

<footer>
    <div class="first-div-f">
        <div style="border-bottom: 1px solid #ddd5d5;padding: 10px;background-color: #E8E8FF;">
            <div class="container">
                <div class="row main-row-5-2">
                    <div class="col-md-5 col-sm-4">
                        <span>
                        </span>
                        <!--                        <span style="width:18px; height:10px; display: inline-block;"></span>-->
                        <span class="font17">سایت های مرتبط</span>
                        <div class="font15" style="padding-bottom:20px;">
                            <div><a class="last-a-in-div-5" href="http://bpj.iau.ir/">باشگاه پژوهشگران جوان و
                                    نخبگان</a>
                            </div>
                            <div><a class="last-a-in-div-5" href="https://iau.ac.ir/">دانشگاه آزاد اسلامی</a></div>
                            <div><a class="last-a-in-div-5" href="https://www.msrt.ir/fa">وزارت علوم تحقیقات و
                                    فناوری</a></div>
                            <div><a class="last-a-in-div-5" href="http://www.aiau.ir/">کانون فارغ التحصیلان دانشگاه
                                    آزاد
                                    اسلامی</a></div>
                            <div><a class="last-a-in-div-5" href="http://www.samabpj.ir/">باشگاه پژوهشگران جوان و
                                    نخبگان
                                    سما</a></div>
                            <div><a class="last-a-in-div-5" href="http://www.safaiau.ac.ir/">دانشگاه آزاد اسلامی
                                    واحد
                                    صفادشت</a></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">

                        <span>

                        </span>
                        <!--                        <span style="width:18px; height:10px; display: inline-block;"></span>-->
                        <span class="font17">لینک های مرتبط</span>
                        <div class="font15" style="padding-bottom:20px;">
                            <div><a class="a-in-div-5" href="http://www.safaiau.ac.ir/research">پژوهش و فناوری
                                    safaiau.ac.ir</a></div>
                            <div><a class="a-in-div-5"
                                    href="http://www.samabpj.ir/cp/page_files/869405869_www.bpj.ir_images_content_Asasnameeslah.pdf">اساسنامه
                                    ی باشگاه</a></div>
                            <div><a class="a-in-div-5"
                                    href="http://www.samabpj.ir/cp/page_files/885530185_rahbordi.pdf">برنامه های
                                    راهبردی
                                    باشگاه</a></div>
                            <div><a class="a-in-div-5" href="http://journal.bpj.ir/">ابتکار و خلاقیت در علوم
                                    انسانی</a>
                            </div>
                            <div><a class="a-in-div-5"
                                    href="http://bpj.iau.ir/CP/page_files/771074236_ozviyat1397.pdf">آیین
                                    نامه عضویت در باشگاه</a></div>
                            <div><a class="a-in-div-5" href="http://bpj.iau.ir/InventionBank.aspx">بانک اختراعات</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-3">

                        <span>
                        </span>
                        <!--                        <span style="width:18px; height:10px; display: inline-block;"></span>-->
                        <span class="font17">لینک های مرتبط</span>
                        <div class="font15" style="padding-bottom:20px;">
                            <div><a class="a-in-div-5" href="http://www.safaiau.ac.ir/education/edu-notes">اطلاعیه
                                    های
                                    آموزشی</a></div>
                            <div><a class="a-in-div-5" href="http://www.safaiau.ac.ir/education/culture">امور
                                    فرهنگی</a>
                            </div>
                            <div><a class="a-in-div-5" href="http://bpj.iau.ir/CP/page_files/for.pdf">شرایط و عضویت
                                    استعدادهای درخشان</a></div>
                            <div><a class="a-in-div-5" href="http://bpj.iau.ir/SRegister.aspx">تقاضای عضویت</a>
                            </div>
                            <div><a class="a-in-div-5" href="http://bpj.iau.ir/PaperBank.aspx">بانک مقالات</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="width: 96%; margin: 0 auto;">
            <ul class="ul-for-title">
                <!--             <li class="font17 text-center">باشگاه پژوهشگران جوان و نخبگان،</li>-->
                <br>
                <li class="text-center"><img class="bpj-logo hidden-xs" src="../images/Logo.png"
                                             alt=" عکس تصویر باشگاه پژوهشگران جوان و نخبگان"></li>
                <li class="font19 text-center hidden-xs">دانشگاه آزاد اسلامی واحد صفادشت</li>
                <li class="text-center"><img class="small-logo visible-xs" src="../images/YRC-Logo.png"
                                             alt=" عکس تصویر باشگاه پژوهشگران جوان و نخبگان"></li>
                <li class="font17 text-center visible-xs">باشگاه پژوهشگران جوان و نخبگان</li>
                <li class="font15 text-center visible-xs">دانشگاه آزاد اسلامی واحد صفادشت</li>
                <li class="font13 text-right">کليه حقوق اين سايت متعلق به دانشگاه آزاد اسلامی، واحد صفادشت
                    می‌باشد.
                </li>

            </ul>
        </div>
    </div>
</footer>


<script src="../javaScripts/jquery-3.4.1.js"></script>
<script src="../javaScripts/bpjn.js"></script>


</body>
</html>