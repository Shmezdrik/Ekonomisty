<?php
session_start();
include 'translit.php';
$array = ($_POST["datasend"]);
$login = $array['log'];
$password = $array['password'];

function Login($login, $Pass)
{
	$filename =  'users/'.$login.'.json';
	
	if (file_exists($filename))
	{
		$file = file_get_contents($filename);  
		$data = json_decode($file, true);
		if(md5($Pass) == $data['user']['password'])

		{	
			unset($data['user']);
			$_SESSION=$data;
			echo 'Доступ получен';	
		}
		else 
		{
			echo 'Неверный пароль';
		}
	}
	else
	{
		echo 'Неверное имя пользователя';
		return NULL;
	}	
}

Login(trans($login),$password);
?>