<?php

include 'translit.php';

$array = ($_POST["dataget"]);
$org = $array['org'];
$tab = $array['table'];
$month = $array['month'];
$year = $array['year'];
$orgtype = $array['orgtype'];

function ReadFromFile($current_org, $table_name, $month, $year)
{
	$filename = 'data/'.$table_name.'/current/'.$current_org.'_'.$table_name.'_'.$month.'_'.$year.'_'.'current version.json';
		if (file_exists($filename))
	{
	$file = json_decode(file_get_contents($filename),true);  
	return $file;
	}
	else
	{
		//echo 'File does not exist';
		return NULL;
	}	
}

if ($orgtype == "simple")
{
	$result = ReadFromFile( trans($org), trans($tab), trans($month), $year);
	print_r(json_encode($result));
}
elseif ($orgtype == "complex")
{
	$patternpath = 'data/'.trans($tab).'/current/pattern'.'_'.trans($tab).'.json';
	if (file_exists($patternpath))
	{
		$result = json_decode( file_get_contents($patternpath),true);
		switch ($org) {
			case "ПУ Гродно":
				$Grodno = ReadFromFile( trans("Гродно"), trans($tab), trans($month), $year);
				$Skidel = ReadFromFile( trans("Скидель"), trans($tab), trans($month), $year);
				$Schuchin = ReadFromFile( trans("Щучин"), trans($tab), trans($month), $year);
				foreach($result as $key=>$val) 
						{
							$result[$key] += $Grodno[$key] + $Skidel[$key] + $Schuchin[$key];
						}	
				print_r (json_encode($result));
				break;
			
			case "ПУ Лида":
				$Lida = ReadFromFile( trans($org), trans($tab), trans($month), $year);
				$Korielichi = ReadFromFile( trans($org), trans($tab), trans($month), $year);
				$Voronovo = ReadFromFile( trans($org), trans($tab), trans($month), $year);
				foreach($result as $key=>$val) 
						{
							$result[$key] += $Lida[$key] + $Korielichi[$key] + $Voronovo[$key];
						}	
				print_r (json_encode($result));
				break;
			
			case "ПУ Слоним":
				$Slonim = ReadFromFile( trans($org), trans($tab), trans($month), $year);
				$Diatlovo = ReadFromFile( trans($org), trans($tab), trans($month), $year);
				$Zelva = ReadFromFile( trans($org), trans($tab), trans($month), $year);
				$Novogrudok = ReadFromFile( trans($org), trans($tab), trans($month), $year);
				foreach($result as $key=>$val) 
						{
							$result[$key] += $Slonim[$key] + $Diatlovo[$key] + $Zelva[$key] + $Novogrudok[$key];
						}	
				print_r (json_encode($result));
				break;
			
			case "ПУ Сморгонь":
				$Smorgon = ReadFromFile( trans($org), trans($tab), trans($month), $year);
				$Ivie = ReadFromFile( trans($org), trans($tab), trans($month), $year);
				$Oshmiany = ReadFromFile( trans($org), trans($tab), trans($month), $year);
				$Ostrovets = ReadFromFile( trans($org), trans($tab), trans($month), $year);
				foreach($result as $key=>$val) 
						{
							$result[$key] += $Smorgon[$key] + $Ivie[$key] + $Oshmiany[$key] + $Ostrovets[$key];
						}	
				print_r (json_encode($result));
				break;
			
			case "ПУ Волковыск":
				$Volkovysk = ReadFromFile( trans($org), trans($tab), trans($month), $year);
				$Berestovitsa = ReadFromFile( trans($org), trans($tab), trans($month), $year);
				$Mosty = ReadFromFile( trans($org), trans($tab), trans($month), $year);
				$Svisloch = ReadFromFile( trans($org), trans($tab), trans($month), $year);
				foreach($result as $key=>$val) 
						{
							$result[$key] += $Volkovysk[$key] + $Berestovitsa[$key] + $Mosty[$key] + $Svisloch[$key];
						}	
				print_r (json_encode($result));
				break;
			
			case "Гроднооблгаз":
				$Grodno = ReadFromFile( trans($org), trans($tab), trans($month), $year);
				$Skidel = ReadFromFile( trans($org), trans($tab), trans($month), $year);
				$Schuchin = ReadFromFile( trans($org), trans($tab), trans($month), $year);
				$Lida = ReadFromFile( trans($org), trans($tab), trans($month), $year);
				$Korielichi = ReadFromFile( trans($org), trans($tab), trans($month), $year);
				$Voronovo = ReadFromFile( trans($org), trans($tab), trans($month), $year);
				$Slonim = ReadFromFile( trans($org), trans($tab), trans($month), $year);
				$Diatlovo = ReadFromFile( trans($org), trans($tab), trans($month), $year);
				$Zelva = ReadFromFile( trans($org), trans($tab), trans($month), $year);
				$Novogrudok = ReadFromFile( trans($org), trans($tab), trans($month), $year);
				$Smorgon = ReadFromFile( trans($org), trans($tab), trans($month), $year);
				$Ivie = ReadFromFile( trans($org), trans($tab), trans($month), $year);
				$Oshmiany = ReadFromFile( trans($org), trans($tab), trans($month), $year);
				$Ostrovets = ReadFromFile( trans($org), trans($tab), trans($month), $year);
				$Volkovysk = ReadFromFile( trans($org), trans($tab), trans($month), $year);
				$Berestovitsa = ReadFromFile( trans($org), trans($tab), trans($month), $year);
				$Mosty = ReadFromFile( trans($org), trans($tab), trans($month), $year);
				$Svisloch = ReadFromFile( trans($org), trans($tab), trans($month), $year);
				$Protasovschina = ReadFromFile( trans($org), trans($tab), trans($month), $year);
				$Vertielishki = ReadFromFile( trans($org), trans($tab), trans($month), $year);
				foreach($result as $key=>$val) 
						{
							$result[$key] += $Grodno[$key] + $Skidel[$key] + $Schuchin[$key] + $Lida[$key] + $Korielichi[$key] + $Voronovo[$key] + $Slonim[$key] + $Diatlovo[$key] + $Zelva[$key] + $Novogrudok[$key] + $Smorgon[$key] + $Ivie[$key] + $Oshmiany[$key] + $Ostrovets[$key] + $Volkovysk[$key] + $Berestovitsa[$key] + $Mosty[$key] + $Svisloch[$key] + $Protasovschina[$key] + $Vertielishki[$key];
						}	
				print_r (json_encode($result));
				break;
		}
	}
	else
	{
		echo "Pattern file doesn't exist!";
	}
}

?>