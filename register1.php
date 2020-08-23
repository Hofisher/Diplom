<?php

include("include/db_connect.php");	
    
?>
<!DOCTYPE html>
<html>
<head>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Sport Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--//fonts-->
    <style type="text/css">

        #txt1,#label1 {

            display: none;
        }
    </style>
    <script>
        function visible() {
            var a = document.getElementById("txt1");
            if (a.style.display != "block"){
                document.getElementById("txt1").style.display = 'block';
                document.getElementById("label1").style.display = 'block';
            }
            else
            {
                document.getElementById("txt1").style.display = 'none';
                document.getElementById("label1").style.display = 'none';
            }
        }
    </script>
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
			</div>
			<div class="header-bottom">
				<div class="h_menu4"><!-- start h_menu4 -->
				<a class="toggleMenu" href="#">Menu</a>
				<ul class="nav">
				<li class="active"><a href="product.php">Реакторы</a></li>
					<li><a href="product.php">Фильтры</a></li>					
					<li><a href="product.php">Сборники</a></li>
					<li><a href="product.php">Сушилки</a></li>
					<li><a href="product.php">Центрифуги</a></li>
					<li><a href="product.php">Ещё <i> </i></a>
						<ul>
							<li><a href="contact.php">Массообменное оборудование</a></li>
							<li><a href="account.php">Вспомогательное оборудование</a></li>
							<li><a href="register.php">Производители</a></li>						</ul>
					</li>
				</ul>
									<script type="text/javascript" src="js/nav.js"></script>
			</div><!-- end h_menu4 -->
					<ul class="header-bottom-in">

					</ul>
			<div class="clearfix"> </div>
		</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!---->	
<div class="container">
		<div class="register">

		<div class=" register-top">
            <div id="form" >
                <h2>Вход</h2>
                <form id="1" method="post" action="index.php">
                    <input type="submit" name="variant" value="Регистрация" onclick="visible();" title="Нажмите, если не зарегистрированы" />
                    </br>
                    </br>
                    <label id="label1">Ввведите свое имя: </label>
                    <input type="text" size="20" id="txt1" name="name_use" />
                    </br>
                    <label>Введите логин :  </label>
                    <input type="text" size="20" name="login" />
                    </br>
                    </br>
                    <label>Введите пароль:</label>
                    <input type="password" size="20" name="password" />
                    </br>
                    </br>
                    <input type="submit" name="button_submit" value="Отправить"/>
                </form>
            </div>
            <?php
            if(!empty($_POST['name_use']))
            {
                echo "Регистрация";
            }
            else
                {
                echo "";
            }
            ?>
</div>
</div>
</div>
<div class="clearfix"> </div>
	<!---->
<!--footer-->
    <div class="footer">
        <div class="col-md-3 footer-left">
            <h4>ОБОРУДОВАНИЕ</h4>
            <div class="run-top">
                <ul class="run-grid">
                    <li><a href="product.php">Реакторы</a></li>
                    <li><a href="filter.php">Фильтры</a></li>
                    <li><a href="sushilki.php">Сушилки</a></li>
                    <li><a href="product.php">Сборники</a></li>
                    <li><a href="product.php">Центрифуги</a></li>
                    <li><a href="account.php">Ещё</a></li>
                </ul>
                <ul class="run-grid">
                    <li><a href="#">РЕКОМЕНДАЦИИ ПО ПОДБОРУ ОБОРУДОВАНИЯ</a></li>
                    <li><a href="#">КЛАССИФИКАЦИЯ ОБОРУДОВАНИЯ</a></li>
                    <li><a href="#">МЕТОДЫ ОЧИСТКИ СТОКОВ</a></li>
                </ul>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="col-md-3 footer-left left-footer">
            <h4>ТЕХНОЛОГИЧЕСКАЯ СХЕМА </h4>
            <div class="run-top top-run">
                <ul class="run-grid">
                    <li><a>Производство лидокаина</a></li>
                    <li><a>Производство тетриндола</a></li>
                    <li><a>Производство арбидола</a></li>
                    <li><a></a></li>
                    <li><a></a></li>
                    <li><a></a></li>
                </ul>
                <ul class="run-grid">

                </ul>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="col-md-2 footer-left left-footer">
            <h4>CATALOG</h4>
            <ul class="run-grid-in">

            </ul>
        </div>
        <div class="col-md-4 footer-left left-footer">
            <h4>information </h4>

            <div class="letter">
                <h5>ИНТЕРАКТИВНЫЙ КАТАЛОГ ОБОРУДОВАНИЯ</h5>
                <span>© 2020 by Dinara Ilmurzaeva / e-mail: dinara_ilm@mail.ru </span>
                <h6></h6>
                <p></p>


            </div>

        </div>
        <div class="clearfix"> </div>
    </div>


</body>
</html>