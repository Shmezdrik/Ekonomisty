<?php
include 'translit.php';
$array = ($_POST["datasend"]);
$org = $array['org'];
unset($array['org']);
$tab = $array['table'];
unset($array['table']);
$year = $array['year'];
unset($array['year']);
$month = $array['month'];
unset($array['month']);




function WriteIntoFile($current_org, $table_name, $month, $year, $arr)
{
	$filename = 'data/'.$table_name.'/current/'.$current_org.'_'.$table_name.'_'.$month.'_'.$year.'_'.'current version.json';
	$backup = 'data/'.$table_name.'/backup/'.$current_org.'_'.$table_name.'_'.$month.'_'.$year.'_'.'backup version_'.date(d_m_y_G_i_s).'.json';
if (!file_exists($filename))
	{
		file_put_contents($filename,json_encode($arr));
		echo "Массив был записан, файл был создан. <br/>";
	}
	else
	{
		$file = file_get_contents($filename);  
		$OldArray=json_decode($file,TRUE); 
		if ($OldArray === $arr)
		{
			echo 'Файл уже существует';		
		}
		else 
		{
		rename($filename, $backup);
		file_put_contents($filename,json_encode($arr));
		echo "Массив был записан, бэкап был создан, файл был перезаписан. <br/>";
		}
	}
}

WriteIntoFile( trans($org), trans($tab), trans($month), $year, $array) ;
?>