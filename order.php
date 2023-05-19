<?php
session_start()
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Admin__product.css">
    <link rel="stylesheet" href="Register.css">
    <title>ثبت محصول جدید</title>
</head>
<body>

<?php
$link= mysqli_connect("localhost", "root", "", "yaraghasia");

if(mysqli_connect_errno())
    exit("خطای با شرح زیر رخ داده است:".mysqli_connect_error());

$pro_code = 0;
if (isset($_GET['id']))
    $pro_code = $_GET['id'];

if (!(isset($_SESSION['state_login']) && $_SESSION['state_login'] === true )) {
?>
    <p class='show__Result__register'> برای خریدن محصول در سایت ثبت نام کنید یا اگر حسابی دارید وارد شوید ! <a class="mustLogin" href="Register.php"> از اینجا</a> </p> <br/>
<?php
    exit();
}
$query = "SELECT * FROM commodity WHERE pro_code = '$pro_code'";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result);

?>

<form method="POST" action="Action__order.php" name="buy_product">
<!--    --><?php
//    if ($row = mysqli_fetch_array($result)) {
//    ?>
    <div class="input__wrrapper">
        <label>کد کالا :</label> <input type="text" name="pro_code" id="pro_code" value="<?php echo ($pro_code) ?>">
    </div>

    <div class="input__wrrapper">
        <label>نام کالا :</label> <input type="text" name="pro_name" id="pro_name" value="<?php echo ($row['pro_name']) ?>">
    </div>

    <div class="input__wrrapper">
        <label>تعداد درخواستی :</label> <input type="text" name="pro_qty" id="pro_qty" onblur="calc_price()">
    </div>

    <div class="input__wrrapper">
        <label>قیمت واحد کالا :</label> <input type="text" name="pro_price" id="pro_price" value="<?php echo ($row['pro_price']) ?>">
    </div>

    <div class="input__wrrapper">
        <label>مبلغ قابل پرداخت :</label> <input type="text" name="total_price" id="total_price">
    </div>

    <script>
        function calc_price() {
            let pro_qty =<?php echo ($row['pro_qty']); ?>;
            let price = document.getElementById('pro_price').value;
            let count = document.getElementById('pro_qty').value;
            let total_price;

            if ( count > pro_qty) {
                alert("تعداد موجودی انبار کمتر از درخواست شما است !!")
                document.getElementById('pro_qty').value = 0;
                count = 0;
            }
            if (count === 0 || count === ''){
                total_price = 0;

            }
            else{
                total_price = count * price;
                document.getElementById('total_price').value = total_price;
            }

        }
    </script>

    <?php
    $query = "SELECT * FROM users WHERE username = '{$_SESSION['username']}'";
    $result = mysqli_query($link, $query);
    $user_row = mysqli_fetch_array($result);
    ?>

    <div class="input__wrrapper">
        <label>نام خریدار :</label> <input type="text" name="username" id="pro_price" value="<?php echo ($user_row['username']) ?>">
    </div>

    <div class="input__wrrapper">
        <label>شماره تلفن همراه :</label> <input type="text" name="mobile" id="mobile" value="<?php echo ($user_row['phone']) ?>">
    </div>


    <div class="input__wrrapper">
        <label>آدرس دقیق پستی جهت دریافت محصول :</label> <textarea name="address" id="address" cols="35" rows="5"></textarea>
    </div>

    <div class="btn__Wrrapper">
        <input type="submit" value="خرید محصول" onclick="check__input()" >
    </div>

<!--    <script>-->
<!--        function check__input() {-->
<!--            let r = confirm("آیا از صحت اطلاعات وارد شده اطمینان دارید ؟")-->
<!--            if (r) {-->
<!--                let validation = true;-->
<!--                let count = document.getElementById('pro_qty').value;-->
<!--                let mobile = document.getElementById("mobile").value;-->
<!--                let address = document.getElementById('address').value;-->
<!---->
<!--                if (count === 0 || count === ''){-->
<!--                    validation = false;-->
<!--                }-->
<!--                if (mobile.length < 11) {-->
<!--                    validation = false;-->
<!--                }-->
<!--                if (address.length < 15) {-->
<!--                    validation = false;-->
<!--                }-->
<!---->
<!--                if (validation) {-->
<!--                    document.submit();-->
<!--                }-->
<!--                else {-->
<!--                    alert("برخی از ورودی های فرم سفارش محصول به درستی پر نشده است !!")-->
<!--                }-->
<!---->
<!--            }-->
<!--        }-->
<!--    </script>-->
<?php
//    }
//?>
</form>
</body>
</html>

