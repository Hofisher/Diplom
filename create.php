<?php
$fot= ($_FILES['myf']['name']);
$tmp_name= ($_FILES['myf']['tmp_name']);

move_uploaded_file($tmp_name, "upload_images/". $fot)
?>
<img src="upload_images/ak-KR.jpg" alt="">
