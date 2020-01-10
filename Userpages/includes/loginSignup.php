<?php

require_once("init.php");

if ($session->is_signed_in()) {
    redirect("../admin/userpage.php");
}
if ((@$_POST['login'])) {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    $userFound = users::verifyUsers($username, $password);

    if ($userFound) {
        $session->login($userFound);
        redirect("../Userpages/userpage.php");
    } else {
        $Message = "<div class='err-pass-un text-center'><?xml version=\"1.0\" ?><svg class='exit-svg' id=\"false-cross-reject-decline\" style=\"enable-background:new 0 0 15 15;\" version=\"1.1\" viewBox=\"0 0 15 15\" xml:space=\"preserve\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><path d=\"M7.5,0C3.364,0,0,3.364,0,7.5S3.364,15,7.5,15S15,11.636,15,7.5S11.636,0,7.5,0z M7.5,14C3.916,14,1,11.084,1,7.5  S3.916,1,7.5,1S14,3.916,14,7.5S11.084,14,7.5,14z\"/><polygon points=\"10.146,4.146 7.5,6.793 4.854,4.146 4.146,4.854 6.793,7.5 4.146,10.146 4.854,10.854 7.5,8.207 10.146,10.854   10.854,10.146 8.207,7.5 10.854,4.854 \"/></svg><div class='text-on-err-pass-un'>نام کاربری یا گذرواژه صحیح نمی باشد</div></div>";
    }
}
?>


<?php

$errors = array();
$username = "";
$email = "";

if (isset($_POST['register'])) {
//    $user = new Users();
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $passwordConf = trim($_POST['passwordConf']);
    $fullname = trim($_POST['fullname']);

    //validation

    if (empty($username)) {
        $errors['username'] = 'نام کاربری را وارد نکردید!';
    }
    if (empty($fullname)) {
        $errors['username'] = 'نام و نام خانوادگی خود را وارد نکردید!';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'ایمیل وارد شده نامعتبر است!';
    }
    if (empty($email)) {
        $errors['email'] = 'ایمیل را وارد نکردید!';
    }
    if (empty($password)) {
        $errors['password'] = 'رمز عبور را وارد نکردید!';
    }
    if ($password !== $passwordConf) {
        $errors['password'] = 'رمزهای ورودی یکسان نمی باشند!';
    }
    $emailQuery = "SELECT * FROM users WHERE email=? LIMIT 1";
    $stmt = $conn->prepare($emailQuery);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $userCount = $result->num_rows;
    $stmt->close();

    if ($userCount > 0) {
        $errors['email'] = 'ایمیل وارد شده از قبل موجود است.';
    }

    $usernameQuery = "SELECT * FROM users WHERE username=? LIMIT 1";
    $stmt = $conn->prepare($usernameQuery);
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $userCount = $result->num_rows;
    $stmt->close();

    if ($userCount > 0) {
        $errors['username'] = 'نام کاربری وارد شده از قبل موجود است.';
    }

    if (count($errors) === 0) {
        $user = new Users();
        $user->username =$_POST['username'];
        $user->email = $_POST['email'];
        $user->password =$_POST['password'];
        $user->fullname = $_POST['fullname'];
        $user->save();

        $Message1 = "<div class='register-success text-center'><?xml version=\"1.0\" ?><svg class='exit-svg' id=\"false-cross-reject-decline\" style=\"enable-background:new 0 0 15 15;\" version=\"1.1\" viewBox=\"0 0 15 15\" xml:space=\"preserve\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><path d=\"M7.5,0C3.364,0,0,3.364,0,7.5S3.364,15,7.5,15S15,11.636,15,7.5S11.636,0,7.5,0z M7.5,14C3.916,14,1,11.084,1,7.5  S3.916,1,7.5,1S14,3.916,14,7.5S11.084,14,7.5,14z\"/><polygon points=\"10.146,4.146 7.5,6.793 4.854,4.146 4.146,4.854 6.793,7.5 4.146,10.146 4.854,10.854 7.5,8.207 10.146,10.854   10.854,10.146 8.207,7.5 10.854,4.854 \"/></svg><div class='text-on-err-pass-un'>ثبـت نام با موفقیت انجام شد</div></div>";

    }
}

?>
