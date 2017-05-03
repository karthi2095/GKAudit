 
/*==============  Category Score for Safety environment  ===================*/
 
 function itemscore_level11(val)
{
	//alert("hi");
	/*var safety11=$("#safety_11").val();
	if(safety11 == 0)
		{
			document.getElementById("safety_12").value=0;
		}*/
	
	var num = val.value;
	
	var safety12=$("#safety_12").val(); //
	//alert(safety12);
	var level_total1= document.getElementById('level_totalsafety1').value;
	
	if(safety12 == 1)
	{   

			if(num == 1)
		{
			//alert('2');
			//var tot= parseInt(level_total1) + parseInt(val);
			document.getElementById('level_totalsafety1').value=2;

			
		}
		else{
			//alert('3');
			//var tot= parseInt(level_total1) + parseInt(val);
			document.getElementById('level_totalsafety1').value=1;
			
		}
		
	}
	else
	{
		if(num == 1)
		{
			//alert('4');
			document.getElementById('level_totalsafety1').value=1;
			
		}
		else{
			//alert("5");
			document.getElementById('level_totalsafety1').value=0;
		}
	}
	getItemscoresafety();
}

function itemscore_level12(val)
{
	
	/*var val1= document.getElementById('safety_11').value;
	//var val2= document.getElementById('safety_12').value;
	
	if( val1 == 0)
		{
		alert("Please complete the previous question in this level");
		
		document.getElementById('safety_12').value=0;
		
		}*/
	
	var level_total1= document.getElementById('level_totalsafety1').value;
	//alert(val);
	var safety11 = $("#safety_11").val();
	var num = val.value;
	//alert(safety11);
	if(safety11 == 1)
	{
		
		if(num == 1)
		{
			//alert("ifsafety11 1");
			//var tot= parseInt(level_total1) + parseInt(val);
			document.getElementById('level_totalsafety1').value=2;
	
			
		}else{
			//alert("ifsafety11 0");
			//var tot= parseInt(level_total1) + parseInt(val);
			document.getElementById('level_totalsafety1').value=1;
			
		}
	}else{
		if(num == 1)
		{
			//alert("safety12 1");
		//var tot= parseInt(level_total1) + parseInt(val);
		document.getElementById('level_totalsafety1').value=1;

		
		}
		else{
			//alert("safety12 0");
			
			//var tot= parseInt(level_total1) + parseInt(val);
			document.getElementById('level_totalsafety1').value=0;
			
		}
		
	}
	getItemscoresafety();
}


function itemscore_level21(val)
{	
	//alert('itemscore');
	/*var safety21=$("#safety_21").val();
	if(safety21 == 0)
		{
				document.getElementById("safety_22").value = 0;
		
		}*/
		var val1 = $("#safety_11").val();
		var val2 = $("#safety_12").val();
	if( val1 == 0 || val2 == 0)
	{
		alert("Please complete previous level");
		document.getElementById("safety_21").value = 0;
		document.getElementById("safety_11").focus();
	}
	var safety22=$("#safety_22").val();
	
	var num = val.value;
	//alert(safety12);
	
		if(safety22 == 1)
			{
				if(num == 1)
				{
					//alert('test');
					//var tot= parseInt(level_total2) + parseInt(val);
					document.getElementById('level_totalsafety2').value=2;
	
				}
				else
				{
					//alert('test1');
					//var tot= parseInt(level_total2) + parseInt(val);
					document.getElementById('level_totalsafety2').value=1;
					
				}
				
			}
			else
			{
				if(num == 1)
				{
					//alert('test23');
					document.getElementById('level_totalsafety2').value=1;
					
				}
				else
				{
					document.getElementById('level_totalsafety2').value=0;
				}
			}
	


	getItemscoresafety();
}


function itemscore_level22(val)
{
	//alert("");
  var safety21 = $("#safety_21").val();
	//var val2= document.getElementById('safety_22').value;
	
	/*if( safety21 == 0)
		{
		alert("Please complete the previous question in this level");
		
		document.getElementById('safety_22').value=0;
		return false;
		}*/
		var val1 = $("#safety_11").val();
		var val2 = $("#safety_12").val();
	if( val1 == 0 || val2 == 0)
	{
		alert("Please complete previous level");
		document.getElementById("safety_22").value = 0;
		document.getElementById("safety_11").focus();
	}
	
	var level_total1= document.getElementById('level_totalsafety2').value;
	var num = val.value;
	
	var level_total1= document.getElementById('level_totalsafety1').value;
	
	
		if(safety21 == 1)
		{
			
		if(num == 1)
		{
			
			//var tot= parseInt(level_total1) + parseInt(val);
			document.getElementById('level_totalsafety2').value=2;

			
		}
		else{
			
			//var tot= parseInt(level_total1) + parseInt(val);
			document.getElementById('level_totalsafety2').value=1;
			
		}
		}else{
			if(num == 1)
		{
			
			//var tot= parseInt(level_total1) + parseInt(val);
			document.getElementById('level_totalsafety2').value=1;

			
		}
		else{
			
			//var tot= parseInt(level_total1) + parseInt(val);
			document.getElementById('level_totalsafety2').value=0;
			
		}
			
		}
	
	getItemscoresafety();
}
function itemscore_level31(val)
{	
	//alert('itemscore');
	/*var safety21=$("#safety_31").val();
	if(safety21 == 0)
		{
				document.getElementById("safety_32").value = 0;
		
		}*/
		var val1 = $("#safety_21").val();
		var val2 = $("#safety_22").val();
	if( val1 == 0 || val2 == 0)
	{
		alert("Please complete previous level");
		document.getElementById("safety_31").value = 0;
		document.getElementById("safety_21").focus();
	}
	
	var safety22=$("#safety_32").val();

	var num = val.value;
	//alert(safety12);
	
		if(safety22 == 1)
			{
				if(num == 1)
				{
					//alert('test');
					//var tot= parseInt(level_total2) + parseInt(val);
					document.getElementById('level_totalsafety3').value=2;
	
				}
				else
				{
					//alert('test1');
					//var tot= parseInt(level_total2) + parseInt(val);
					document.getElementById('level_totalsafety3').value=1;
					
				}
				
			}
			else
			{
				if(num == 1)
				{
					//alert('test23');
					document.getElementById('level_totalsafety3').value=1;
					
				}
				else
				{
					document.getElementById('level_totalsafety3').value=0;
				}
			}
	


	getItemscoresafety();
}


function itemscore_level32(val)
{
	//alert("");
	var safety21 = $("#safety_31").val();
	//var val2= document.getElementById('safety_22').value;
	
	/*if( safety21 == 0)
		{
		alert("Please complete the previous question in this level");
		
		document.getElementById('safety_32').value=0;
		return false;
		}*/
		var val1 = $("#safety_21").val();
		var val2 = $("#safety_22").val();
		if( val1 == 0 || val2 == 0)
		{
			alert("Please complete previous level");
			document.getElementById("safety_32").value = 0;
			document.getElementById("safety_21").focus();
		}
	
	//var level_total1= document.getElementById('level_totalsafety3').value;
	var num = val.value;
	
	//var level_total1= document.getElementById('level_totalsafety1').value;
	
	
		if(safety21 == 1)
		{
			//alert("1");
			if(num == 1)
			{
				//alert("3");
				//var tot= parseInt(level_total1) + parseInt(val);
				document.getElementById('level_totalsafety3').value=2;
	
				
			}
			else{
				
				//var tot= parseInt(level_total1) + parseInt(val);
				document.getElementById('level_totalsafety3').value=1;
				
			}
		}else{
				if(num == 1)
				{
				//	alert("2");
					//var tot= parseInt(level_total1) + parseInt(val);
					document.getElementById('level_totalsafety3').value=1;
		
					
				}
				else{
					
					//var tot= parseInt(level_total1) + parseInt(val);
					document.getElementById('level_totalsafety3').value=0;
					
				}
			
		}
	
	getItemscoresafety();
}


function itemscore_level41(val)
{
	
	
	var num = val.value;
	
	var val1 = $("#safety_31").val();
	var val2 = $("#safety_32").val();
		if( val1 == 0 || val2 == 0)
		{
			alert("Please complete previous level");
			document.getElementById("safety_41").value = 0;
			document.getElementById("safety_31").focus();
		}
	
	var level_total3= document.getElementById('level_totalsafety3').value;
	var level_total4= document.getElementById('level_totalsafety4').value;
	//alert(safety12);
	
		if(num == 1)
			{
				//alert('test23');
				document.getElementById('level_totalsafety4').value=1;
					
			}
			else
			{
					document.getElementById('level_totalsafety4').value=0;
			}
			
	
	getItemscoresafety();
}


function itemscore_level51(val)
{
	//alert('itemscore');
	/*var safety51=$("#safety_51").val();
	if(safety51 == 0)
		{
				document.getElementById("safety_52").value = 0;
				//document.getElementById("safety_53").value = 0;
		
		}*/
		var val1 = $("#safety_41").val();
	  
		if( val1 == 0 )
		{
			alert("Please complete previous level");
			document.getElementById("safety_51").value = 0;
			document.getElementById("safety_41").focus();
		}
	var num = val.value;
	//var safety_12= document.getElementById('safety_12').value;
	//alert($("input[name='safety_12']:checked").val());
	var safety52=$("#safety_52").val();
	var level_total5= document.getElementById('level_totalsafety5').value;
	var level_total4= document.getElementById('level_totalsafety4').value;
	//alert(level_total4);
	
			if(safety52 == 1)
			{
					if(num == 1)
				{
					//alert('test');
					//var tot= parseInt(level_total5) + parseInt(val);
					document.getElementById('level_totalsafety5').value=2;

					
				}
				else{
					//alert('test1');
					//var tot= parseInt(level_total5) + parseInt(val);
					document.getElementById('level_totalsafety5').value=1;
					
				}
				
			}
			else
			{
				if(num == 1)
				{
					//alert('test23');
					document.getElementById('level_totalsafety5').value=1;
					
				}
				else{
					document.getElementById('level_totalsafety5').value=0;
				}
			}
	
	getItemscoresafety();
}

function itemscore_level52(val)
{
	
	
	var val1= document.getElementById('safety_51').value;
		/*if( val1 == 0 )
		{
		alert("Please complete the previous question in this level");
		document.getElementById('safety_52').value=0;
		return false;
		}*/
		
		var val1 = $("#safety_41").val();
	  
		if( val1 == 0 )
		{
			alert("Please complete previous level");
			document.getElementById("safety_52").value = 0;
			document.getElementById("safety_41").focus();
		}
	var level_total5= document.getElementById('level_totalsafety5').value;
	
	var level_total4= document.getElementById('level_totalsafety4').value;
	var num = val.value;
	var safety51=$("#safety_51").val();
	
		if(safety51 == 1)
			{
					if(num == 1)
						{
							//alert('test');
							//var tot= parseInt(level_total5) + parseInt(val);
							document.getElementById('level_totalsafety5').value=2;

							
						}
						else{
							//alert('test1');
							//var tot= parseInt(level_total5) + parseInt(val);
							document.getElementById('level_totalsafety5').value=1;
							
						}
						
			}
			else{
				if(num == 1)
				{
					//alert('test23');
					document.getElementById('level_totalsafety5').value=1;
					
				}
				else{
					document.getElementById('level_totalsafety5').value=0;
				}
			}
	
	getItemscoresafety();	
	
}

/*================================    Item score calc   ======================*/

function getItemscoresafety()
{
	//alert('');
	var level_total1= document.getElementById('level_totalsafety1').value;
	var level_total2= document.getElementById('level_totalsafety2').value;
	var level_total3= document.getElementById('level_totalsafety3').value;
	var level_total4= document.getElementById('level_totalsafety4').value;
	var level_total5= document.getElementById('level_totalsafety5').value;
	var two_div= 2;
	//alert(level_total2);
	if(level_total1 == '')
	{
		level_total1=0;
	}
	
	if(level_total2 == '')
	{
		level_total2=0;
	}
	
	//alert(div_2);
	if(level_total3 == '')
	{
		level_total3=0;
	}
	//alert(div_2);

	if(level_total4 == '')
	{
		level_total4=0;
	}
	
	if(level_total5 == '')
	{
		level_total5=0;
	}
	
	
	/*========================= check values of level total ===========================*/
	
	if(level_total4 < 1)
	{
	 
	 level_total5 =0;
			 
	 document.getElementById('safety_51').value=0;
	 document.getElementById('safety_52').value=0;
	 
		document.getElementById('level_totalsafety5').value=0;

			 
	}
	if(level_total3 < 2)
	{
	 
	 level_total4 =0;
	 level_total5 =0;
	
	 document.getElementById('safety_41').value=0;
	 document.getElementById('safety_51').value=0;
	 document.getElementById('safety_52').value=0;
	 
	document.getElementById('level_totalsafety5').value=0;
	document.getElementById('level_totalsafety4').value=0;

			 
	}
	if(level_total2 < 2)
	{
	
	 level_total3 =0;
	 level_total4 =0;
	 level_total5 =0;
	
	 document.getElementById('safety_31').value=0;
	 document.getElementById('safety_32').value=0;
	 document.getElementById('safety_41').value=0;
	 document.getElementById('safety_51').value=0;
	 document.getElementById('safety_52').value=0;
	 
		document.getElementById('level_totalsafety5').value=0;
		document.getElementById('level_totalsafety4').value=0;
		document.getElementById('level_totalsafety3').value=0;

			 
	}
	if(level_total1 < 2)
	{
	 level_total2 =0;
	 level_total3 =0;
	 level_total4 =0;
	 level_total5 =0;
	 document.getElementById('safety_21').value=0;
	 document.getElementById('safety_22').value=0;
	 document.getElementById('safety_31').value=0;
	 document.getElementById('safety_32').value=0;
	 document.getElementById('safety_41').value=0;
	 document.getElementById('safety_51').value=0;
	 document.getElementById('safety_52').value=0;
	 
	    document.getElementById('level_totalsafety5').value=0;
		document.getElementById('level_totalsafety4').value=0;
		document.getElementById('level_totalsafety3').value=0;
		document.getElementById('level_totalsafety2').value=0;
		
	}
	
	 var safety11=document.getElementById('safety_11').value;
	 var safety12=document.getElementById('safety_12').value;
	 var safety21= document.getElementById('safety_21').value;
	 var safety22=document.getElementById('safety_22').value;
	 var safety31=document.getElementById('safety_31').value;
	 var safety32=document.getElementById('safety_32').value;
	 var safety41=document.getElementById('safety_41').value;
	 var safety51=document.getElementById('safety_51').value;
	 var safety52=document.getElementById('safety_52').value;
	
	level_total1 = parseInt(safety11) + parseInt(safety12);
	level_total2 = parseInt(safety21) + parseInt(safety22);
	level_total3 = parseInt(safety31) + parseInt(safety32);
	level_total4 = parseInt(safety41);
	level_total5 = parseInt(safety51) + parseInt(safety52);
	
	
	
	
	div_1= parseInt(level_total1) / 2;
	div_2= parseInt(level_total2) / 2;
	div_3= parseInt(level_total3) / 2;
	div_4= parseInt(level_total4) / 1;
	div_5= parseInt(level_total5) / 2;
	//alert( parseFloat(div_2));
	 var total= parseFloat(div_1) + parseFloat(div_2) + parseFloat(div_3) + parseFloat(div_4)+ parseFloat(div_5);
	 //alert(total);
	document.getElementById('total_itemsafety').value=total.toFixed(1);
	document.getElementById('itemscoresfy').innerHTML=total.toFixed(1);
	document.getElementById('hdaction1').value=1;
	
	actualscore1();
	actualscore2();
	actualscore3();
	actualscore4();
	actualscore5();
	
}

/*=======================   item score for 5S   ================*/

function itemscore_level5s11(val)
{
		var num = val.value;
	
		if(num == 1)
			{
				//alert('test23');
				document.getElementById('level_total5s1').value=1;
					
			}
			else
			{
					document.getElementById('level_total5s1').value=0;
			}
			
	
	getItemscore5s();
}

function itemscore_level5s21(val)
{
	
	var val1 = $("#S_11").val();
	  
		if( val1 == 0 )
		{
			alert("Please complete previous level");
			document.getElementById("S_21").value = 0;
			document.getElementById("S_11").focus();
		}
	var num = val.value;
	
		if(num == 1)
			{
				//alert('test23');
				document.getElementById('level_total5s2').value=1;
					
			}
			else
			{
					document.getElementById('level_total5s2').value=0;
			}
			
	
	getItemscore5s();
}

function itemscore_level5s31(val)
{
	var val1 = $("#S_21").val();
	  
		if( val1 == 0 )
		{
			alert("Please complete previous level");
			document.getElementById("S_31").value = 0;
			document.getElementById("S_21").focus();
		}
	
	var num = val.value;
	
		if(num == 1)
			{
				//alert('test23');
				document.getElementById('level_total5s3').value=1;
					
			}
			else
			{
					document.getElementById('level_total5s3').value=0;
			}
			
	
	getItemscore5s();
}
function itemscore_level5s41(val)
{
	var val1 = $("#S_31").val();
	  
		if( val1 == 0 )
		{
			alert("Please complete previous level");
			document.getElementById("S_41").value = 0;
			document.getElementById("S_31").focus();
		}
	
	var num = val.value;
	
		if(num == 1)
			{
				//alert('test23');
				document.getElementById('level_total5s4').value=1;
					
			}
			else
			{
					document.getElementById('level_total5s4').value=0;
			}
			
	
	getItemscore5s();
}
function itemscore_level5s51(val)
{
	
	var val1 = $("#S_41").val();
	  
		if( val1 == 0 )
		{
			alert("Please complete previous level");
			document.getElementById("S_51").value = 0;
			document.getElementById("S_41").focus();
		}
		
	var num = val.value;
	
		if(num == 1)
			{
				//alert('test23');
				document.getElementById('level_total5s5').value=1;
					
			}
			else
			{
					document.getElementById('level_total5s5').value=0;
			}
			
	
	getItemscore5s();
}
function getItemscore5s()
{
	//alert('');
	var level_total1= document.getElementById('level_total5s1').value;
	var level_total2= document.getElementById('level_total5s2').value;
	var level_total3= document.getElementById('level_total5s3').value;
	var level_total4= document.getElementById('level_total5s4').value;
	var level_total5= document.getElementById('level_total5s5').value;
	var two_div= 2;
	//alert(level_total2);
	if(level_total1 == '')
	{
		level_total1=0;
	}
	
	if(level_total2 == '')
	{
		level_total2=0;
	}
	
	//alert(div_2);
	if(level_total3 == '')
	{
		level_total3=0;
	}
	//alert(div_2);

	if(level_total4 == '')
	{
		level_total4=0;
	}
	
	if(level_total5 == '')
	{
		level_total5=0;
	}

	
	/*========================= check values of level total ===========================*/
	
	if(level_total4 < 1)
	{
	 
	 level_total5 =0;
			 
	 document.getElementById('S_51').value=0;
	 	 
		document.getElementById('level_total5s5').value=0;

			 
	}
	if(level_total3 < 1)
	{
	 
	 level_total4 =0;
	 level_total5 =0;
	
	 document.getElementById('S_41').value=0;
	 document.getElementById('S_51').value=0;
	
	 
	document.getElementById('level_total5s5').value=0;
	document.getElementById('level_total5s4').value=0;

			 
	}
	if(level_total2 < 1)
	{
	
	 level_total3 =0;
	 level_total4 =0;
	 level_total5 =0;
	
	 document.getElementById('S_31').value=0;
	 document.getElementById('S_41').value=0;
	 document.getElementById('S_51').value=0;
	 
	 
		document.getElementById('level_total5s5').value=0;
		document.getElementById('level_total5s4').value=0;
		document.getElementById('level_total5s3').value=0;

			 
	}
	if(level_total1 < 1)
	{
	 level_total2 =0;
	 level_total3 =0;
	 level_total4 =0;
	 level_total5 =0;
	 
	 document.getElementById('S_21').value=0;
	 document.getElementById('S_31').value=0;
	 document.getElementById('S_41').value=0;
	 document.getElementById('S_51').value=0;
	 	 
	    document.getElementById('level_total5s5').value=0;
		document.getElementById('level_total5s4').value=0;
		document.getElementById('level_total5s3').value=0;
		document.getElementById('level_total5s2').value=0;
		
	}
	
	 var safety11=document.getElementById('S_11').value;
	 var safety21= document.getElementById('S_21').value;
	 var safety31=document.getElementById('S_31').value;
	 var safety41=document.getElementById('S_41').value;
	 var safety51=document.getElementById('S_51').value;
	
	if(safety11 == "")
		{
		safety11 =0;
		}
	if(safety21 == "")
	{
	safety21 =0;
	}
	if(safety31 == "")
	{
	safety31 =0;
	}
	if(safety41 == "")
	{
	safety41 =0;
	}
	if(safety51 == "")
	{
	safety51 =0;
	}
	
	level_total1 = parseInt(safety11);
	level_total2 = parseInt(safety21);
	level_total3 = parseInt(safety31);
	level_total4 = parseInt(safety41);
	level_total5 = parseInt(safety51);
	
	
	div_1= parseInt(level_total1);
	div_2= parseInt(level_total2);
	div_3= parseInt(level_total3);
	div_4= parseInt(level_total4);
	div_5= parseInt(level_total5);
	//alert( parseFloat(div_2));
	 var total= parseFloat(div_1) + parseFloat(div_2) + parseFloat(div_3) + parseFloat(div_4)+ parseFloat(div_5);
	// alert(total);
	document.getElementById('total_item5s').value=total.toFixed(1);
	document.getElementById('itemscore5s_value').innerHTML=total.toFixed(1);
	document.getElementById('hdaction1').value=1;
	
	actualscore1();
	actualscore2();
	actualscore3();
	actualscore4();
	actualscore5();
}


/*===============   item score for Environment   ========================*/

function itemscore_levelenv11(val)
{
		
	var num = val.value;
	
		if(num == 1)
			{
				//alert('test23');
				document.getElementById('level_totalenv1').value=1;
					
			}
			else
			{
					document.getElementById('level_totalenv1').value=0;
			}
			
	
	getItemscoreenv();
}

function itemscore_levelenv21(val)
{
	var val1 = $("#Environment_11").val();
	  
		if( val1 == 0 )
		{
			alert("Please complete previous level");
			document.getElementById("Environment_21").value = 0;
			document.getElementById("Environment_11").focus();
		}
	
	var num = val.value;
	
		if(num == 1)
			{
				//alert('test23');
				document.getElementById('level_totalenv2').value=1;
					
			}
			else
			{
					document.getElementById('level_totalenv2').value=0;
			}
			
	
	getItemscoreenv();
}

function itemscore_levelenv31(val)
{
	var val1 = $("#Environment_21").val();
	  
		if( val1 == 0 )
		{
			alert("Please complete previous level");
			document.getElementById("Environment_31").value = 0;
			document.getElementById("Environment_21").focus();
		}
	
	var num = val.value;
	
		if(num == 1)
			{
				//alert('test23');
				document.getElementById('level_totalenv3').value=1;
					
			}
			else
			{
					document.getElementById('level_totalenv3').value=0;
			}
			
	
	getItemscoreenv();
}
function itemscore_levelenv41(val)
{
	var val1 = $("#Environment_31").val();
	  
		if( val1 == 0 )
		{
			alert("Please complete previous level");
			document.getElementById("Environment_41").value = 0;
			document.getElementById("Environment_31").focus();
		}
	
	var num = val.value;
	
		if(num == 1)
			{
				//alert('test23');
				document.getElementById('level_totalenv4').value=1;
					
			}
			else
			{
					document.getElementById('level_totalenv4').value=0;
			}
			
	
	getItemscoreenv();
}
function itemscore_levelenv51(val)
{
	var val1 = $("#Environment_41").val();
	  
		if( val1 == 0 )
		{
			alert("Please complete previous level");
			document.getElementById("Environment_51").value = 0;
			document.getElementById("Environment_41").focus();
		}
	
	var num = val.value;
	
		if(num == 1)
			{
				//alert('test23');
				document.getElementById('level_totalenv5').value=1;
					
			}
			else
			{
					document.getElementById('level_totalenv5').value=0;
			}
			
	
	getItemscoreenv();
}
function getItemscoreenv()
{
	//alert('');
	var level_total1= document.getElementById('level_totalenv1').value;
	var level_total2= document.getElementById('level_totalenv2').value;
	var level_total3= document.getElementById('level_totalenv3').value;
	var level_total4= document.getElementById('level_totalenv4').value;
	var level_total5= document.getElementById('level_totalenv5').value;
	var two_div= 2;
	//alert(level_total2);
	if(level_total1 == '')
	{
		level_total1=0;
	}
	
	if(level_total2 == '')
	{
		level_total2=0;
	}
	
	//alert(div_2);
	if(level_total3 == '')
	{
		level_total3=0;
	}
	//alert(div_2);

	if(level_total4 == '')
	{
		level_total4=0;
	}
	
	if(level_total5 == '')
	{
		level_total5=0;
	}
 
	/*========================= check values of level total ===========================*/
	
	if(level_total4 < 1)
	{
	 
	 level_total5 =0;
			 
	 document.getElementById('Environment_51').value=0;
	 	 
		document.getElementById('level_totalenv5').value=0;

			 
	}
	if(level_total3 < 1)
	{
	 
	 level_total4 =0;
	 level_total5 =0;
	
	 document.getElementById('Environment_41').value=0;
	 document.getElementById('Environment_51').value=0;
	
	 
	document.getElementById('level_totalenv5').value=0;
	document.getElementById('level_totalenv4').value=0;

			 
	}
	if(level_total2 < 1)
	{
	
	 level_total3 =0;
	 level_total4 =0;
	 level_total5 =0;
	
	 document.getElementById('Environment_31').value=0;
	 document.getElementById('Environment_41').value=0;
	 document.getElementById('Environment_51').value=0;
	 
	 
		document.getElementById('level_totalenv5').value=0;
		document.getElementById('level_totalenv4').value=0;
		document.getElementById('level_totalenv3').value=0;

			 
	}
	if(level_total1 < 1)
	{
	 level_total2 =0;
	 level_total3 =0;
	 level_total4 =0;
	 level_total5 =0;
	 
	 document.getElementById('Environment_21').value=0;
	 document.getElementById('Environment_31').value=0;
	 document.getElementById('Environment_41').value=0;
	 document.getElementById('Environment_51').value=0;
	 	 
	    document.getElementById('level_totalenv5').value=0;
		document.getElementById('level_totalenv4').value=0;
		document.getElementById('level_totalenv3').value=0;
		document.getElementById('level_totalenv2').value=0;
		
	}
	
	 var safety11=document.getElementById('Environment_11').value;
	 var safety21= document.getElementById('Environment_21').value;
	 var safety31=document.getElementById('Environment_31').value;
	 var safety41=document.getElementById('Environment_41').value;
	 var safety51=document.getElementById('Environment_51').value;
	
	if(safety11 == "")
		{
		safety11 =0;
		}
	if(safety21 == "")
	{
	safety21 =0;
	}
	if(safety31 == "")
	{
	safety31 =0;
	}
	if(safety41 == "")
	{
	safety41 =0;
	}
	if(safety51 == "")
	{
	safety15 =0;
	}
	
	level_total1 = parseInt(safety11);
	level_total2 = parseInt(safety21);
	level_total3 = parseInt(safety31);
	level_total4 = parseInt(safety41);
	level_total5 = parseInt(safety51);
	
	
	div_1= parseInt(level_total1);
	div_2= parseInt(level_total2);
	div_3= parseInt(level_total3);
	div_4= parseInt(level_total4);
	div_5= parseInt(level_total5);
	//alert( parseFloat(div_2));
	 var total= parseFloat(div_1) + parseFloat(div_2) + parseFloat(div_3) + parseFloat(div_4)+ parseFloat(div_5);
	 //alert(total);
	document.getElementById('total_envy').value=total.toFixed(1);
	document.getElementById('item_environment').innerHTML=total.toFixed(1);
	document.getElementById('hdaction1').value=1;
	
	actualscore1();
	actualscore2();
	actualscore3();
	actualscore4();
	actualscore5();
}


/*===============   item score for Ergonomics   ========================*/

function itemscore_levelergo11(val)
{
	
	
	var num = val.value;
	
		if(num == 1)
			{
				//alert('test23');
				document.getElementById('level_totalergo1').value=1;
					
			}
			else
			{
					document.getElementById('level_totalergo1').value=0;
			}
			
	
	getItemscoreergo();
}

function itemscore_levelergo21(val)
{
	
	var val1 = $("#Ergonomic_11").val();
	  
		if( val1 == 0 )
		{
			alert("Please complete previous level");
			document.getElementById("Ergonomic_21").value = 0;
			document.getElementById("Ergonomic_11").focus();
		}
		
	var num = val.value;
	
		if(num == 1)
			{
				//alert('test23');
				document.getElementById('level_totalergo2').value=1;
					
			}
			else
			{
					document.getElementById('level_totalergo2').value=0;
			}
			
	
	getItemscoreergo();
}

function itemscore_levelergo31(val)
{
	var val1 = $("#Ergonomic_21").val();
	  
		if( val1 == 0 )
		{
			alert("Please complete previous level");
			document.getElementById("Ergonomic_31").value = 0;
			document.getElementById("Ergonomic_21").focus();
		}
	
	var num = val.value;
	
		if(num == 1)
			{
				//alert('test23');
				document.getElementById('level_totalergo3').value=1;
					
			}
			else
			{
					document.getElementById('level_totalergo3').value=0;
			}
			
	
	getItemscoreergo();
}
function itemscore_levelergo41(val)
{
	var val1 = $("#Ergonomic_31").val();
	  
		if( val1 == 0 )
		{
			alert("Please complete previous level");
			document.getElementById("Ergonomic_41").value = 0;
			document.getElementById("Ergonomic_31").focus();
		}
	
	var num = val.value;
	
		if(num == 1)
			{
				//alert('test23');
				document.getElementById('level_totalergo4').value=1;
					
			}
			else
			{
					document.getElementById('level_totalergo4').value=0;
			}
			
	
	getItemscoreergo();
}
function itemscore_levelergo51(val)
{
	var val1 = $("#Ergonomic_41").val();
	  
		if( val1 == 0 )
		{
			alert("Please complete previous level");
			document.getElementById("Ergonomic_51").value = 0;
			document.getElementById("Ergonomic_41").focus();
		}
	
	var num = val.value;
	
		if(num == 1)
			{
				//alert('test23');
				document.getElementById('level_totalergo5').value=1;
					
			}
			else
			{
					document.getElementById('level_totalergo5').value=0;
			}
			
	
	getItemscoreergo();
}
function getItemscoreergo()
{
	//alert('');
	var level_total1= document.getElementById('level_totalergo1').value;
	var level_total2= document.getElementById('level_totalergo2').value;
	var level_total3= document.getElementById('level_totalergo3').value;
	var level_total4= document.getElementById('level_totalergo4').value;
	var level_total5= document.getElementById('level_totalergo5').value;
	var two_div= 2;
	//alert(level_total2);
	if(level_total1 == '')
	{
		level_total1=0;
	}
	
	if(level_total2 == '')
	{
		level_total2=0;
	}
	
	//alert(div_2);
	if(level_total3 == '')
	{
		level_total3=0;
	}
	//alert(div_2);

	if(level_total4 == '')
	{
		level_total4=0;
	}
	
	if(level_total5 == '')
	{
		level_total5=0;
	}

	/*========================= check values of level total ===========================*/
	
	if(level_total4 < 1)
	{
	 
	 level_total5 =0;
			 
	 document.getElementById('Ergonomic_51').value=0;
	 	 
		document.getElementById('level_totalergo5').value=0;

			 
	}
	if(level_total3 < 1)
	{
	 
	 level_total4 =0;
	 level_total5 =0;
	
	 document.getElementById('Ergonomic_41').value=0;
	 document.getElementById('Ergonomic_51').value=0;
	
	 
	document.getElementById('level_totalergo5').value=0;
	document.getElementById('level_totalergo4').value=0;

			 
	}
	if(level_total2 < 1)
	{
	
	 level_total3 =0;
	 level_total4 =0;
	 level_total5 =0;
	
	 document.getElementById('Ergonomic_31').value=0;
	 document.getElementById('Ergonomic_41').value=0;
	 document.getElementById('Ergonomic_51').value=0;
	 
	 
		document.getElementById('level_totalergo5').value=0;
		document.getElementById('level_totalergo4').value=0;
		document.getElementById('level_totalergo3').value=0;

			 
	}
	if(level_total1 < 1)
	{
	 level_total2 =0;
	 level_total3 =0;
	 level_total4 =0;
	 level_total5 =0;
	 
	 document.getElementById('Ergonomic_21').value=0;
	 document.getElementById('Ergonomic_31').value=0;
	 document.getElementById('Ergonomic_41').value=0;
	 document.getElementById('Ergonomic_51').value=0;
	 	 
	    document.getElementById('level_totalergo5').value=0;
		document.getElementById('level_totalergo4').value=0;
		document.getElementById('level_totalergo3').value=0;
		document.getElementById('level_totalergo2').value=0;
		
	}
	
	 var safety11=document.getElementById('Ergonomic_11').value;
	 var safety21= document.getElementById('Ergonomic_21').value;
	 var safety31=document.getElementById('Ergonomic_31').value;
	 var safety41=document.getElementById('Ergonomic_41').value;
	 var safety51=document.getElementById('Ergonomic_51').value;
	
	if(safety11 == "")
		{
		safety11 =0;
		}
	if(safety21 == "")
	{
	safety21 =0;
	}
	if(safety31 == "")
	{
	safety31 =0;
	}
	if(safety41 == "")
	{
	safety41 =0;
	}
	if(safety51 == "")
	{
	safety15 =0;
	}
	
	level_total1 = parseInt(safety11);
	level_total2 = parseInt(safety21);
	level_total3 = parseInt(safety31);
	level_total4 = parseInt(safety41);
	level_total5 = parseInt(safety51);
	
	
	
	
	div_1= parseInt(level_total1);
	div_2= parseInt(level_total2);
	div_3= parseInt(level_total3);
	div_4= parseInt(level_total4);
	div_5= parseInt(level_total5);
	//alert( parseFloat(div_2));
	 var total= parseFloat(div_1) + parseFloat(div_2) + parseFloat(div_3) + parseFloat(div_4)+ parseFloat(div_5);
	 //alert(total);
	document.getElementById('item_scoreergo').value=total.toFixed(1);
	document.getElementById('total_itemergo').innerHTML=total.toFixed(1);
	document.getElementById('hdaction1').value=1;
	
	actualscore1();
	actualscore2();
	actualscore3();
	actualscore4();
	actualscore5();
}



/*============== calc for safety & environment  Category rank ===============*/


function actualscore1()
{
	// alert("1");
	 var level_total1 = document.getElementById("level_totalsafety1").value;
	 var level_total2 = document.getElementById("level_total5s1").value;
	 var level_total3 = document.getElementById("level_totalenv1").value;
	 var level_total4 = document.getElementById("level_totalergo1").value;
	 
		if(level_total1 == "")
		{
			level_total1 = 0;
		}	
		if(level_total2 == "")
		{
			level_total2 = 0;
		}
		if(level_total3 == "")
		{
			level_total3 = 0;
		}
		if(level_total4 == "")
		{
			level_total4 = 0;
		}
		
	 var total = parseInt(level_total1) + parseInt(level_total2) + parseInt(level_total3) + parseInt(level_total4);
	 document.getElementById("level1").innerHTML= total;
	 document.getElementById("score1").value= total;
	 
	 var percent = parseInt(total) * 100 / 5;
	 //alert(percent);
	 document.getElementById("achieve1").value= percent.toFixed(1);
	 document.getElementById("achievement1").innerHTML= percent.toFixed(1)+"%";
	 CategoryRank();
}
function actualscore2()
{
	 //alert("2");
	 var level_total1 = document.getElementById("level_totalsafety2").value;
	 var level_total2 = document.getElementById("level_total5s2").value;
	 var level_total3 = document.getElementById("level_totalenv2").value;
	 var level_total4 = document.getElementById("level_totalergo2").value;
	 
		if(level_total1 == "")
		{
			level_total1 = 0;
		}	
		if(level_total2 == "")
		{
			level_total2 = 0;
		}
		if(level_total3 == "")
		{
			level_total3 = 0;
		}
		if(level_total4 == "")
		{
			level_total4 = 0;
		}
		
 var total = parseInt(level_total1) + parseInt(level_total2) + parseInt(level_total3) + parseInt(level_total4);
	 document.getElementById("level2").innerHTML= total;
	 document.getElementById("score2").value= total;
	 
	 var percent = parseInt(total) * 100 / 5;
	// alert(percent);
	document.getElementById("achieve2").value= percent.toFixed(1);
	 document.getElementById("achievement2").innerHTML= percent.toFixed(1)+"%";
	 CategoryRank();
}
function actualscore3()
{
//alert("3");
	 var level_total1 = document.getElementById("level_totalsafety3").value;
	 var level_total2 = document.getElementById("level_total5s3").value;
	 var level_total3 = document.getElementById("level_totalenv3").value;
	 var level_total4 = document.getElementById("level_totalergo3").value;
	 
		if(level_total1 == "")
		{
			level_total1 = 0;
		}	
		if(level_total2 == "")
		{
			level_total2 = 0;
		}
		if(level_total3 == "")
		{
			level_total3 = 0;
		}
		if(level_total4 == "")
		{
			level_total4 = 0;
		}
		
		 var total = parseInt(level_total1) + parseInt(level_total2) + parseInt(level_total3) + parseInt(level_total4);
	 document.getElementById("level3").innerHTML= total;
	 document.getElementById("score3").value= total;
	 
	 var percent = parseInt(total) * 100 / 5;
	// alert(percent);
	document.getElementById("achieve3").value= percent.toFixed(1);
	 document.getElementById("achievement3").innerHTML= percent.toFixed(1)+"%";
	 CategoryRank();
}
function actualscore4()
{
	// alert("4");
	 var level_total1 = document.getElementById("level_totalsafety4").value;
	 var level_total2 = document.getElementById("level_total5s4").value;
	 var level_total3 = document.getElementById("level_totalenv4").value;
	 var level_total4 = document.getElementById("level_totalergo4").value;
	 
		if(level_total1 == "")
		{
			level_total1 = 0;
		}	
		if(level_total2 == "")
		{
			level_total2 = 0;
		}
		if(level_total3 == "")
		{
			level_total3 = 0;
		}
		if(level_total4 == "")
		{
			level_total4 = 0;
		}
		
		 var total = parseInt(level_total1) + parseInt(level_total2) + parseInt(level_total3) + parseInt(level_total4);
	 document.getElementById("level4").innerHTML= total;
	 document.getElementById("score4").value= total;
	 
	 var percent = parseInt(total) * 100 / 4;
	// alert(percent);
	document.getElementById("achieve4").value= percent.toFixed(1);
	 document.getElementById("achievement4").innerHTML= percent.toFixed(1)+"%";
	 CategoryRank();
}
function actualscore5()
{
	// alert("5");
	 var level_total1 = document.getElementById("level_totalsafety5").value;
	 var level_total2 = document.getElementById("level_total5s5").value;
	 var level_total3 = document.getElementById("level_totalenv5").value;
	 var level_total4 = document.getElementById("level_totalergo5").value;
	 
		if(level_total1 == "")
		{
			level_total1 = 0;
		}	
		if(level_total2 == "")
		{
			level_total2 = 0;
		}
		if(level_total3 == "")
		{
			level_total3 = 0;
		}
		if(level_total4 == "")
		{
			level_total4 = 0;
		}
		
		 var total = parseInt(level_total1) + parseInt(level_total2) + parseInt(level_total3) + parseInt(level_total4);
	 document.getElementById("level5").innerHTML= total;
	 document.getElementById("score5").value= total;
	 
	 var percent = (parseInt(total) * 100) / 5;
	 //alert(percent);
	 document.getElementById("achieve5").value= percent.toFixed(1);
	 document.getElementById("achievement5").innerHTML= percent.toFixed(1)+"%";
	 CategoryRank();
}
function CategoryRank()
{
	 // alert("6");
		var val1 = document.getElementById("achieve1").value;
		var val2 = document.getElementById("achieve2").value;
		var val3 = document.getElementById("achieve3").value;
	    var val4 = document.getElementById("achieve4").value;
		var val5 = document.getElementById("achieve5").value;
		if(val1 == "")
		{
			val1 = 0;
		}
		if(val2 == "")
		{
			val2 = 0;
		}
		if(val3 == "")
		{
			val3 = 0;
		}
		if(val4 == "")
		{
			val4 = 0;
		}
		if(val5 == "")
		{
			val5 = 0;
		}
		
		 // alert(val1);
		 // alert(val2);
		 // alert(val3);
		// alert(val4);
		 // alert(val5);
		var rank = (parseFloat(val1) + parseFloat(val2) + parseFloat(val3) + parseFloat(val4) + parseFloat(val5)) / 100;
		document.getElementById("category").value = rank.toFixed(1);
		document.getElementById("category-rank").innerHTML = rank.toFixed(1);
		
		//document.getElementById('hdaction1').value=1;
		//document.getElementById('hdaction2').value=1;
}
