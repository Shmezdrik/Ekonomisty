<?php
header('Content-Type: application/json');

$key = 1;
$oper = 0;
$postdata = file_get_contents("php://input");
$postdata = json_decode($postdata);

if (isset($postdata->{ID})){
 $key = $postdata->{ID};//id таблицы
 $oper = $postdata->{TYPE};//1-запрос типа данных, 0 проверка правильности заполнения
 $temp_table = $postdata->{D};//массив
}

$temp_table = array();
$temp_table['NAME']='ТАБЛИЦА 1';
$temp_table['INFO']='Таблица для чего то там';
$temp_table['SIZE']='2x4';
$temp_table['HEADER'] = array();
$temp_table['HEADER'][1][1]['NAME'] = "тест";
$temp_table['HEADER'][1][1]['ROW'] = 3;
$temp_table['HEADER'][1][1]['EDIT'] = false;
$temp_table['HEADER'][1][2]['NAME']  = "тест";
$temp_table['HEADER'][1][2]['ROW']  = 3;
$temp_table['HEADER'][1][2]['EDIT'] = false;
$temp_table['HEADER'][1][3]['NAME'] = "тест";
$temp_table['HEADER'][1][3]['COL'] =  4;
$temp_table['HEADER'][1][4]['NAME'] = "За отчётный период нарастающим итогом с начала года";
$temp_table['HEADER'][1][4]['COL'] =  4;
$temp_table['HEADER'][1][5]['NAME'] = "Источник";
$temp_table['HEADER'][1][5]['ROW'] = 3;
$temp_table['HEADER'][1][5]['EDIT'] = false;
$temp_table['HEADER'][2][1]['NAME'] = "Всего по организации";
$temp_table['HEADER'][2][1]['ROW'] = 2;
$temp_table['HEADER'][2][2]['NAME']  = "Служащие";
$temp_table['HEADER'][2][2]['COL']  = 2;
$temp_table['HEADER'][2][3]['NAME'] = "Рабочие";
$temp_table['HEADER'][2][3]['ROW'] =  2;
$temp_table['HEADER'][2][4]['NAME'] = "Всего по организации";
$temp_table['HEADER'][2][4]['ROW'] = 2;
$temp_table['HEADER'][2][5]['NAME']  = "Служащие";
$temp_table['HEADER'][2][5]['COL']  = 2;
$temp_table['HEADER'][2][6]['NAME'] = "Рабочие";
$temp_table['HEADER'][2][6]['ROW'] =  2;
$temp_table['HEADER'][3][1]['NAME'] = "Всего";
$temp_table['HEADER'][3][2]['NAME'] = "В том числе руководители";
$temp_table['HEADER'][3][3]['NAME'] = "Всего";
$temp_table['HEADER'][3][4]['NAME'] = "В том числе руководители";
$temp_table['HEADERCOL'] = array();
$temp_table['HEADERCOL'][1][1]['NAME']="1.";
$temp_table['HEADERCOL'][1][2]['NAME']="Зп за вып. работу и отработанное время, итого";
//$temp_table['HEADERCOL'][1][3]['FORMULA']=array("1"=>"1_4","2"=>"1_6");
$temp_table['HEADERCOL'][1][11]['NAME']="Себестоимость";
$temp_table['HEADERCOL'][2][11]['NAME']="Прибыль";
$temp_table['HEADERCOL'][3][11]['NAME']="Прочие";
$temp_table['HEADERCOL'][4][1]['NAME']="1.1";
$temp_table['HEADERCOL'][4][2]['NAME']="оплата по окладам, тарифным ставкам";
$temp_table['HEADERCOL'][4][11]['NAME']="Себестоимость";
$temp_table['HEADERCOL'][5][11]['NAME']="Прибыль";
$temp_table['HEADERCOL'][6][11]['NAME']="Прочие";
$temp_table['HEADERCOL'][7][1]['NAME']="1.1.1";
$temp_table['HEADERCOL'][7][2]['NAME']="В том числе повышение тарифных ставок(окладов)";
$temp_table['HEADERCOL'][7][11]['NAME']="Себестоимость";
$temp_table['HEADERCOL'][8][11]['NAME']="Прибыль";
$temp_table['HEADERCOL'][9][11]['NAME']="Прочие";
$temp_table['HEADERCOL'][10][1]['NAME']="1.1.1.1";
$temp_table['HEADERCOL'][10][2]['NAME']="в том числе повышение, предусмотренные контриктом, в соответствии с Декретом Президента Республики Беларусь от 26 июля 1999 г. № 29";
$temp_table['HEADERCOL'][10][11]['NAME']="Себестоимость";
$temp_table['HEADERCOL'][11][11]['NAME']="Прибыль";
$temp_table['HEADERCOL'][12][11]['NAME']="Прочие";
$temp_table['HEADERCOL'][13][1]['NAME']="1.2";
$temp_table['HEADERCOL'][13][2]['NAME']="оплата по сдельным расценкам";
$temp_table['HEADERCOL'][13][11]['NAME']="Себестоимость";
$temp_table['HEADERCOL'][14][11]['NAME']="Прибыль";
$temp_table['HEADERCOL'][15][1]['NAME']="1.3";
$temp_table['HEADERCOL'][15][2]['NAME']="доплаты за совмещение профессии(должностей), расширение зоны обслуживания, увеличение объема выполняемых работ, выполнение обязанностей временно отсутствующего работника и др.";
$temp_table['HEADERCOL'][15][11]['NAME']="Себестоимость";
$temp_table['HEADERCOL'][16][11]['NAME']="Прибыль";
$temp_table['HEADERCOL'][17][1]['NAME']="1.4";
$temp_table['HEADERCOL'][17][2]['NAME']="доплаты за руководство бригадой";
$temp_table['HEADERCOL'][17][11]['NAME']="Себестоимость";
$temp_table['HEADERCOL'][18][11]['NAME']="Прибыль";
$temp_table['HEADERCOL'][19][1]['NAME']="1.5";
$temp_table['HEADERCOL'][19][2]['NAME']="прочие выплаты";
$temp_table['HEADERCOL'][19][11]['NAME']="Себестоимость";
$temp_table['HEADERCOL'][20][11]['NAME']="Прибыль";
$temp_table['HEADERCOL'][21][11]['NAME']="Прочие";
$temp_table['HEADERCOL'][22][1]['NAME']="2.";
$temp_table['HEADERCOL'][22][2]['NAME']="Выплаты компенсирующего характера, итого:";
$temp_table['HEADERCOL'][22][11]['NAME']="Себестоимость";
$temp_table['HEADERCOL'][23][11]['NAME']="Прибыль";
$temp_table['HEADERCOL'][24][11]['NAME']="Прочие";
$temp_table['HEADERCOL'][25][1]['NAME']="2.1";
$temp_table['HEADERCOL'][25][2]['NAME']="компенсации (доплаты) за работу с вредными и (или) опасными условиями труда";
$temp_table['HEADERCOL'][25][11]['NAME']="Себестоимость";
$temp_table['HEADERCOL'][26][11]['NAME']="Прибыль";
$temp_table['HEADERCOL'][27][1]['NAME']="2.2";
$temp_table['HEADERCOL'][27][2]['NAME']="доплаты за работу в ночное время, ночную смену при сменном режиме работы";
$temp_table['HEADERCOL'][27][11]['NAME']="Себестоимость";
$temp_table['HEADERCOL'][28][11]['NAME']="Прибыль";
$temp_table['HEADERCOL'][29][11]['NAME']="Прочие";
$temp_table['HEADERCOL'][30][1]['NAME']="2.3";
$temp_table['HEADERCOL'][30][2]['NAME']="компенсации (надбавки) за подвижной и разъездной характер работ, производство работ вахтовым методом, за постоянную работу в пути, работу вне места жительства(полевое довольствие)";
$temp_table['HEADERCOL'][30][11]['NAME']="Себестоимость";
$temp_table['HEADERCOL'][31][11]['NAME']="Прибыль";
$temp_table['HEADERCOL'][32][1]['NAME']="2.4";
$temp_table['HEADERCOL'][32][2]['NAME']="доплаты за работу в сверхсуточное время, в государственные праздники, праздничные и выходные дни";
$temp_table['HEADERCOL'][32][11]['NAME']="Себестоимость";
$temp_table['HEADERCOL'][33][11]['NAME']="Прибыль";
$temp_table['HEADERCOL'][34][11]['NAME']="Прочие";
$temp_table['HEADERCOL'][35][1]['NAME']="2.5";
$temp_table['HEADERCOL'][35][2]['NAME']="денежная компенсация за неиспользованный трудовой отпуск";
$temp_table['HEADERCOL'][35][11]['NAME']="Себестоимость";
$temp_table['HEADERCOL'][36][11]['NAME']="Прибыль";
$temp_table['HEADERCOL'][37][1]['NAME']="2.6";
$temp_table['HEADERCOL'][37][2]['NAME']="другие выплаты";
$temp_table['HEADERCOL'][37][11]['NAME']="Себестоимость";
$temp_table['HEADERCOL'][38][11]['NAME']="Прибыль";
$temp_table['HEADERCOL'][39][11]['NAME']="Прочие";
$temp_table['HEADERCOL'][40][1]['NAME']="3.";
$temp_table['HEADERCOL'][40][2]['NAME']="другие выплаты";
$temp_table['HEADERCOL'][40][11]['NAME']="Себестоимость";
$temp_table['HEADERCOL'][41][11]['NAME']="Прибыль";
$temp_table['HEADERCOL'][42][11]['NAME']="Прочие";
$temp_table['HEADERCOL'][43][1]['NAME']="3.1";
$temp_table['HEADERCOL'][43][2]['NAME']="надбавки за профессиональное мастерство, классность";
$temp_table['HEADERCOL'][43][11]['NAME']="Себестоимость";
$temp_table['HEADERCOL'][44][11]['NAME']="Прибыль";
$temp_table['HEADERCOL'][45][1]['NAME']="3.2";
$temp_table['HEADERCOL'][45][2]['NAME']="надбавки за сложность и напряженность труда, высокие достижения в труде, выполнение особо важных (срочных) работ на срок их исполнения";
$temp_table['HEADERCOL'][45][11]['NAME']="Себестоимость";
$temp_table['HEADERCOL'][46][11]['NAME']="Прибыль";
$temp_table['HEADERCOL'][47][1]['NAME']="3.3";
$temp_table['HEADERCOL'][47][2]['NAME']="надбавки за стаж работы";
$temp_table['HEADERCOL'][47][11]['NAME']="Себестоимость";
$temp_table['HEADERCOL'][48][11]['NAME']="Прибыль";
$temp_table['HEADERCOL'][49][1]['NAME']="3.4";
$temp_table['HEADERCOL'][49][2]['NAME']="премии за основные результаты финансово-хозяйственной деятельности, краткосрочный бонус";
$temp_table['HEADERCOL'][49][11]['NAME']="Себестоимость";
$temp_table['HEADERCOL'][50][11]['NAME']="Прибыль";
$temp_table['HEADERCOL'][51][11]['NAME']="Прочие";
$temp_table['HEADERCOL'][52][1]['NAME']="3.5";
$temp_table['HEADERCOL'][52][2]['NAME']="премии за экономию и рациональной использование топливно-энергетических и материальных ресурсов";
$temp_table['HEADERCOL'][52][11]['NAME']="Себестоимость";
$temp_table['HEADERCOL'][53][11]['NAME']="Прибыль";
$temp_table['HEADERCOL'][54][1]['NAME']="3.6";
$temp_table['HEADERCOL'][54][2]['NAME']="вознаграждение за выполнение заказа на поставку (заготовку, сдачу) лома и отходов черных и цветных материалов";
$temp_table['HEADERCOL'][54][11]['NAME']="Себестоимость";
$temp_table['HEADERCOL'][55][11]['NAME']="Прибыль";
$temp_table['HEADERCOL'][56][1]['NAME']="3.7";
$temp_table['HEADERCOL'][56][2]['NAME']="иные виды премирования";
$temp_table['HEADERCOL'][56][11]['NAME']="Себестоимость";
$temp_table['HEADERCOL'][57][11]['NAME']="Прибыль";
$temp_table['HEADERCOL'][58][11]['NAME']="Прочие";
$temp_table['HEADERCOL'][59][1]['NAME']="3.8";
$temp_table['HEADERCOL'][59][2]['NAME']="вознаграждение по итогам работы за год, годовой бонус";
$temp_table['HEADERCOL'][59][11]['NAME']="Себестоимость";
$temp_table['HEADERCOL'][60][11]['NAME']="Прибыль";
$temp_table['HEADERCOL'][61][1]['NAME']="3.9";
$temp_table['HEADERCOL'][61][2]['NAME']="материальная помощь (компенсация), выплачиваемая всем или большинству работников на питание, проезд и др.";
$temp_table['HEADERCOL'][61][11]['NAME']="Себестоимость";
$temp_table['HEADERCOL'][62][11]['NAME']="Прибыль";
$temp_table['HEADERCOL'][63][1]['NAME']="3.10";
$temp_table['HEADERCOL'][63][2]['NAME']="вознаграждения к юбилейным датам (включая стоимость подарков и материальную помощь)";
$temp_table['HEADERCOL'][63][11]['NAME']="Себестоимость";
$temp_table['HEADERCOL'][64][11]['NAME']="Прибыль";
$temp_table['HEADERCOL'][65][1]['NAME']="3.11";
$temp_table['HEADERCOL'][65][2]['NAME']="материальная помощь к отпуску, единовременные выплаты на оздоровление, дополнительные выплаты при предоставлении трудового отпуска (сверх отпускных сумм, начисленных в соответствии с законодательством)";
$temp_table['HEADERCOL'][65][11]['NAME']="Себестоимость";
$temp_table['HEADERCOL'][66][11]['NAME']="Прибыль";
$temp_table['HEADERCOL'][67][11]['NAME']="Прочие";
$temp_table['HEADERCOL'][68][1]['NAME']="3.12";
$temp_table['HEADERCOL'][68][2]['NAME']="другие выплаты";
$temp_table['HEADERCOL'][68][11]['NAME']="Себестоимость";
$temp_table['HEADERCOL'][69][11]['NAME']="Прибыль";
$temp_table['HEADERCOL'][70][11]['NAME']="Прочие";
$temp_table['HEADERCOL'][71][1]['NAME']="4.";
$temp_table['HEADERCOL'][71][2]['NAME']="Оплата за неотработанное время, итого:";
$temp_table['HEADERCOL'][71][11]['NAME']="Себестоимость";
$temp_table['HEADERCOL'][72][11]['NAME']="Прибыль";
$temp_table['HEADERCOL'][73][11]['NAME']="Прочие";
$temp_table['HEADERCOL'][74][1]['NAME']="4.1";
$temp_table['HEADERCOL'][74][2]['NAME']="оплата трудовых основных и дополнительных отпусков (без денежной компенсации за неиспользованный трудовой отпуск)";
$temp_table['HEADERCOL'][74][11]['NAME']="Себестоимость";
$temp_table['HEADERCOL'][75][11]['NAME']="Прибыль";
$temp_table['HEADERCOL'][76][11]['NAME']="Прочие";
$temp_table['HEADERCOL'][77][1]['NAME']="4.2";
$temp_table['HEADERCOL'][77][2]['NAME']="оплата социальных отпусков по тарифному соглашению, коллективному договору";
$temp_table['HEADERCOL'][77][11]['NAME']="Себестоимость";
$temp_table['HEADERCOL'][78][11]['NAME']="Прибыль";
$temp_table['HEADERCOL'][79][1]['NAME']="4.3";
$temp_table['HEADERCOL'][79][2]['NAME']="оплата отпусков в связи с обучением";
$temp_table['HEADERCOL'][79][11]['NAME']="Себестоимость";
$temp_table['HEADERCOL'][80][11]['NAME']="Прибыль";
$temp_table['HEADERCOL'][81][1]['NAME']="4.4";
$temp_table['HEADERCOL'][81][2]['NAME']="другие выплаты";
$temp_table['HEADERCOL'][81][11]['NAME']="Себестоимость";
$temp_table['HEADERCOL'][82][11]['NAME']="Прибыль";
$temp_table['HEADERCOL'][83][11]['NAME']="Прочие";
$temp_table['HEADERCOL'][84][1]['NAME']="5.";
$temp_table['HEADERCOL'][84][2]['NAME']="Другие выплаты, включаемые в состав фонда заработной платы, итого";
$temp_table['HEADERCOL'][84][11]['NAME']="Себестоимость";
$temp_table['HEADERCOL'][85][11]['NAME']="Прибыль";
$temp_table['HEADERCOL'][86][11]['NAME']="Прочие";
$temp_table['HEADERCOL'][87][1]['NAME']="5.1";
$temp_table['HEADERCOL'][87][2]['NAME']="стоимость льгот по проезду, проездных билетов";
$temp_table['HEADERCOL'][87][11]['NAME']="Себестоимость";
$temp_table['HEADERCOL'][88][11]['NAME']="Прибыль";
$temp_table['HEADERCOL'][89][1]['NAME']="5.2";
$temp_table['HEADERCOL'][89][2]['NAME']="возмещение расходов по оплате квартирной платы, коммунальных услуг, найму жилья (сверх предусмотренного законодательством)";
$temp_table['HEADERCOL'][89][11]['NAME']="Себестоимость";
$temp_table['HEADERCOL'][90][11]['NAME']="Прибыль";
$temp_table['HEADERCOL'][91][1]['NAME']="5.3";
$temp_table['HEADERCOL'][91][2]['NAME']="другие выплаты";
$temp_table['HEADERCOL'][91][11]['NAME']="Себестоимость";
$temp_table['HEADERCOL'][92][11]['NAME']="Прибыль";
$temp_table['HEADERCOL'][93][11]['NAME']="Прочие";
$temp_table['HEADERCOL'][94][2]['NAME']="Всего фонд заработной платы, тыс. руб";
$temp_table['HEADERCOL'][95][2]['NAME']="в том числе";
$temp_table['HEADERCOL'][96][2]['NAME']="-относимый на себестоимость,тыс. руб.";
$temp_table['HEADERCOL'][97][2]['NAME']="-относимый за счет прибыли, тыс. руб.";
$temp_table['HEADERCOL'][98][2]['NAME']="- за счет прочих источников, тыс. руб.";
$temp_table['HEADERCOL'][99][2]['NAME']="Среднесписочная численность работников, чел.";
$temp_table['HEADERCOL'][100][2]['NAME']="Среднемесячная заработя плата, руб.";
$temp_table['VARIABLES']=array();
$temp_table['VARIABLES'][1]['NAME']='11';
$temp_table['VARIABLES'][1]['TYPE']='int';//int float 
//$temp_table['VARIABLES'][1]['VALUE']=4;
$temp_table['VARIABLES'][2]['NAME']='12';
$temp_table['VARIABLES'][2]['TYPE']='float';
//$temp_table['VARIABLES'][2]['VALUE']=4.22;

if ($key==1 && $oper==1){//формать таблицы
//$temp_table['VARIABLES'][2]['NAME']='12';
//$temp_table['VARIABLES'][2]['TYPE']='int';//int float 
//$temp_table['VARIABLES'][1]['VALUE']=4;
//$temp_table['VARIABLES'][1]['STATUS']=true;
$temp_table['VARIABLES'][3]['NAME']='13';
$temp_table['VARIABLES'][3]['TYPE']='int';
$temp_table['VARIABLES'][4]['NAME']='14';
$temp_table['VARIABLES'][4]['TYPE']='int';
$temp_table['VARIABLES'][5]['NAME']='41';
$temp_table['VARIABLES'][5]['TYPE']='int';
$temp_table['VARIABLES'][6]['NAME']='42';
$temp_table['VARIABLES'][6]['TYPE']='int';
$temp_table['VARIABLES'][7]['NAME']='43';
$temp_table['VARIABLES'][7]['TYPE']='int';
$temp_table['VARIABLES'][8]['NAME']='44';
$temp_table['VARIABLES'][8]['TYPE']='int';

}
elseif($key == 1 && $oper == 0){

	foreach ($temp_table['VARIABLES'] as $v => $varlib)
	{
		for($s = 3; $s<= count($varlib); $s++){
			$type = $varlib["TYPE"];
			$val =$varlib["VALUE"];
			switch ($type) {
				case "int":
				if(are_int($val) == 1)
					$temp_table['VARIABLES'][$v]['STATUS'] = true;
				else
					$temp_table['VARIABLES'][$v]['STATUS'] = false;
				break;
				case "float":
				if(are_float($val) == 1)
					$temp_table['VARIABLES'][$v]['STATUS'] = true;
				else
					$temp_table['VARIABLES'][$v]['STATUS'] = false;
				break;
			}
		}
	}


//принимаю массив проверяю валидно отдаю json если всё ок
}
else{
	//ничего не пришло или фигня
}
function are_int($value){
	if ( ! is_int ( $value ) )
		return false;
	return true;
}
function are_float($value){
	if( ! is_float($value) )
		return false;
	return true;
}
echo json_encode($temp_table);


?>