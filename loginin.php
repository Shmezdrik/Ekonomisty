  
<!DOCTYPE html>
<meta charset="utf-8">
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<form id='form'>
<label>Логин</label>
<input type="text" id="log" name="log" value=""> 
<label>Пароль</label>
<input type="password" id="password" name="password" value="">
<input type="button" value="Войти" id="button1">
<script type="text/javascript">

  $('#log').val('');
  $('#password').val('');
	button1.onclick = function(){
    var datasend=new Map;
		datasend['password']=$('#password').val();
    datasend['log']=$('#log').val();    
   	$.ajax({
     		url: 'login.php',
     		method: "POST",
     		data:{"datasend":datasend},
     		success: function (data){
          if(data == 'Доступ получен'){
            window.location.href = "123.php";
          }
          else{
            alert(data);
          }
     		},
     		error: function (xhr) {
       		alert('Ошибка'+xhr.status);
     		}
    });
	}	
</script>
</form> 
</html>