<?php

include("include/db_connect.php");	



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
<p>Добавление оборудования в каталог</p> 
 <form method="POST" action="add_centrifug.php" >
		<select name="equipment">
		<option disabled>Выберите вид оборудования</option>
			<option selected value="reactors" id=1 <?php if ((isset($_POST["equipment"]))&& ($_POST["equipment"]) == "reactors") echo'selected';?>>Реакторы</option>
			<option value="filters" id=2 <?php if ((isset($_POST["equipment"]))&& ($_POST['equipment']) == "filters") echo'selected';?>>Фильтры</option>
			<option value="dryers" id=3 <?php if ((isset($_POST["equipment"]))&& ($_POST['equipment']) == "dryers") echo'selected';?>>Сушилки</option>
			<option value="centrifugs" id=4 <?php if ((isset($_POST["equipment"]))&& ($_POST['equipment']) == "centrifugs") echo'selected';?>>Центрифуги</option>
			<option value="capacities" id=5 <?php if ((isset($_POST["equipment"]))&& ($_POST['equipment']) == "capacities") echo'selected';?>>Сборники</option>
		</select>
		<input type=submit value="ок" />
		
<?php
if (isset($_POST['equipment'])) echo $_POST['equipment'];

if(isset($_POST['equipment']) && $_POST['equipment'] == "centrifugs"){
					echo'
					<p>Заполните поля для центрифуг:</p>
					<p><input type=text name=seria value="Серия"/> </P>
					<p><input type=text name=model value="Модель"/> </P>
					<p><input type=text name=named value="Наименование"/> </P>
					<div class="file-load-block">
					<p><input type=file  name=myimage value="Фотография (.jpg, .png)"/></P>
					</div>
					<p><input type=text name=manufacture value="Производитель"/> </P>
					<p><input type=text name=description value="Описание"/> </P>
					<p><input type=text name=cost value="Стоимость руб"/> </P>
					<p><input type=text name=typeapp value="Тип аппарата"/> </P>
					<p><input type=text name=weight value="Вес кг"/> </P>
					<p><input type=text name=factsep value="Фактор разделения"/> </P>
					<p><input type=text name=power value="Мощность кВт"/> </P>
					<p><input type=text name=diameter value="Диаметр мм"/> </P>
					<p><input type=text name=maxload value="Максимальная загрузка кг"/> </P>
					<input type=submit name=add value="добавить в каталог"/> 
					';
if (isset($_POST['add'])&& isset($_POST['seria'])&& isset($_POST['model'])&& isset($_POST['named'])&& isset($_POST['manufacture'])&& isset($_POST['description'])&& 
isset($_POST['cost'])&& isset($_POST['typeapp'])&& isset($_POST['weight']) && isset($_POST['factsep'])&& isset($_POST['power'])&& isset($_POST['diameter'])&& isset($_POST['max_load']))  
{
$seria = strip_tags(trim($_POST['seria']))  ;
$model=strip_tags(trim($_POST['model']))  ;
$named=strip_tags(trim($_POST['named']))  ;
$manufacture=strip_tags(trim($_POST['manufacture']))  ;
$description=strip_tags(trim($_POST['description']))  ;
$cost=strip_tags(trim($_POST['cost']))  ;
$typeapp=strip_tags(trim($_POST['typeapp']))  ;
$weight=strip_tags(trim($_POST['weight']))  ;
$factsep=strip_tags(trim($_POST['factsep']))  ;
$power=strip_tags(trim($_POST['power']))  ;
$diameter=strip_tags(trim($_POST['diameter']))  ;
$maxload=strip_tags(trim($_POST['maxload']))  ;
}
$result=mysqli_query($db,"
    INSERT INTO 'centrifugi'(Series,Model,NameCentr,manufacture,mini_description,cost,type_apparatus,weight,factor_separation,power,diameter,max_load)
VALUES ('$seria', '{$model}', '{$named}', '{$manufacture}', '{$description}', '{$cost}', '{$typeapp}','{$weight}', '{$factsep}', '{$power}', '{$diameter}','{$maxload}')  
           ");	

if ($result == true){
	echo "Информация занесена в базу данных";
}
else{
	echo "Информация не занесена в базу данных";
}		   

}
else if (isset($_POST['equipment']) && $_POST['equipment'] == "reactors"){
					echo'
					<form method="POST" action="">
					<p>Заполните поля для центрифуг:</p>
					<p><input type=text value="Серия"/> </P>
					<p><input type=text value="Модель"/> </P>
					<p><input type=text value="Наименование"/> </P>
					<div class="file-load-block">
					<p><input type=file  name="myimage" value="Фотография (.jpg, .png)"/></P>
					</div>
					<p><input type=text value="Производитель"/> </P>
					<p><input type=text value="Описание"/> </P>
					<p><input type=text value="Стоимость руб"/> </P>
					<p><input type=text value="Тип аппарата"/> </P>
					<p><input type=text value="Мин. температура среды С"/> </P>
					<p><input type=text value="Макс. температура среды С"/> </P>
					<p><input type=text value="Давление в корпусе МПа"/> </P>
					<p><input type=text value="Давление в рубашке МПа"/> </P>
					<input type=submit value="добавить в каталог" />
					</form>
					';


}
else if (isset($_POST['equipment']) && $_POST['equipment'] == "filters"){
					echo'
					<form method="POST" action="">
					<p>Заполните поля для центрифуг:</p>
					<p><input type=text value="Серия"/> </P>
					<p><input type=text value="Модель"/> </P>
					<p><input type=text value="Наименование"/> </P>
					<div class="file-load-block">
					<p><input type=file  name="myimage" value="Фотография (.jpg, .png)"/></P>
					</div>
					<p><input type=text value="Производитель"/> </P>
					<p><input type=text value="Описание"/> </P>
					<p><input type=text value="Стоимость руб"/> </P>
					<p><input type=text value="Тип аппарата"/> </P>
					<p><input type=text value="Мин. температура среды С"/> </P>
					<p><input type=text value="Макс. температура среды С"/> </P>
					<p><input type=text value="Давление МПа"/> </P>
					<p><input type=text value="Внутренний диаметр мм"/> </p>
					<p><input type=text value="Высота мм"/></p>
					<p><input type=text value="Номинальный объем"/></p>
					<p><input type=text value="Поверхность фильтрации м2"/> </p>
					<p><input type=text value="Высота осадка мм"/> </p>
					<p><input type=text value="Высота подъема мешалки мм"/> </p>
					<p><input type=text value="Вес"/></p>
					<p><input type=text value="Мощность двигателя КВт"/></p>
					<input type=submit value="добавить в каталог" />
					</form>
					';


}
else if (isset($_POST['equipment']) && $_POST['equipment'] == "capacities"){
					echo'
					<form method="POST" action="">
					<p>Заполните поля для центрифуг:</p>
					<p><input type=text value="Серия"/> </P>
					<p><input type=text value="Модель"/> </P>
					<p><input type=text value="Наименование"/> </P>
					<div class="file-load-block">
					<p><input type=file  name="myimage" value="Фотография (.jpg, .png)"/></P>
					</div>
					<p><input type=text value="Производитель"/> </P>
					<p><input type=text value="Описание"/> </P>
					<p><input type=text value="Стоимость руб"/> </P>
					<p><input type=text value="Тип аппарата"/> </P>
					<p><input type=text value="Объем"/> </P>
					<p><input type=text value="Длина"/> </P>
					<p><input type=text value="Ширина"/> </P>
					<p><input type=text value="Высота"/> </P>
					<input type=submit value="добавить в каталог" />
					</form>
					';


}
else if (isset($_POST['equipment']) && $_POST['equipment'] == "dryers"){
					echo'
					<form method="POST" action="">
					<p>Заполните поля для центрифуг:</p>
					<p><input type=text value="Серия"/> </P>
					<p><input type=text value="Модель"/> </P>
					<p><input type=text value="Наименование"/> </P>
					<div class="file-load-block">
					<p><input type=file  name="myimage" value="Фотография (.jpg, .png)"/></P>
					</div>
					<p><input type=text value="Производитель"/> </P>
					<p><input type=text value="Описание"/> </P>
					<p><input type=text value="Стоимость руб"/> </P>
					<p><input type=text value="Тип аппарата"/> </P>
					<p><input type=text value="Мин. температура среды С"/> </P>
					<p><input type=text value="Макс. температура среды С"/> </P>
					<p><input type=text value="Рабочий объем"/> </P>
					<p><input type=text value="Общий объем"/> </P>
					<p><input type=text value="Кол-во полок(при наличии)"/> </P>
					<p><input type=text value="Напряжение (требуемое) В"/> </P>
					<p><input type=text value="Мощностьдвигателя кВт"/> </P>
					<p><input type=text value="Тип охлаждения"/> </P>
					<p><input type=text value="Вес кг"/> </P>
					<p><input type=text value="Длина"/> </P>
					<p><input type=text value="Ширина"/> </P>
					<p><input type=text value="Высота"/> </P>
					<input type=submit value="добавить в каталог" />
					</form>
					';


}








?>

		




</form>

</div>	
</div>
</div>
<!--<div class="footer">
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