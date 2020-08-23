<?php

include("include/db_connect.php");
var_dump($_FILES);

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
	<p class="header-title">Добавление в БД</p>
		<ul class="checkbox-brand">
</div> 
</div>  
<!--content-->      
<div class="content">
<p>Сообщение</p>

<?php

if (isset($_POST['seria']))
	{
		$seria=$_POST['seria']; 
			if ($seria=='')
			{unset($seria);}
	}	
if (isset($_POST['model'])) {$model=$_POST['model']; if ($model==''){unset($model);}}
if(isset($_POST['named'])) {$named=$_POST['named']; if ($named==''){unset($named);}}
//if(isset($_POST['myimage'])) {
 //   $imagename=$_FILES["myimage"]["name"];
//    $folder="/upload_images/";
//    move_uploaded_file($_FILES[" myimage "][" tmp_name "],"$folder".$_FILES[" myimage "][" name "]);
    //Получаем содержимое изображения и добавляем к нему слеш
 //   $imagetmp=addslashes(file_get_contents($_FILES['myimage']['tmp_name']));
 //   $named=$_POST['myimage']; if ($named==''){unset($named);}}
if (isset($_FILES['myf'])) {
    $fot = $_FILES['myf']['name'];
    $tmp_name = $_FILES['muf']['tmp_name'];
    move_uploaded_file($tmp_name, "upload_images/" .$fot);
    if ($fot==''){unset($fot); }}
if (isset($_POST['manufacture'])) {$manufacture=$_POST['manufacture']; if ($manufacture==''){unset($manufacture);}}
if(isset($_POST['description'])) {$description=$_POST['description']; if ($description==''){unset($description);}}
if(isset($_POST['cost'])) {$cost=$_POST['cost']; if ($cost==''){unset($cost);}}
if(isset($_POST['typeapp'])) {$typeapp=$_POST['typeapp']; if ($typeapp==''){unset($typeapp);}}
if(isset($_POST['weight'])) {$weight=$_POST['weight']; if ($weight==''){unset($weight);}}
if(isset($_POST['lenght'])) {$lenght=$_POST['lenght']; if ($lenght==''){unset($lenght);}}
if(isset($_POST['widht'])) {$widht=$_POST['widht']; if ($widht==''){unset($widht);}}
if(isset($_POST['height'])) {$height=$_POST['height']; if ($height==''){unset($height);}}
if(isset($_POST['factsep'])){$factsep=$_POST['factsep']; if ($factsep==''){unset($factsep);}}
if(isset($_POST['power'])){$power=$_POST['power']; if ($power==''){unset($power);}}
if(isset($_POST['maxload'])){$maxload=$_POST['maxload']; if ($maxload==''){unset($maxload);}}
if(isset($_POST['diameter'])){$diameter=$_POST['diameter']; if ($diameter==''){unset($diameter);}}

$proizvoditeli=mysqli_query($db,"SELECT idProizvoditeli from manufacture where (manufact='$manufacture')");						
	$id_array_proizvoditeli = mysqli_fetch_assoc($proizvoditeli);	
	$my_id_proizvoditeli=$id_array_proizvoditeli['idProizvoditeli'];
$typeapparatus=mysqli_query($db, "SELECT idNumberTypeApparatus from typeapp where (NameApparatus='$typeapp')");
	$id_array_typeapp = mysqli_fetch_assoc($typeapparatus);	
	$my_id_typeapp=$id_array_typeapp['idNumberTypeApparatus'];
	echo $_FILES['myf']['name'];
    $result = mysqli_query($db, "INSERT INTO centrifugi (Series,Model,NameCentr,photo_centrifug,manufacture,mini_description,cost,type_apparatus,weight,lenght, widht, height, factor_separation,power, max_load, diameter)
VALUES ('$seria', '$model', '$named', '$fot', '$my_id_proizvoditeli', '$description', '$cost', '$my_id_typeapp','$weight', '$lenght', '$widht', '$height','$factsep', '$maxload','$power', '$diameter') ");

if ($result == true){
	echo "Информация занесена в базу данных";
}
else{
	echo "Информация не занесена в базу данных";
}		   


?>
<br>
<a href="add_equipment.php">Назад</a>
</div>	
</div>
</div>

</body>
</html>