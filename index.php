<?php

include("include/db_connect.php");

?>
<!DOCTYPE html>
<html>
<head>
    <title>Reactors</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <!--theme-style-->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="trackbar/trackbar.css" rel="stylesheet" type="text/css" />
    <link href="trackbar/jQuery/trackbar.css" rel="stylesheet" type="text/css" />

    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-type" content="text/html; charset=windows-1251" />
    <meta name="keywords" content="Sport Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script type="text/javascript" src="trackbar/jQuery/jquery-1.2.3.min.js"></script>
    <script type="text/javascript" src="trackbar/trackbar.js"></script>
    <script type="text/javascript" src="trackbar/jQuery/jquery.trackbar.js"></script>
    <!--fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!--//fonts-->

</head>
<body>
<!--header-->
<div class="line">

</div>
<div class="header">
    <div class="logo">
        <a href="index.php"><img src="images/logo.png" alt="" ></a>
    </div>
    <div  class="header-top">
        <div class="header-grid">
            <ul class="header-in">
                <li ><a href="account.php">  </a> </li>

            </ul>
            <div class="search-box">
                <div id="sb-search" class="sb-search">
                    <form>
                        <input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
                        <input class="sb-search-submit" type="submit" value="">
                        <span class="sb-icon-search"> </span>
                    </form>
                </div>
            </div>
            <!-- search-scripts -->
            <script src="js/classie.js"></script>
            <script src="js/uisearch.js"></script>
            <script>
                new UISearch( document.getElementById( 'sb-search' ) );
            </script>
            <!-- //search-scripts -->
            <div class="online">
            </div>
            <div class="clearfix">
            </div>
        </div>

        <?php
        include("include/menu.php");
        ?>
	<!---->
	<div class="banner">
	<div class="container">
		<div class="banner-matter">
			<h1>Информационная система по выбору оборудования многоассортиментных<span>химических производств</h1>
			<div class="out">
				<a href="#" class="find">выбрать процесс </a>
				<a href="product.php" class="shop">каталог оборудования</a>
				<div class="clearfix"> </div>
			</div>
		</div>
		</div>
	</div>
	</div>
<!---->
<div class="sport-your">
                        <requried-jsfiles-for owl>
							<link href="css/owl.carousel.css" rel="stylesheet">
							    <script src="js/owl.carousel.js"></script>
							        <script>
									    $(document).ready(function() {
									      $("#owl-demo").owlCarousel({
									        items : 5,
									        lazyLoad : true,
									        autoPlay : true,
									        navigation : true,
									        navigationText :  true,
									        pagination : false,
									      });
									    });
									  </script>
                            <requried-jsfiles-for owl>

		                <start content_slider>
		<div class="line1">

		</div>
		<div id="example1">
		<div id="owl-demo" class="owl-carousel text-center">
			<div class="item">
				<a href="product.php" title="image" rel="title1">
					<img class="img-responsive " src="images/reactor2.jpg" alt="">
				<div class="run">
					<i> </i>
					<p>РЕАКТОРЫ</p>
				</div>
				</a>
			</div>
			<div class="item">
				<a href="filter.php" title="image" rel="title1">
					<img class="img-responsive " src="images/filter.jpg" alt="">
				<div class="run">
					<i class="foot-in"> </i>
					<p>ФИЛЬТРЫ</p>
				</div>
				</a>
			</div>
			<div class="item">
				<a href="centrifugi.php" title="image" rel="title1">
					<img class="img-responsive " src="images/centrifug.jpg" alt="">
				<div class="run">
				<i class="cycling"> </i>
				<p>ЦЕНТРИФУГИ</p>
				</div>
				</a>
			</div>
			<div class="item">
				<a href="sushilki.php" title="image" rel="title1">
					<img class="img-responsive " src="images/sushka.jpg" alt="">
				<div class="run">
				<i class="fitness"> </i>
				<p>СУШИЛКИ</p>
				</div>
				</a>
			</div>
			<div class="item">
				<a href="sborniki.php" title="image" rel="title1">
					<img class="img-responsive " src="images/reactor.jpg" alt="">
				<div class="run">
				<i class="tennis"> </i>
				<p>ЕМКОСТНОЕ ОБОРУДОВАНИЕ</p>
				</div>
				</a>
			</div>
			<div class="item">
				<a href="sborniki.php" title="image" rel="title1">
					<img class="img-responsive " src="images/sbornik.jpg" alt="">
				<div class="run">
				<i> </i>
				<p>СБОРНИКИ</p>
				</div>
				</a>
			</div>
			<div class="item">
				<a href="single.php" title="image" rel="title1">
					<img class="img-responsive " src="images/mkolona.jpg" alt="">
				<div class="run">
					<i class="foot-in"> </i>
					<p>МАССООБМЕННОЕ ОБОРУДОВАНИЕ</p>
				</div>
				</a>
			</div>
			<div class="item">
				<a href="single.php" title="image" rel="title1">
					<img class="img-responsive " src="images/teploobm.jpg" alt="">
				<div class="run">
				<i class="cycling"> </i>
				<p>ТЕПЛООБМЕННИКИ</p>
				</div>
				</a>
			</div>
			<div class="item">
				<a href="single.php" title="image" rel="title1">
					<img class="img-responsive " src="images/nasos.jpg" alt="">
				<div class="run">
				<i class="fitness"> </i>
				<p>НАСОСНОЕ ОБОРУДОВАНИЕ</p>
				</div>
				</a>
			</div>
			<div class="item">
				<a href="single.php" title="image" rel="title1">
					<img class="img-responsive " src="images/compressor.jpg" alt="">
				<div class="run">
				<i class="tennis"> </i>
				<p>КОМПРЕССОРЫ</p>
				</div>
				</a>
			</div>
			<div class="item">
				<a href="single.php" title="image" rel="title1">
					<img class="img-responsive " src="images/silos.jpg" alt="">
				<div class="run">
				<i> </i>
				<p>ВСПОМОГАТЕЛЬНОЕ ОБОРУДОВАНИЕ</p>
				</div>
				</a>
			</div>
		</div>
		</div>
		<h6 class="your-in">...</h6>
		<div class="line2">
			</div>
        </div>
	</div>

<!--footer-->
<?php
include("include/footer.php");
?>

</body>
</html>