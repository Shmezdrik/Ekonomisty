<?php

include 'translit.php';

$array = ($_POST["dataget"]);
$org = trans($array['org']);
$orgtype =$array['orgtype'];
$tab = trans($array['table']);
$month = trans($array['month']);
$year = $array['year'];
/*$org = trans("Гродно");
$orgtype = "simple";
$tab = trans("сведения о фонде заработной платы");
$month = trans("Февраль");
$year = 2019;*/

function ReadFromFile($current_org, $table_name, $month, $year)  //чтение файла
{
	$filename = 'data/'.$table_name.'/current/'.$current_org.'_'.$table_name.'_'.$month.'_'.$year.'_'.'current version.json';
		if (file_exists($filename))
	{
	$file = json_decode( file_get_contents($filename),true);    
	return $file;
	}
	else
	{
		echo ' File does not exist';
		return NULL;
	}	
}

function SumOrg ($org, $tab, $month, $year, $result)   //суммирование показателей организации от заданного месяца до начала года
{
	$months = array("yanvar", "fevral", "mart", "aprel", "may", "iyun", "iyul", "avgust", "sentyabr", "oktyabr", "noyabr", "dekabr"); //массив с транслитерированными месяцами, для поиска порядкового номера текущего месяца
	$key = 	array_search($month, $months); //возвращает порядковый номер месяца из массива месяцев
	

	for($i= $key-1; $i >= 0;  $i--) //проход от заданного месяца -1 до января
	{       
		$current_month = ReadFromFile( trans($org), trans($tab), $months[$i], $year);
		if($current_month != NULL)
		{
			foreach($current_month as $key=>$val) 
				{
					$result[$key] += $current_month[$key];    //проверка, загрузились ли данные и добавление их к пустому шаблону
				}
		}
	}
	return $result;
	
	
}

$patternpath = 'data/'.$tab.'/current/pattern'.'_'.$tab.'.json'; //адрес шаблона
if (file_exists($patternpath))
{
	$result = json_decode( file_get_contents($patternpath),true); //загрузка пустого шаблона, если он существует

	if ($orgtype == "simple")
	{
		$result = Sumorg ($org,$tab,$month,$year,$result);
		print_r(json_encode($result));
	}
	elseif ($orgtype == "complex")
	{
		switch ($org) {
			case trans("ПУ Гродно"):
				$Grodno = Sumorg(trans("Гродно"),$tab,$month,$year,$result);
				$Skidel = Sumorg(trans("Скидель"),$tab,$month,$year,$result);
				$Schuchin = Sumorg(trans("Щучин"),$tab,$month,$year,$result);
				foreach($result as $key=>$val) 
						{
							$result[$key] += $Grodno[$key] + $Skidel[$key] + $Schuchin[$key];
						}	
				print_r (json_encode($result));
				break;
			
			case trans("ПУ Лида"):
				$Lida = Sumorg(trans("Лида"),$tab,$month,$year,$result);
				$Korielichi = Sumorg(trans("Кореличи"),$tab,$month,$year,$result);
				$Voronovo = Sumorg(trans("Вороново"),$tab,$month,$year,$result);
				foreach($result as $key=>$val) 
						{
							$result[$key] += $Lida[$key] + $Korielichi[$key] + $Voronovo[$key];
						}	
				print_r (json_encode($result));
				break;
			
			case trans("ПУ Слоним"):
				$Slonim = Sumorg(trans("Слоним"),$tab,$month,$year,$result);
				$Diatlovo = Sumorg(trans("Дятлово"),$tab,$month,$year,$result);
				$Zelva = Sumorg(trans("Зельва"),$tab,$month,$year,$result);
				$Novogrudok = Sumorg(trans("Новогрудок"),$tab,$month,$year,$result);
				foreach($result as $key=>$val) 
						{
							$result[$key] += $Slonim[$key] + $Diatlovo[$key] + $Zelva[$key] + $Novogrudok[$key];
						}	
				print_r (json_encode($result));
				break;
			
			case trans("ПУ Сморгонь"):
				$Smorgon = Sumorg(trans("Сморгонь"),$tab,$month,$year,$result);
				$Ivie = Sumorg(trans("Ивье"),$tab,$month,$year,$result);
				$Oshmiany = Sumorg(trans("Ошмяны"),$tab,$month,$year,$result);
				$Ostrovets = Sumorg(trans("Островец"),$tab,$month,$year,$result);
				foreach($result as $key=>$val) 
						{
							$result[$key] += $Smorgon[$key] + $Ivie[$key] + $Oshmiany[$key] + $Ostrovets[$key];
						}	
				print_r (json_encode($result));
				break;
			
			case trans("ПУ Волковыск"):
				$Volkovysk = Sumorg(trans("Волковыск"),$tab,$month,$year,$result);
				$Berestovitsa = Sumorg(trans("Берестовица"),$tab,$month,$year,$result);
				$Mosty = Sumorg(trans("Мосты"),$tab,$month,$year,$result);
				$Svisloch = Sumorg(trans("Свислоч"),$tab,$month,$year,$result);
				foreach($result as $key=>$val) 
						{
							$result[$key] += $Volkovysk[$key] + $Berestovitsa[$key] + $Mosty[$key] + $Svisloch[$key];
						}	
				print_r (json_encode($result));
				break;
			
			case trans("Гроднооблгаз"):
				$Grodno = Sumorg(trans("Гродно"),$tab,$month,$year,$result);
				$Skidel = Sumorg(trans("Скидель"),$tab,$month,$year,$result);
				$Schuchin = Sumorg(trans("Щучин"),$tab,$month,$year,$result);
				$Lida = Sumorg(trans("Лида"),$tab,$month,$year,$result);
				$Korielichi = Sumorg(trans("Кореличи"),$tab,$month,$year,$result);
				$Voronovo = Sumorg(trans("Вороново"),$tab,$month,$year,$result);
				$Slonim = Sumorg(trans("Слоним"),$tab,$month,$year,$result);
				$Diatlovo = Sumorg(trans("Дятлово"),$tab,$month,$year,$result);
				$Zelva = Sumorg(trans("Зельва"),$tab,$month,$year,$result);
				$Novogrudok = Sumorg(trans("Новогрудок"),$tab,$month,$year,$result);
				$Smorgon = Sumorg(trans("Сморгонь"),$tab,$month,$year,$result);
				$Ivie = Sumorg(trans("Ивье"),$tab,$month,$year,$result);
				$Oshmiany = Sumorg(trans("Ошмяны"),$tab,$month,$year,$result);
				$Ostrovets = Sumorg(trans("Островец"),$tab,$month,$year,$result);
				$Volkovysk = Sumorg(trans("Волковыск"),$tab,$month,$year,$result);
				$Berestovitsa = Sumorg(trans("Берестовица"),$tab,$month,$year,$result);
				$Mosty = Sumorg(trans("Мосты"),$tab,$month,$year,$result);
				$Svisloch = Sumorg(trans("Свислоч"),$tab,$month,$year,$result);
				$Protasovschina = Sumorg(trans("Протасовщина"),$tab,$month,$year,$result);
				$Vertielishki = Sumorg(trans("Вертелишки"),$tab,$month,$year,$result);
				foreach($result as $key=>$val) 
						{
							$result[$key] += $Grodno[$key] + $Skidel[$key] + $Schuchin[$key] + $Lida[$key] + $Korielichi[$key] + $Voronovo[$key] + $Slonim[$key] + $Diatlovo[$key] + $Zelva[$key] + $Novogrudok[$key] + $Smorgon[$key] + $Ivie[$key] + $Oshmiany[$key] + $Ostrovets[$key] + $Volkovysk[$key] + $Berestovitsa[$key] + $Mosty[$key] + $Svisloch[$key] + $Protasovschina[$key] + $Vertielishki[$key];
						}	
				print_r (json_encode($result));
				break;
		}	
	}
}
else
	{
		echo "Pattern file doesn't exist!";
	}
	
?>
