buttonload.onclick = function(){
  var s=0;
  window.getmonth=$('#month').val();
  window.getyear=$('#year').val();
  window.gettable=$('#tableselect option:selected').text();
  window.getorg=$('#org option:selected').text();
  window.res= new Map(); 
  window.dataget=new Map();
  orgtype=0;
  dataget['month']=getmonth;
  dataget['year']=getyear;
  dataget['table']=gettable; 
  dataget['org']=getorg;
  switch(getorg){
    case "Гроднооблгаз": orgtype='complex';
    break;
    case "ПУ Гродно" : orgtype='complex';
    break;
    case "ПУ Лида" : orgtype='complex';
    break;
    case "ПУ Слоним" : orgtype='complex';
    break;
    case "ПУ Волковыск" : orgtype='complex';
    break;
    case "ПУ Сморгонь" : orgtype='complex';
    break;
    default:
    orgtype='simple';
  }
  dataget['orgtype']=orgtype;
  $.ajax({
    url: 'read.php',
    method: "POST",
    data:{"dataget":dataget},
    success: function (data){
      res = JSON.parse(data);
      alert('Таблица загружена');
      for(s=0;s<send.length;s++){
        $('#'+String(send[s])).val(res[send[s]]).toString(); 
      }
    },
    error: function (xhr) {
      alert(data);
    }         
  });
  $.ajax({
    url: 'sumorg.php',
    method: "POST",
    data:{"dataget":dataget},
    success: function (data){
      res = JSON.parse(data);
      //alert(data);
      for(s=0;s<send.length;s++){
        $('#'+String(send[s])).val(res[send[s]]).toString(); 
      }
    },
    error: function (xhr) {
      alert(data);
    }         
  });  
}