<?php
session_start()
?>

<?php

if(!$_SESSION["user_type"]=="public"){
    ?>
    <script type="text/javascript">
        location.replace("Admin__product.php");
    </script>
    <?php
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Admin__product.css">
    <title>ثبت محصول جدید</title>
</head>
<body>
<form method="POST" enctype="multipart/form-data" action="Action__admin__product.php" name="add_product">
    <div class="input__wrrapper">
        <label>کد کالا :</label> <input type="text" name="pro_code" id="pro_code">
    </div>

    <div class="input__wrrapper">
        <label>نام کالا :</label> <input type="text" name="pro_name" id="pro_name">
    </div>

    <div class="input__wrrapper">
        <label>موجودی کالا :</label> <input type="text" name="pro_qty" id="pro_qty">
    </div>

    <div class="input__wrrapper">
        <label>قیمت کالا :</label> <input type="text" name="pro_price" id="pro_price">
    </div>

    <div class="input__wrrapper">
        <label id="uploadBtn">
            <input type="file" name="pro_image" id="pro_image">
            آپلود تصویر کالا
        </label>
    </div>

    <div class="input__wrrapper">
        <label>توضیحات تکمیلی کالا :</label> <textarea name="pro_detail" id="pro_detail" cols="35" rows="10"></textarea>
    </div>

    <div class="btn__Wrrapper">
        <input type="submit" value="افزودن کالا">
        <input type="reset" value="جدید">
    </div>

</form>

<?php
$link= mysqli_connect("localhost", "root", "", "yaraghasia");

if(mysqli_connect_errno())
    exit("خطای با شرح زیر رخ داده است:".mysqli_connect_error());
?>

<?php
$query = "SELECT * FROM commodity";
$result = mysqli_query($link, $query);
?>

<section class="allCommodity">
    <table class="main__table">
        <tr>
            <td class="tdTitle">کد کالا</td>
            <td class="tdTitle">نام کالا</td>
            <td class="tdTitle">موجودی کالا</td>
            <td class="tdTitle">قیمت کالا</td>
            <td class="tdTitle">تصویر کالا</td>
            <td class="tdTitle">ابزار مدیریتی</td>
        </tr>
        <?php
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td class="tdEachrow"><?php echo ($row['pro_code']) ?></td>
                <td class="tdEachrow"><?php echo ($row['pro_name']) ?></td>
                <td class="tdEachrow"><?php echo ($row['pro_qty']) ?></td>
                <td class="tdEachrow"><?php echo ($row['pro_price']) ?></td>
                <td class="tdEachrow"><?php echo ($row['pro_image']) ?></td>
                <td class="tdEachrow end">
                    <a class="editLink" href="Action__admin__product.php?id=<?php echo ($row['pro_code']) ?>&action=EDIT">ویرایش</a>
                    <p>|</p>
                    <a class="deleteLink" href="Action__admin__product.php?id=<?php echo ($row['pro_code']) ?>&action=DELETE">حذف</a>

                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</section>
</body>
</html>
