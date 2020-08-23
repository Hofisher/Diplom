<?php  
// здесь повторяем запрос чтобы выбрать такие же данные 

$query = "SELECT photo_reactor FROM reactors  
            WHERE hide='show'  
            ".$tmp1.$tmp2.$tmp3."  
            ORDER BY pos"; 
 $res=mysql_query($query); 
 $image=mysql_result($res, 0, 0);  
 header("Content-type: image/gif"); 
 echo $image; 
?>