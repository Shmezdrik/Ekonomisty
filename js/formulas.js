function SumCell(element){
  for(var i=1;i<100;i++){ 
		if ($('#'+i+'_4').val()!='' && $('#'+i+'_6').val()!='') {
			$('#'+i+'_3').val(Math.round((parseFloat($('#'+i+'_4').val()) + parseFloat($('#'+i+'_6').val()))*100)/100);
		}        		
	}
  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////      
  if($('#4_4').val()!='' && $('#13_4').val()!='' && $('#15_4').val()!='' && $('#17_4').val()!='' && $('#19_4').val()!=''){//для каждой формулы свой If
    $('#1_4').val( Math.round( (parseFloat($('#4_4').val())+parseFloat($('#13_4').val())+parseFloat($('#15_4').val())+parseFloat($('#17_4').val())+parseFloat($('#19_4').val())) *100 )/100 );
  }
  if($('#4_5').val()!='' && $('#13_5').val()!='' && $('#15_5').val()!='' && $('#17_5').val()!='' && $('#19_5').val()!=''){
    $('#1_5').val( Math.round( (parseFloat($('#4_5').val())+parseFloat($('#13_5').val())+parseFloat($('#15_5').val())+parseFloat($('#17_5').val())+parseFloat($('#19_5').val())) *100 )/100 );
  }
  if($('#4_6').val()!='' && $('#13_6').val()!='' && $('#15_6').val()!='' && $('#17_6').val()!='' && $('#19_6').val()!=''){  
    $('#1_6').val( Math.round( (parseFloat($('#4_6').val())+parseFloat($('#13_6').val())+parseFloat($('#15_6').val())+parseFloat($('#17_6').val())+parseFloat($('#19_6').val())) *100 )/100 );
  }
  if($('#5_4').val()!='' && $('#14_4').val()!='' && $('#16_4').val()!='' && $('#18_4').val()!='' && $('#20_4').val()!=''){  
    $('#2_4').val( Math.round( (parseFloat($('#5_4').val())+parseFloat($('#14_4').val())+parseFloat($('#16_4').val())+parseFloat($('#18_4').val())+parseFloat($('#20_4').val())) *100 )/100 );
  }
  if($('#5_4').val()!='' && $('#14_5').val()!='' && $('#16_5').val()!='' && $('#18_5').val()!='' && $('#20_5').val()!=''){  
    $('#2_5').val( Math.round( (parseFloat($('#5_5').val())+parseFloat($('#14_5').val())+parseFloat($('#16_5').val())+parseFloat($('#18_5').val())+parseFloat($('#20_5').val())) *100 )/100 );  
  }
  if($('#5_6').val()!='' && $('#14_6').val()!='' && $('#16_6').val()!='' && $('#18_6').val()!='' && $('#20_6').val()!=''){  
    $('#2_6').val( Math.round( (parseFloat($('#5_6').val())+parseFloat($('#14_6').val())+parseFloat($('#16_6').val())+parseFloat($('#18_6').val())+parseFloat($('#20_6').val())) *100 )/100 );
  }
  if($('#6_4').val()!='' && $('#21_4').val()!=''){        
    $('#3_4').val( Math.round( ( parseFloat($('#6_4').val()) + parseFloat($('#21_4').val()) )*100)/100);
  }
  if($('#6_5').val()!='' && $('#21_5').val()!=''){
    $('#3_5').val( Math.round( ( parseFloat($('#6_5').val()) + parseFloat($('#21_5').val()) )*100)/100);
  }
  if($('#6_6').val()!='' && $('#21_6').val()!=''){
    $('#3_6').val( Math.round( ( parseFloat($('#6_6').val()) + parseFloat($('#21_6').val()) )*100)/100);          
  }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  if($('#25_4').val()!='' && $('#27_4').val()!='' && $('#30_4').val()!='' && $('#32_4').val()!='' && $('#35_4').val()!='' && $('#37_4').val()!=''){
    $('#22_4').val( Math.round( (parseFloat($('#25_4').val())+parseFloat($('#27_4').val())+parseFloat($('#30_4').val())+parseFloat($('#32_4').val())+parseFloat($('#35_4').val())+parseFloat($('#37_4').val())) *100 )/100 );
  }
  if($('#25_5').val()!='' && $('#27_5').val()!='' && $('#30_5').val()!='' && $('#32_5').val()!='' && $('#35_5').val()!='' && $('#37_5').val()!=''){
    $('#22_5').val( Math.round( (parseFloat($('#25_5').val())+parseFloat($('#27_5').val())+parseFloat($('#30_5').val())+parseFloat($('#32_5').val())+parseFloat($('#35_5').val())+parseFloat($('#37_5').val())) *100 )/100 );
  }
  if($('#25_6').val()!='' && $('#27_6').val()!='' && $('#30_6').val()!='' && $('#32_6').val()!='' && $('#35_6').val()!='' && $('#37_6').val()!=''){
    $('#22_6').val( Math.round( (parseFloat($('#25_6').val())+parseFloat($('#27_6').val())+parseFloat($('#30_6').val())+parseFloat($('#32_6').val())+parseFloat($('#35_6').val())+parseFloat($('#37_6').val())) *100 )/100 );
  }
  if($('#26_4').val()!='' && $('#28_4').val()!='' && $('#31_4').val()!='' && $('#33_4').val()!='' && $('#36_4').val()!='' && $('#38_4').val()!=''){
    $('#23_4').val( Math.round( (parseFloat($('#26_4').val())+parseFloat($('#28_4').val())+parseFloat($('#31_4').val())+parseFloat($('#33_4').val())+parseFloat($('#36_4').val())+parseFloat($('#38_4').val())) *100 )/100 );
  }
  if($('#26_5').val()!='' && $('#28_5').val()!='' && $('#31_5').val()!='' && $('#33_5').val()!='' && $('#36_5').val()!='' && $('#38_5').val()!=''){
    $('#23_5').val( Math.round( (parseFloat($('#26_5').val())+parseFloat($('#28_5').val())+parseFloat($('#31_5').val())+parseFloat($('#33_5').val())+parseFloat($('#36_5').val())+parseFloat($('#38_5').val())) *100 )/100 );
  }
  if($('#26_6').val()!='' && $('#28_6').val()!='' && $('#31_6').val()!='' && $('#33_6').val()!='' && $('#36_6').val()!='' && $('#38_6').val()!=''){
    $('#23_6').val( Math.round( (parseFloat($('#26_6').val())+parseFloat($('#28_6').val())+parseFloat($('#31_6').val())+parseFloat($('#33_6').val())+parseFloat($('#36_6').val())+parseFloat($('#38_6').val())) *100 )/100 );
  }
  if($('#29_4').val()!='' && $('#34_4').val()!='' && $('#39_4').val()!=''){
    $('#24_4').val( Math.round( ( parseFloat($('#29_4').val()) + parseFloat($('#34_4').val()) + parseFloat($('#39_4').val()) )*100)/100);
  }
  if($('#29_5').val()!='' && $('#34_5').val()!='' && $('#39_5').val()!=''){
    $('#24_5').val( Math.round( ( parseFloat($('#29_5').val()) + parseFloat($('#34_5').val()) + parseFloat($('#39_5').val()) )*100)/100);
  }
  if($('#29_6').val()!='' && $('#34_6').val()!='' && $('#39_6').val()!=''){
    $('#24_6').val( Math.round( ( parseFloat($('#29_6').val()) + parseFloat($('#34_6').val()) + parseFloat($('#39_6').val()) )*100)/100);
  }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  if($('#43_4').val()!='' && $('#45_4').val()!='' && $('#47_4').val()!='' && $('#49_4').val()!='' && $('#52_4').val()!='' && $('#54_4').val()!='' && $('#56_4').val()!='' && $('#59_4').val()!='' && $('#61_4').val()!='' && $('#63_4').val()!='' && $('#65_4').val()!='' && $('#68_4').val()!=''){
    $('#40_4').val( Math.round( (parseFloat($('#43_4').val())+parseFloat($('#45_4').val())+parseFloat($('#47_4').val())+parseFloat($('#49_4').val())+parseFloat($('#52_4').val())+parseFloat($('#54_4').val())+parseFloat($('#56_4').val())+parseFloat($('#59_4').val())+parseFloat($('#61_4').val())+parseFloat($('#63_4').val())+parseFloat($('#65_4').val())+parseFloat($('#68_4').val())) *100 )/100 );
  }
  if($('#43_5').val()!='' && $('#45_5').val()!='' && $('#47_5').val()!='' && $('#49_5').val()!='' && $('#52_5').val()!='' && $('#54_5').val()!='' && $('#56_5').val()!='' && $('#59_5').val()!='' && $('#61_5').val()!='' && $('#63_5').val()!='' && $('#65_5').val()!='' && $('#68_5').val()!=''){
    $('#40_5').val( Math.round( (parseFloat($('#43_5').val())+parseFloat($('#45_5').val())+parseFloat($('#47_5').val())+parseFloat($('#49_5').val())+parseFloat($('#52_5').val())+parseFloat($('#54_5').val())+parseFloat($('#56_5').val())+parseFloat($('#59_5').val())+parseFloat($('#61_5').val())+parseFloat($('#63_5').val())+parseFloat($('#65_5').val())+parseFloat($('#68_5').val())) *100 )/100 );
  }
  if($('#43_6').val()!='' && $('#45_6').val()!='' && $('#47_6').val()!='' && $('#49_6').val()!='' && $('#52_6').val()!='' && $('#54_6').val()!='' && $('#56_6').val()!='' && $('#59_6').val()!='' && $('#61_6').val()!='' && $('#63_6').val()!='' && $('#65_6').val()!='' && $('#68_6').val()!=''){
    $('#40_6').val( Math.round( (parseFloat($('#43_6').val())+parseFloat($('#45_6').val())+parseFloat($('#47_6').val())+parseFloat($('#49_6').val())+parseFloat($('#52_6').val())+parseFloat($('#54_6').val())+parseFloat($('#56_6').val())+parseFloat($('#59_6').val())+parseFloat($('#61_6').val())+parseFloat($('#63_6').val())+parseFloat($('#65_6').val())+parseFloat($('#68_6').val())) *100 )/100 );
  }
  if($('#44_4').val()!='' && $('#46_4').val()!='' && $('#48_4').val()!='' && $('#50_4').val()!='' && $('#53_4').val()!='' && $('#55_4').val()!='' && $('#57_4').val()!='' && $('#60_4').val()!='' && $('#62_4').val()!='' && $('#64_4').val()!='' && $('#66_4').val()!='' && $('#69_4').val()!=''){
    $('#41_4').val( Math.round( (parseFloat($('#44_4').val())+parseFloat($('#46_4').val())+parseFloat($('#48_4').val())+parseFloat($('#50_4').val())+parseFloat($('#53_4').val())+parseFloat($('#55_4').val())+parseFloat($('#57_4').val())+parseFloat($('#60_4').val())+parseFloat($('#62_4').val())+parseFloat($('#64_4').val())+parseFloat($('#66_4').val())+parseFloat($('#69_4').val())) *100 )/100 );
  }
  if($('#44_5').val()!='' && $('#46_5').val()!='' && $('#48_5').val()!='' && $('#50_5').val()!='' && $('#53_5').val()!='' && $('#55_5').val()!='' && $('#57_5').val()!='' && $('#60_5').val()!='' && $('#62_5').val()!='' && $('#64_5').val()!='' && $('#66_5').val()!='' && $('#69_5').val()!=''){
    $('#41_5').val( Math.round( (parseFloat($('#44_5').val())+parseFloat($('#46_5').val())+parseFloat($('#48_5').val())+parseFloat($('#50_5').val())+parseFloat($('#53_5').val())+parseFloat($('#55_5').val())+parseFloat($('#57_5').val())+parseFloat($('#60_5').val())+parseFloat($('#62_5').val())+parseFloat($('#64_5').val())+parseFloat($('#66_5').val())+parseFloat($('#69_5').val())) *100 )/100 );
  }
  if($('#44_6').val()!='' && $('#46_6').val()!='' && $('#48_6').val()!='' && $('#50_6').val()!='' && $('#53_6').val()!='' && $('#55_6').val()!='' && $('#57_6').val()!='' && $('#60_6').val()!='' && $('#62_6').val()!='' && $('#64_6').val()!='' && $('#66_6').val()!='' && $('#69_6').val()!=''){
    $('#41_6').val( Math.round( (parseFloat($('#44_6').val())+parseFloat($('#46_6').val())+parseFloat($('#48_6').val())+parseFloat($('#50_6').val())+parseFloat($('#53_6').val())+parseFloat($('#55_6').val())+parseFloat($('#57_6').val())+parseFloat($('#60_6').val())+parseFloat($('#62_6').val())+parseFloat($('#64_6').val())+parseFloat($('#66_6').val())+parseFloat($('#69_6').val())) *100 )/100 );
  }
  if($('#51_4').val()!='' && $('#58_4').val()!='' && $('#67_4').val()!='' && $('#70_4').val()!=''){
    $('#42_4').val( Math.round( ( parseFloat($('#51_4').val()) + parseFloat($('#58_4').val())+ parseFloat($('#67_4').val()) + parseFloat($('#70_4').val()) )*100)/100);
  }
  if($('#51_5').val()!='' && $('#58_5').val()!='' && $('#67_5').val()!='' && $('#70_5').val()!=''){
    $('#42_5').val( Math.round( ( parseFloat($('#51_5').val()) + parseFloat($('#58_5').val())+ parseFloat($('#67_5').val()) + parseFloat($('#70_5').val()) )*100)/100);
  }
  if($('#51_6').val()!='' && $('#58_6').val()!='' && $('#67_6').val()!='' && $('#70_6').val()!=''){
    $('#42_6').val( Math.round( ( parseFloat($('#51_6').val()) + parseFloat($('#58_6').val())+ parseFloat($('#67_6').val()) + parseFloat($('#70_6').val()) )*100)/100);
  }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  if($('#74_4').val()!='' && $('#77_4').val()!='' && $('#79_4').val()!='' && $('#81_4').val()!=''){
    $('#71_4').val( Math.round( (parseFloat($('#74_4').val())+parseFloat($('#77_4').val())+parseFloat($('#79_4').val())+parseFloat($('#81_4').val())) *100 )/100 );
  }
  if($('#74_5').val()!='' && $('#77_5').val()!='' && $('#79_5').val()!='' && $('#81_5').val()!=''){
    $('#71_5').val( Math.round( (parseFloat($('#74_5').val())+parseFloat($('#77_5').val())+parseFloat($('#79_5').val())+parseFloat($('#81_5').val())) *100 )/100 );
  }
  if($('#74_6').val()!='' && $('#77_6').val()!='' && $('#79_6').val()!='' && $('#81_6').val()!=''){
    $('#71_6').val( Math.round( (parseFloat($('#74_6').val())+parseFloat($('#77_6').val())+parseFloat($('#79_6').val())+parseFloat($('#81_6').val())) *100 )/100 );
  }
  if($('#75_4').val()!='' && $('#78_4').val()!='' && $('#80_4').val()!='' && $('#82_4').val()!=''){
    $('#72_4').val( Math.round( (parseFloat($('#75_4').val())+parseFloat($('#78_4').val())+parseFloat($('#80_4').val())+parseFloat($('#82_4').val())) *100 )/100 );
  }
  if($('#75_5').val()!='' && $('#78_5').val()!='' && $('#80_5').val()!='' && $('#82_5').val()!=''){
    $('#72_5').val( Math.round( (parseFloat($('#75_5').val())+parseFloat($('#78_5').val())+parseFloat($('#80_5').val())+parseFloat($('#82_5').val())) *100 )/100 );
  }  
  if($('#75_6').val()!='' && $('#78_6').val()!='' && $('#80_6').val()!='' && $('#82_6').val()!=''){
    $('#72_6').val( Math.round( (parseFloat($('#75_6').val())+parseFloat($('#78_6').val())+parseFloat($('#80_6').val())+parseFloat($('#82_6').val())) *100 )/100 );
  }
  if($('#76_4').val()!='' && $('#83_4').val()!=''){
    $('#73_4').val( Math.round( ( parseFloat($('#76_4').val()) + parseFloat($('#83_4').val()) )*100)/100);
  }
  if($('#76_5').val()!='' && $('#83_5').val()!=''){
    $('#73_5').val( Math.round( ( parseFloat($('#76_5').val()) + parseFloat($('#83_5').val()) )*100)/100);
  }
  if($('#76_6').val()!='' && $('#83_6').val()!=''){
    $('#73_6').val( Math.round( ( parseFloat($('#76_6').val()) + parseFloat($('#83_6').val()) )*100)/100); 
  }
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  if($('#87_4').val()!='' && $('#89_4').val()!='' && $('#91_4').val()!=''){  
    $('#84_4').val( Math.round( (parseFloat($('#87_4').val())+parseFloat($('#89_4').val())+parseFloat($('#91_4').val())) *100 )/100 );
  }
  if($('#87_5').val()!='' && $('#89_5').val()!='' && $('#91_5').val()!=''){
    $('#84_5').val( Math.round( (parseFloat($('#87_5').val())+parseFloat($('#89_5').val())+parseFloat($('#91_5').val())) *100 )/100 );
  }
  if($('#87_6').val()!='' && $('#89_6').val()!='' && $('#91_6').val()!=''){
    $('#84_6').val( Math.round( (parseFloat($('#87_6').val())+parseFloat($('#89_6').val())+parseFloat($('#91_6').val())) *100 )/100 );
  }
  if($('#88_4').val()!='' && $('#90_4').val()!='' && $('#92_4').val()!=''){ 
    $('#85_4').val( Math.round( (parseFloat($('#88_4').val())+parseFloat($('#90_4').val())+parseFloat($('#92_4').val())) *100 )/100 );
  }
  if($('#88_5').val()!='' && $('#90_5').val()!='' && $('#92_5').val()!=''){
    $('#85_5').val( Math.round( (parseFloat($('#88_5').val())+parseFloat($('#90_5').val())+parseFloat($('#92_5').val())) *100 )/100 );  
  }
  if($('#88_6').val()!='' && $('#90_6').val()!='' && $('#92_6').val()!=''){ 
    $('#85_6').val( Math.round( (parseFloat($('#88_6').val())+parseFloat($('#90_6').val())+parseFloat($('#92_6').val())) *100 )/100 );
  }
  if($('#93_4').val()!=''){      
    $('#86_4').val( Math.round( ( parseFloat($('#93_4').val()) )*100)/100);
  }
  if($('#93_5').val()!=''){  
    $('#86_5').val( Math.round( ( parseFloat($('#93_5').val()) )*100)/100);
  }
  if($('#93_6').val()!=''){
    $('#86_6').val( Math.round( ( parseFloat($('#93_6').val()) )*100)/100);
  }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  if($('#96_4').val()!='' && $('#97_4').val()!='' && $('#98_4').val()!=''){
    $('#94_4').val( Math.round( ( parseFloat($('#96_4').val())+parseFloat($('#97_4').val())+parseFloat($('#98_4').val()) )*100)/100);
  }
  if($('#96_5').val()!='' && $('#97_5').val()!='' && $('#98_5').val()!=''){
    $('#94_5').val( Math.round( ( parseFloat($('#96_5').val())+parseFloat($('#97_4').val())+parseFloat($('#98_4').val()) )*100)/100);
  }
  if($('#96_6').val()!='' && $('#97_6').val()!='' && $('#98_6').val()!=''){
    $('#94_6').val( Math.round( ( parseFloat($('#96_6').val())+parseFloat($('#97_4').val())+parseFloat($('#98_4').val()) )*100)/100);
  }
  if($('#94_3').val()!='' && $('#99_3').val()!=''){
    $('#100_3').val( Math.round( ( parseFloat($('#94_3').val()) / parseFloat($('#99_3').val()) )*100)/100);
  }
  if($('#94_4').val()!='' && $('#99_4').val()!=''){
    $('#100_4').val( Math.round( ( parseFloat($('#94_4').val()) / parseFloat($('#99_4').val()) )*100)/100);
  }
  if($('#94_5').val()!='' && $('#99_5').val()!=''){
    $('#100_5').val( Math.round( ( parseFloat($('#94_5').val()) / parseFloat($('#99_5').val()) )*100)/100);
  }
  if($('#94_6').val()!='' && $('#99_6').val()!=''){
    $('#100_6').val( Math.round( ( parseFloat($('#94_6').val()) / parseFloat($('#99_6').val()) )*100)/100); 
  }                 
}