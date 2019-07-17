buttonsave.onclick = function() {
  window.sendmonth=$('#month').val();
  window.sendyear=$('#year').val();
  window.sendtable=$('#tableselect option:selected').text();
  window.sendorg=$('#org option:selected').text();
  var sender=0;  
  var s=0;        
  for(s=0;s<send.length;s++){
    datasend[String(send[s])] = $('#'+String(send[s])).val();    
  }
  datasend['month']=sendmonth;
  datasend['year']=sendyear;
  datasend['org']=sendorg;
  datasend['table']=sendtable;
  $.ajax({
    url: 'write.php',
    method: "POST",
    data:{"datasend":datasend},
    success: function (data){
      $('#key1').html(data);
      alert('Таблица сохранена');
    },
    error: function (xhr) {
      alert('Ошибка'+xhr.status);
    }
  });     
};