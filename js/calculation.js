/*--------Calculation for TQM---------------------*/
function itemscore_level11(val) {
	//alert("hi");
	
	var num = val.value;

	var tqm12 = $("#tqm_12").val(); //
	//alert(tqm12);
	var level_total1 = document.getElementById('level_totaltqm1').value;

	if (tqm12 == 1) {

		if (num == 1) {
			//alert('2');
			//var tot= parseInt(level_total1) + parseInt(val);
			document.getElementById('level_totaltqm1').value = 2;

		} else {
			//alert('3');
			//var tot= parseInt(level_total1) + parseInt(val);
			document.getElementById('level_totaltqm1').value = 1;

		}

	} else {
		if (num == 1) {
			//alert('4');
			document.getElementById('level_totaltqm1').value = 1;

		} else {
			//alert("5");
			document.getElementById('level_totaltqm1').value = 0;
		}
	}
	getItemscore();
}

function itemscore_level12(val) {

	

	var level_total1 = document.getElementById('level_totaltqm1').value;
	//alert(val);
	var tqm11 = $("#tqm_11").val();
	var num = val.value;
	//alert(tqm11);
	if (tqm11 == 1) {

		if (num == 1) {
			//alert("iftqm11 1");
			//var tot= parseInt(level_total1) + parseInt(val);
			document.getElementById('level_totaltqm1').value = 2;

		} else {
			//alert("iftqm11 0");
			//var tot= parseInt(level_total1) + parseInt(val);
			document.getElementById('level_totaltqm1').value = 1;

		}
	} else {
		if (num == 1) {
			//alert("tqm12 1");
			//var tot= parseInt(level_total1) + parseInt(val);
			document.getElementById('level_totaltqm1').value = 1;

		} else {
			//alert("tqm12 0");

			//var tot= parseInt(level_total1) + parseInt(val);
			document.getElementById('level_totaltqm1').value = 0;

		}

	}
	getItemscore();
}

function itemscore_level21(val) {
	//alert('itemscore');
	var val1= document.getElementById('tqm_11').value;
	var val2= document.getElementById('tqm_12').value;
	
	if( val1 == 0 || val2 == 0)
		{
		alert("Please complete previous level");
		
		}
	//var tqm_12= document.getElementById('tqm_12').value;
	//alert($("input[name='tqm_12']:checked").val());
	var tqm22 = $("#tqm_22").val();
	//var level_total1= document.getElementById('level_totaltqm1').value;
	//	var level_total2= document.getElementById('level_totaltqm2').value;
	var num = val.value;
	//alert(tqm12);

	if (tqm22 == 1) {
		if (num == 1) {
			//alert('test');
			//var tot= parseInt(level_total2) + parseInt(val);
			document.getElementById('level_totaltqm2').value = 2;

		} else {
			//alert('test1');
			//var tot= parseInt(level_total2) + parseInt(val);
			document.getElementById('level_totaltqm2').value = 1;

		}

	} else {
		if (num == 1) {
			//alert('test23');
			document.getElementById('level_totaltqm2').value = 1;

		} else {
			document.getElementById('level_totaltqm2').value = 0;
		}
	}

	getItemscore();
}

function itemscore_level22(val) {
	//alert("");
	var val1= document.getElementById('tqm_11').value;
	var val2= document.getElementById('tqm_12').value;
	var tqm21= document.getElementById('tqm_21').value;
	
	if( val1 == 0 || val2 == 0)
		{
		alert("Please complete previous level");
		
		
		}

	//var level_total1= document.getElementById('level_totaltqm2').value;
	var num = val.value;

	//	var level_total1= document.getElementById('level_totaltqm1').value;

	if (tqm21 == 1) {

		if (num == 1) {

			//var tot= parseInt(level_total1) + parseInt(val);
			document.getElementById('level_totaltqm2').value = 2;

		} else {

			//var tot= parseInt(level_total1) + parseInt(val);
			document.getElementById('level_totaltqm2').value = 1;

		}
	} else {
		if (num == 1) {

			//var tot= parseInt(level_total1) + parseInt(val);
			document.getElementById('level_totaltqm2').value = 1;

		} else {

			//var tot= parseInt(level_total1) + parseInt(val);
			document.getElementById('level_totaltqm2').value = 0;

		}

	}

	getItemscore();
}

function itemscore_level31(val) {

	var val1= document.getElementById('tqm_11').value;
	var val2= document.getElementById('tqm_12').value;
	var val3= document.getElementById('tqm_21').value;
	var val4= document.getElementById('tqm_22').value;
	
	if( val1 == 0 || val2 == 0 || val3 == 0 || val4 == 0)
		{
		alert("Please complete previous level");
		//document.getElementById('tqm_31').value= 0 ;
		
		}
	var num = val.value;

	if (num == 1) {
		//alert('test23');
		document.getElementById('level_totaltqm3').value = 1;

	} else {
		document.getElementById('level_totaltqm3').value = 0;
	}

	getItemscore();
}

function itemscore_level41(val) {

	var num = val.value;
	var val1= document.getElementById('tqm_11').value;
	var val2= document.getElementById('tqm_12').value;
	var val3= document.getElementById('tqm_21').value;
	var val4= document.getElementById('tqm_22').value;
	var val5= document.getElementById('tqm_31').value;
	
	if( val1 == 0 || val2 == 0 || val3 == 0 || val4 == 0 || val5 == 0)
		{
		alert("Please complete previous level");
		
		}
	var level_total4 = document.getElementById('level_totaltqm4').value;
	//alert(tqm12);

	if (num == 1) {
		//alert('test23');
		document.getElementById('level_totaltqm4').value = 1;

	} else {
		document.getElementById('level_totaltqm4').value = 0;
	}

	getItemscore();
}

function itemscore_level51(val) {
	//alert('itemscore');
	var val1= document.getElementById('tqm_11').value;
	var val2= document.getElementById('tqm_12').value;
	var val3= document.getElementById('tqm_21').value;
	var val4= document.getElementById('tqm_22').value;
	var val5= document.getElementById('tqm_31').value;
	var val6= document.getElementById('tqm_41').value;
	
	if( val1 == 0 || val2 == 0 || val3 == 0 || val4 == 0 || val5 == 0 || val6 == 0)
		{
		alert("Please complete previous level");
		
		}
	var num = val.value;
	//var tqm_12= document.getElementById('tqm_12').value;
	//alert($("input[name='tqm_12']:checked").val());
	var tqm52 = $("#tqm_52").val();
	var level_total5 = document.getElementById('level_totaltqm5').value;
	//var level_total4= document.getElementById('level_totaltqm4').value;
	//alert(level_total4);

	if (tqm52 == 1) {
		if (num == 1) {
			//alert('test');
			//var tot= parseInt(level_total5) + parseInt(val);
			document.getElementById('level_totaltqm5').value = 2;

		} else {
			//alert('test1');
			//var tot= parseInt(level_total5) + parseInt(val);
			document.getElementById('level_totaltqm5').value = 1;

		}

	} else {
		if (num == 1) {
			//alert('test23');
			document.getElementById('level_totaltqm5').value = 1;

		} else {
			document.getElementById('level_totaltqm5').value = 0;
		}
	}

	getItemscore();
}

function itemscore_level52(val) {
//alert("");
	var val1= document.getElementById('tqm_11').value;
	var val2= document.getElementById('tqm_12').value;
	var val3= document.getElementById('tqm_21').value;
	var val4= document.getElementById('tqm_22').value;
	var val5= document.getElementById('tqm_31').value;
	var val6= document.getElementById('tqm_41').value;
	
	if( val1 == 0 || val2 == 0 || val3 == 0 || val4 == 0 || val5 == 0 || val6 == 0)
		{
		alert("Please complete previous level");
		
		}
	var level_total5 = document.getElementById('level_totaltqm5').value;

	//var level_total4= document.getElementById('level_totaltqm4').value;
	var num = val.value;
	var tqm51 = $("#tqm_51").val();

	if (tqm51 == 1) {
		if (num == 1) {
			//alert('test');
			//var tot= parseInt(level_total5) + parseInt(val);
			document.getElementById('level_totaltqm5').value = 2;

		} else {
			//alert('test1');
			//var tot= parseInt(level_total5) + parseInt(val);
			document.getElementById('level_totaltqm5').value = 1;

		}

	} else {
		if (num == 1) {
			//alert('test23');
			document.getElementById('level_totaltqm5').value = 1;

		} else {
			document.getElementById('level_totaltqm5').value = 0;
		}
	}

	getItemscore();

}

function getItemscore() {
	//alert('');
	var level_total1 = document.getElementById('level_totaltqm1').value;
	var level_total2 = document.getElementById('level_totaltqm2').value;
	var level_total3 = document.getElementById('level_totaltqm3').value;
	var level_total4 = document.getElementById('level_totaltqm4').value;
	var level_total5 = document.getElementById('level_totaltqm5').value;
	var two_div = 2;
	//alert(level_total2);
	if (level_total1 == '') {
		level_total1 = 0;
	}

	if (level_total2 == '') {
		level_total2 = 0;
	}

	//alert(div_2);
	if (level_total3 == '') {
		level_total3 = 0;
	}
	//alert(div_2);

	if (level_total4 == '') {
		level_total4 = 0;
	}

	if (level_total5 == '') {
		level_total5 = 0;
	}
	
	/*========================= check values of level total ===========================*/
	
	if(level_total4 < 1)
	{
	 
	 level_total5 =0;
			 
	 document.getElementById('tqm_51').value=0;
	 document.getElementById('tqm_52').value=0;
	 
		document.getElementById('level_totaltqm5').value=0;

			 
	}
	if(level_total3 < 1)
	{
	 
	 level_total4 =0;
	 level_total5 =0;
	
	 document.getElementById('tqm_41').value=0;
	 document.getElementById('tqm_51').value=0;
	 document.getElementById('tqm_52').value=0;
	 
	document.getElementById('level_totaltqm5').value=0;
	document.getElementById('level_totaltqm4').value=0;

			 
	}
	if(level_total2 < 2)
	{
	
	 level_total3 =0;
	 level_total4 =0;
	 level_total5 =0;
	
	 document.getElementById('tqm_31').value=0;
	 document.getElementById('tqm_41').value=0;
	 document.getElementById('tqm_51').value=0;
	 document.getElementById('tqm_52').value=0;
	 
		document.getElementById('level_totaltqm5').value=0;
		document.getElementById('level_totaltqm4').value=0;
		document.getElementById('level_totaltqm3').value=0;

			 
	}
	if(level_total1 < 2)
	{
	 level_total2 =0;
	 level_total3 =0;
	 level_total4 =0;
	 level_total5 =0;
	 document.getElementById('tqm_21').value=0;
	 document.getElementById('tqm_22').value=0;
	 document.getElementById('tqm_31').value=0;
	 document.getElementById('tqm_41').value=0;
	 document.getElementById('tqm_51').value=0;
	 document.getElementById('tqm_52').value=0;
	 
	    document.getElementById('level_totaltqm5').value=0;
		document.getElementById('level_totaltqm4').value=0;
		document.getElementById('level_totaltqm3').value=0;
		document.getElementById('level_totaltqm2').value=0;
		
	}
		
	
	  

	var tqm11 = document.getElementById('tqm_11').value;
	var tqm12 = document.getElementById('tqm_12').value;
	var tqm21 = document.getElementById('tqm_21').value;
	var tqm22 = document.getElementById('tqm_22').value;
	var tqm31 = document.getElementById('tqm_31').value;
	var tqm41 = document.getElementById('tqm_41').value;
	var tqm51 = document.getElementById('tqm_51').value;
	var tqm52 = document.getElementById('tqm_52').value;

	level_total1 = parseInt(tqm11) + parseInt(tqm12);
	level_total2 = parseInt(tqm21) + parseInt(tqm22);
	level_total3 = parseInt(tqm31);
	level_total4 = parseInt(tqm41);
	level_total5 = parseInt(tqm51) + parseInt(tqm52);

	div_1 = parseInt(level_total1) / 2;
	div_2 = parseInt(level_total2) / 2;
	div_3 = parseInt(level_total3) / 1;
	div_4 = parseInt(level_total4) / 1;
	div_5 = parseInt(level_total5) / 2;
	//alert( parseFloat(div_2));
	var total = parseFloat(div_1) + parseFloat(div_2) + parseFloat(div_3)
			+ parseFloat(div_4) + parseFloat(div_5);
	//alert(total);
	document.getElementById('total_itemtqm').value = total.toFixed(1);
	document.getElementById('item_scoretqm').innerHTML = total.toFixed(1);
	document.getElementById('hdaction1').value = 1;

	actualscore1();
	actualscore2();
	actualscore3();
	actualscore4();
	actualscore5();
	CategoryRank();
}

/*--------Calculation for Team Work---------------------*/

function teamwork_level11(val) {
	
	
	//alert("hi")
	//chechktqm(val);
	//alert('itemscore');
	//var tqm_12= document.getElementById('tqm_12').value;
	var num = val.value;
	var tm12 = $("#tm_12").val();
	var tm13 = $("#tm_13").val();

	var level_total1 = document.getElementById('level_totaltm1').value;
	//alert(tm12);
	if (tm12 == 1 && tm13 == 1) {
		if (num == 1) {
			//alert('test');
			//var tot= parseInt(level_total1) + parseInt(val);
			document.getElementById('level_totaltm1').value = 3;

		} else {
			//alert('test1');
			//var tot= parseInt(level_total1) + parseInt(val);
			document.getElementById('level_totaltm1').value = 2;

		}

	} else if (tm12 == 1 || tm13 == 1) {
		if (num == '1') {
			//alert('test');
			//var tot= parseInt(level_total1) + parseInt(val);
			document.getElementById('level_totaltm1').value = 2;

		} else {
			//alert('test1');
			//var tot= parseInt(level_total1) + parseInt(val);
			document.getElementById('level_totaltm1').value = 1;

		}

	} else {
		if (num == 1) {
			//alert('test2');
			document.getElementById('level_totaltm1').value = 1;

		} else {
			document.getElementById('level_totaltm1').value = 0;
		}
	}

	getItemscoretm();
}

function teamwork_level12(val) {
	//chechktqm(val);
	var tm11 = $("#tm_11").val();
	var tm12 = $("#tm_12").val();
	
	var level_total1 = document.getElementById('level_totaltm1').value;
	//alert(val);
	var num = val.value;
	var tm13 = $("#tm_13").val();

	if (tm11 == 1 && tm13 == 1) {
		if (num == 1) {

			//var tot= parseInt(level_total1) + parseInt(val);
			document.getElementById('level_totaltm1').value = 3;

		} else {

			//var tot= parseInt(level_total1) + parseInt(val);
			document.getElementById('level_totaltm1').value = 2;

		}
	} else if (tm11 == 1 || tm13 == 1) {
		if (num == 1) {
			//alert('test');
			//var tot= parseInt(level_total1) + parseInt(val);
			document.getElementById('level_totaltm1').value = 2;

		} else {
			//alert('test1');
			//var tot= parseInt(level_total1) + parseInt(val);
			document.getElementById('level_totaltm1').value = 1;

		}
	} else {
		if (num == 1) {
			//alert('test23');
			document.getElementById('level_totaltm1').value = 1;

		} else {
			document.getElementById('level_totaltm1').value = 0;
		}
	}
	getItemscoretm();
}

function teamwork_level13(val) {
	//chechktqm(val);
	var tm11 = $("#tm_11").val();
	var tm12 = $("#tm_12").val();
	
	var level_total1 = document.getElementById('level_totaltm1').value;
	//alert(val);
	var num = val.value;
	var tm12 = $("#tm_12").val();
	var tm11 = $("#tm_11").val();
	if (tm11 == 1 && tm12 == 1) {
		if (num == 1) {

			//var tot= parseInt(level_total1) + parseInt(val);
			document.getElementById('level_totaltm1').value = 3;

		} else {

			//var tot= parseInt(level_total1) + parseInt(val);
			document.getElementById('level_totaltm1').value = 2;

		}
	} else if (tm11 == 1 || tm12 == 1) {
		if (num == 1) {
			//alert('test');
			//var tot= parseInt(level_total1) + parseInt(val);
			document.getElementById('level_totaltm1').value = 2;

		} else {
			//alert('test1');
			//var tot= parseInt(level_total1) + parseInt(val);
			document.getElementById('level_totaltm1').value = 1;

		}
	} else {
		if (num == 1) {
			//alert('test23');
			document.getElementById('level_totaltm1').value = 1;

		} else {
			document.getElementById('level_totaltm1').value = 0;
		}
	}

	getItemscoretm();
}

function teamwork_level21(val) {

	//alert('itemscore');
	
	var val1= document.getElementById('tm_11').value;
	var val2= document.getElementById('tm_12').value;
	var val3= document.getElementById('tm_13').value;
		
		if( val1 == 0 || val2 == 0 || val3 == 0)
			{
			alert("Please complete previous level");
			
			}
			
	var num = val.value;
	var level_total1 = document.getElementById('level_totaltm1').value;
	//alert(tqm12);

	if (num == 1) {
		//alert('test23');
		document.getElementById('level_totaltm2').value = 1;

	} else {
		document.getElementById('level_totaltm2').value = 0;
	}

	getItemscoretm();

}

function teamwork_level31(val) {

    var val1= document.getElementById('tm_11').value;
	var val2= document.getElementById('tm_12').value;
	var val3= document.getElementById('tm_13').value;
	var val4= document.getElementById('tm_21').value;
		
	if( val1 == 0 || val2 == 0 || val3 == 0 || val4 == 0)
		{
		alert("Please complete previous level");
		
		}
	var id = val.id;
	var num = val.value;
	var level_total2 = document.getElementById('level_totaltm2').value;
	//alert(tqm12);

	if (num == 1) {
		//alert('test23');
		document.getElementById('level_totaltm3').value = 1;

	} else {
		document.getElementById('level_totaltm3').value = 0;
	}

	getItemscoretm();

}

function teamwork_level41(val) {
	var id = val.id;

	var val1 = document.getElementById('tm_11').value;
	var val2 = document.getElementById('tm_12').value;
	var val3 = document.getElementById('tm_13').value;
	var val4 = document.getElementById('tm_21').value;
	var val5 = document.getElementById('tm_31').value;
	
		
	if( val1 == 0 || val2 == 0 || val3 == 0 || val4 == 0 || val5 == 0)
		{
		alert("Please complete previous level");
		
		}
	var num = val.value;

	var level_total3 = document.getElementById('level_totaltm3').value;
	//alert(tqm12);

	if (num == 1) {
		//alert('test23');
		document.getElementById('level_totaltm4').value = 1;

	} else {
		document.getElementById('level_totaltm4').value = 0;
	}

	getItemscoretm();

}

function teamwork_level51(val) {
	var id = val.id;
	var tm51 = $("#tm_51").val();
	
	var val1= document.getElementById('tm_11').value;
	var val2= document.getElementById('tm_12').value;
	var val3= document.getElementById('tm_13').value;
	var val4= document.getElementById('tm_21').value;
	var val5= document.getElementById('tm_31').value;
	var val6= document.getElementById('tm_41').value;
		
	if( val1 == 0 || val2 == 0 || val3 == 0 || val4 == 0 || val5 == 0 || val6 == 0)
		{
		alert("Please complete previous level");
		
		}
	var num = val.value;
	//var tqm_12= document.getElementById('tqm_12').value;
	//alert($("input[name='tqm_12']:checked").val());
	var tm52 = $("#tm_52").val();
	var level_total5 = document.getElementById('level_totaltm5').value;
	var level_total4 = document.getElementById('level_totaltm4').value;
	//alert(tqm12);

	if (tm52 == 1) {
		if (num == 1) {
			//alert('test');
			//var tot= parseInt(level_total5) + parseInt(val);
			document.getElementById('level_totaltm5').value = 2;

		} else {
			//alert('test1');
			//var tot= parseInt(level_total5) + parseInt(val);
			document.getElementById('level_totaltm5').value = 1;

		}

	} else {
		if (num == 1) {
			//alert('test23');
			document.getElementById('level_totaltm5').value = 1;

		} else {
			document.getElementById('level_totaltm5').value = 0;
		}
	}

	getItemscoretm();

}

function teamwork_level52(val) {
	var id = val.id;

	var tm51 = $("#tm_51").val();
	
	var val1= document.getElementById('tm_11').value;
	var val2= document.getElementById('tm_12').value;
	var val3= document.getElementById('tm_13').value;
	var val4= document.getElementById('tm_21').value;
	var val5= document.getElementById('tm_31').value;
	var val6= document.getElementById('tm_41').value;
		
	if( val1 == 0 || val2 == 0 || val3 == 0 || val4 == 0 || val5 == 0 || val6 == 0)
		{
		alert("Please complete previous level");
		
		}
	

	var level_total5 = document.getElementById('level_totaltm5').value;
	//alert(val);
	var num = val.value;
	var level_total4 = document.getElementById('level_totaltm4').value;
	//alert(tqm12);
	var tm51 = $("#tm_51").val();

	if (tm51 == 1) {
		if (num == 1) {

			//var tot= parseInt(level_total5) + parseInt(val);
			document.getElementById('level_totaltm5').value = 2;

		} else {

			//var tot= parseInt(level_total5) + parseInt(val);
			document.getElementById('level_totaltm5').value = 1;

		}
	} else {
		if (num == 1) {

			//var tot= parseInt(level_total5) + parseInt(val);
			document.getElementById('level_totaltm5').value = 1;

		} else {

			//var tot= parseInt(level_total5) + parseInt(val);
			document.getElementById('level_totaltm5').value = 0;

		}
	}

	getItemscoretm();

}

function getItemscoretm() {
	//alert('');
	var level_total1 = document.getElementById('level_totaltm1').value;
	var level_total2 = document.getElementById('level_totaltm2').value;
	var level_total3 = document.getElementById('level_totaltm3').value;
	var level_total4 = document.getElementById('level_totaltm4').value;
	var level_total5 = document.getElementById('level_totaltm5').value;
	var two_div = 2;
	//alert(level_total2);
	if (level_total1 == '') {
		level_total1 = 0;
	}

	if (level_total2 == '') {
		level_total2 = 0;
	}

	//alert(div_2);
	if (level_total3 == '') {
		level_total3 = 0;
	}
	//alert(div_2);

	if (level_total4 == '') {
		level_total4 = 0;
	}

	if (level_total5 == '') {
		level_total5 = 0;
	}
	
	/*------------- Check value of last level ----------------------*/
	if(level_total4 < 1)
	{
	 
	 level_total5 = 0;
	 document.getElementById('level_totaltm5').value=0;	 
	 document.getElementById('tm_51').value=0;
	 document.getElementById('tm_52').value=0;
			 
	}
	
	if(level_total3 < 1)
	{
	 
	 level_total4 = 0;
	 level_total5 = 0;
	
	 document.getElementById('tm_41').value=0;
	 document.getElementById('tm_51').value=0;
	 document.getElementById('tm_52').value=0;
	 document.getElementById('level_totaltm5').value=0;
	 document.getElementById('level_totaltm4').value=0;
	}
	if(level_total2 < 1)
	{
	
	 level_total3 = 0;
	 level_total4 = 0;
	 level_total5 = 0;
	
	 document.getElementById('tm_31').value=0;
	 document.getElementById('tm_41').value=0;
	 document.getElementById('tm_51').value=0;
	 document.getElementById('tm_52').value=0;
	 document.getElementById('level_totaltm5').value=0;
	 document.getElementById('level_totaltm4').value=0;
	 document.getElementById('level_totaltm3').value=0;
	}
	if(level_total1 < 3)
	{
	 level_total2 = 0;
	 level_total3 = 0;
	 level_total4 = 0;
	 level_total5 = 0;
	 document.getElementById('tm_21').value=0;
	 document.getElementById('tm_31').value=0;
	 document.getElementById('tm_41').value=0;
	 document.getElementById('tm_51').value=0;
	 document.getElementById('tm_52').value=0;
	
	 document.getElementById('level_totaltm5').value=0;
	 document.getElementById('level_totaltm4').value=0;
	 document.getElementById('level_totaltm3').value=0;
	 document.getElementById('level_totaltm2').value=0;
	}

	var tm11 = document.getElementById('tm_11').value;
	var tm12 = document.getElementById('tm_12').value;
	var tm13 = document.getElementById('tm_13').value;
	var tm21 = document.getElementById('tm_21').value;
	var tm31 = document.getElementById('tm_31').value;
	var tm41 = document.getElementById('tm_41').value;
	var tm51 = document.getElementById('tm_51').value;
	var tm52 = document.getElementById('tm_52').value;

	level_total1 = parseInt(tm11) + parseInt(tm12) + parseInt(tm13);
	level_total2 = parseInt(tm21);
	level_total3 = parseInt(tm31);
	level_total4 = parseInt(tm41);
	level_total5 = parseInt(tm51) + parseInt(tm52);

	div_1 = parseInt(level_total1) / 3;
	div_2 = parseInt(level_total2) / 1;
	div_3 = parseInt(level_total3) / 1;
	div_4 = parseInt(level_total4) / 1;
	div_5 = parseInt(level_total5) / 2;
	//alert( parseFloat(div_2));
	var total = parseFloat(div_1) + parseFloat(div_2) + parseFloat(div_3)
			+ parseFloat(div_4) + parseFloat(div_5);
	//alert(total);
	document.getElementById('item_scoretm').value = total.toFixed(1);
	document.getElementById('total_itemtm').innerHTML = total.toFixed(1);
	document.getElementById('hdaction2').value = 1;

	actualscore1();
	actualscore2();
	actualscore3();
	actualscore4();
	actualscore5();
	CategoryRank();
}

/*-------------------------------- Calculation for Quality management -> Do not Produce--------------------------------------------*/

function dnp_level11(val) {
	var dnp11 = $("#dnp_11").val();
	
	var num = val.value;
	//var tqm_12= document.getElementById('tqm_12').value;
	var dnp12 = $("#dnp_12").val();
	var dnp13 = $("#dnp_13").val();
	var level_total1 = document.getElementById('level_totaldnp1').value;
	//alert(dnp12);
	if (dnp12 == 1 && dnp13 == 1) {
		if (num == 1) {
			//alert('test');
			//var tot= parseInt(level_total1) + parseInt(val);
			document.getElementById('level_totaldnp1').value = 3;

		} else {
			//alert('test1');
			//var tot= parseInt(level_total1) + parseInt(val);
			document.getElementById('level_totaldnp1').value = 2;

		}

	} else if (dnp12 == 1 || dnp13 == 1) {
		if (num == '1') {
			//alert('test');
			//var tot= parseInt(level_total1) + parseInt(val);
			document.getElementById('level_totaldnp1').value = 2;

		} else {
			//alert('test1');
			//var tot= parseInt(level_total1) + parseInt(val);
			document.getElementById('level_totaldnp1').value = 1;

		}

	} else {
		if (num == 1) {
			//alert('test2');
			document.getElementById('level_totaldnp1').value = 1;

		} else {
			document.getElementById('level_totaldnp1').value = 0;
		}
	}
	getItemscorednp();
}

function dnp_level12(val) {
	var dnp11 = $("#dnp_11").val();
	var dnp12 = $("#dnp_12").val();
	
	var level_total1 = document.getElementById('level_totaldnp1').value;
	//alert(val);
	var num = val.value;
	var dnp13 = $("#dnp_13").val();

	if (dnp11 == 1 && dnp13 == 1) {
		if (num == 1) {

			//var tot= parseInt(level_total1) + parseInt(val);
			document.getElementById('level_totaldnp1').value = 3;

		} else {

			//var tot= parseInt(level_total1) + parseInt(val);
			document.getElementById('level_totaldnp1').value = 2;

		}
	} else if (dnp11 == 1 || dnp13 == 1) {
		if (num == 1) {
			//alert('test');
			//var tot= parseInt(level_total1) + parseInt(val);
			document.getElementById('level_totaldnp1').value = 2;

		} else {
			//alert('test1');
			//var tot= parseInt(level_total1) + parseInt(val);
			document.getElementById('level_totaldnp1').value = 1;

		}
	} else {
		if (num == 1) {
			//alert('test23');
			document.getElementById('level_totaldnp1').value = 1;

		} else {
			document.getElementById('level_totaldnp1').value = 0;
		}
	}
	getItemscorednp();
}
function dnp_level13(val) {
	//alert("hi");
	var dnp11 = $("#dnp_11").val();
	var dnp12 = $("#dnp_12").val();
	

	var level_total1 = document.getElementById('level_totaldnp1').value;
	//alert(val);
	var num = val.value;
	var dnp12 = $("#dnp_12").val();
	var dnp11 = $("#dnp_11").val();
	if (dnp11 == 1 && dnp12 == 1) {
		if (num == 1) {

			//var tot= parseInt(level_total1) + parseInt(val);
			document.getElementById('level_totaldnp1').value = 3;

		} else {

			//var tot= parseInt(level_total1) + parseInt(val);
			document.getElementById('level_totaldnp1').value = 2;

		}
	} else if (dnp11 == 1 || dnp12 == 1) {
		//alert("ji");
		if (num == 1) {
			//alert('test');
			//var tot= parseInt(level_total1) + parseInt(val);
			document.getElementById('level_totaldnp1').value = 2;

		} else {
			//alert('test1');
			//var tot= parseInt(level_total1) + parseInt(val);
			document.getElementById('level_totaldnp1').value = 1;

		}
	} else {
		if (num == 1) {
			//alert('test23');
			document.getElementById('level_totaldnp1').value = 1;

		} else {
			document.getElementById('level_totaldnp1').value = 0;
		}
	}
	getItemscorednp();
}

function dnp_level21(val) {
	//alert('test');
	var val1=$("#dnp_11").val();
	var val2=$("#dnp_12").val();
	var val3=$("#dnp_13").val();
	
	if(val1 == 0 || val2 == 0 || val3 == 0)
		{
		  alert("Please complete previous level");   
		}
	
	var num = val.value;
	var dnp12 = $("#dnp_22").val();
	var dnp13 = $("#dnp_23").val();
	var dnp14 = $("#dnp_24").val();
	var dnp15 = $("#dnp_25").val();
	var dnp16 = $("#dnp_26").val();
	//var level_total1= document.getElementById('level_totaldnp1').value;
	var level_total2 = document.getElementById('level_totaldnp2').value;
	var quality_lev_1 = document.getElementById('quality_lev_1').value;
	var minus = 1;

	if (quality_lev_1 == 0) {
		//alert(val);
		if (num == 1) {
			//alert("yes");
			if (dnp12 == 1 || dnp13 == 1 || dnp14 == 1 || dnp15 == 1
					|| dnp16 == 1) {
				var tot = parseInt(level_total2) + parseInt(num);
				document.getElementById('level_totaldnp2').value = tot;
			} else if (dnp12 == 1 && dnp13 == 1 && dnp14 == 1 && dnp15 == 1
					&& dnp16 == 1) {
				var tot = parseInt(level_total2) + parseInt(num);
				document.getElementById('level_totaldnp2').value = tot;
			} else {
				//alert("else");
				var tot = parseInt(level_total2) + parseInt(num);
				document.getElementById('level_totaldnp2').value = 1;

			}
			document.getElementById('quality_lev_1').value = 1;
		} else {
			document.getElementById('level_totaldnp2').value = level_total2;
		}
	} else {
		var tot = parseInt(level_total2) - parseInt(minus);
		document.getElementById('level_totaldnp2').value = tot;
		document.getElementById('quality_lev_1').value = 0;
	}

	getItemscorednp();

}
function dnp_level22(val) {

	
	//alert('test');
	var val1=$("#dnp_11").val();
	var val2=$("#dnp_12").val();
	var val3=$("#dnp_13").val();
	
	if(val1 == 0 || val2 == 0 || val3 == 0)
		{
		  alert("Please complete previous level");   
		}

	var num = val.value;
	var dnp11 = $("#dnp_21").val();
	var dnp13 = $("#dnp_23").val();
	var dnp14 = $("#dnp_24").val();
	var dnp15 = $("#dnp_25").val();
	var dnp16 = $("#dnp_26").val();
	
	//var level_total1= document.getElementById('level_totaldnp1').value;
	var level_total2 = document.getElementById('level_totaldnp2').value;
	var quality_lev_2 = document.getElementById('quality_lev_2').value;
	var minus = 1;

	if (quality_lev_2 == 0) {
		//alert(val);
		if (num == 1) {
			//alert("yes");
			if (dnp11 == 1 || dnp13 == 1 || dnp14 == 1 || dnp15 == 1
					|| dnp16 == 1) {
				var tot = parseInt(level_total2) + parseInt(num);
				document.getElementById('level_totaldnp2').value = tot;
			} else if (dnp11 == '1' && dnp13 == '1' && dnp14 == '1'
					&& dnp15 == '1' && dnp16 == '1') {
				var tot = parseInt(level_total2) + parseInt(num);
				document.getElementById('level_totaldnp2').value = tot;
			} else {
				//alert("else");
				var tot = parseInt(level_total2) + parseInt(num);
				document.getElementById('level_totaldnp2').value = 1;

			}
			document.getElementById('quality_lev_2').value = 1;
		} else {
			document.getElementById('level_totaldnp2').value = level_total2;
		}
	} else {
		var tot = parseInt(level_total2) - parseInt(minus);
		document.getElementById('level_totaldnp2').value = tot;
		document.getElementById('quality_lev_2').value = 0;
	}

	getItemscorednp();
}

function dnp_level23(val) {
	//alert('test');

	var dnp23 = $("#dnp_23").val();

	
	var val1=$("#dnp_11").val();
	var val2=$("#dnp_12").val();
	var val3=$("#dnp_13").val();
	
	if(val1 == 0 || val2 == 0 || val3 == 0)
		{
		  alert("Please complete previous level");   
		}

	var num = val.value;
	var dnp11 = $("#dnp_21").val();
	var dnp12 = $("#dnp_22").val();
	var dnp14 = $("#dnp_24").val();
	var dnp15 = $("#dnp_25").val();
	var dnp16 = $("#dnp_26").val();
	
	//var level_total1= document.getElementById('level_totaldnp1').value;
	var level_total2 = document.getElementById('level_totaldnp2').value;
	var quality_lev_3 = document.getElementById('quality_lev_3').value;
	var minus = 1;

	if (quality_lev_3 == 0) {
		//alert(val);
		if (num == 1) {
			//alert("yes");
			if (dnp11 == 1 || dnp12 == 1 || dnp14 == 1 || dnp15 == 1
					|| dnp16 == 1) {
				var tot = parseInt(level_total2) + parseInt(num);
				document.getElementById('level_totaldnp2').value = tot;
			} else if (dnp11 == '1' && dnp12 == '1' && dnp14 == '1'
					&& dnp15 == '1' && dnp16 == '1') {
				var tot = parseInt(level_total2) + parseInt(num);
				document.getElementById('level_totaldnp2').value = tot;
			} else {
				//alert("else");
				var tot = parseInt(level_total2) + parseInt(num);
				document.getElementById('level_totaldnp2').value = 1;

			}
			document.getElementById('quality_lev_3').value = 1;
		} else {
			document.getElementById('level_totaldnp2').value = level_total2;
		}
	} else {
		var tot = parseInt(level_total2) - parseInt(minus);
		document.getElementById('level_totaldnp2').value = tot;
		document.getElementById('quality_lev_3').value = 0;
	}

	getItemscorednp();
}
function dnp_level24(val) {
	//alert('test');

	var dnp24 = $("#dnp_24").val();

	/*if (dnp24 == 0) {

		//document.getElementById("dnp_22").value=0;
		//document.getElementById("dnp_23").value=0;
		//document.getElementById("dnp_24").value=0;
		document.getElementById("dnp_25").value = 0;
		document.getElementById("dnp_26").value = 0;
	}*/
	var val1=$("#dnp_11").val();
	var val2=$("#dnp_12").val();
	var val3=$("#dnp_13").val();
	
	if(val1 == 0 || val2 == 0 || val3 == 0)
		{
		  alert("Please complete previous level");   
		}

	var num = val.value;
	var dnp11 = $("#dnp_21").val();
	var dnp12 = $("#dnp_22").val();
	var dnp13 = $("#dnp_23").val();
	var dnp15 = $("#dnp_25").val();
	var dnp16 = $("#dnp_26").val();
	
	//var level_total1= document.getElementById('level_totaldnp1').value;
	var level_total2 = document.getElementById('level_totaldnp2').value;
	var quality_lev_4 = document.getElementById('quality_lev_4').value;
	var minus = 1;

	if (quality_lev_4 == 0) {
		//alert(val);
		if (num == 1) {
			//alert("yes");
			if (dnp11 == 1 || dnp12 == 1 || dnp13 == 1 || dnp15 == 1
					|| dnp16 == 1) {
				var tot = parseInt(level_total2) + parseInt(num);
				document.getElementById('level_totaldnp2').value = tot;
			} else if (dnp11 == '1' && dnp12 == '1' && dnp13 == '1'
					&& dnp15 == '1' && dnp16 == '1') {
				var tot = parseInt(level_total2) + parseInt(num);
				document.getElementById('level_totaldnp2').value = tot;
			} else {
				//alert("else");
				//var tot= parseInt(level_total2) + parseInt(num);
				document.getElementById('level_totaldnp2').value = 1;

			}
			document.getElementById('quality_lev_4').value = 1;
		} else {
			document.getElementById('level_totaldnp2').value = level_total2;
		}
	} else {
		var tot = parseInt(level_total2) - parseInt(minus);
		document.getElementById('level_totaldnp2').value = tot;
		document.getElementById('quality_lev_4').value = 0;
	}

	getItemscorednp();
}

function dnp_level25(val) {
	//alert('test');
	var dnp25 = $("#dnp_25").val();

	var val1=$("#dnp_11").val();
	var val2=$("#dnp_12").val();
	var val3=$("#dnp_13").val();
	
	if(val1 == 0 || val2 == 0 || val3 == 0)
		{
		  alert("Please complete previous level");   
		}

	var num = val.value;
	var dnp11 = $("#dnp_21").val();
	var dnp12 = $("#dnp_22").val();
	var dnp13 = $("#dnp_23").val();
	var dnp14 = $("#dnp_24").val();
	var dnp16 = $("#dnp_26").val();
	
	//var level_total1= document.getElementById('level_totaldnp1').value;
	var level_total2 = document.getElementById('level_totaldnp2').value;
	var quality_lev_5 = document.getElementById('quality_lev_5').value;
	var minus = 1;

	if (quality_lev_5 == 0) {
		//alert(val);
		if (num == 1) {
			//alert("yes");
			if (dnp11 == 1 || dnp12 == 1 || dnp13 == 1 || dnp14 == 1
					|| dnp16 == 1) {
				var tot = parseInt(level_total2) + parseInt(num);
				document.getElementById('level_totaldnp2').value = tot;
			} else if (dnp11 == 1 && dnp12 == 1 && dnp13 == 1 && dnp14 == 1
					&& dnp16 == 1) {
				var tot = parseInt(level_total2) + parseInt(num);
				document.getElementById('level_totaldnp2').value = tot;
			} else {
				//alert("else");
				//var tot= parseInt(level_total2) + parseInt(val);
				document.getElementById('level_totaldnp2').value = 1;

			}
			document.getElementById('quality_lev_5').value = 1;
		} else {
			document.getElementById('level_totaldnp2').value = level_total2;
		}
	} else {
		var tot = parseInt(level_total2) - parseInt(minus);
		document.getElementById('level_totaldnp2').value = tot;
		document.getElementById('quality_lev_5').value = 0;
	}

	getItemscorednp();
}

function dnp_level26(val) {
	//alert('test');

	var val1=$("#dnp_11").val();
	var val2=$("#dnp_12").val();
	var val3=$("#dnp_13").val();
	
	if(val1 == 0 || val2 == 0 || val3 == 0)
		{
		  alert("Please complete previous level");   
		}
	 
	var num = val.value;
	var dnp11 = $("#dnp_21").val();
	var dnp12 = $("#dnp_22").val();
	var dnp13 = $("#dnp_23").val();
	var dnp14 = $("#dnp_24").val();
	var dnp15 = $("#dnp_25").val();

	
	//var level_total1= document.getElementById('level_totaldnp1').value;
	var level_total2 = document.getElementById('level_totaldnp2').value;
	var quality_lev_6 = document.getElementById('quality_lev_6').value;
	var minus = 1;

	if (quality_lev_6 == 0) {
		//alert(val);
		if (num == 1) {
			//alert("yes");
			if (dnp11 == 1 || dnp12 == 1 || dnp13 == 1 || dnp15 == 1
					|| dnp14 == 1) {
				var tot = parseInt(level_total2) + parseInt(num);
				document.getElementById('level_totaldnp2').value = tot;
			} else if (dnp11 == '1' && dnp12 == '1' && dnp13 == '1'
					&& dnp15 == '1' && dnp14 == '1') {
				var tot = parseInt(level_total2) + parseInt(num);
				document.getElementById('level_totaldnp2').value = tot;
			} else {
				//alert("else");
				//var tot= parseInt(level_total2) + parseInt(num);
				document.getElementById('level_totaldnp2').value = 1;

			}
			document.getElementById('quality_lev_6').value = 1;
		} else {
			document.getElementById('level_totaldnp2').value = level_total2;
		}
	} else {
		var tot = parseInt(level_total2) - parseInt(minus);
		document.getElementById('level_totaldnp2').value = tot;
		document.getElementById('quality_lev_6').value = 0;
	}

	getItemscorednp();
}

function dnp_level31(val) {
	//alert('itemscore');
	//alert('test');
	var val1 = $("#dnp_21").val();
	var val2 = $("#dnp_22").val();
	var val3 = $("#dnp_23").val();
	var val4 = $("#dnp_24").val();
	var val5 = $("#dnp_25").val();
	var val6 = $("#dnp_26").val();
	if(val1 == 0 || val2 == 0 || val3 == 0 || val4 == 0 || val5 == 0 || val6 == 0 )
	{
		alert("Please complete previous level");
	}
 
	var dnp11 = $("#dnp_31").val();
	
	
	var num = val.value;
	var dnp12 = $("#dnp_32").val();
	var dnp13 = $("#dnp_33").val();
	var dnp14 = $("#dnp_34").val();
	//var level_total2= document.getElementById('level_totaldnp2').value;
	var level_total3 = document.getElementById('level_totaldnp3').value;
	var quality_qdp_31 = document.getElementById('quality_qdp_31').value;
	var minus = 1;

	if (quality_qdp_31 == 0) {
		//	alert(val);
		if (num == 1) {
			//	alert("yes");
			if (dnp12 == 1 || dnp13 == 1 || dnp14 == 1) {
				var tot = parseInt(level_total3) + parseInt(num);
				document.getElementById('level_totaldnp3').value = tot;
			} else if (dnp12 == '1' && dnp13 == '1' && dnp14 == '1') {
				var tot = parseInt(level_total3) + parseInt(num);
				document.getElementById('level_totaldnp3').value = tot;
			} else {
				//	alert("else");
				//var tot= parseInt(level_total3) + parseInt(val);
				document.getElementById('level_totaldnp3').value = 1;

			}
			document.getElementById('quality_qdp_31').value = 1;
		} else {
			document.getElementById('level_totaldnp3').value = 0;
		}
	} else {
		var tot = parseInt(level_total3) - parseInt(minus);
		document.getElementById('level_totaldnp3').value = tot;
		document.getElementById('quality_qdp_31').value = 0;
	}

	getItemscorednp();
}

function dnp_level32(val) {
	var dnp12 = $("#dnp_32").val();
	/*if (dnp12 == 0) {
		//document.getElementById('dnp_32').value=0;
		document.getElementById('dnp_33').value = 0;
		document.getElementById('dnp_34').value = 0;

	}*/
	var val1 = $("#dnp_21").val();
	var val2 = $("#dnp_22").val();
	var val3 = $("#dnp_23").val();
	var val4 = $("#dnp_24").val();
	var val5 = $("#dnp_25").val();
	var val6 = $("#dnp_26").val();
	if(val1 == 0 || val2 == 0 || val3 == 0 || val4 == 0 || val5 == 0 || val6 == 0 )
	{
		alert("Please complete previous level");
	}
	
	//alert('test');
	var num = val.value;
	var dnp11 = $("#dnp_31").val();
	var dnp13 = $("#dnp_33").val();
	var dnp14 = $("#dnp_34").val();
	
	//var level_total2= document.getElementById('level_totaldnp2').value;
	var level_total3 = document.getElementById('level_totaldnp3').value;
	var quality_qdp_32 = document.getElementById('quality_qdp_32').value;
	var minus = 1;

	if (quality_qdp_32 == 0) {
		//alert(val);
		if (num == '1') {
			//alert("yes");
			if (dnp11 == 1 || dnp13 == 1 || dnp14 == 1) {
				var tot = parseInt(level_total3) + parseInt(num);
				document.getElementById('level_totaldnp3').value = tot;
			} else if (dnp11 == '1' && dnp13 == '1' && dnp14 == '1') {
				var tot = parseInt(level_total3) + parseInt(num);
				document.getElementById('level_totaldnp3').value = tot;
			} else {
				//alert("else");
				//var tot= parseInt(level_total3) + parseInt(val);
				document.getElementById('level_totaldnp3').value = 1;

			}
			document.getElementById('quality_qdp_32').value = 1;
		} else {
			document.getElementById('level_totaldnp3').value = level_total3;
		}
	} else {
		var tot = parseInt(level_total3) - parseInt(minus);
		document.getElementById('level_totaldnp3').value = tot;
		document.getElementById('quality_qdp_32').value = 0;
	}

	getItemscorednp();
}

function dnp_level33(val) {
	var dnp13 = $("#dnp_33").val();
	
	
	var val1 = $("#dnp_21").val();
	var val2 = $("#dnp_22").val();
	var val3 = $("#dnp_23").val();
	var val4 = $("#dnp_24").val();
	var val5 = $("#dnp_25").val();
	var val6 = $("#dnp_26").val();
	if(val1 == 0 || val2 == 0 || val3 == 0 || val4 == 0 || val5 == 0 || val6 == 0 )
	{
		alert("Please complete previous level");
	}
	//alert('itemscore');
	//alert('test');
	var num = val.value;
	var dnp11 = $("#dnp_31").val();
	var dnp12 = $("#dnp_32").val();
	var dnp14 = $("#dnp_34").val();
	
	var level_total3 = document.getElementById('level_totaldnp3').value;
	//var level_total2= document.getElementById('level_totaldnp2').value;
	var quality_qdp_33 = document.getElementById('quality_qdp_33').value;
	var minus = 1;

	if (quality_qdp_33 == 0) {
		//alert(val);
		if (num == 1) {
			//alert("yes");
			if (dnp11 == 1 || dnp12 == 1 || dnp14 == 1) {
				var tot = parseInt(level_total3) + parseInt(num);
				document.getElementById('level_totaldnp3').value = tot;
			} else if (dnp11 == 1 && dnp12 == 1 && dnp14 == 1) {
				var tot = parseInt(level_total3) + parseInt(num);
				document.getElementById('level_totaldnp3').value = tot;
			} else {
				//alert("else");
				//var tot= parseInt(level_total3) + parseInt(val);
				document.getElementById('level_totaldnp3').value = 1;

			}
			document.getElementById('quality_qdp_33').value = 1;
		} else {
			document.getElementById('level_totaldnp3').value = level_total3;
		}
	} else {
		var tot = parseInt(level_total3) - parseInt(minus);
		document.getElementById('level_totaldnp3').value = tot;
		document.getElementById('quality_qdp_33').value = 0;
	}

	getItemscorednp();

}

function dnp_level34(val) {

var val1 = $("#dnp_21").val();
	var val2 = $("#dnp_22").val();
	var val3 = $("#dnp_23").val();
	var val4 = $("#dnp_24").val();
	var val5 = $("#dnp_25").val();
	var val6 = $("#dnp_26").val();
	if(val1 == 0 || val2 == 0 || val3 == 0 || val4 == 0 || val5 == 0 || val6 == 0 )
	{
		alert("Please complete previous level");
	}
	var num = val.value;
	var dnp11 = $("#dnp_31").val();
	var dnp12 = $("#dnp_32").val();
	var dnp13 = $("#dnp_33").val();
	
	//var level_total2= document.getElementById('level_totaldnp2').value;
	var level_total3 = document.getElementById('level_totaldnp3').value;
	var quality_qdp_34 = document.getElementById('quality_qdp_34').value;

	var minus = 1;

	if (quality_qdp_34 == 0) {
		//alert(val);
		if (num == 1) {
			//	alert("yes");
			if (dnp11 == '1' || dnp12 == '1' || dnp13 == '1') {
				var tot = parseInt(level_total3) + parseInt(num);
				document.getElementById('level_totaldnp3').value = tot;
			} else if (dnp11 == '1' && dnp12 == '1' && dnp13 == '1') {
				var tot = parseInt(level_total3) + parseInt(num);
				document.getElementById('level_totaldnp3').value = tot;
			} else {
				//	alert("else");
				//var tot= parseInt(level_total3) + parseInt(val);
				document.getElementById('level_totaldnp3').value = 1;

			}
			document.getElementById('quality_qdp_34').value = 1;
		} else {
			document.getElementById('level_totaldnp3').value = level_total3;
		}
	} else {
		var tot = parseInt(level_total3) - parseInt(minus);
		document.getElementById('level_totaldnp3').value = tot;
		document.getElementById('quality_qdp_34').value = 0;
	}

	getItemscorednp();
}
function dnp_level41(val) {

	
	var num = val.value;
	
	var val1 = $("#dnp_31").val();
	var val2 = $("#dnp_32").val();
	var val3 = $("#dnp_33").val();
	var val4 = $("#dnp_34").val();
	
	if(val1 == 0 || val2 == 0 || val3 == 0 || val4 == 0 )
	{
		alert("Please complete previous level");
	}
	if (num == 1) {
		//alert('test23');
		document.getElementById('level_totaldnp4').value = 1;

	} else {
		document.getElementById('level_totaldnp4').value = 0;
	}

	getItemscorednp();
}

function dnp_level51(val) {
	//alert('itemscore');
	//var tqm_12= document.getElementById('tqm_12').value;
	//alert($("input[name='tqm_12']:checked").val());
	var num = val.value;
	
	var val1 = $("#dnp_41").val();	
	if(val1 == 0 )
	{
		alert("Please complete previous level");
		document.getElementById("dnp_51").value=0;
	}
	
	var dnp51 = $("#dnp_51").val();
	
	var dnp52 = $("#dnp_52").val();
	var level_total5 = document.getElementById('level_totaldnp5').value;
	//var level_total4= document.getElementById('level_totaldnp4').value;
	//alert(tqm12);

	if (dnp52 == 1) {
		if (num == 1) {
			//alert('test');
			//var tot= parseInt(level_total5) + parseInt(num);
			document.getElementById('level_totaldnp5').value = 2;

		} else {
			//alert('test1');
			//var tot= parseInt(level_total5) + parseInt(num);
			document.getElementById('level_totaldnp5').value = 1;

		}

	} else {
		if (num == 1) {
			//alert('test23');
			document.getElementById('level_totaldnp5').value = 1;

		} else {
			document.getElementById('level_totaldnp5').value = 0;
		}
	}

	getItemscorednp();
}

function dnp_level52(val) {
	var level_total5 = document.getElementById('level_totaldnp5').value;
	var val1 = $("#dnp_41").val();	
	if(val1 == 0 )
	{
		alert("Please complete previous level");
		document.getElementById("dnp_52").value=0;
	}
	//var level_total4= document.getElementById('level_totaldnp4').value;
	//alert(tqm12);
	var tm51 = $("#dnp_51").val();
	
	var num = val.value;

	if (tm51 == 1) {
		if (num == 1) {

			//var tot= parseInt(level_total5) + parseInt(num);
			document.getElementById('level_totaldnp5').value = 2;

		} else {

			//var tot= parseInt(level_total5) + parseInt(num);
			document.getElementById('level_totaldnp5').value = 1;

		}
	} else {
		if (val == 1) {

			//var tot= parseInt(level_total5) + parseInt(num);
			document.getElementById('level_totaldnp5').value = 1;

		} else {

			//var tot= parseInt(level_total5) + parseInt(num);
			document.getElementById('level_totaldnp5').value = 0;

		}
	}

	getItemscorednp();

}

function getItemscorednp() {
	//alert('cal');
	
	var level_total1 = document.getElementById('level_totaldnp1').value;
	//alert(level_total1);
	var level_total2 = document.getElementById('level_totaldnp2').value;
	var level_total3 = document.getElementById('level_totaldnp3').value;
	var level_total4 = document.getElementById('level_totaldnp4').value;
	var level_total5 = document.getElementById('level_totaldnp5').value;
	var two_div = 2;
	//alert(level_total2);
	if (level_total1 == '') {
		level_total1 = 0;
	}

	if (level_total2 == '') {
		level_total2 = 0;
	}

	//alert(div_2);
	if (level_total3 == '') {
		level_total3 = 0;
	}
	//alert(div_2);

	if (level_total4 == '') {
		level_total4 = 0;
	}

	if (level_total5 == '') {
		level_total5 = 0;
	}

	/*------------- Check value of last level ----------------------*/
	
	
	if(level_total4 < 1)
	{
		

	 level_total5 = 0;
	 
	 document.getElementById('dnp_51').value=0;
	 document.getElementById('dnp_52').value=0;
	 
	 document.getElementById('level_totaldnp5').value=0;	 
			 
	}
	
	if(level_total3 < 4)
	{
		
	 level_total4 = 0;
	 level_total5 = 0;
	
	 document.getElementById('dnp_41').value=0;
	 document.getElementById('dnp_51').value=0;
	 document.getElementById('dnp_52').value=0;
	 document.getElementById('level_totaldnp5').value=0;
	 document.getElementById('level_totaldnp4').value=0;
	}
	if(level_total2 < 6)
	{
	
	 level_total3 = 0;
	 level_total4 = 0;
	 level_total5 = 0;
	
	 document.getElementById('dnp_31').value=0;
	 document.getElementById('dnp_32').value=0;
	 document.getElementById('dnp_33').value=0;
	 document.getElementById('dnp_34').value=0;
	 document.getElementById('dnp_41').value=0;
	 document.getElementById('dnp_51').value=0;
	 document.getElementById('dnp_52').value=0;
	 
	 document.getElementById('quality_qdp_31').value=0;
	 document.getElementById('quality_qdp_32').value=0;
	 document.getElementById('quality_qdp_33').value=0;
	 document.getElementById('quality_qdp_34').value=0;
	 
	 document.getElementById('level_totaldnp5').value=0;
	 document.getElementById('level_totaldnp4').value=0;
	 document.getElementById('level_totaldnp3').value=0;
	 
	 
	}
	if(level_total1 < 3)
	{
	 level_total2 = 0;
	 level_total3 = 0;
	 level_total4 = 0;
	 level_total5 = 0;

	 document.getElementById('dnp_21').value=0;
	 document.getElementById('dnp_22').value=0;
	 document.getElementById('dnp_23').value=0;
	 document.getElementById('dnp_24').value=0;
	 document.getElementById('dnp_25').value=0;
	 document.getElementById('dnp_26').value=0;
	 document.getElementById('dnp_31').value=0;
	 document.getElementById('dnp_32').value=0;
	 document.getElementById('dnp_33').value=0;
	 document.getElementById('dnp_34').value=0;
	 document.getElementById('dnp_41').value=0;
	 document.getElementById('dnp_51').value=0;
	 document.getElementById('dnp_52').value=0;
	 
	 document.getElementById('quality_lev_1').value=0;
	 document.getElementById('quality_lev_2').value=0;
	 document.getElementById('quality_lev_3').value=0;
	 document.getElementById('quality_lev_4').value=0;
	 document.getElementById('quality_lev_5').value=0;
	 document.getElementById('quality_lev_6').value=0;
	 document.getElementById('quality_qdp_31').value=0;
	 document.getElementById('quality_qdp_32').value=0;
	 document.getElementById('quality_qdp_33').value=0;
	 document.getElementById('quality_qdp_34').value=0;
	
	 document.getElementById('level_totaldnp5').value=0;
	 document.getElementById('level_totaldnp4').value=0;
	 document.getElementById('level_totaldnp3').value=0;
	 document.getElementById('level_totaldnp2').value=0;
	 

	}
	
	var dnp11 = document.getElementById('dnp_11').value;
	var dnp12 = document.getElementById('dnp_12').value;
	var dnp13 = document.getElementById('dnp_13').value;
	var dnp21 = document.getElementById('dnp_21').value;
	var dnp22 = document.getElementById('dnp_22').value;
	var dnp23 = document.getElementById('dnp_23').value;
	var dnp24 = document.getElementById('dnp_24').value;
	var dnp25 = document.getElementById('dnp_25').value;
	var dnp26 = document.getElementById('dnp_26').value;
	var dnp31 = document.getElementById('dnp_31').value;
	var dnp32 = document.getElementById('dnp_32').value;
	var dnp33 = document.getElementById('dnp_33').value;
	var dnp34 = document.getElementById('dnp_34').value;
	var dnp41 = document.getElementById('dnp_41').value;
	var dnp51 = document.getElementById('dnp_51').value;
	var dnp52 = document.getElementById('dnp_52').value;

	level_total1 = parseInt(dnp11) + parseInt(dnp12) + parseInt(dnp13);
	level_total2 = parseInt(dnp21) + parseInt(dnp22) + parseInt(dnp23)
			+ parseInt(dnp24) + parseInt(dnp25) + parseInt(dnp26);
	level_total3 = parseInt(dnp31) + parseInt(dnp32) + parseInt(dnp33)
			+ parseInt(dnp34);
	level_total4 = parseInt(dnp41);
	level_total5 = parseInt(dnp51) + parseInt(dnp52);

	//alert( parseFloat(div_2));
	div_1 = parseInt(level_total1) / 3;
	div_2 = parseInt(level_total2) / 6;
	div_3 = parseInt(level_total3) / 4;
	div_4 = parseInt(level_total4) / 1;
	div_5 = parseInt(level_total5) / 2;
	var total = parseFloat(div_1) + parseFloat(div_2) + parseFloat(div_3)
			+ parseFloat(div_4) + parseFloat(div_5);
	// alert(total);
	document.getElementById('item_scorednp').value = total.toFixed(1);
	document.getElementById('total_itemdnp').innerHTML = total.toFixed(1);
	document.getElementById('hdaction1').value = 1;
	
	
	actualscorequality1();
	actualscorequality2();
	actualscorequality3();
	actualscorequality4();
	actualscorequality5();
	CategoryRankquality();
}



/*------------------------Calculation for do not receive------------*/

function dnr_level11(val) {
	//alert('itemscore');
	//chechkdnp(val);
	//alert('test');
	var dnr11 = $("#dnr_11").val();
	
	var num = val.value;
	var dnr12 = $("#dnr_12").val();
	var dnr13 = $("#dnr_13").val();
	var dnr14 = $("#dnr_14").val();
	var level_total1 = document.getElementById('level_totaldnr1').value;
	var quality_qdr_11 = document.getElementById('quality_qdr_11').value;
	var minus = 1;

	if (quality_qdr_11 == '0') {
		//	alert(val);
		if (num == '1') {
			//	alert("yes");
			if (dnr12 == '1' || dnr13 == '1' || dnr14 == '1') {
				var tot = parseInt(level_total1) + parseInt(num);
				document.getElementById('level_totaldnr1').value = tot;
			} else if (dnr12 == '1' && dnr13 == '1' && dnr14 == '1') {
				var tot = parseInt(level_total1) + parseInt(num);
				document.getElementById('level_totaldnr1').value = tot;
			} else {
				//	alert("else");
				var tot = parseInt(level_total1) + parseInt(num);
				document.getElementById('level_totaldnr1').value = 1;

			}
			document.getElementById('quality_qdr_11').value = 1;
		} else {
			document.getElementById('level_totaldnr1').value = level_total1;
		}
	} else {

		var tot = parseInt(level_total1) - parseInt(minus);
		document.getElementById('level_totaldnr1').value = tot;
		document.getElementById('quality_qdr_11').value = 0;
	}

	getItemscorednr();
}

function dnr_level12(val) {
	//alert('test');
	var dnr12 = $("#dnr_12").val();
	/*if (dnr12 == 0) {
		//document.getElementById('dnr_12').value=0;
		document.getElementById('dnr_13').value = 0;
		document.getElementById('dnr_14').value = 0;

	}*/
	//chechkdnp(val);
	var num = val.value;
	var dnr11 = $("#dnr_11").val();
	var dnr13 = $("#dnr_13").val();
	var dnr14 = $("#dnr_14").val();
	
	var level_total1 = document.getElementById('level_totaldnr1').value;
	var quality_qdr_12 = document.getElementById('quality_qdr_12').value;
	var minus = 1;

	if (quality_qdr_12 == '0') {
		//alert(val);
		if (num == '1') {
			//alert("yes");
			if (dnr11 == '1' || dnr13 == '1' || dnr14 == '1') {
				var tot = parseInt(level_total1) + parseInt(num);
				document.getElementById('level_totaldnr1').value = tot;
			} else if (dnr11 == '1' && dnr13 == '1' && dnr14 == '1') {
				var tot = parseInt(level_total1) + parseInt(num);
				document.getElementById('level_totaldnr1').value = tot;
			} else {
				//	alert("else");
				var tot = parseInt(level_total1) + parseInt(num);
				document.getElementById('level_totaldnr1').value = 1;

			}
			document.getElementById('quality_qdr_12').value = 1;
		} else {
			document.getElementById('level_totaldnr1').value = level_total1;
		}
	} else {
		var tot = parseInt(level_total1) - parseInt(minus);
		document.getElementById('level_totaldnr1').value = tot;
		document.getElementById('quality_qdr_12').value = 0;
	}

	getItemscorednr();
}

function dnr_level13(val) {
	//chechkdnp(val);
	//alert('itemscore');
	//alert('test');
	var num = val.value;
	var dnr11 = $("#dnr_11").val();
	var dnr12 = $("#dnr_12").val();
	var dnr14 = $("#dnr_14").val();
	/*if (dnr12 == 0) {
		alert("Please complete the previous question in this level");
		document.getElementById("dnr_13").value = 0;
		return false;
	}*/
	var level_total1 = document.getElementById('level_totaldnr1').value;
	var quality_qdr_13 = document.getElementById('quality_qdr_13').value;
	var minus = 1;

	if (quality_qdr_13 == '0') {
		//alert(val);
		if (num == '1') {
			//	alert("yes");
			if (dnr11 == '1' || dnr12 == '1' || dnr14 == '1') {
				var tot = parseInt(level_total1) + parseInt(num);
				document.getElementById('level_totaldnr1').value = tot;
			} else if (dnr11 == '1' && dnr12 == '1' && dnr14 == '1') {
				var tot = parseInt(level_total1) + parseInt(num);
				document.getElementById('level_totaldnr1').value = tot;
			} else {
				//alert("else");
				//var tot= parseInt(level_total1) + parseInt(val);
				document.getElementById('level_totaldnr1').value = 1;

			}
			document.getElementById('quality_qdr_13').value = 1;
		} else {
			document.getElementById('level_totaldnr1').value = level_total1;
		}
	} else {
		var tot = parseInt(level_total1) - parseInt(minus);
		document.getElementById('level_totaldnr1').value = tot;
		document.getElementById('quality_qdr_13').value = 0;
	}

	getItemscorednr();

}

function dnr_level14(val) {
	//alert('itemscore');
	//chechkdnp(val);
	//alert('test');
	var num = val.value;
	var dnr11 = $("#dnr_11").val();
	var dnr12 = $("#dnr_12").val();
	var dnr13 = $("#dnr_13").val();
	
	var level_total1 = document.getElementById('level_totaldnr1').value;
	var quality_qdr_14 = document.getElementById('quality_qdr_14').value;

	var minus = 1;

	if (quality_qdr_14 == 0) {
		//alert(val);
		if (num == 1) {
			//alert("yes");
			if (dnr11 == 1 || dnr12 == 1 || dnr13 == 1) {
				var tot = parseInt(level_total1) + parseInt(num);
				document.getElementById('level_totaldnr1').value = tot;
			} else if (dnr11 == 1 && dnr12 == 1 && dnr13 == 1) {
				var tot = parseInt(level_total1) + parseInt(num);
				document.getElementById('level_totaldnr1').value = tot;
			} else {
				//	alert("else");
				//var tot= parseInt(level_total1) + parseInt(val);
				document.getElementById('level_totaldnr1').value = 1;

			}
			document.getElementById('quality_qdr_14').value = 1;
		} else {
			document.getElementById('level_totaldnr1').value = level_total1;
		}
	} else {
		var tot = parseInt(level_total1) - parseInt(minus);
		document.getElementById('level_totaldnr1').value = tot;
		document.getElementById('quality_qdr_14').value = 0;
	}

	getItemscorednr();
}

function dnr_level21(val) 
{
	//alert("hi");
	//alert('itemscore');
	var dnr11 = $("#dnr_21").val();
	
	var val1 = $("#dnr_11").val();
	var val2 = $("#dnr_12").val();
	var val3 = $("#dnr_13").val();
	var val4 = $("#dnr_14").val();
	if( val1 == 0 || val2 == 0 || val3 == 0 || val4 == 0)
	{
		alert("Please complete previous level");
		document.getElementById("dnr_21").value=0;
	}
	
	
	//chechkdnp(val)
	var num = val.value;
	//var tqm_12= document.getElementById('tqm_12').value;
	var dnr12 = $("#dnr_22").val();
	var dnr13 = $("#dnr_23").val();
	var level_total2 = document.getElementById('level_totaldnr2').value;
	//alert(dnr12);
	if (dnr12 == 1 && dnr13 == 1) {
		if (num == 1) {
			//alert('test');
			//var tot= parseInt(level_total2) + parseInt(num);
			document.getElementById('level_totaldnr2').value = 3;

		} else {
			//alert('test1');
			//var tot= parseInt(level_total2) + parseInt(num);
			document.getElementById('level_totaldnr2').value = 2;

		}

	} else if (dnr12 == 1 || dnr13 == 1) {
		if (num == 1) {
			//alert('test');
			//var tot= parseInt(level_total2) + parseInt(num);
			document.getElementById('level_totaldnr2').value = 2;

		} else {
			//alert('test1');
			//var tot= parseInt(level_total2) + parseInt(num);
			document.getElementById('level_totaldnr2').value = 1;

		}

	} else {
		if (num == 1) {
			//alert('test2');
			document.getElementById('level_totaldnr2').value = 1;

		} else {
			document.getElementById('level_totaldnr2').value = 0;
		}
	}

	getItemscorednr();
}

function dnr_level22(val) {
	//chechkdnp(val);
	var val1 = $("#dnr_11").val();
	var val2 = $("#dnr_12").val();
	var val3 = $("#dnr_13").val();
	var val4 = $("#dnr_14").val();
	if( val1 == 0 || val2 == 0 || val3 == 0 || val4 == 0)
	{
		alert("Please complete previous level");
		document.getElementById("dnr_22").value=0;
	}
	var dnr12 = $("#dnr_22").val();
	/*if (dnr12 == 0) {
		document.getElementById("dnr_23").value = 0;

	}*/
	var num = val.value;
	var level_total2 = document.getElementById('level_totaldnr2').value;
	//alert(val);
	var dnr13 = $("#dnr_23").val();
	var dnr11 = $("#dnr_21").val();
	
	if (dnr11 == 1 && dnr13 == 1) {
		if (num == 1) {

			//var tot= parseInt(level_total2) + parseInt(val);
			document.getElementById('level_totaldnr2').value = 3;

		} else {

			//var tot= parseInt(level_total2) + parseInt(val);
			document.getElementById('level_totaldnr2').value = 2;

		}
	} else if (dnr11 == 1 || dnr13 == 1) {
		if (num == 1) {
			//alert('test');
			//var tot= parseInt(level_total2) + parseInt(val);
			document.getElementById('level_totaldnr2').value = 2;

		} else {
			//alert('test1');
			//var tot= parseInt(level_total2) + parseInt(num);
			document.getElementById('level_totaldnr2').value = 1;

		}
	} else {
		if (num == 1) {
			//alert('test23');
			document.getElementById('level_totaldnr2').value = 1;

		} else {
			document.getElementById('level_totaldnr2').value = 0;
		}
	}

	getItemscorednr();
}
function dnr_level23(val) {
	//alert("hi");
	//chechkdnp(val);
	var level_total2 = document.getElementById('level_totaldnr2').value;
	//alert(val);
	var val1 = $("#dnr_11").val();
	var val2 = $("#dnr_12").val();
	var val3 = $("#dnr_13").val();
	var val4 = $("#dnr_14").val();
	if( val1 == 0 || val2 == 0 || val3 == 0 || val4 == 0)
	{
		alert("Please complete previous level");
		document.getElementById("dnr_23").value=0;
	}
	var num = val.value;
	var dnr12 = $("#dnr_22").val();
	var dnr11 = $("#dnr_21").val();
	/*if (dnr12 == 0) {
		alert("Please complete the previous question in this level");
		document.getElementById("dnr_23").value = 0;
		return false;
	}*/
	if (dnr11 == 1 && dnr12 == 1) {
		if (num == 1) {

			//var tot= parseInt(level_total2) + parseInt(val);
			document.getElementById('level_totaldnr2').value = 3;

		} else {

			//var tot= parseInt(level_total2) + parseInt(val);
			document.getElementById('level_totaldnr2').value = 2;

		}
	} else if (dnr11 == 1 || dnr12 == 1) {
		//alert("ji");
		if (num == 1) {
			//alert('test');
			//var tot= parseInt(level_total2) + parseInt(num);
			document.getElementById('level_totaldnr2').value = 2;

		} else {
			//alert('test1');
			//var tot= parseInt(level_total2) + parseInt(num);
			document.getElementById('level_totaldnr2').value = 1;

		}
	} else {
		if (num == 1) {
			//alert('test23');
			document.getElementById('level_totaldnr2').value = 1;

		} else {
			document.getElementById('level_totaldnr2').value = 0;
		}
	}

	getItemscorednr();
}

function dnr_level31(val) {
	var dnr31 = $("#dnr_31").val();
	/*if (dnr31 == 0) {
		document.getElementById("dnr_32").value = 0;
	}*/
	var val1 = $("#dnr_21").val();
	var val2 = $("#dnr_22").val();
	var val3 = $("#dnr_23").val();
	
	if( val1 == 0 || val2 == 0 || val3 == 0 )
	{
		alert("Please complete previous level");
		document.getElementById("dnr_31").value=0;
	}
	//chechkdnp(val);
	var num = val.value;
	var dnr32 = $("#dnr_32").val();
	var level_total3 = document.getElementById('level_totaldnr3').value;
	//var level_total2= document.getElementById('level_totaldnr2').value;
	//alert(tqm12);

	if (dnr32 == 1) {
		if (num == 1) {
			//alert('test');
			//var tot= parseInt(level_total3) + parseInt(num);
			document.getElementById('level_totaldnr3').value = 2;

		} else {
			//alert('test1');
			//var tot= parseInt(level_total3) + parseInt(val);
			document.getElementById('level_totaldnr3').value = 1;

		}

	} else {
		if (num == 1) {
			//alert('test23');
			document.getElementById('level_totaldnr3').value = 1;

		} else {
			document.getElementById('level_totaldnr3').value = 0;
		}
	}

	getItemscorednr();
}

function dnr_level32(val) {

	//chechkdnp(val);
	var val1 = $("#dnr_21").val();
	var val2 = $("#dnr_22").val();
	var val3 = $("#dnr_23").val();
	
	if( val1 == 0 || val2 == 0 || val3 == 0 )
	{
		alert("Please complete previous level");
		document.getElementById("dnr_32").value=0;
	}
	var num = val.value;
	var level_total3 = document.getElementById('level_totaldnr3').value;
	
	var dnr31 = $("#dnr_31").val();

	/*if (dnr31 == 0) {
		alert("Please complete the previous question in this level");
		document.getElementById("dnr_32").value = 0;
		return false;
	}*/
	if (dnr31 == 1) {
		if (num == 1) {

			//var tot= parseInt(level_total3) + parseInt(val);
			document.getElementById('level_totaldnr3').value = 2;

		} else {

			//var tot= parseInt(level_total3) + parseInt(val);
			document.getElementById('level_totaldnr3').value = 1;

		}
	} else {
		if (num == 1) {

			//var tot= parseInt(level_total3) + parseInt(num);
			document.getElementById('level_totaldnr3').value = 1;

		} else {

			//var tot= parseInt(level_total3) + parseInt(num);
			document.getElementById('level_totaldnr3').value = 0;

		}
	}

	getItemscorednr();

}

function dnr_level41(val) {

	//chechkdnp(val);
	var val1 = $("#dnr_31").val();
	var val2 = $("#dnr_32").val();	
	
	if( val1 == 0 || val2 == 0 )
	{
		alert("Please complete previous level");
		document.getElementById("dnr_41").value=0;
	}
	var dnr41 = $("#dnr_41").val();
	/*if (dnr41 == 0) {
		document.getElementById("dnr_42").value = 0;
	}*/
	var num = val.value;
	var dnr42 = $("#dnr_42").val();
	//var level_total3= document.getElementById('level_totaldnr3').value;
	var level_total4 = document.getElementById('level_totaldnr4').value;
	//alert(tqm12);

	if (dnr42 == 1) {
		if (num == 1) {
			//alert('test');
			//var tot= parseInt(level_total4) + parseInt(num);
			document.getElementById('level_totaldnr4').value = 2;

		} else {
			//alert('test1');
			//var tot= parseInt(level_total4) + parseInt(val);
			document.getElementById('level_totaldnr4').value = 1;

		}

	} else {
		if (num == 1) {
			//alert('test23');
			document.getElementById('level_totaldnr4').value = 1;

		} else {
			document.getElementById('level_totaldnr4').value = 0;
		}
	}

	getItemscorednr();
}

function dnr_level42(val) {

	//chechkdnp(val);
	var val1 = $("#dnr_31").val();
	var val2 = $("#dnr_32").val();
	
	if( val1 == 0 || val2 == 0 )
	{
		alert("Please complete previous level");
		document.getElementById("dnr_42").value=0;
	}
	var num = val.value;
	//var level_total3= document.getElementById('level_totaldnr3').value;
	//alert(val);
	var level_total4 = document.getElementById('level_totaldnr4').value;
	//alert(tqm12);
	var dnr41 = $("#dnr_41").val();
	/*if (dnr41 == 0) {
		alert("Please complete the previous question in this level");
		document.getElementById("dnr_42").value = 0;
		return false;
	}*/

	if (dnr41 == 1) {
		if (num == 1) {

			//var tot= parseInt(level_total4) + parseInt(val);
			document.getElementById('level_totaldnr4').value = 2;

		} else {

			//var tot= parseInt(level_total4) + parseInt(val);
			document.getElementById('level_totaldnr4').value = 1;

		}
	} else {
		if (num == 1) {

			//var tot= parseInt(level_total4) + parseInt(val);
			document.getElementById('level_totaldnr4').value = 1;

		} else {

			//var tot= parseInt(level_total4) + parseInt(val);
			document.getElementById('level_totaldnr4').value = 0;

		}
	}

	getItemscorednr();

}
function dnr_level51(val) {
	var dnr11 = $("#dnr_51").val();
	/*if (dnr11 == 0) {
		document.getElementById('dnr_52').value = 0;
		document.getElementById('dnr_53').value = 0;

	}*/
	var val1 = $("#dnr_41").val();
	var val2 = $("#dnr_42").val();
	
	if( val1 == 0 || val2 == 0 )
	{
		alert("Please complete previous level");
		document.getElementById("dnr_51").value=0;
	}
	//chechkdnp(val);
	var num = val.value;
	var dnr12 = $("#dnr_52").val();
	var dnr13 = $("#dnr_53").val();
	var level_total2 = document.getElementById('level_totaldnr5').value;
	//alert(dnr12);
	if (dnr12 == 1 && dnr13 == 1) {
		if (num == 1) {
			//alert('test');
			//var tot= parseInt(level_total2) + parseInt(val);
			document.getElementById('level_totaldnr5').value = 3;

		} else {
			//alert('test1');
			//var tot= parseInt(level_total2) + parseInt(val);
			document.getElementById('level_totaldnr5').value = 2;

		}

	} else if (dnr12 == 1 || dnr13 == 1) {
		if (num == '1') {
			//alert('test');
			//var tot= parseInt(level_total2) + parseInt(val);
			document.getElementById('level_totaldnr5').value = 2;

		} else {
			//alert('test1');
			//var tot= parseInt(level_total2) + parseInt(val);
			document.getElementById('level_totaldnr5').value = 1;

		}

	} else {
		if (num == 1) {
			//alert('test2');
			document.getElementById('level_totaldnr5').value = 1;

		} else {
			document.getElementById('level_totaldnr5').value = 0;
		}
	}

	getItemscorednr();
}

function dnr_level52(val) {
	var dnr12 = $("#dnr_52").val();
	/*if (dnr12 == 0) {
		//document.getElementById('dnr_52').value=0;
		document.getElementById('dnr_53').value = 0;

	}*/
	var val1 = $("#dnr_41").val();
	var val2 = $("#dnr_42").val();
	
	if( val1 == 0 || val2 == 0 )
	{
		alert("Please complete previous level");
		document.getElementById("dnr_52").value=0;
	}
	//chechkdnp(val);
	var level_total2 = document.getElementById('level_totaldnr5').value;
	//alert(val);
	var num = val.value;
	var dnr13 = $("#dnr_53").val();
	var dnr11 = $("#dnr_51").val();
	/*if (dnr11 == 0) {
		alert("Please complete the previous question in this level");
		document.getElementById('dnr_52').value = 0;
		return false;
	}*/
	if (dnr11 == 1 && dnr13 == 1) {
		if (num == 1) {

			//var tot= parseInt(level_total2) + parseInt(val);
			document.getElementById('level_totaldnr5').value = 3;

		} else {

			//var tot= parseInt(level_total2) + parseInt(val);
			document.getElementById('level_totaldnr5').value = 2;

		}
	} else if (dnr11 == 1 || dnr13 == 1) {
		if (num == 1) {
			//alert('test');
			//var tot= parseInt(level_total2) + parseInt(val);
			document.getElementById('level_totaldnr5').value = 2;

		} else {
			//alert('test1');
			//var tot= parseInt(level_total2) + parseInt(val);
			document.getElementById('level_totaldnr5').value = 1;

		}
	} else {
		if (num == 1) {
			//alert('test23');
			document.getElementById('level_totaldnr5').value = 1;

		} else {
			document.getElementById('level_totaldnr5').value = 0;
		}
	}

	getItemscorednr();
}
function dnr_level53(val) {
	//alert("hi");
	var val1 = $("#dnr_41").val();
	var val2 = $("#dnr_42").val();
	
	if( val1 == 0 || val2 == 0 )
	{
		alert("Please complete previous level");
		document.getElementById("dnr_53").value=0;
	}
	//chechkdnp(val);
	var level_total2 = document.getElementById('level_totaldnr5').value;
	//alert(val);
	var num = val.value;
	var dnr12 = $("#dnr_52").val();
	var dnr11 = $("#dnr_51").val();
	/*if (dnr12 == 0) {
		alert("Please complete the previous question in this level");
		document.getElementById('dnr_53').value = 0;
		return false;
	}*/
	if (dnr11 == 1 && dnr12 == 1) {
		if (num == 1) {

			//var tot= parseInt(level_total2) + parseInt(val);
			document.getElementById('level_totaldnr5').value = 3;

		} else {

			//var tot= parseInt(level_total2) + parseInt(val);
			document.getElementById('level_totaldnr5').value = 2;

		}
	} else if (dnr11 == 1 || dnr12 == 1) {
		//alert("ji");
		if (num == '1') {
			//alert('test');
			//var tot= parseInt(level_total2) + parseInt(val);
			document.getElementById('level_totaldnr5').value = 2;

		} else {
			//alert('test1');
			//var tot= parseInt(level_total2) + parseInt(val);
			document.getElementById('level_totaldnr5').value = 1;

		}
	} else {
		if (num == 1) {
			//alert('test23');
			document.getElementById('level_totaldnr5').value = 1;

		} else {
			document.getElementById('level_totaldnr5').value = 0;
		}
	}

	getItemscorednr();
}

function getItemscorednr() {
	//alert('');
	var level_total1 = document.getElementById('level_totaldnr1').value;
	var level_total2 = document.getElementById('level_totaldnr2').value;
	var level_total3 = document.getElementById('level_totaldnr3').value;
	var level_total4 = document.getElementById('level_totaldnr4').value;
	var level_total5 = document.getElementById('level_totaldnr5').value;
	var two_div = 2;
	//alert(level_total2);
	if (level_total1 == '') {
		level_total1 = 0;
	}

	if (level_total2 == '') {
		level_total2 = 0;
	}

	//alert(div_2);
	if (level_total3 == '') {
		level_total3 = 0;
	}
	//alert(div_2);

	if (level_total4 == '') {
		level_total4 = 0;
	}

	if (level_total5 == '') {
		level_total5 = 0;
	}

	
	/*------------- Check value of last level ----------------------*/
	
	
	if(level_total4 < 2)
	{
		

	 level_total5 = 0; 
	 
	 document.getElementById('dnr_51').value=0;
	 document.getElementById('dnr_52').value=0;
	 document.getElementById('dnr_53').value=0;
	 
	 document.getElementById('level_totaldnr5').value=0;	 
			 
	}
	
	if(level_total3 < 2)
	{
		
	 level_total4 = 0;
	 level_total5 = 0;
	
	 document.getElementById('dnr_41').value=0;
	 document.getElementById('dnr_42').value=0;
	 document.getElementById('dnr_51').value=0;
	 document.getElementById('dnr_52').value=0;
	 document.getElementById('dnr_53').value=0;
	 document.getElementById('level_totaldnr5').value=0;
	 document.getElementById('level_totaldnr4').value=0;
	}
	if(level_total2 < 3)
	{
	
	 level_total3 = 0;
	 level_total4 = 0;
	 level_total5 = 0;
	
	 document.getElementById('dnr_31').value=0;
	 document.getElementById('dnr_32').value=0;
	 document.getElementById('dnr_41').value=0;
	 document.getElementById('dnr_42').value=0;
	 document.getElementById('dnr_51').value=0;
	 document.getElementById('dnr_52').value=0;
	 document.getElementById('dnr_53').value=0;
	 	 
	 
	 document.getElementById('level_totaldnr5').value=0;
	 document.getElementById('level_totaldnr4').value=0;
	 document.getElementById('level_totaldnr3').value=0;
	 
	 
	}
	
	if(level_total1 < 4)
	{
		
	 level_total2 = 0;
	 level_total3 = 0;
	 level_total4 = 0;
	 level_total5 = 0;

	 document.getElementById('dnr_21').value=0;
	 document.getElementById('dnr_22').value=0;
	  document.getElementById('dnr_23').value=0;
	 document.getElementById('dnr_31').value=0;
	 document.getElementById('dnr_32').value=0;
	 document.getElementById('dnr_41').value=0;
	 document.getElementById('dnr_42').value=0;
	 document.getElementById('dnr_51').value=0;
	 document.getElementById('dnr_52').value=0;
	 document.getElementById('dnr_53').value=0;
	 
	 	
	 document.getElementById('level_totaldnr5').value=0;
	 document.getElementById('level_totaldnr4').value=0;
	 document.getElementById('level_totaldnr3').value=0;
	 document.getElementById('level_totaldnr2').value=0;
	 

	}
	
	var dnr11 = document.getElementById('dnr_11').value;
	var dnr12 = document.getElementById('dnr_12').value;
	var dnr13 = document.getElementById('dnr_13').value;
	var dnr14 = document.getElementById('dnr_14').value;
	var dnr21 = document.getElementById('dnr_21').value;
	var dnr22 = document.getElementById('dnr_22').value;
	var dnr23 = document.getElementById('dnr_23').value;
	var dnr31 = document.getElementById('dnr_31').value;
	var dnr32 = document.getElementById('dnr_32').value;
	var dnr41 = document.getElementById('dnr_41').value;
	var dnr42 = document.getElementById('dnr_42').value;
	var dnr51 = document.getElementById('dnr_51').value;
	var dnr52 = document.getElementById('dnr_52').value;
	var dnr53 = document.getElementById('dnr_53').value;

	level_total1 = parseInt(dnr11) + parseInt(dnr12) + parseInt(dnr13) + parseInt(dnr14);
	level_total2 = parseInt(dnr21) + parseInt(dnr22) + parseInt(dnr23);
	level_total3 = parseInt(dnr31) + parseInt(dnr32);
	level_total4 = parseInt(dnr41) + parseInt(dnr42);
	level_total5 = parseInt(dnr51) + parseInt(dnr52) + parseInt(dnr53);

	div_1 = parseInt(level_total1) / 4;
	div_2 = parseInt(level_total2) / 3;
	div_3 = parseInt(level_total3) / 2;
	div_4 = parseInt(level_total4) / 2;
	div_5 = parseInt(level_total5) / 3;

	var total = parseFloat(div_1) + parseFloat(div_2) + parseFloat(div_3)
			+ parseFloat(div_4) + parseFloat(div_5);

	// alert(total);
	document.getElementById('item_scorednr').value = total.toFixed(1);
	document.getElementById('total_itemdnr').innerHTML = total.toFixed(1);
	document.getElementById('hdaction2').value = 1;
	
	actualscorequality1();
	actualscorequality2();
	actualscorequality3();
	actualscorequality4();
	actualscorequality5();
	CategoryRankquality();
}
