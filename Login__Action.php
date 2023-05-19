<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>نتیجه ورود</title>
    <link href="Register.css" rel="stylesheet" type="text/css">

</head>
<body>
<?php

if (isset($_POST['LoginUsername']) && !empty($_POST['LoginUsername']) && isset($_POST['LoginPassword']) && !empty($_POST['LoginPassword'])){
    $username = $_POST['LoginUsername'];
    $password = $_POST['LoginPassword'];
} else
    exit("<p class='show__Not__register'><b>برخی فیلد ها مقدار دهی نشده </b></p>");

$link= mysqli_connect("localhost", "root", "", "yaraghasia");

if(mysqli_connect_errno())
    exit("خطای با شرح زیر رخ داده است:".mysqli_connect_error());


$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result);

if ($row){
    $_SESSION["state_login"] = true;
    $_SESSION["username"] = $row['username'];

    if($row["type"] == 0){
        $_SESSION["user_type"]="public";
        echo("<p class='show__Result__register'> به عنوان مهمان خوش آمدید</p>");

    }

    elseif($row["type"] == 1){
        $_SESSION["user_type"]="admin";
        ?>
        <script>
        location.replace("Admin__product.php")
        </script>
<?php
    }
} else
    echo("<p class='show__Not__register'><b>نام کاربری یا کلمه عبور یافت نشد.</b></p>");
    mysqli_close($link);
    ?>

</body>
</html>