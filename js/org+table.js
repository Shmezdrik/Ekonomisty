window.orgstables=0;
var select = document.getElementById("org");
var select1 = document.getElementById("tableselect");
var options = [];
var tableoptions = [];
var option = document.createElement('option');
var tableoption = document.createElement('option');
$.ajax({
  url: 'session.php',
  method: "POST",
  success: function (data){
    orgstables = JSON.parse(data);          
    $.each(orgstables,function(index,value){
      if(value.type=="orgs"){
        if(value.access=="true"){            
          option.text = value.name;
          options.push(option.outerHTML);
        }
      }else{
      	if(value.access=="true"){
      		tableoption.text = value.name;
          tableoptions.push(tableoption.outerHTML);
      	}
      }              
    });             
    select.insertAdjacentHTML('beforeEnd', options.join('\n'));
    select1.insertAdjacentHTML('beforeEnd', tableoptions.join('\n'));          
  },
  error: function (xhr) {
    alert('Ошибка'+xhr.status);
  }         
});           