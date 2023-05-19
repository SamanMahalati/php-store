<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نتیجه ثبت نام</title>
    <link href="Register.css" rel="stylesheet" type="text/css">
    <link href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" rel="stylesheet">

</head>
<body>
<?php
if(isset($_POST['SigninUsername']) && !empty($_POST['SigninUsername']) &&
    isset($_POST['SigninPhone']) && !empty($_POST['SigninPhone']) &&
    isset($_POST['SigninPassword']) && !empty($_POST['SigninPassword']))
{
    $username = $_POST['SigninUsername'];
    $phone = $_POST['SigninPhone'];
    $password = $_POST['SigninPassword'];
}
else
    exit("<div class='show__Not__register'><span>برخی فیلد ها مقدار دهی نشده !! </span></div>");

$link= mysqli_connect("localhost", "root", "", "yaraghasia");
if(mysqli_connect_errno())
    exit("خطای با شرح زیر رخ داده است:".mysqli_connect_error());
$query ="INSERT INTO users (username, phone, password , type) VALUES('$username','$phone', '$password' , '0')";
if(mysqli_query($link, $query) === true)
    echo "<div class='show__Result__register'><span>ثبت نام با موفقیت انجام شد</span></div>";
else
    echo "<div class='show__Not__register'><span>ثبت نام ناموفق بود !</span></div>";
?>

</body>
</html>
