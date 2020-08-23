<?php

function clear_string($clear_string)
{
global $db;
$clear_string = strip_tags($clear_string);
$clear_string = mysqli_real_escape_string($db,$clear_string);
$clear_string = trim($clear_string);   
    
 return $clear_string;  
    
}


	
?>