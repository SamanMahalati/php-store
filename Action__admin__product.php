<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>نتیجه ثبت کالا</title>
    <link rel="stylesheet" href="Register.css">
</head>
<body>
<?php
session_start();
?>
<?php

if(!$_SESSION["user_type"]=="admin"){
?>
<script type="text/javascript">

    location.replace("index.php");

    <?php
    }
    ?>

    <?php
    if(isset($_POST['pro_code']) && !empty($_POST['pro_code']) &&
        isset($_POST['pro_name']) && !empty($_POST['pro_name']) &&
        isset($_POST['pro_qty']) && !empty($_POST['pro_qty']) &&
        isset($_POST['pro_price']) && !empty($_POST['pro_price']) &&
        isset($_FILES["pro_image"]) && $_FILES["pro_image"]["error"] == 0 &&
        isset($_POST['pro_detail']) && !empty($_POST['pro_detail']))
    {
        $pro_code = $_POST['pro_code'];
        $pro_name = $_POST['pro_name'];
        $pro_qty = $_POST['pro_qty'];
        $pro_price = $_POST['pro_price'];
        $pro_image = $_FILES['pro_image']['name'];
        $pro_detail = $_POST['pro_detail'];
    }
    else
        exit("<p class='show__Not__register'>برخی از فیلد ها مقدار دهی نشده است</p>");

    $link= mysqli_connect("localhost", "root", "", "yaraghasia");
    $target_dir = "IMAGES/products/";

    $target_file = $target_dir.$_FILES["pro_image"]['tmp_name'];

    $uploadOk= 1;

    $imageFileType=pathinfo($target_file, PATHINFO_EXTENSION);

    $check = getimagesize($_FILES["pro_image"]["tmp_name"]);


    if($check!==false){
        $uploadOk=1;
    }
    else{
        echo ("<p class='show__Not__register'>پرونده انتخاب شده یک تصویر نیست</p>");
        $uploadOk=0;
    }

    if(file_exists($target_file)){
        echo ("<p class='show__Result__register'>پرونده ای با همین نام در سرویس دهنده میزبان وجود دارد</p>");
        $uploadOk=0;
    }
    if($_FILES["pro_image"]["size"] > (5000*10240)){
        echo ("<p class='show__Result__register'>اندازه پرونده انتخابی بیشتر از 500 کیلوبایت است</p>");
        $uploadOk=0;
    }


    if($uploadOk == 1){
        $query= "INSERT INTO commodity
	(pro_code,
	pro_name,
	pro_qty,
	pro_price,
	pro_image,
	pro_detail) VALUES
	('$pro_code',
	'$pro_name',
	'$pro_qty',
	'$pro_price',
	'$pro_image',
	'$pro_detail')";
        if(mysqli_query($link, $query) === true)
            echo("<p class='show__Result__register'><b> کالا با موفقیت به انبار اضافه شد</b></p>");
        else
            echo("<p class='show__Not__register'><b>خطا در ثبت مشخصات کالا در انبار</b></p>");
    }
    else
        echo("<p class='show__Not__register'><b>خطا در ثبت مشخصات کالا در انبار</b></p>");
    mysqli_close($link);
    ?>

</body>
</html>