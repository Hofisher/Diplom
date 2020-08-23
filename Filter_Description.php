<?php

include("include/db_connect.php");	
include("function/functions.php");
$idencefic = $_GET["idFilter"];
?>
<!DOCTYPE html>
<html>
<head>
<title>filter</title>
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
			<div class="header-bottom">
				<div class="h_menu4"><!-- start h_menu4 -->
				<a class="toggleMenu" href="#">Menu</a>
				<ul class="nav">
					<li class="active"><a href="product.php">Реакторы</a></li>
					<li><a href="filter.php">Фильтры</a></li>					
					<li><a href="filter.php">Сборники</a></li>
					<li><a href="">Сушилки</a></li>
					<li><a href=".php">Центрифуги</a></li>
					<li><a href=".php">Ещё <i> </i></a>
						<ul>
							<li><a href="#">Массообменное оборудование</a></li>
							<li><a href="#">Вспомогательное оборудование</a></li>
							<li><a href="#">Производители</a></li>						</ul>
					</li>
				</ul>
				<script type="text/javascript" src="js/nav.js"></script>
			</div><!-- end h_menu4 -->
					<ul class="header-bottom-in">
						<li ><select class="drop">
							  <option value="Dollars" class="in-of">Get Active</option>
							  <option value="Euro" class="in-of">Get Active1</option>
							  <option value="Yen" class="in-of">Get Active2</option>
							</select> </li>
						<li ><select class="drop">
							  <option value="Dollars" class="in-of">Community</option>
							  <option value="Euro" class="in-of">Community1</option>
							  <option value="Yen" class="in-of">Community2</option>
							</select></li>		
					</ul>
			<div class="clearfix"> </div>
		</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!---->	

<div class="block-right">
      <p class="header-title">Виды оборудования</p>
<ul>
<ul class="checkbox-brand">
    	<?php
	                          
                          
	$result = mysqli_query($db,"SELECT * FROM typeapp WHERE TypeApparatus='фильтры'");
    if (mysqli_num_rows($result)>0)
    {
     $row = mysqli_fetch_array($result);
        do 
        {
            echo '
            <p><li><a href="view_catFilter.php?cat='.$row["NameApparatus"].'&TypeApparatus='.$row["TypeApparatus"].'">'.$row["NameApparatus"].'</a></li></p>
            
            ';

}
while ($row = mysqli_fetch_array($result));
}
	?>
     </ul>  
		<?php
	include("include/block_parameter.php");
	?>
    
     
      
    </div>
				<ul id="reactor-grid">
   		      	          <?php
                          if (isset($_GET['idFilter']))
                          {
                            echo $_GET['idFilter']."<br>";
                            
                          }

   $result = mysqli_query($db,  "SELECT * FROM filter WHERE idFilter='$idencefic'");

if (mysqli_num_rows($result)>0)
    {
     $row = mysqli_fetch_array($result);
        do 
        {
if ($row["PhotoFilter"] != "" && file_exists("./upload_images/".$row["PhotoFilter"])) //проверка "указано ли в базе в поле реакторов изображения" если поле не равняется пустоте и файл существует ,то true (точку перед размещением сайта в интернет ./web нужно убрать)
{//функция которая уменьшает размер изображения
$img_path = './upload_images/'.$row["PhotoFilter"];
$max_width = 350;
$max_height = 350;
 list($width, $heidht) = getimagesize($img_path);
$ratioh = $max_height/$heidht;
$ratiow = $max_width/$width;
$ratio = min($ratioh, $ratiow);
$width = intval($ratio*$width);
$heidht = intval($ratio*$heidht);
}else //если в поле нет картинки, то выполняется функция 
{
$img_path = "/images/no-image.jpg";
$width = 200;
$heidht = 200;
}


          echo'
		  <li>
		 <div class="product-grid"> 	
		 <div class="block-images-grid">
		 <a href="Filter_Description.php"><img class="img-responsive " src="'.$img_path.'" width="'.$width.'" heidht="'.$heidht.'" /></a> 
		 </div>
		<div class="shoe-in"> <a href= "Filter_Description.php?idFilter='.$row["idFilter"].'&TypeApparatus='.$row["Mini_descriptionFilter"].'""> '.$row["NameFilter"].'</a> </p>
		 <a class="add-cart-style-grid"> </a>
		 <p class="style-price-grid"><strong>'.$row["CostFilter"].'</strong>руб.</p>
		 <h6><a href="Filter_Description.php"class="store"><div class="mini-description">'.$row["Mini_descriptionFilter"].'</div>
          			 </a></h6>
			   </div>
			   			  </div>  
		 </li>
		
		 
          '; 
        }
        
        while( $row = mysqli_fetch_array($result));
    }

?>     
  <?php
                          if (isset($_POST['idFilter']))
                          {
                            echo $_POST['idFilter']."<br>";
                            
                          }

   $result = mysqli_query($db,  "SELECT * FROM filter WHERE idFilter='$idencefic'");

if (mysqli_num_rows($result)>0)
    {
     $row = mysqli_fetch_array($result);
        do 
        {
if ($row["photo_grid"] != "" && file_exists("./upload_images/".$row["photo_grid"])) //проверка "указано ли в базе в поле реакторов изображения" если поле не равняется пустоте и файл существует ,то true (точку перед размещением сайта в интернет ./web нужно убрать)
{//функция которая уменьшает размер изображения
$img_path = './upload_images/'.$row["photo_grid"];
$max_width = 1000;
$max_height = 500;
 list($width, $heidht) = getimagesize($img_path);
$ratioh = $max_height/$heidht;
$ratiow = $max_width/$width;
$ratio = min($ratioh, $ratiow);
$width = intval($ratio*$width);
$heidht = intval($ratio*$heidht);
}else //если в поле нет картинки, то выполняется функция 
{
$img_path = "/images/no-image.jpg";
$width = 200;
$heidht = 200;
}


          echo'
		  <li>
	
		 <a href="Filter_Description.php"><img class="img-responsive " src="'.$img_path.'" width="'.$width.'" heidht="'.$heidht.'" /></a>
		 </div>
	 
		 </li>
		
		 
          '; 
        }
        
        while( $row = mysqli_fetch_array($result));
    }	
?>      
   </div>
	</div>
<div class="clearfix"> </div>
	</div>
	</div>
	</div>
	<!---->
<!--footer-->



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
		<div class="col-md-2 footer-left left-footer">
			<h4>CATALOG</h4>
				<ul class="run-grid-in">
				
				</ul>
		</div>
		<div class="col-md-4 footer-left left-footer">
		<h4>information </h4>
			
			<div class="letter">
				<h5>ИНТЕРАКТИВНЫЙ КАТАЛОГ ОБОРУДОВАНИЯ</h5>
				<span>© 2018 by Dinara Ilmurzaeva / e-mail: dinara_ilm@mail.ru </span>
				<h6></h6>
				<p></p>
		
			
			</div>
			
		</div>
		<div class="clearfix"> </div>
	</div>
</body>
</html>