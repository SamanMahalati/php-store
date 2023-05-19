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
    <link rel="stylesheet" href="Action__order.css">
    <title>نتیجه خرید محصول</title>
</head>
<body>

<?php

$pro_code = $_POST['pro_code'];
$pro_name = $_POST['pro_name'];
$pro_qty = $_POST['pro_qty'];
$pro_price = $_POST['pro_price'];
$total_price = $_POST['total_price'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$username = $_SESSION['username'];

$link= mysqli_connect("localhost", "root", "", "yaraghasia");

if(mysqli_connect_errno())
    exit("خطای با شرح زیر رخ داده است:".mysqli_connect_error());

 $query= "INSERT INTO orders
	(id,
	username,
	orderdate,
	pro_code,
	pro_qty,
	pro_price,
	mobile,
	address,
	trackcode,
	state
	) VALUES
	('0',
	'$username',
	' ".date('y-m-d')." ',
	'$pro_code',
	'$pro_qty',
	'$pro_price',
	'$mobile',
	'$address',
	'000000000000000000000000',
	'0')";

$result = mysqli_query($link, $query);
?>

<?php
if (mysqli_query($link , $query) === true) {
?>

<section class="main__form">
    <div class="right__part">
        <h1 class="success__buy">سفارش شما با موفقیت در سامانه ثبت شد !</h1>
        <h4 class="username__wrrapper">کاربر گرامی آقا / خانم   &nbsp;    <?php echo ("$username")?> </h4>
        <h4 class="proname__wrrapper">محصول <?php echo ("$pro_name")?> با کد <?php echo ("$pro_code")?> به تعداد / مقدار <?php echo ("$pro_qty") ?> با قیمت پایه <?php echo ("$pro_price")?> تومان را سفارش داده اید </h4>
        <h4 class="totalprice__wrrapper">مبلغ قابل پرداخت برای سفارش ثبت شده <?php echo ("$total_price")?> تومان است </h4>
        <h6 class="moreinformation">پس از بررسی سفارش و تایید آن با شما تماس گرفته خواهد شد</h6>
        <h6 class="moreinformation">محصول خریداری شده از طریق پست جمهوری اسلامی ایران طبق آدرس درج شده ارسال خواهد شد</h6>
        <h6 class="moreinformation">در هنگام تحویل گرفتن محصول آن را بررسی و از صحت سلامت آن اطمینان کنید و سپس مبلغ کالا را طبق فاکتور به مامور پست تحویل دهید</h6>
    </div>
    <div>
        <img src="ok.png" alt="">
    </div>
    

</section>

<?php
}
$query = "UPDATE commodity SET pro_qty = pro_qty-$pro_qty WHERE pro_code='$pro_code'";
$result = mysqli_query($link, $query);
?>

</body>
</html>
