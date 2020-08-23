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


</div>  
<!--content-->      
<div class="content">
<p>Добавление оборудования в каталог</p> 
 <form method="POST" action="add_equipment.php" >
		<select name="equipment">
		<option disabled>Выберите вид оборудования</option>
			<option selected value="reactors" id=1 <?php if ((isset($_POST["equipment"]))&& ($_POST["equipment"]) == "reactors") echo'selected';?>>Реакторы</option>
			<option value="filters" id=2 <?php if ((isset($_POST["equipment"]))&& ($_POST['equipment']) == "filters") echo'selected';?>>Фильтры</option>
			<option value="dryers" id=3 <?php if ((isset($_POST["equipment"]))&& ($_POST['equipment']) == "dryers") echo'selected';?>>Сушилки</option>
			<option value="centrifuges" id=4 <?php if ((isset($_POST["equipment"]))&& ($_POST['equipment']) == "centrifuges") echo'selected';?>>Центрифуги</option>
			<option value="capacities" id=5 <?php if ((isset($_POST["equipment"]))&& ($_POST['equipment']) == "capacities") echo'selected';?>>Сборники</option>
		</select>
		<input type=submit value="ок" />
<div class="form-group">		
<?php

	include("include/adding_to_db.php");

?>

		

</div>	


</form>

</div>	
</div>
</div>
<!--footer">
		<?php
include("include/footer.php");
?>
</body>
</html>