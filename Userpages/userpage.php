<?php
require_once('includes/init.php');
if (!$session->is_signed_in()) {
    redirect("../Php/index.php");
}

?>

<?php


//     if($dataBase->connection){
//         $user = new Users();
//         $user->username="test";
//         $user->password="test321";
//         $user->email="test@gmail.com";
//
//         $user->create();
//     }
//     echo $user;


//if ($dataBase->connection) {
//    $user = users::find_users_by_id(2);
//    $user->username = "nootash";
//    $user->password = "5555551221";
//    $user->email = "nootash@gmail.com";
////
//    $user->update();
//}


//if ($dataBase->connection) {
//    $user = users::find_users_by_id(53);
//    $user->delete();
//}

//if ($dataBase->connection) {
////    $user = users::find_users_by_id(57);
//    $user = new Users();
//    $user->username = "سوگند";
//    $user->password = "3333333";
//    $user->email = "tina@yahoo.com";
//    $user->save();
//}


//if ($dataBase->connection) {
//    $user = users::find_all_users();
////    var_dump($user);
//
//}


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
    <link rel="stylesheet" href="../Css/users.css">

    <link rel="stylesheet" type="text/css" href="https://static.neshan.org/sdk/openlayers/5.3.0/ol.css">
    <!-- The line below is only needed for old environments like Internet Explorer and Android 4.x -->
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=requestAnimationFrame,Element.prototype.classList,URL"></script>
    <script type="text/javascript" src="https://static.neshan.org/sdk/openlayers/5.3.0/ol.js"></script>

</head>
<body>
<header>
    <div class="first-div-h">
        <ul class="nav main-nav nav-pills">
            <li role="presentation"><a class="font15" href="../Php/index.php"><i class="glyphicon glyphicon-home"></i>
                    صفحه اصلی</a></li>
            <li role="presentation"><a class="font15" href="../Php/contactUS.php">تماس با ما</a></li>
        </ul>
        <span class="img-2lines hidden-sm hidden-xs hidden-md"></span>
        <span class="date font17" id="date"></span>
        <span class="time font17" id="time"></span>
        <span class="text-center parent-for-info-account-ul pull-left">
                <span class="font17 date" id="personalAccBtn">
                    <span class="glyphicon glyphicon-user"></span>
                    <span class="glyphicon glyphicon-chevron-down"></span>
                </span>
                <ul class="info-account text-center" id="infoAccount">
                    <li class="info-account-li text-center font15">تغییر گذرواژه</li>
                    <a class="info-account-li" href="./includes/logout.php">
                        <li class="info-account-li text-center font15">خروج</li>
                    </a>
                </ul>
            </span>
    </div>
</header>
<main>
    <div class="container">
        <div class="users">
            <div class="header-users"></div>
            <div class="user-setting">
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                    <div>
                        <img class="img-responsive img-circle user-img" src="../images/user.png" alt="">
                    </div>
                    <div class="name-lastName text-center font15"> یه شخصی</div>
                    <div class="your-pic text-center font15"> تصویر مورد نظر خود را انتخاب کنید <br> ( انتخاب عکس با
                        رعایت شئونات اسلامی صورت گیرد)
                    </div>
                    <button type="submit" class="btn btn-info change-pic-btn font15">تغییر تصویر</button>
                    <!-- <form action="">
                        <input type="file" name="" id="">
                    </form> -->
                </div>
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                    <form action="">
                        <div class="form-group">
                            <label for="exampleInputTextName" class="font15">نام و نام خانوادگی :</label>
                            <input type="text" class="form-control font15" id="exampleInputTextName"
                                   placeholder="نام و نام خانوادگی ">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="font15">آدرس ایمیل :</label>
                            <input type="email" class="form-control font15" id="exampleInputEmail1"
                                   placeholder="ایمیل خود را وارد کنید">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputText" class="font15">آدرس پستی :</label>
                            <input type="text" class="form-control font15" id="exampleInputText"
                                   placeholder="آدرس پستی">
                        </div>
                        <div class="radio">
                            <label for="#" class="font15">جنسیت :</label>
                            <label class="radio-inline font15" style="line-height: 1.5em;">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option2"> مذکر
                            </label>
                            <label class="radio-inline font15" style="line-height: 1.4em;">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option3"> مونث
                            </label>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-danger font15">ثبت تغییرات</button>
                    </form>
                </div>
                <!-- <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 well"></div> -->
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
                            <div><a class="last-a-in-div-5" href="http://bpj.iau.ir/">باشگاه پژوهشگران جوان و نخبگان</a>
                            </div>
                            <div><a class="last-a-in-div-5" href="https://iau.ac.ir/">دانشگاه آزاد اسلامی</a></div>
                            <div><a class="last-a-in-div-5" href="https://www.msrt.ir/fa">وزارت علوم تحقیقات و
                                    فناوری</a></div>
                            <div><a class="last-a-in-div-5" href="http://www.aiau.ir/">کانون فارغ التحصیلان دانشگاه آزاد
                                    اسلامی</a></div>
                            <div><a class="last-a-in-div-5" href="http://www.samabpj.ir/">باشگاه پژوهشگران جوان و نخبگان
                                    سما</a></div>
                            <div><a class="last-a-in-div-5" href="http://www.safaiau.ac.ir/">دانشگاه آزاد اسلامی واحد
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
                                    href="http://www.samabpj.ir/cp/page_files/885530185_rahbordi.pdf">برنامه های راهبردی
                                    باشگاه</a></div>
                            <div><a class="a-in-div-5" href="http://journal.bpj.ir/">ابتکار و خلاقیت در علوم انسانی</a>
                            </div>
                            <div><a class="a-in-div-5" href="http://bpj.iau.ir/CP/page_files/771074236_ozviyat1397.pdf">آیین
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
                            <div><a class="a-in-div-5" href="http://www.safaiau.ac.ir/education/edu-notes">اطلاعیه های
                                    آموزشی</a></div>
                            <div><a class="a-in-div-5" href="http://www.safaiau.ac.ir/education/culture">امور فرهنگی</a>
                            </div>
                            <div><a class="a-in-div-5" href="http://bpj.iau.ir/CP/page_files/for.pdf">شرایط و عضویت
                                    استعدادهای درخشان</a></div>
                            <div><a class="a-in-div-5" href="http://bpj.iau.ir/SRegister.aspx">تقاضای عضویت</a></div>
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
                <li class="font13 text-right">کليه حقوق اين سايت متعلق به دانشگاه آزاد اسلامی، واحد صفادشت می‌باشد.</li>

            </ul>
        </div>
    </div>
</footer>


<script src="../javaScripts/jquery-3.4.1.js"></script>
<script src="../javaScripts/bpjn.js"></script>
<script src="../javaScripts/users.js"></script>


</body>
</html>