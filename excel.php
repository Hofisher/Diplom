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


</div>
</div>
<!--content-->
<div class="content">
<form method="POST" id="convert_form" action="export.php">
        <p>Центрифуги </p>
        <table class="table table-striped table-bordered" id="table_content" >

            <tr>
                <th class="th-sm">Модель</th>
                <th class="th-sm">Название</th>
                <th class="th-sm">Стоимость руб</th>
                <th class="th-sm">Вес кг</th>
                <th class="th-sm">Высота мм</th>
                <th class="th-sm">Длина мм</th>
                <th class="th-sm">Ширина мм</th>
                <th class="th-sm">Фактор разделения</th>
                <th class="th-sm">Мощность кВт</th>
                <th class="th-sm">Максимальная загрузка кг</th>
            </tr>


            <?php

                    $result = mysqli_query($db,"SELECT Model, NameCentr, cost, weight, height, lenght, widht, factor_separation, power, max_load from centrifugi as c order by Series");
                    $model = array();
                    $NameCentr = array();
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
                                $NameCentr[] = $row['NameCentr'];
                                $cost[]= $row['cost'];
                                $factor_separation[]= $row['factor_separation'];
                                $weight[]= $row['weight'];
                                $height[]= $row['height'];
                                $lenght[]= $row['lenght'];
                                $widht[]= $row['widht'];
                                $power[]= $row['power'];
                                $max_load[]= $row['max_load'];

                                echo '    
                                   <tr>
                                   <td>' . $row['Model'] . '</td>
                                   <td>' . $row['NameCentr'] . '</td>
                                   <td>' . $row['cost'] . '</td>
                                   <td>' . $row['weight'] . '</td>
                                   <td>' . $row['height'] . '</td>
                                   <td>' . $row['lenght'] . '</td>
                                   <td>' . $row['widht'] . '</td>
                                   <td>' . $row['factor_separation'] . '</td>
                                   <td>' . $row['power'] . '</td>
                                   <td>' . $row['max_load'] . '</td>
                                   </tr>
                                      ';
                }

                while ($row=mysqli_fetch_array($result));



            }
            else
            {

                $message = "Данных нет";

            }

            ?>

        </table>
<input type="hidden" name="file_content" id="file_content"/>
<button type="button" name="convert" id="convert" class="btn btn-primary">Экспортировать в excel</button>



</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</body>
</html>
<script>
    $(document).ready(function(){
        $('#convert').click(function(){
            var table_content = '<table>';
            table_content += $('#table_content').html();
            table_content += '</table>';
            $('#file_content').val(table_content);
            $('#convert_form').submit();
        });
    });
</script>