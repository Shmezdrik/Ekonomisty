<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head >  
  <title>Тег table</title>
  <script src="jquery.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script scr="js/jquery.maskedinput.min.js"></script>
  <link rel="stylesheet" href="daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="css/style.css" type="text/css"/>
</head>
</br>
<body>  
  <label id="orglabel" >Организация</label>
  <label id="tablelabel" >Таблица</label>
  <label id="monthlabel" >Месяц</label>
  <label id="yearlabel" >Год</label>
  </br>
  <select type="text" name="Организация" id="org">
  </select>
  <select type="text" name="Таблица" id="tableselect" onchange="RedirectFunction()"> 
  </select>
  <select type="text" name="Месяц" id="month">
    <option>Январь</option>
    <option>Февраль</option>
    <option>Март</option>
    <option>Апрель</option>
    <option>Май</option>
    <option>Июнь</option>
    <option>Июль</option>
    <option>Август</option>
    <option>Сентябрь</option>
    <option>Октябрь</option>
    <option>Ноябрь</option>
    <option>Декабрь</option>
  </select>
  <select type="text" name="Год" id="year">
    <option>2019</option>
    <option>2020</option>
    <option>2021</option>
    <option>2022</option>
    <option>2023</option>
  </select>
  </script> 
  <input type="button" id="buttonload" value="Загрузить таблицу" />      
  </br>     
  <table class="table table-bordered table-striped" id="table">    
    <tr>
    </tr>        
    </br>  
  </table>  
  <input type="button" id="buttonsave" value="Сохранить" />   
</body>
<script src="/js/org+table.js"></script>
<script src="/js/formulas.js"></script>
<script src="/js/charsafterdot.js"></script>
<script src="/js/read.js"></script>
<script src="/js/write.js"></script>
<script src="/js/tablechange.js"></script>
<script src="/js/sumorg.js"></script>
<script src="/tables/svedofandzarplat.js"></script>
</html> 