<?php

include("include/db_connect.php");	
    
?>
<!DOCTYPE html>
<html>
<head>
<title>Centrifugi</title>
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
					<form method="POST" action="search_equipment.php">
					<?php    
					echo '							
								<input class="sb-search-input" placeholder="Введите название оборудования." type="search" name="search_centr" id="search">
								<input class="sb-search-submit" type="submit" value="">
								<span class="sb-icon-search"> </span>
						';
					?>
						
					
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
		<div class="clearfix"> </div>
	</div>
	<!---->	
</div>
</div>
</div>
</div>
<!--block right-->
<div class="block-right">
	<p class="header-title">Виды оборудования</p>
		<ul class="checkbox-brand">
            <form method="post" id="convert_form" action "export.php">
<?php
	$result = mysqli_query($db,"SELECT * FROM typeapp WHERE TypeApparatus='центрифуги'");
    if (mysqli_num_rows($result)>0)
    {
     $row = mysqli_fetch_array($result);
        do 
        {
            echo '
            
            <p><li><a href="view_catCentrifugi.php?cat='.$row["NameApparatus"].'&TypeApparatus='.$row["TypeApparatus"].'">'.$row["NameApparatus"].'</a></li></p>
            
            ';

}
 
while ($row = mysqli_fetch_array($result));
}
?>

       
<?php
	include("include/block_parameter5.php");
	?>
    
</div> 
</div>  
<!--content-->      
<div class="content"> 
<ul id="reactor-grid">
<?php
	$result = mysqli_query($db,"SELECT * FROM centrifugi");
    if (mysqli_num_rows($result)>0)
    {
     $row = mysqli_fetch_array($result);
        do 
        {
if ($row["photo_centrifug"] != "" && file_exists("./upload_images/".$row["photo_centrifug"])) //проверка "указано ли в базе в поле реакторов изображения" если поле не равняется пустоте и файл существует ,то true (точку перед размещением сайта в интернет ./web нужно убрать)
{//функция которая уменьшает размер изображения
$img_path = './upload_images/'.$row["photo_centrifug"];
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
		 <a href="single.php"><img class="img-responsive " src="'.$img_path.'" width="'.$width.'" heidht="'.$heidht.'" /></a>
		 </div>
		<div class="shoe-in"> <a href= "single.php?idCentrifug='.$row["idCentrifug"].'"> '.$row["NameCentr"].'</a> </p>
		 <a class="add-cart-style-grid"> </a>
		 <p class="style-price-grid"><strong>'.$row["cost"].'</strong>руб.</p>
		 <h6><a href="single.php"class="store"><div class="mini-description">'.$row["mini_description"].'</div>
			 </a></h6>
			   </div>
			   			  </div>  
		 </li>
		
		 
          '; 
        }
        
        while( $row = mysqli_fetch_array($result));
    }
	
?>	
</div>	
</div>

<!--footer-->
<?php
include("include/footer.php");
?>

</body>
</html>