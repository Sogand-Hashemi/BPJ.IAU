<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>باشگاه پژوهشگران جوان و نخبگان</title>
    <link rel="icon" href="../images/YRC-Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../FreamWork/bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../FreamWork/bootstrap-3.3.7-dist/css/bootstrap-rtl.css">
    <link rel="stylesheet" href="../Css/style.css">
    <link rel="stylesheet" href="../Css/contact.css">

    <link rel="stylesheet" type="text/css" href="https://static.neshan.org/sdk/openlayers/5.3.0/ol.css">
    <!-- The line below is only needed for old environments like Internet Explorer and Android 4.x -->
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=requestAnimationFrame,Element.prototype.classList,URL"></script>
    <script type="text/javascript" src="https://static.neshan.org/sdk/openlayers/5.3.0/ol.js"></script>

</head>
<body>
    <div class="body-cover"></div>
    <div class="title-of-login">
        <ul class="text-center tabs">
            <li class=" Active">ثبت نام</li >
            <li class="">ورود</li>
        </ul>
        
        <div class="tabs-content text-center font19">
            <section id="sec-log-reg">
                <form action="users.php" method="get">
                    <div class="form-group">
                      <input type="text" class="form-control" id="exampleInputText" placeholder="نام و نام خانوادگی (به فارسی)"><br>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="ایمیل خود را وارد کنید">
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="رمز عبور ">
    
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
                <form action="users.php" method="get">
                    <div class="form-group">
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="ایمیل خود را وارد کنید"><br>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="رمز عبور خود را وارد کنید">
    
                        <!-- <div class="checkbox">
                            <label>
                              <input style="width: 17px;" type="checkbox"> قوانین را مطالعه کردم و با آن موافقم
                            </label>
                          </div> -->
                          <h4><a href="#">بازیابی رمز عبور(در صورت فراموشی رمز)</a></h4>
                          <button style="margin-top: 10px; box-shadow: 1px 1px 4px 0px rgb(87, 87, 87); width: 40%;" type="submit" class="btn btn-success font15">ورود</button>
                    </div>
                  </form>
            </section>
        </div>
    </div>

    <header>
        <div class="first-div-h">
            <ul class="nav main-nav nav-pills">
                <li role="presentation"><a class="font15" href="index.php"><i class="glyphicon glyphicon-home"></i>  صفحه اصلی</a></li>
                <!-- <li role="presentation"><a class="font15" style="font-weight: bold;" href="#">ورود / ثبت نام</a></li> -->
                <!-- <li role="presentation"><a class="font13" style="font-weight: bold;" href="#">درباه ی ما</a></li> -->
                <li role="presentation" class="active"><a class="font15" href="#">تماس با ما</a></li>
            </ul>
            <span class="img-2lines hidden-sm hidden-xs hidden-md"></span>
            <span class="date font17" id="date"></span>
            <span class="time font17" id="time"></span>
            <span class="log-btn font17 date">ورود / ثبت نام</span>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="contact">
                <div class="header-contact">
                  <span class="font17 ways-to-contacting">راه های ارتباط با ما</span>
                  <span class="arrow-to-right"></span>
                  <span class="arrow-to-left"></span>
                  <span display:table-cell; class="pull-left">
                      <span class="glyphicon glyphicon-envelope"></span>
                      <span class="glyphicon glyphicon-map-marker"></span>
                      <span class="glyphicon glyphicon-phone-alt"></span>
                      <span style="margin: 10px 10px 0 0 ;>
                        <?xml version="1.0" ?><svg class="printer-svg-ico" height="60" viewBox="0 -9 48 48" width="60" xmlns="http://www.w3.org/2000/svg"><path d="M38 16H10c-3.31 0-6 2.69-6 6v12h8v8h24v-8h8V22c0-3.31-2.69-6-6-6zm-6 22H16V28h16v10zm6-14c-1.11 0-2-.89-2-2s.89-2 2-2c1.11 0 2 .89 2 2s-.89 2-2 2zM36 6H12v8h24V6z"/><path d="M0 0h48v48H0z" fill="none"/></svg>
                    </span>
                  </span>
                </div>
               <div class="contact-info">
                <table class="table text-center"> 
                    <tbody> 
                        <tr> 
                            <th scope="row" class="text-center">
                                <span class="glyphicon glyphicon-envelope"></span>
                            </th> 
                            <td class="text-center font15">ایمیل:</td> 
                            <td class="text-center font17">safadashtbpj@gmail.com</td> 
                        </tr>  
                        <tr class="active"> 
                            <th scope="row" class="text-center">
                                <span>
                                    <?xml version="1.0" ?><svg class="printer-svg-ico" height="48" viewBox="0 0 48 48" width="48" xmlns="http://www.w3.org/2000/svg"><path d="M38 16H10c-3.31 0-6 2.69-6 6v12h8v8h24v-8h8V22c0-3.31-2.69-6-6-6zm-6 22H16V28h16v10zm6-14c-1.11 0-2-.89-2-2s.89-2 2-2c1.11 0 2 .89 2 2s-.89 2-2 2zM36 6H12v8h24V6z"/><path d="M0 0h48v48H0z" fill="none"/></svg>
                                </span>
                            </th> 
                            <td class="text-center font15">فکس:</td> 
                            <td class="text-center font17">65433530 021</td> 
                        </tr> 
                        <tr> 
                            <th scope="row" class="text-center">
                                <span class="glyphicon glyphicon-phone-alt"></span>
                            </th> 
                            <td class="text-center font15">تلفن تماس:</td> 
                            <td class="text-center font17">65435516 021 - 65432711 021 - 65432755 021 (داخلی: 1059)</td> 
                        </tr> 
                        <tr class="active" style="border-bottom: 1px solid #ddd;"> 
                            <th scope="row" class="text-center">
                                <span class="glyphicon glyphicon-map-marker"></span>
                            </th> 
                            <td class="text-center font15">نشانی:</td> 
                            <td class="text-center font15">تهران- صفادشت - میدان نبی اکرم (ص) - بلوار الغدیر - دانشگاه آزاد اسلامی واحد صفادشت</td> 
                        </tr> 
                        <tr> 
                            <td class="text-center font17" colspan="3">رئیس باشگاه : دکترسپیده بهرامی</td> 
                        </tr> 
                    </tbody> 
                </table> 
               </div>
            </div>
            <div id="map"></div>
        </div>
    </main>

    <footer>
        <div class="first-div-f">
            <ul class="ul-for-title">
                <!-- <li class="font17 text-center">باشگاه پژوهشگران جوان و نخبگان،</li> -->
                <li class="text-center"><img class="bpj-logo hidden-xs" src="../images/Logo.png" alt=" عکس تصویر باشگاه پژوهشگران جوان و نخبگان"></li>   
                <li class="font19 text-center hidden-xs">دانشگاه آزاد اسلامی واحد صفادشت</li>             
                <li class="text-center"><img class="small-logo visible-xs" src="../images/YRC-Logo.png" alt=" عکس تصویر باشگاه پژوهشگران جوان و نخبگان"></li>
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
</html>