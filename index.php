<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta content="Free Web about iranian delicious food" name="description">
    <meta content="HTML , css" name="keywords">
    <meta content="Saman Mahalati" name="author">
    <title>یراق آسیا</title>
    <link href="style.css" rel="stylesheet" type="text/css">

    <link href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" rel="stylesheet">
</head>
<body dir="rtl">

<!-- Here start a header part -->
<header>

    <nav class="container__nav">
        <div class="button__wrapper">
            <a href="Register.php" target="_top"><span class="buttonheader"><i class="fas fa-user"></i>&nbsp;ثبت نام</span></a>
            <?php
            if(isset($_SESSION["state_login"])&& $_SESSION["state_login"]===true)
            {
            ?>
            <a href="logout.php"><span class="buttonheader">&nbsp;خروج از سایت</span></a>
                <?php
            }
            else
            {
            ?>
            <a href="Register.php"><span class="buttonheader">&nbsp;ورود به سایت</span></a>

            <?php
            }
            ?>
        </div>
        <div class="menu__container">
            <ul class="menu">
                <li><i class="fas fa-home"></i>خانه</li>
                <li>محصولات
                    <ul class="submenu">
                        <li>کیف ها</li>
                        <li>کفش ها</li>
                        <li>یراق آلات</li>
                    </ul>
                </li>

                <?php
                if (isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true && $_SESSION["user_type"] == "admin")
                {
                ?>
                    <li class="linkStyle">
                        <a href="Admin__product.php">مدیریت محصولات</a>
                    </li>
                <?php
                }
                ?>
                <li><i class="fas fa-phone"></i>ارتباط با ما</li>
            </ul>
        </div><span class="header__icon"><i class="fa fa-bars"></i></span>
    </nav>
</header>

<div class="main__content">

    <!--<p id="titr">به هر قیمتی غذا نمیفروشیم !</p>-->
    <!--<p id="zirtitr">با ایران فود بهترین ها رو تجربه کن....!</p>-->

    <!-- Here start a top sell part  -->
    <div class="title__box__container">
        <span class="title__box">پر فروش ترین ها</span>
    </div>
    <section class="box__wrrapper">
        <div class="Top__Rate__box">
            <div class="title__food__box">
                <span class="title__food__name">کیف چرم تبریز</span>
            </div><img alt="Rostbeef__image" class="main__images" src="IMAGES/products/1.jpg">
            <p class="Top__Rate__Text">یک غذای مرسوم ایرانی که معمولا در فصول سرد استفاده میشود که غذای مورد علاقه خیلی از ایرانی ها است . کله پاچه یکی از غذا‌های بسیار سنگین است و پروتئین و چربی بالایی دارد که قسمت‌هایی از آن مفید و قسمت‌هایی از آن بسیار مضر هستند که به هیچ عنوان خوردن آن‌ها توصیه نمی‌شود. در واقع باید گفت: کله پاچه یک منبع غذایی است که چربی بسیار بالایی دارد و نه تنها غذای مفیدی به شمار نمی‌رود بلکه بسیار نیز مضر است.ز نظر تغذیه ای، بهترین قسمت پاچه است که چربی کمی دارد و بدترین بخش مغز است که سرشار از کلسترول است. جالب است بدانید مغز گاو یا گوسفند به اندازه ۸ زرده تخم مرغ کلسترول دارد و جزو مواد غذایی بسیار پرچرب محسوب می‌شود. البته توام بودن چربی‌هایی مثل تری گلیسیرید با کلسترول، جذب کلسترول را بالا برده و باعث افزایش چربی خون می‌شود.</p>
        </div>
        <div class="Top__Rate__box">
            <div class="title__food__box">
                <span class="title__food__name">کیف چرم اصفهان</span>
            </div><img alt="Rostbeef__image" class="main__images" src="IMAGES/products/2.jpg">
            <p class="Top__Rate__Text">یک غذای مرسوم ایرانی که معمولا در فصول سرد استفاده میشود که غذای مورد علاقه خیلی از ایرانی ها است . کله پاچه یکی از غذا‌های بسیار سنگین است و پروتئین و چربی بالایی دارد که قسمت‌هایی از آن مفید و قسمت‌هایی از آن بسیار مضر هستند که به هیچ عنوان خوردن آن‌ها توصیه نمی‌شود. در واقع باید گفت: کله پاچه یک منبع غذایی است که چربی بسیار بالایی دارد و نه تنها غذای مفیدی به شمار نمی‌رود بلکه بسیار نیز مضر است.ز نظر تغذیه ای، بهترین قسمت پاچه است که چربی کمی دارد و بدترین بخش مغز است که سرشار از کلسترول است. جالب است بدانید مغز گاو یا گوسفند به اندازه ۸ زرده تخم مرغ کلسترول دارد و جزو مواد غذایی بسیار پرچرب محسوب می‌شود. البته توام بودن چربی‌هایی مثل تری گلیسیرید با کلسترول، جذب کلسترول را بالا برده و باعث افزایش چربی خون می‌شود.</p>
        </div>
        <div class="Top__Rate__box">
            <div class="title__food__box">
                <span class="title__food__name">کوله پشتی چرم</span>
            </div><img alt="Fish__image" class="main__images" src="IMAGES/products/4.jpg">
            <p class="Top__Rate__Text">یک غذای مرسوم ایرانی که معمولا در فصول سرد استفاده میشود که غذای مورد علاقه خیلی از ایرانی ها است . کله پاچه یکی از غذا‌های بسیار سنگین است و پروتئین و چربی بالایی دارد که قسمت‌هایی از آن مفید و قسمت‌هایی از آن بسیار مضر هستند که به هیچ عنوان خوردن آن‌ها توصیه نمی‌شود. در واقع باید گفت: کله پاچه یک منبع غذایی است که چربی بسیار بالایی دارد و نه تنها غذای مفیدی به شمار نمی‌رود بلکه بسیار نیز مضر است.ز نظر تغذیه ای، بهترین قسمت پاچه است که چربی کمی دارد و بدترین بخش مغز است که سرشار از کلسترول است. جالب است بدانید مغز گاو یا گوسفند به اندازه ۸ زرده تخم مرغ کلسترول دارد و جزو مواد غذایی بسیار پرچرب محسوب می‌شود. البته توام بودن چربی‌هایی مثل تری گلیسیرید با کلسترول، جذب کلسترول را بالا برده و باعث افزایش چربی خون می‌شود.</p>
        </div>
        <div class="Top__Rate__box">
            <div class="title__food__box">
                <span class="title__food__name">کفش چرم زنجان</span>
            </div><img alt="Roastbeef__image" class="main__images" src="IMAGES/products/9.jpg">
            <p class="Top__Rate__Text">یک غذای مرسوم ایرانی که معمولا در فصول سرد استفاده میشود که غذای مورد علاقه خیلی از ایرانی ها است . کله پاچه یکی از غذا‌های بسیار سنگین است و پروتئین و چربی بالایی دارد که قسمت‌هایی از آن مفید و قسمت‌هایی از آن بسیار مضر هستند که به هیچ عنوان خوردن آن‌ها توصیه نمی‌شود. در واقع باید گفت: کله پاچه یک منبع غذایی است که چربی بسیار بالایی دارد و نه تنها غذای مفیدی به شمار نمی‌رود بلکه بسیار نیز مضر است.ز نظر تغذیه ای، بهترین قسمت پاچه است که چربی کمی دارد و بدترین بخش مغز است که سرشار از کلسترول است. جالب است بدانید مغز گاو یا گوسفند به اندازه ۸ زرده تخم مرغ کلسترول دارد و جزو مواد غذایی بسیار پرچرب محسوب می‌شود. البته توام بودن چربی‌هایی مثل تری گلیسیرید با کلسترول، جذب کلسترول را بالا برده و باعث افزایش چربی خون می‌شود.</p>
        </div>
        <div class="Top__Rate__box">
            <div class="title__food__box">
                <span class="title__food__name">کفش چرم یزد</span>
            </div><img alt="Meat__image" class="main__images" src="IMAGES/products/8.jpg">
            <p class="Top__Rate__Text">یک غذای مرسوم ایرانی که معمولا در فصول سرد استفاده میشود که غذای مورد علاقه خیلی از ایرانی ها است . کله پاچه یکی از غذا‌های بسیار سنگین است و پروتئین و چربی بالایی دارد که قسمت‌هایی از آن مفید و قسمت‌هایی از آن بسیار مضر هستند که به هیچ عنوان خوردن آن‌ها توصیه نمی‌شود. در واقع باید گفت: کله پاچه یک منبع غذایی است که چربی بسیار بالایی دارد و نه تنها غذای مفیدی به شمار نمی‌رود بلکه بسیار نیز مضر است.ز نظر تغذیه ای، بهترین قسمت پاچه است که چربی کمی دارد و بدترین بخش مغز است که سرشار از کلسترول است. جالب است بدانید مغز گاو یا گوسفند به اندازه ۸ زرده تخم مرغ کلسترول دارد و جزو مواد غذایی بسیار پرچرب محسوب می‌شود. البته توام بودن چربی‌هایی مثل تری گلیسیرید با کلسترول، جذب کلسترول را بالا برده و باعث افزایش چربی خون می‌شود.</p>
        </div>
        <div class="Top__Rate__box">
            <div class="title__food__box">
                <span class="title__food__name">کیف چرم</span>
            </div><img alt="Kebab__image" class="main__images" src="IMAGES/products/11.jpg">
            <p class="Top__Rate__Text">یک غذای مرسوم ایرانی که معمولا در فصول سرد استفاده میشود که غذای مورد علاقه خیلی از ایرانی ها است . کله پاچه یکی از غذا‌های بسیار سنگین است و پروتئین و چربی بالایی دارد که قسمت‌هایی از آن مفید و قسمت‌هایی از آن بسیار مضر هستند که به هیچ عنوان خوردن آن‌ها توصیه نمی‌شود. در واقع باید گفت: کله پاچه یک منبع غذایی است که چربی بسیار بالایی دارد و نه تنها غذای مفیدی به شمار نمی‌رود بلکه بسیار نیز مضر است.ز نظر تغذیه ای، بهترین قسمت پاچه است که چربی کمی دارد و بدترین بخش مغز است که سرشار از کلسترول است. جالب است بدانید مغز گاو یا گوسفند به اندازه ۸ زرده تخم مرغ کلسترول دارد و جزو مواد غذایی بسیار پرچرب محسوب می‌شود. البته توام بودن چربی‌هایی مثل تری گلیسیرید با کلسترول، جذب کلسترول را بالا برده و باعث افزایش چربی خون می‌شود.</p>
        </div>
    </section>

    <!-- Here start commodity part -->
    <div class="title__box__container">
        <span class="title__box">محصولات</span>
    </div>
    <main class="Wrrapper__commodity">
        <section class="Commodity__wrapper__firstrow">

            <?php
            $link= mysqli_connect("localhost", "root", "", "yaraghasia");
            if(mysqli_connect_errno())
                exit("خطای با شرح زیر رخ داده است:".mysqli_connect_error());
            $query="SELECT * FROM  commodity";
            $result= mysqli_query($link, $query);
            ?>

            <?php
            $counter=0;
            while($row = mysqli_fetch_array($result)){
            $counter++;
            ?>
            <a href="product__detail.php?id=<?php echo ($row['pro_code'])?>">
                <div class="commodity__item">
                    <div class="commodity__img">
                        <img src="IMAGES/products/<?php echo ($row['pro_image']) ?>">
                    </div>

                    <div  class="commodity__name">
                        <p><?php echo ($row['pro_name']) ?></p>
                    </div>

                    <div class="commodity__details">
                    <span><?php echo ($row['pro_price']) ?>
                    <label>تومان</label>
                    </span>
                        <div>
                            <label id="numberCommodity">تعداد</label><span><?php echo ($row['pro_qty']) ?></span>
                        </div>
                    </div>
                </div>
            </a>

            <?php
            }
            ?>
        </section>

        <section class="other__commodity__wrrapper">
            <button class="button__other__commodity">
                <span>تمام محصولات</span>
                <i class="fas fa-arrow-left"></i>
            </button>

        </section>
    </main>

    <!-- Here start about us part -->
    <div class="title__box__container">
        <span class="title__box">درباره ما</span>
    </div>
    <section class="about__container">
        <div class="right__part">
            <h4 class="title__right__part">بهترین تجربه !</h4>
            <h4 class="branch">شعبه ها</h4>
            <h6 class="right__contant1">ایران&nbsp;&nbsp; <span class="parantes">(</span>تهران<span class="parantes">)</span></h6>
            <h6 class="right__contant2">فرانسه &nbsp;&nbsp;<span class="parantes">(</span>پاریس<span class="parantes">)</span></h6>
            <h6 class="right__contant3">کانادا &nbsp;&nbsp;<span class="parantes">(</span>کانادا<span class="parantes">)</span></h6><strong class="right__bottom__content">برای خلق تجربه ای بهتر باید به نیاز مشتریان توجه شود , سپس برای رفع آن نیاز تلاش کرد !</strong>
        </div>
        <div class="left__part">
            <h3 class="number__left__part"><span class="text__shadow">شماره تلفن :</span></h3>
            <h5 class="left__content">777-586-312</h5>
            <h3 class="number__left__part"><span class="text__shadow">ایمیل ما :</span></h3>
            <h5 class="left__content">iranfood@gmail.com</h5>
            <h3 class="number__left__part"><span class="text__shadow">آدرس ما :</span></h3>
            <h5 class="ADDRESS">تهران , تهرانپارس , خیابان مدنی , نرسیده به مترو تهرانپارس , پلاک 12 , واحد 1</h5>
            <div class="left__box"><img src="IMAGES/products/1-1.jpg"> <img src="IMAGES/products/1-2.jpg"></div>
        </div>
    </section>


    <!-- Here start comment part -->
    <div class="title__box__container">
        <span class="title__box">نظرات</span>
    </div>
    <section class="comment__wrrapper">
        <div class="comment__item">
            <div class="comment__text">
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیکاست چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</p>
            </div>
            <div class="comment__person__picture">
                <img alt="" src="IMAGES/person-1.png"> <span class="person__comment__name">رضا دولتی صاحب استارتاپ</span>
            </div>
        </div>
        <div class="comment__item">
            <div class="comment__text">
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیکاست چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</p>
            </div>
            <div class="comment__person__picture">
                <img alt="" src="IMAGES/person-2.png"> <span class="person__comment__name">امیر رضا دهقان صاحب استارتاپ</span>
            </div>
        </div>
        <div class="comment__item">
            <div class="comment__text">
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیکاست چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</p>
            </div>
            <div class="comment__person__picture">
                <img alt="" src="IMAGES/person-3.png"> <span class="person__comment__name">رنه سینانی صاحب استارتاپ</span>
            </div>
        </div>
    </section>
    <br><br>


    <!-- Here start footer part -->
    <footer>
        <section class="footer__wrrapper">
            <div class="footer__right__part">
                <div class="footer__main__text">
                    <div class="first__footer__text">
                        ایران فود
                    </div>
                    <div class="second__footer__text">
                        با بیش از نیم قرن فروش , از تهران فود تا ایران فود...!!
                    </div>
                </div>
                <div class="social__icon">
                    <div class="icon__wrrapper">
                        <i class="fab fa-instagram"></i>
                    </div>
                    <div class="icon__wrrapper">
                        <i class="fab fa-telegram"></i>
                    </div>
                    <div class="icon__wrrapper">
                        <i class="fab fa-linkedin"></i>
                    </div>
                    <div class="icon__wrrapper">
                        <i class="fab fa-twitter"></i>
                    </div>
                </div>
            </div>
            <div class="footer__box">
                <div class="footer__box__item">
                    <a>درباره ایران فود</a>
                </div>
                <div class="footer__box__item">
                    <a>حریم خصوصی</a>
                </div>
                <div class="footer__box__item">
                    <a>قوانین سایت</a>
                </div>
                <div class="footer__box__item">
                    <a>وبلاگ</a>
                </div>
                <div class="footer__box__item">
                    <a>
                        <?php
                        if(isset($_SESSION['counter'])){
                            $_SESSION['counter']+=1;
                        } else{
                            $_SESSION['counter']=1;
                        }
                        $msg = "تعداد بازدید شما از سایت :".$_SESSION['counter'];
                        ?>
                        <?php
                        echo($msg);
                        ?>
                    </a>
                </div>
            </div>
            <div class="footer__box">
                <div class="footer__box__item">
                    <a>تماس با ایران فود</a>
                </div>
                <div class="footer__box__item">
                    <a>پرسش های متداول</a>
                </div>
                <div class="footer__box__item">
                    <a>ثبت شکایات</a>
                </div>
                <div class="footer__box__item">
                    <a>اپلیکیشن موبایل</a>
                </div>
                <div class="footer__box__item">
                    <a>تاریخچه</a>
                </div>
            </div>
        </section>
    </footer>
</div>
<script>
    let menu = document.querySelector(".menu")
    let menuBtn = document.querySelector(".header__icon")
    let menuBtnIcon = document.querySelector(".header__icon i")
    menuBtn.addEventListener("click", function() {
        if (menuBtnIcon.classList.contains("fa-bars")) {
            menu.style.left = "0"
            menuBtnIcon.classList = "fa fa-times"
        } else {
            menu.style.left = "-256px"
            menuBtnIcon.classList = "fa fa-bars"
        }
    })</script>
</body>
</html>