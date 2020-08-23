<html>
<head>

</head>
<script type="text/javascript">
$(document).ready(function(){   
    $('#block-track-bar').trackbar({
            onMove : function() {
            document.getElementById("start-price").value = this.leftValue;
            document.getElementById("end-price").value = this.rightValue;
            },
            width : 250, 
            leftLimit : 30000, 
            leftValue : 350000, 
            rightLimit : 5000000,
            rightValue : 5000000, 
            roundUp : 1000
});
});
</script>
<body>
<!--script type="text/javascript">
$(document).ready(function(){   
    $('#block-track-bar-volume').trackbar({
            onMove : function() {
            document.getElementById("start-volume").value = this.leftValue;
            document.getElementById("end-volume").value = this.rightValue;
            },
            width : 250, 
            leftLimit : 5, 
            leftValue : 50, 
            rightLimit : 25000,
            rightValue : 25000, 
            roundUp : 5
});
});
</script!--> 
<div id="block_parameter">

<p class="header-title"> поиск по параметрам </p>
<p class="title-filter"> Стоимость </p>
<form method="GET" action="searchCentrifugi.php">
</div>
<div id="block-input-price">
<ul>
<li><p> от </p></li>
<li><input type="text" id="start-price" name="start_price" value="100000"/></li>
<li><p> до </p></li>
<li><input type="text" id="end-price" name="end_price" value="240000"/></li>
<li><p> руб </p></li>
</ul>
<div id="block-track-bar"></div>
<!--p class="title-filter"> Объем </p>
<form method="GET" action="search_filter.php">
</div>
<div id="block-input-price">
<ul>
<li><p> от </p></li>
<li><input type="text" id="start-volume" name="start_volume" value="5"/></li>
<li><p> до </p></li>
<li><input type="text" id="end-volume" name="end_volume" value="25000"/></li>
<li><p> л </p></li>
</ul>
<div id="block-track-bar-volume"></div>
</div>
<p class="title-filter"> Производители </p>
<ul class="checkbox-brand"!--> 
<?php
	$result = mysqli_query($db,"SELECT * FROM manufacture");
    if (mysqli_num_rows($result)>0)
    {
     $row = mysqli_fetch_array($result);
        do 
        {
			
            echo '
           <p><li><input type="checkbox"name="manufact[]" 
		   value="'.$row["idProizvoditeli"].'" id="checkmanufact'.$row["idProizvoditeli"].'"/>
		   <label for="checkmanufact'.$row["idProizvoditeli"].'">'.$row["manufact"].'
		   </label></li></p>
            
            ';
}
		
	
while ($row = mysqli_fetch_array($result));
}
?>

<center><input type="submit" name="submit" id="button-param-search" value="Найти" /></center></form>
 <p class="header-title">Критерии поиска</p>
<?php
  //$cost = trim($_REQUEST['cost']);
  //$weight = trim($_REQUEST['weight']);
  //$height = trim($_REQUEST['height']);
  //$lenght = trim($_REQUEST['lenght']);
  //$factor_separation = trim($_REQUEST['factor_separation']);
 $result = mysqli_query($db,"select CN from (SELECT distinct COLUMN_NAME,
case
COLUMN_NAME when'cost' then 'Стоимость'
when 'weight' then 'Вес'
when 'height' then 'Высота'
when 'lenght' then 'Длина'
when 'widht' then 'Ширина'
when 'factor_separation' then 'Фактор разделения'
when 'power' then 'Мощность'
else 'Максимальная загрузка'
end as CN
FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME='centrifugi' and COLUMN_NAME in ('cost' ,'weight','height','lenght','widht','factor_separation','power','max_load')
) a;");
    if (mysqli_num_rows($result)>0)
    {
	$row = mysqli_fetch_array($result);
	for ($i=0; $i<$row; ++$i)
	{
        do 
        {
      
            echo '
			<tr>
          <p><b>' .$row["$i"]. ':</b>
		  <select class="criteries" required="required">
          <option value="">' .$row["$i"]. '</option>
          <option value="1">MIN</option>       
          <option value="2">MAX</option>           
          </select></p> </tr>
        ';
         }
    
  
while ($row = mysqli_fetch_array($result));
	}
}
?>
<p class="header-title">Список представленных в каталоге моделей</p>
<form method="GET" action="centrifugi_algoritm.php">
<?php


$result = mysqli_query($db,"select * from centrifugi as c 
group by Series;");

	if (mysqli_num_rows($result)>0)
		{
			$row = mysqli_fetch_array($result);
				do
				{
      
					echo '  
							
							<p><li><input type="checkbox" name="Series" 
							value="'.$row["Series"].'" id="checkSeries'.$row["idCentrifug"].'"/>
							<label for="checkSeries'.$row["idCentrifug"].'">'.$row["Series"].'</label></li></p>  
								';  
				} 
  
  
while ($row = mysqli_fetch_array($result));
		}
  
echo '

<input type="submit" name="submit" value="рассмотреть выбранные серии">
';  
//$Seriesb="'.$row["Series"].'";
//echo $_GET["$Seriesb"];
///$pop='checkSeries[]';


?>
</form>
</ul>



</body>
</html>