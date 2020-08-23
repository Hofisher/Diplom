<html>
<head>

</head>
<body>
<?php
if (isset($_POST['equipment'])) echo $_POST['equipment'];

if(isset($_POST['equipment']) && $_POST['equipment'] == "centrifuges"){

					echo'
					<p>Заполните поля для центрифуг:</p>
					<p><input type=text width="60%" class="form-control" name=seria placeholder="Серия"/> </P>
					<p><input type=text class="form-control" name=model placeholder="Модель"/> </P>
					<p><input type=text class="form-control" name=named placeholder="Наименование" /> </P>
					<form action="add_info.php" method= "post" enctype="multipart/form-data"><p><input type=file name=myf value="Фотография (.jpg, .png)"/></P> 
					<p><input type=text class="form-control" name=manufacture placeholder="Производитель"/> </P>
					<p><input type=text class="form-control" name=description placeholder="Описание"/> </P>
					<p><input type=text class="form-control" name=cost placeholder="Стоимость руб"/> </P>
					<p><input type=text class="form-control" name=typeapp placeholder="Тип аппарата" class="typeapparatus"/> </P>
					<p><input type=text class="form-control" name=weight placeholder="Вес кг"/> </P>
					<p><input type=text class="form-control" name=lenght placeholder="Длина мм"/> </P>
					<p><input type=text class="form-control" name=widht placeholder="Ширина мм"/> </P>
					<p><input type=text class="form-control" name=height placeholder="Высота мм"/> </P>
					<p><input type=text class="form-control" name=factsep placeholder="Фактор разделения"/> </P>
					<p><input type=text class="form-control" name=power placeholder="Мощность кВт"/> </P>
					<p><input type=text class="form-control" name=maxload placeholder="Максимальная загрузка"/> </P>
					<p><input type=text class="form-control" name=diameter placeholder="Диаметр мм"/> </P>
';

		    echo'<input type=submit name=add placeholder="добавить в каталог" formaction="add_info.php" enctype="multipart/form-data"/></form> </form>';
			echo '<table id="dtMaterialDesignExample" class="table table-striped" cellspacing="0" width="100%">
			                            <caption>Справочник с наименованиями типов аппаратов</caption>
										<hr>
													<thead>
														<tr>													  
														  <th class="th-sm">Наименование типа апппарата
														  </th>														
														</tr>
													  </thead>
													  <tbody>';
												
				if ( $_POST['equipment']=="centrifuges"  ) {
			$checkEquipment="центрифуги";	
				}
												
													if (!empty($checkEquipment)) $query_equipment="TypeApparatus = ('$checkEquipment')";

												$result = mysqli_query($db,"SELECT * from typeapp as t WHERE $query_equipment");
													if (mysqli_num_rows($result)>0)
														{
														$row = mysqli_fetch_array($result);
															do	 
															{

														  echo '    
																	   <tr><td>' . $row['NameApparatus']
																	   . '</td></tr>
															   '; 
															
														
																	
															}
														
														while ($row=mysqli_fetch_array($result));
														echo '</tbody></table>';
														}				




				
}
else if (isset($_POST['equipment']) && $_POST['equipment'] == "reactors"){
			                    echo
										'
										<form method="POST" action="">
										<p>Заполните поля для реакторов:</p>
										<p><input type=text value="Серия"/> </P>
										<p><input type=text value="Модель"/> </P>
										<p><input type=text value="Наименование"/> </P>
										<div class="file-load-block">
										<p><input type=file  name="myimage" value="Фотография (.jpg, .png)"/></P>
										</div>
										<p><input type=text value="Производитель"/> </P>
										<p><input type=text value="Описание"/> </P>
										<p><input type=text value="Стоимость руб"/> </P>
										<p><input type=text value="Тип аппарата"/> </P>
										<p><input type=text value="Мин. температура среды С"/> </P>
										<p><input type=text value="Макс. температура среды С"/> </P>
										<p><input type=text value="Давление в корпусе МПа"/> </P>
										<p><input type=text value="Давление в рубашке МПа"/> </P>
										';

								echo
								' 
								<input type=submit name=add placeholder="добавить в каталог" formaction="add_info.php" enctype="multipart/form-data"/></form>
								';
								echo 
								'
								<table id="dtMaterialDesignExample" class="table table-striped" cellspacing="0" width="100%">
			                            <caption>Справочник с наименованиями типов аппаратов</caption>
										<hr>
													<thead>
														<tr>													  
														  <th class="th-sm">Наименование типа апппарата
														  </th>														
														</tr>
													  </thead>
													  <tbody>
								';
												
				if ( $_POST['equipment']=="reactors"  ) {								
			$checkEquipment="реакторы";	
				}
												
													if (!empty($checkEquipment)) $query_equipment="TypeApparatus = ('$checkEquipment')";

												$result = mysqli_query($db,"SELECT * from typeapp as t WHERE $query_equipment");
													if (mysqli_num_rows($result)>0)
														{
														$row = mysqli_fetch_array($result);
															do	 
															{

														  echo '    
																	   <tr><td>' . $row['NameApparatus']
																	   . '</td></tr>
															   '; 
															
														
																	
															}
														
														while ($row=mysqli_fetch_array($result));
														echo '</tbody></table>';
														}				
					
					
					
					
					
					


}
else if (isset($_POST['equipment']) && $_POST['equipment'] == "filters"){
					echo'
					<form method="POST" action="">
					<p>Заполните поля для фильтров:</p>
					<p><input type=text value="Серия"/> </P>
					<p><input type=text value="Модель"/> </P>
					<p><input type=text value="Наименование"/> </P>
					<div class="file-load-block">
					<p><input type=file  name="myimage" value="Фотография (.jpg, .png)"/></P>
					</div>
					<p><input type=text value="Производитель"/> </P>
					<p><input type=text value="Описание"/> </P>
					<p><input type=text value="Стоимость руб"/> </P>
					<p><input type=text value="Тип аппарата"/> </P>
					<p><input type=text value="Мин. температура среды С"/> </P>
					<p><input type=text value="Макс. температура среды С"/> </P>
					<p><input type=text value="Давление МПа"/> </P>
					<p><input type=text value="Внутренний диаметр мм"/> </p>
					<p><input type=text value="Высота мм"/></p>
					<p><input type=text value="Номинальный объем"/></p>
					<p><input type=text value="Поверхность фильтрации м2"/> </p>
					<p><input type=text value="Высота осадка мм"/> </p>
					<p><input type=text value="Высота подъема мешалки мм"/> </p>
					<p><input type=text value="Вес"/></p>
					<p><input type=text value="Мощность двигателя КВт"/></p>';

								echo
								' 
								<input type=submit name=add placeholder="добавить в каталог" formaction="add_info.php" enctype="multipart/form-data"/></form>
								';
								echo 
								'
								<table id="dtMaterialDesignExample" class="table table-striped" cellspacing="0" width="100%">
			                            <caption>Справочник с наименованиями типов аппаратов</caption>
										<hr>
													<thead>
														<tr>													  
														  <th class="th-sm">Наименование типа апппарата
														  </th>														
														</tr>
													  </thead>
													  <tbody>
								';
												
				if ( $_POST['equipment']=="filters"  ) 
				{								
					$checkEquipment="фильтры";	
				}
												
									if (!empty($checkEquipment)) $query_equipment="TypeApparatus = ('$checkEquipment')";
											$result = mysqli_query($db,"SELECT * from typeapp as t WHERE $query_equipment");
													if (mysqli_num_rows($result)>0)
														{
														$row = mysqli_fetch_array($result);
															do	 
															{

														  echo '    
																	   <tr><td>' . $row['NameApparatus']
																	   . '</td></tr>
															   '; 
															
														
																	
															}
														
														while ($row=mysqli_fetch_array($result));
														echo '</tbody></table>';
														}				
					

}
else if (isset($_POST['equipment']) && $_POST['equipment'] == "capacities"){
					echo'
					<form method="POST" action="">
					<p>Заполните поля для сборников(емкостей):</p>
					<p><input type=text value="Серия"/> </P>
					<p><input type=text value="Модель"/> </P>
					<p><input type=text value="Наименование"/> </P>
					<div class="file-load-block">
					<p><input type=file  name="myimage" value="Фотография (.jpg, .png)"/></P>
					</div>
					<p><input type=text value="Производитель"/> </P>
					<p><input type=text value="Описание"/> </P>
					<p><input type=text value="Стоимость руб"/> </P>
					<p><input type=text value="Тип аппарата"/> </P>
					<p><input type=text value="Объем"/> </P>
					<p><input type=text value="Длина"/> </P>
					<p><input type=text value="Ширина"/> </P>
					<p><input type=text value="Высота"/> </P>';
								echo
								' 
								<input type=submit name=add placeholder="добавить в каталог" formaction="add_info.php" enctype="multipart/form-data"/></form>
								';
								echo 
								'
								<table id="dtMaterialDesignExample" class="table table-striped" cellspacing="0" width="100%">
			                            <caption>Справочник с наименованиями типов аппаратов</caption>
										<hr>
													<thead>
														<tr>													  
														  <th class="th-sm">Наименование типа апппарата
														  </th>														
														</tr>
													  </thead>
													  <tbody>
								';
												
				if ( $_POST['equipment']=="capacities"  ) 
				{								
					$checkEquipment="сборники";	
				}
												
									if (!empty($checkEquipment)) $query_equipment="TypeApparatus = ('$checkEquipment')";
											$result = mysqli_query($db,"SELECT * from typeapp as t WHERE $query_equipment");
													if (mysqli_num_rows($result)>0)
														{
														$row = mysqli_fetch_array($result);
															do	 
															{

														  echo '    
																	   <tr><td>' . $row['NameApparatus']
																	   . '</td></tr>
															   '; 
															
														
																	
															}
														
														while ($row=mysqli_fetch_array($result));
														echo '</tbody></table>';
														}				


}
else if (isset($_POST['equipment']) && $_POST['equipment'] == "dryers"){
					echo'
					<form method="POST" action="">
					<p>Заполните поля для сушилок:</p>
					<p><input type=text value="Серия"/> </P>
					<p><input type=text value="Модель"/> </P>
					<p><input type=text value="Наименование"/> </P>
					<div class="file-load-block">
					<p><input type=file  name="myimage" value="Фотография (.jpg, .png)"/></P>
					</div>
					<p><input type=text value="Производитель"/> </P>
					<p><input type=text value="Описание"/> </P>
					<p><input type=text value="Стоимость руб"/> </P>
					<p><input type=text value="Тип аппарата"/> </P>
					<p><input type=text value="Мин. температура среды С"/> </P>
					<p><input type=text value="Макс. температура среды С"/> </P>
					<p><input type=text value="Рабочий объем"/> </P>
					<p><input type=text value="Общий объем"/> </P>
					<p><input type=text value="Кол-во полок(при наличии)"/> </P>
					<p><input type=text value="Напряжение (требуемое) В"/> </P>
					<p><input type=text value="Мощностьдвигателя кВт"/> </P>
					<p><input type=text value="Тип охлаждения"/> </P>
					<p><input type=text value="Вес кг"/> </P>
					<p><input type=text value="Длина"/> </P>
					<p><input type=text value="Ширина"/> </P>
					<p><input type=text value="Высота"/> </P>';
					
							echo
								' 
								<input type=submit name=add placeholder="добавить в каталог" formaction="add_info.php" enctype="multipart/form-data"/></form>
								';
							echo 
								'
								<table id="dtMaterialDesignExample" class="table table-striped" cellspacing="0" width="100%">
			                            <caption>Справочник с наименованиями типов аппаратов</caption>
										<hr>
													<thead>
														<tr>													  
														  <th class="th-sm">Наименование типа апппарата
														  </th>														
														</tr>
													  </thead>
													  <tbody>
								';
												
									if ( $_POST['equipment']=="dryers"  ) 
									{								
										$checkEquipment="сушилки";	
									}
												
										if (!empty($checkEquipment)) $query_equipment="TypeApparatus = ('$checkEquipment')";
											$result = mysqli_query($db,"SELECT * from typeapp as t WHERE $query_equipment");
													if (mysqli_num_rows($result)>0)
														{
														$row = mysqli_fetch_array($result);
															do	 
															{

														  echo '    
																	   <tr><td>' . $row['NameApparatus']
																	   . '</td></tr>
															   '; 
															
														
																	
															}
														
														while ($row=mysqli_fetch_array($result));
														echo '</tbody></table>';
														}				


}








?>
</body>
</html>