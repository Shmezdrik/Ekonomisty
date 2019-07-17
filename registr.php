<meta charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<style>
[name="Tree"] fieldset {border: none;}
[name="Tree"] label:after {content: '\A'; white-space: pre;} /* после label идёт как бы br */ 
</style>

<hr>

<label>Логин</label>
<input type="text" id="login" name="login" value=""> 
<label>Пароль</label>
<input type="password" id="password" name="password" value="">
</br>

<hr>

<form name="Tree">
<fieldset>
          <label><input type="checkbox" id = 'oblgas' onchange = 'changeValue("oblgas");'> Облгаз</label>
          <fieldset>
                    <label><input type="checkbox" id = 'pygrodno' onchange = 'changeValue("pygrodno");'> ПУ Гродно</label>
                    <fieldset>
                              <label><input type="checkbox" id = 'grodno' onchange = 'changeValue("grodno");'> Гродно</label>
                              <label><input type="checkbox" id = 'chuchin' onchange = 'changeValue("chuchin");'> Щучин</label>                                                           
                              <label><input type="checkbox" id = 'skidel' onchange = 'changeValue("skidel");'> Скидель</label>
                    </fieldset>

                    <label><input type="checkbox" id = 'pyvolkovysk' onchange = 'changeValue("pyvolkovysk");'> ПУ Волковыск </label>
                    <fieldset>
                              <label><input type="checkbox" id = 'volkovysk' onchange = 'changeValue("volkovysk");'> Волковыск </label>
                              <label><input type="checkbox" id = 'berestovica' onchange = 'changeValue("berestovica");'> Берестовица</label>                              
                              <label><input type="checkbox" id = 'mosty' onchange = 'changeValue("mosty");'> Мосты</label>                              
                              <label><input type="checkbox" id = 'svisloch' onchange = 'changeValue("svisloch");' > Свислочи</label>

                    </fieldset>
                    <label><input type="checkbox" id = 'pylida' onchange = 'changeValue("pylida");'> ПУ Лида</label>
                    <fieldset>
                              <label><input type="checkbox" id = 'lida' onchange = 'changeValue("lida");'> Лида</label>
                              <label><input type="checkbox" id = 'voronovo' onchange = 'changeValue("voronovo");'> Вороново</label>                              
                              <label><input type="checkbox" id = 'korelichi' onchange = 'changeValue("korelichi");'> Кореличи</label>                              
                              <label><input type="checkbox" id = 'lidagns' onchange = 'changeValue("lidagns");'> ЛидаГНС</label>

                    </fieldset>

                    <label><input type="checkbox" id = 'pyslonim' onchange = 'changeValue("pyslonim");'> ПУ Слоним</label>
                    <fieldset>
                              <label><input type="checkbox" id = 'slonim' onchange = 'changeValue("slonim");'> Слоним</label>
                              <label><input type="checkbox" id = 'dytlovo' onchange = 'changeValue("dytlovo");'> Дятлово</label>                              
                              <label><input type="checkbox" id = 'zelva' onchange = 'changeValue("zelva");'> Зельва</label>                              
                              <label><input type="checkbox" id = 'novogrudok' onchange = 'changeValue("novogrudok");'> Новогрудок</label>

                    </fieldset>
                    <label><input type="checkbox" id = 'pysmorgon' onchange = 'changeValue("pysmorgon");'> ПУ Сморгонь</label>
                    <fieldset>
                              <label><input type="checkbox" id = 'smorgon' onchange = 'changeValue("smorgon");'> Сморгонь</label>
                              <label><input type="checkbox" id = 'ive' onchange = 'changeValue("ive");'> Ивье</label>                              
                              <label><input type="checkbox" id = 'ostrovec' onchange = 'changeValue("ostrovec");'> Островец</label>                              
                              <label><input type="checkbox" id = 'oshmyny' onchange = 'changeValue("oshmyny");'> Ошмяны</label>
                    </fieldset>
                    <label><input type="checkbox" id = 'protas' onchange = 'changeValue("protas");'> Протасовщина</label>
                    <label><input type="checkbox" id = 'vert' onchange = 'changeValue("vert");'> Вертилишки</label>
          </fieldset>          
</fieldset>
</form>



<hr>

<input type = 'checkbox' id = 'table1' onchange = 'changeValue("table1");' />Сведения о фонде заработной платы
<br/>
<input type = 'checkbox' id = 'table2' onchange = 'changeValue("table2");' />Сведения о фонде заработной платы
<br/>
<input type = 'checkbox' id = 'table3' onchange = ' changeValue("table3");' />Сведения о фонде заработной платы
<br/>

<input type="button" id="button" value="Сохранить" /> 
 
<script type="text/javascript">
  $('#login').val("");
  $('#password').val("");
  $('#oblgas').prop('checked',false);
  $('#pygrodno').prop('checked',false);
  $('#grodno').prop('checked',false);
  $('#skidel').prop('checked',false);
  $('#chuchin').prop('checked',false);
  $('#pyvolkovysk').prop('checked',false);
  $('#volkovysk').prop('checked',false);
  $('#berestovica').prop('checked',false);
  $('#mosty').prop('checked',false);
  $('#svisloch').prop('checked',false);
  $('#pylida').prop('checked',false);
  $('#lida').prop('checked',false);
  $('#voronovo').prop('checked',false);
  $('#korelichi').prop('checked',false);
  $('#lidagns').prop('checked',false);
  $('#pyslonim').prop('checked',false);
  $('#slonim').prop('checked',false);
  $('#dytlovo').prop('checked',false);
  $('#zelva').prop('checked',false);
  $('#novogrudok').prop('checked',false);
  $('#pysmorgon').prop('checked',false);
  $('#smorgon').prop('checked',false);
  $('#ive').prop('checked',false);
  $('#ostrovec').prop('checked',false);
  $('#oshmyny').prop('checked',false);
  $('#protas').prop('checked',false);
  $('#vert').prop('checked',false);
  $('#table1').prop('checked',false);
  $('#table2').prop('checked',false);
  $('#table3').prop('checked',false);

  orgs = new Map();
  var worker={
    "user":{
        "log": "" , 
        "password" : "" 
      },
      "oblgas":{
        "type": "orgs",
        "access" : false,
        "name" : "Гроднооблгаз",
      },
      "pygrodno":{
        "type": "orgs",
        "access" : false,
        "name" : "ПУ Гродно",
      },
      "grodno":{
        "type": "orgs",
        "access" : false,
        "name" : "Гродно",
      },
      "skidel":{
        "type": "orgs",
        "access" : false,
        "name" : "Скидель",
      },
      "chuchin":{
        "type": "orgs",
        "access" : false,
        "name" : "Щучин",
      },
      "pyvolkovysk":{
        "type": "orgs",
        "access" : false,
        "name" : "ПУ Волковыск",
      },
      "volkovysk":{
        "type": "orgs",
        "access" : false,
        "name" : "Волковыск",
      },
      "berestovica":{
        "type": "orgs",
        "access" : false,
        "name" : "Берестовица",
      },
      "mosty":{
        "type": "orgs",
        "access" : false,
        "name" : "Мосты",
      },
      "pylida":{
        "type": "orgs",
        "access" : false,
        "name" : "ПУ Лида",
      },
      "lida":{
        "type": "orgs",
        "access" : false,
        "name" : "Лида",
      },
      "voronovo":{
        "type": "orgs",
        "access" : false,
        "name" : "Вороново",
      },
      "korelichi":{
        "type": "orgs",
        "access" : false,
        "name" : "Кореличи",
      },
      "lidagns":{
        "type": "orgs",
        "access" : false,
        "name" : "ЛидаГНС",
      },
      "pyslonim":{
        "type": "orgs",
        "access" : false,
        "name" : "ПУ Слоним",
      },
      "slonim":{
        "type": "orgs",
        "access" : false,
        "name" : "Слоним",
      },
      "dytlovo":{
        "type": "orgs",
        "access" : false,
        "name" : "Дятлово",
      },
      "zelva":{
        "type": "orgs",
        "access" : false,
        "name" : "Зельва",
      },
      "novogrudok":{
        "type": "orgs",
        "access" : false,
        "name" : "Новогрудок",
      },
      "pysmorgon":{
        "type": "orgs",
        "access" : false,
        "name" : "ПУ Сморгонь",
      },
      "smorgon":{
        "type": "orgs",
        "access" : false,
        "name" : "Сморгонь",
      },
      "ive":{
        "type": "orgs",
        "access" : false,
        "name" : "Ивье",
      },
      "ostrovec":{
        "type": "orgs",
        "access" : false,
        "name" : "Островец",
      },
      "oshmyny":{
        "type": "orgs",
        "access" : false,
        "name" : "Ошмяны",
      },
      "protas":{
        "type": "orgs",
        "access" : false,
        "name" : "Протасовщина",
      },
      "vert":{
        "type": "orgs",
        "access" : false,
        "name" : "Вертилишки",
      },
      "table1":{
        "type":"table",
        "access": false,
        "name":"Сведения о фонде заработной платы"
      },
      "table2":{
        "type":"table",
        "access": false,
        "name":"Таблица"
      },
      "table3":{
        "type":"table",
        "access": false,
        "name":"Еще одна таблица"
      },
  }

  function changeValue(org) {
    cb = document.getElementById(org);
    if (cb.checked) worker[org].access = true;
    else worker[org].access = false;
  }
 

   button.onclick = function ()
  {
    worker['user'].log=$('#login').val();
    worker['user'].password=$('#password').val();
    $.ajax({
      url: 'create_user.php',
      method: "POST",
      data:{"worker":worker},
      success: function (data){
        alert('Пользователь сохранен');
      }
    });
  } 

</script>



