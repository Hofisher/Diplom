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
							<li><a href="add_equipment.php">Добавить оборудование</a></li>
							<li><a href="manufacture.php">Производители</a></li>
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
							</select></li>-->
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
    <form method = "POST" action="">

<p>Центрифуги </p> 
<table id="dtMaterialDesignExample" class="table table-striped" cellspacing="0" width="100%">
<thead>
    <tr>
	  <th class="th-sm">Модель
      </th>
	  <th class="th-sm">Название
      </th>
      <th class="th-sm">Стоимость руб
      </th>
	  <th class="th-sm">Вес кг
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



if ( isset($_GET['Series'])  ) 
{
$checkSeries=$_GET["Series"];	

}
	if (!empty($checkSeries)) $query_series="Series = ('$checkSeries')";

 $result = mysqli_query($db,"SELECT Model, NameCentr, cost, weight, height, lenght, widht, factor_separation, power, max_load from centrifugi as c WHERE $query_series");
 $model = array();
 $cost= array();
 $factor_separation= array();
 $weight= array();
 $height= array();
 $lenght= array();
 $widht= array();
 $power= array();
 $max_load= array();

 
	if (mysqli_num_rows($result)>0)
		{
		$row = mysqli_fetch_array($result);
			do	 
			{
		  $model[] = $row['Model'];
          $cost[]= $row['cost'];
		  $factor_separation[]= $row['factor_separation'];
		  $weight[]= $row['weight'];
		  $height[]= $row['height'];
		  $lenght[]= $row['lenght'];
		  $widht[]= $row['widht'];
		  $power[]= $row['power'];
		  $max_load[]= $row['max_load'];
		  
          echo '    
					   <tr><td>' . $row['Model']
					   . '</td><td>' . $row['NameCentr'] 
					   . '</td><td>' . $row['cost'] 
					   . '</td><td>' . $row['weight'] 
					   . '</td><td>' . $row['height']
					   . '</td><td>' . $row['lenght']
					   . '</td><td>' . $row['widht']
					   . '</td><td>' . $row['factor_separation']
					   . '</td><td>' . $row['power']
					   . '</td><td>' . $row['max_load']
					   . '</td></tr>
               '; 

			}
		
		while ($row=mysqli_fetch_array($result));
		
		echo '</tbody></table>';

}
	else
	{
  
		$message = "Данных нет";  
  
	}

?>

<?php
    function zapolmassmin ($mass) //функция сортировка массива и заполнения его значениями по убыванию
    {
    arsort($mass, SORT_NUMERIC);
    $arr1 = array();
    $arr1 = array_values($mass);
    $count = count($mass);
    $i = 1;
    $j = 0;
    foreach ($mass as $key => $value) {


        if (($j != count($arr1)) AND ($j != count($arr1) - 1)) {
            if ($value != $arr1[$j + 1]) {


                $value = $i++;
            } else {
                $value = $i;
            }

        } else
            $value = $i++;
        $mass[$key] = $value;

        $j++;


    }

    print_r($mass);
        return $mass;

}
?>
<?php
function zapolmassmax ($mass) //функция сортировка массива и заполнения его значениями по возрастанию
{
    asort($mass, SORT_NUMERIC);
    $arr1 = array();
    $arr1 = array_values($mass);
    $count = count($mass);
    $i = 1;
    $j = 0;
    foreach ($mass as $key => $value) {


        if (($j != count($arr1)) AND ($j != count($arr1) - 1)) {
            if ($value != $arr1[$j + 1]) {


                $value = $i++;
            } else {
                $value = $i;
            }

        } else
            $value = $i++;
        $mass[$key] = $value;

        $j++;


    }
   print_r($mass);
    return $mass;


}
?>
 <input type="submit" name="submit3" value="Выбрать альтернативу"/>


    </form>

<?php
$action2="centrifugi.php";
if (isset ($_POST['submit3'])) {
    $res = array();
    $kriterii = array();
    $total = array();
    if (isset($_GET['cost']) AND ($_GET['cost'] == 1)) {
        echo ' стоимость минимизируется';
        $costNew = zapolmassmin($cost);
    } else {

        echo ' стоимость максимизируется';
        $costNew = zapolmassmax($cost);
    }
    echo '<br>';

    if (isset($_GET['factor_separation']) AND ($_GET['factor_separation'] == 1)) {
        echo ' фактор разделения минимизируется';
        $factor_separationNew = zapolmassmin($factor_separation);
    } else {

        echo ' фактор разделения максимизируется';
        $factor_separationNew = zapolmassmax($factor_separation);
    }
    echo '<br>';
    if (isset($_GET['weight']) AND ($_GET['weight'] == 1)) {
        echo ' вес минимизируется';
        sort($weight, SORT_NUMERIC);
        $weightNew = zapolmassmin($weight);
    } else {

        echo ' вес максимизируется';
        $weightNew = zapolmassmax($weight);
    }
    echo '<br>';
    if (isset($_GET['widht']) AND ($_GET['widht'] == 1)) {
        echo ' ширина минимизируется';
        $widhtNew = zapolmassmin($widht);
    } else {

        echo ' ширина  максимизируется';
        $widhtNew = zapolmassmax($widht);
    }
    echo '<br>';
    if (isset($_GET['lenght']) AND ($_GET['lenght'] == 1)) {
        echo ' длина минимизируется';
        $lenghtNew = zapolmassmin($lenght);
    } else {

        echo ' длина максимизируется';
        $lenghtNew = zapolmassmax($lenght);
    }
    echo '<br>';
    if (isset($_GET['height']) AND ($_GET['height'] == 1)) {
        echo ' высота минимизируется';
        $heightNew = zapolmassmin($height);
    } else {

        echo ' высота максимизируется';
        $heightNew = zapolmassmax($height);
    }
    echo '<br>';
    if (isset($_GET['power']) AND ($_GET['power'] == 1)) {
        echo ' мощность минимизируется';
        $powerNew = zapolmassmin($power);
    } else {

        echo ' мощность максимизируется';
        $powerNew = zapolmassmax($power);
    }
    echo '<br>';
    if (isset($_GET['max_load']) AND ($_GET['max_load'] == 1)) {
        echo ' макс.загрузка минимизируется';
        $max_loadNew = zapolmassmin($max_load);
    } else {

        echo ' макс.загрузка максимизируется';
        $max_loadNew = zapolmassmax($max_load);
    }

    $kriterii = array($costNew, $factor_separationNew, $weightNew, $widhtNew, $lenghtNew, $heightNew, $powerNew, $max_loadNew);
    echo '<pre>';
    //print_r($kriterii);
    // echo '</pre>';
    // echo '<pre>';
    // print_r($model);
    // echo '</pre>';

    for ($i = 0; $i < count($kriterii); $i++) {
        foreach ($kriterii[$i] as $k => $v) {
            if (isset($res[$k]))
                $res[$k] += $v;
            else
                $res[$k] = $v;
        }

    }
    //echo '<pre>';
   //print_r($res);
    //echo '</pre>';

    for ($i = 0; $i < count($res); $i++)
        $total[$i][$model[$i]] = $res[$i];
  // echo '<pre>';
  // print_r($total);

  echo '<table cellpadding="5" cellspacing="0" border="1">';?>
    <thead>
    <tr>
	  <th class="th-sm">Модель
      </th>
	  <th class="th-sm">Оценка
      </th>
    </tr>
    </thead>
    <?php
    foreach ($total as $key => $value) {
        echo "<tr>";
        foreach ($value as $data=>$mark) {
            echo "<td>" . $data . "</td>";
            echo "<td>" . $mark . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    ?>

  <table cellpadding="5" cellspacing="0" border="1">
    <thead>
    <tr>
        <th class="th-sm">Подходящая модель
        </th>
        <th class="th-sm">Оценка
        </th>
    </tr>
    </thead>
 <?php
 $marksmodels=array();
 foreach ($total as $key => $value) {
     foreach ($value as $data=>$mark) {
         $marksmodels[$data]=$mark;
     }
 }
 //print_r($marksmodels);
 $oc = array_keys($marksmodels, max($marksmodels))[0];
 //print_r($oc);
 $ocv= max($marksmodels);
 echo "</br>";
 //print_r($ocv);

 echo "<tr>";
 echo "<td>" . $oc . "</td>";
 echo "<td>" . $ocv . "</td>";


        echo "</tr>";
        echo "</table>";

}
elseif (isset ($_POST['submit4'])) {

    echo"<form method='POST' action=$action2>";
}
?>

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
					
//echo''.$row["cost"].'';
 // print_r($cost);
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
<script scr="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js">

</script>
</body>
</html>
<script>

    $(document).ready(function () {
    $('#convert').click(function () {
    var table_content = '<table>';
    table_content += $('#table_content').html();
    table_content += '</table>';
    $('#file_content').val(table_content);
    $('#convert_form').html();

});
    })

</script>