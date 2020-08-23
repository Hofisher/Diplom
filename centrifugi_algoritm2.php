<?php

include("include/db_connect.php");	
$Series=$_POST["series"];
?>
<!DOCTYPE html>
<html>
<head>
<title>Centrifugi</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/addons/datatables.min.css" rel="stylesheet">
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
<script>
function isAlternative(){
var 	
	
	
	

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
			<div class="header-bottom">
				<div class="h_menu4"><!-- start h_menu4 -->
				<a class="toggleMenu" href="#">Menu</a>
				<ul class="nav">
					<li class="active"><a href="product.php">Реакторы</a></li>
					<li><a href="filter.php">Фильтры</a></li>					
					<li><a href="sborniki.php">Сборники</a></li>
					<li><a href="sushilki.php">Сушилки</a></li>
					<li><a href="centrifugi.php">Центрифуги</a></li>
					<li><a href="#">Ещё <i> </i></a>
						<ul>
							<li><a href="#">Массообменное оборудование</a></li>
							<li><a href="#">Вспомогательное оборудование</a></li>
							<li><a href="#">Производители</a></li>
						</ul>
					</li>
				</ul>
				<script type="text/javascript" src="js/nav.js"></script>
			</div><!-- end h_menu4 -->
					<ul class="header-bottom-in">
						<!--<li ><select class="drop">
							  <option value="Dollars" class="in-of">Get Active</option>
							  <option value="Euro" class="in-of">Get Active1</option>
							  <option value="Yen" class="in-of">Get Active2</option>
							</select> </li>
						<li ><select class="drop">
							  <option value="Dollars" class="in-of">Community</option>
							  <option value="Euro" class="in-of">Community1</option>
							  <option value="Yen" class="in-of">Community2</option>
							</select></li>--!>		
					</ul>
			<div class="clearfix"> </div>
		</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!---->	
</div>
</div>
</div>
</div>
<!--block right-->
<div class="block-right">
	<p class="header-title">Выбор центрифуг</p>
		<ul class="checkbox-brand">
       
<?php
	include("include/block_parameter5.php");
?>
    
</div> 
</div>  
<!--content-->      
<div class="content">
<p>Центрифуги серии PSD</p> 
<table id="dtMaterialDesignExample" class="table table-striped" cellspacing="0" width="100%">
<thead>
    <tr>
      <th class="th-sm">Модель
      </th>
      <th class="th-sm">Стоимость руб
      </th>
      <th class="th-sm">Высота мм
      </th>
      <th class="th-sm">Длина мм
      </th>
      <th class="th-sm">Ширина мм
      </th>
	  <th class="th-sm">Фактор разделения
      </th>
	  <th class="th-sm">Мощность кВт
      </th>
	  <th class="th-sm">Максимальная загрузка кг
      </th>
    </tr>
  </thead>
  <tbody>
 
<?php

if ( isset ( $_POST['series'] ) ){
  
$conditions = [];
foreach ($_POST['series'] as $series) {
$conditions[] = "('Series' IN ('$series'))";
}
$show = implode (" ", $conditions);
	$result = mysqli_query($db,'SELECT Model, cost, weight, height, lenght, widht, factor_separation, power, max_load from centrifugi as c WHERE '.$show);
    if (mysqli_num_rows($result)>0)
    {
     while ($row = mysqli_fetch_array($result))        
        {

          echo '    
         <tr><td>' . $row['Model']
    . '</td><td>' . $row['cost'] 
    . '</td><td>' . $row['weight'] 
    . '</td><td>' . $row['height']
    . '</td><td>' . $row['widht']
    . '</td><td>' . $row['factor_separation']
    . '</td><td>' . $row['power']
    . '</td><td>' . $row['max_load']
    . '</td></tr>
          '; 
        }
        
        echo "</tbody></table>";
    }
  else { echo "0 results"; }

}
else {
  
$message = "Данных нет";  
  
}
?>
<p><input type="button" value="Выбрать альтернативу" onclick=""></p>

</div>	

</div>



<!--
<div class="footer">
		<div class="col-md-3 footer-left">
			<h4>ОБОРУДОВАНИЕ</h4>
			<div class="run-top">
				<ul class="run-grid">
					<li><a href="product.php">Реакторы</a></li>
					<li><a href="filter.php">Фильтры</a></li>
					<li><a href="sushilki.php">Сушилки</a></li>
					<li><a href="sborniki.php">Сборники</a></li>
					<li><a href="centrifugi.php">Центрифуги</a></li>
					<li><a href="product.php">Ещё</a></li>
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
		<div class="col-md-3 footer-left left-footer">
			<h4>CATALOG</h4>
				<ul class="run-grid-in">
				
				</ul>
		</div>
		<div class="col-md-3 footer-left left-footer">
		<h4>information </h4>
			
			<div class="letter">
				<h5>ИНТЕРАКТИВНЫЙ КАТАЛОГ ОБОРУДОВАНИЯ</h5>
				<span>© 2018 by Dinara Ilmurzaeva / e-mail: dinara_ilm@mail.ru </span>
				<h6></h6>
				<p></p>
		
			
			</div>
			
		</div>
		<div class="clearfix"> </div>
</div>-->


</body>
</html>