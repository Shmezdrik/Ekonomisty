$.getJSON("/tables/svedofandzarplat.php",{}, function(data){
  var head;
  var ckol=0;//счетчик колонн
  var crow=0;//счетчик строк HEADERCOL
  var crowhead=0;//счетчик строк HEADER
  crowhead=0;//счетчик строк в шапке
  var arr=[];//массив редактируемых столбцов
  window.send=[];//массив id
  window.datasend=new Map();//массив данных для отправки на сервер
  var j=0;
  window.currentID=0;
  var a=0;//добавляет колонки для редактируемых полей
  $.each(data.HEADER,function(index,value){
    crowhead++;
  });
  var t=0;
  $.each(data.HEADER[1],function(index,value){
    t++;
    if(value.EDIT!=false){
      a=value.COL+t;
      for(j=t;j<a;j++){
        arr.push(j);
      }
      t=j-1;
    }
    if(value.COL!=null){
      ckol=ckol+value.COL;
    }else{
      ckol++;
    }
  });
  for(var i=0;i<crowhead+1;i++){
    var kolhead=0;//текущий столбец шапки
    var khead=0;        
    $.each(data.HEADER[i],function(index,value){
      kolhead++;
      if(index==kolhead){
        head.append("<th rowspan="+value.ROW+" <th colspan="+value.COL+">" +value.NAME + "</th>")
        $('table').append(head);
      }        
    });
    head=$('<tr/>'); 
  }  
  var body;
  crow=0;
  $.each(data.HEADERCOL,function(index,value){
    crow++;
  });
  for(var i=0; i<crow+1;i++){
    var kolbody=0;//текущий столбец тела
    var kbody=0;//номер колонки тела
    var cbody=0;//счетчик колонок(сумма) тела
    var eachbody=0;//счетчик each тела
    var b=0;
    var c=0;
    var d=false;
    $.each(data.HEADERCOL[i],function(index, value){
      kolbody++;
      cbody++;
      eachbody++;
      if(index==kolbody){ 
        c++;
        body.append('<th>'+value.NAME+'</th>');
        $('table').append(body);  
      }else{
        for(kbody=kolbody;kbody<ckol+1;kbody++){
          c++;
          j=arr.length+1;
          for(b=0;b<j;b++){
            if(arr[b]==c){
              d=true;
              break;
            }else{
              d=false;
            }
          }
          if(d==true){
            currentID=(String(i)+String('_')+String(kbody));
            send.push(currentID);
            body.append('<th><textarea id='+currentID+' onkeypress="return isNumber(event,this)" onblur="SumCell()"></textarea></th>');
            $('table').append(body);            
          }else{
            if(index==kbody){ 
              body.append('<th>'+value.NAME+'</th>');
              $('table').append(body); 
            }else{
              body.append('<th></th>');
              $('table').append(body);  
            }        
          } 
        } 
      } 
    });
    body=$('<tr/>');
  }
});
