<div id="block-category">
  <p class="header-title">Виды оборудования</p>
<ul>
<ul class="checkbox-brand">
		      	          <?php
                          
                          if ($_SERVER['REQUEST_URI']=='/web/product.php')   
                          { 
                          
	$result = mysqli_query($db,"SELECT * FROM typeapp WHERE TypeApparatus='реакторы'");
    if (mysqli_num_rows($result)>0)
    {
     $row = mysqli_fetch_array($result);
        do 
        {
            echo '
            <p><li><a href="view_cat.php?cat='.$row["NameApparatus"].'&TypeApparatus='.$row["TypeApparatus"].'">'.$row["NameApparatus"].'</a></li></p>
            
            ';

}
while ($row = mysqli_fetch_array($result));
}
}	
?>	 

		      	          <?php
                          
                    if ($_SERVER['REQUEST_URI']=='/web/filter.php')    { 
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
}	
?>	
		      	          <?php
                          
                    if ($_SERVER['REQUEST_URI']=='/web/sushilki.php')    { 
	$result = mysqli_query($db,"SELECT * FROM typeapp WHERE TypeApparatus='сушилки'");
    if (mysqli_num_rows($result)>0)
    {
     $row = mysqli_fetch_array($result);
        do 
        {
            echo '
            <p><li><a href="view_catSushilki.php?cat='.$row["NameApparatus"].'&TypeApparatus='.$row["TypeApparatus"].'">'.$row["NameApparatus"].'</a></li></p>
            
            ';

}
 
while ($row = mysqli_fetch_array($result));
}
}	
?>
</ul>

</div>