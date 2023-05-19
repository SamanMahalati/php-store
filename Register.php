<?php
session_start();
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>فرم ورود | ثبت نام</title>
    <link href="style__register.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<body>
<?php
if (isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true) {
    ?>
    <script>
        location.replace("index.php")
    </script>
    <?php
}
?>
<div class="image__box">
    <div class="form__box">
        <div class="btn__box">
            <div id="btn"></div>
            <button type="button" class="toggle__button one " onclick="register()">ثبت نام</button>
            <button type="button" class="toggle__button two" onclick="login()">ورود</button>
        </div>

        <form id="login" class="input__wrraper" method="post" action="Login__Action.php">
            <input class="input__field" type="text" placeholder="نام کاربری" id="username" name="LoginUsername">
            <input class="input__field" type="text" placeholder="رمز عبور" id="password" name="LoginPassword">
            <input type="checkbox"  class="ckeck-box"><span>من رو به خاطر بسپار </span>
            <button type="submit" class="submit__btn">ورود</button>
        </form>

        <form id="register" class="input__wrraper" action="Register__Action.php" method="POST">
            <input class="input__field" type="text" placeholder="نام کاربری" id="SigninUsername" name="SigninUsername">
            <input class="input__field" type="number" placeholder="شماره موبایل" id="SigninPhone" name="SigninPhone">
            <input class="input__field" type="password" placeholder="رمز عبور" id="SigninPassword" name="SigninPassword">
            <input type="checkbox"  class="ckeck-box"><span>با قوانبن سایت موافقم </span>
            <button type="submit" class="submit__btn">ثبت نام</button>
        </form>
    </div>
</div>

<script>
    var x = document.getElementById("login");
    var y = document.getElementById("register");
    var z = document.getElementById("btn");
    function register(){
        x.style.left = "-400px";
        y.style.left = "50px";
        z.style.left = "110px";
    }
    function login(){
        x.style.left = "50px";
        y.style.left = "450px";
        z.style.left = "0";
    }
</script>
</body>
</html>