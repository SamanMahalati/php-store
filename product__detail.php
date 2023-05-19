<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="product__detail.css">
    <title>صفحه اختصاصی محصول</title>
</head>
<body>
<?php
$link= mysqli_connect("localhost", "root", "", "yaraghasia");

if(mysqli_connect_errno())
    exit("خطای با شرح زیر رخ داده است:".mysqli_connect_error());

$pro_code = 0;
if (isset($_GET['id']))
    $pro_code = $_GET['id'];


$query = "SELECT * FROM commodity WHERE pro_code = '$pro_code'";
$result = mysqli_query($link, $query);

?>
   <main>
       <?php
       if ($row = mysqli_fetch_array($result)) {

       ?>
       <div class="commodity__image__wrrapper">
           <img src="IMAGES/products/<?php echo ($row['pro_image']) ?>">
       </div>
       <div class="commodity__name__wrrapper">
           <h2 class="commodity__name">نام کالا : <?php echo ($row['pro_name']) ?></h2>
           <h4 class="commodity__qty">تعداد کالا : <?php echo ($row['pro_qty']) ?></h4>
           <h4 class="commodity__price">قیمت : <?php echo ($row['pro_price']) ?></h4>
       </div>
       <div class="commodity__detail__wrrapper">
           <p class="commodity__detail"><?php echo ($row['pro_detail']) ?></p>
       </div>
           <a class="buy__product" href="order.php?id=<?php echo ($row['pro_code']) ?>">خریداری محصول</a>
       <?php
       }
       ?>
   </main>
</body>
</html>
