<?php
include 'translit.php';

$array = ($_POST["worker"]);


$array['user']['log'] = trans($array['user']['log']); 
$array['user']['password'] = md5($array['user']['password']);
print_r($array);
function Create($array)
{
	$filename =  'users/'.$array['user']['log'].'.json';
	file_put_contents($filename,json_encode($array));
	echo $filename;
	
}

Create($array);
 ?>