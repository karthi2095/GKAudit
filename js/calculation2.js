

/*======================= Calculation for Standard Operation =====================*/

/*
function sop_level11(val)
{
	//alert('itemscore');
	//alert('test');
	var num = val.value;
	var sop12=$("#sop_12").val();
	var sop13=$("#sop_13").val();
	var sop14=$("#sop_14").val();
	var sop15=$("#sop_15").val();
	var level_total1= document.getElementById('level_totalsop1').value;
	var quality_sop_11= document.getElementById('quality_sop_11').value;
	var minus=1;
	
		if(quality_sop_11 == '0')
		{
		//	alert(val);
			if(num == '1')
				{
				//	alert("yes");
					if(sop12 == 1 || sop13 == 1 || sop14 == 1 || sop_15 == 1)
					{
								var tot= parseInt(level_total1) + parseInt(num);
								document.getElementById('level_totalsop1').value=tot;
					}
					else if(sop12 == 1 && sop13 == 1 && sop14 == 1 && sop_15 == 1)
					{
								var tot= parseInt(level_total1) + parseInt(num);
								document.getElementById('level_totalsop1').value=tot;
					}else{
						//	alert("else");
							var tot= parseInt(level_total1) + parseInt(num);
							document.getElementById('level_totalsop1').value=1;

					}
					document.getElementById('quality_sop_11').value=1;
				}
				else 
				{
					document.getElementById('level_totalsop1').value=level_total1;
				}
		}else{
			
				var tot= parseInt(level_total1) - parseInt(minus);
				document.getElementById('level_totalsop1').value=tot;
				document.getElementById('quality_sop_11').value=0;
			}
	
	getItemscoresop();
}

function sop_level12(val)
{
	//alert('test');
	var num = val.value;
	var sop11=$("#sop_11").val();
	var sop13=$("#sop_13").val();
	var sop14=$("#sop_14").val();
	var sop15=$("#sop_15").val();
	var level_total1= document.getElementById('level_totalsop1').value;
	var quality_sop_12= document.getElementById('quality_sop_12').value;
	var minus=1;
	
		if(quality_sop_12 == 0)
		{
			//alert(val);
			if(num == 1)
				{
					//alert("yes");
					if(sop11 == 1 || sop13 == 1 || sop14 == 1 || sop_15 == 1)
					{
								var tot= parseInt(level_total1) + parseInt(num);
								document.getElementById('level_totalsop1').value=tot;
					}
					else if(sop11 == 1 && sop13 == 1 && sop14 == 1 && sop_15 == 1)
					{
								var tot= parseInt(level_total1) + parseInt(num);
								document.getElementById('level_totalsop1').value=tot;
					}else{
						//	alert("else");
							var tot= parseInt(level_total1) + parseInt(num);
							document.getElementById('level_totalsop1').value=1;

					}
					document.getElementById('quality_sop_12').value=1;
				}
				else 
				{
					document.getElementById('level_totalsop1').value=level_total1;
				}
		}else{
				var tot= parseInt(level_total1) - parseInt(minus);
				document.getElementById('level_totalsop1').value=tot;
				document.getElementById('quality_sop_12').value=0;
			}
	
	getItemscoresop();
}

function sop_level13(val)
{
	//alert('itemscore');
	//alert('test');
	var num = val.value;
	var sop11=$("#sop_11").val();
	var sop12=$("#sop_12").val();
	var sop14=$("#sop_14").val();
	var sop15=$("#sop_15").val();
	var level_total1= document.getElementById('level_totalsop1').value;
	var quality_sop_13= document.getElementById('quality_sop_13').value;
	var minus=1;
	
		if(quality_sop_13 == 0)
		{
			//alert(val);
			if(num == 1)
				{
				//	alert("yes");
					if(sop11 == 1 || sop12 == 1 || sop14 == 1 || sop_15 == 1)
					{
								var tot= parseInt(level_total1) + parseInt(num);
								document.getElementById('level_totalsop1').value=tot;
					}
					else if(sop11 == 1 && sop12 == 1 && sop14 == 1 && sop_15 == 1)
					{
								var tot= parseInt(level_total1) + parseInt(num);
								document.getElementById('level_totalsop1').value=tot;
					}else{
							//alert("else");
							//var tot= parseInt(level_total1) + parseInt(val);
							document.getElementById('level_totalsop1').value=1;

					}
					document.getElementById('quality_sop_13').value=1;
				}
				else 
				{
					document.getElementById('level_totalsop1').value=level_total1;
				}
		}else{
				var tot= parseInt(level_total1) - parseInt(minus);
				document.getElementById('level_totalsop1').value=tot;
				document.getElementById('quality_sop_13').value=0;
			}
	
	getItemscoresop();
	
}

function sop_level14(val)
{
	//alert('itemscore');
	//alert('test');
	var num = val.value;
	var sop11=$("#sop_11").val();
	var sop12=$("#sop_12").val();
	var sop13=$("#sop_13").val();
	var sop15=$("#sop_15").val();
	var level_total1= document.getElementById('level_totalsop1').value;
	var quality_sop_14= document.getElementById('quality_sop_14').value;
	
	var minus=1;
	
		if(quality_sop_14 == 0)
		{
			//alert(val);
			if(num == 1)
				{
				//alert("yes");
					if(sop11 == 1 || sop12 == 1 || sop13 == 1 || sop_15 == 1)
					{
								var tot= parseInt(level_total1) + parseInt(num);
								document.getElementById('level_totalsop1').value=tot;
					}
					else if(sop11 == 1 && sop12 == 1 && sop13 == 1 && sop_15 == 1)
					{
								var tot= parseInt(level_total1) + parseInt(num);
								document.getElementById('level_totalsop1').value=tot;
					}else{
						
							//var tot= parseInt(level_total1) + parseInt(val);
							document.getElementById('level_totalsop1').value=1;

					}
					document.getElementById('quality_sop_14').value=1;
				}
				else 
				{
					document.getElementById('level_totalsop1').value=level_total1;
				}
		}else{
				var tot= parseInt(level_total1) - parseInt(minus);
				document.getElementById('level_totalsop1').value=tot;
				document.getElementById('quality_sop_14').value=0;
			}
	
	getItemscoresop();
}

function sop_level15(val)
{
	//alert('itemscore');
	//alert('test');
	var num = val.value;
	var sop11=$("#sop_11").val();
	var sop12=$("#sop_12").val();
	var sop13=$("#sop_13").val();
	var sop14=$("#sop_14").val();
	var level_total1= document.getElementById('level_totalsop1').value;
	var quality_sop_15= document.getElementById('quality_sop_15').value;
	
	var minus=1;
	
		if(quality_sop_15 == 0)
		{
			//alert(val);
			if(num == 1)
				{
				//alert("yes");
					if(sop11 == 1 || sop12 == 1 || sop13 == 1 || sop_14 == 1)
					{
								var tot= parseInt(level_total1) + parseInt(num);
								document.getElementById('level_totalsop1').value=tot;
					}
					else if(sop11 == 1 && sop12 == 1 && sop13 == 1 && sop_14 == 1)
					{
								var tot= parseInt(level_total1) + parseInt(num);
								document.getElementById('level_totalsop1').value=tot;
					}else{
						
							//var tot= parseInt(level_total1) + parseInt(val);
							document.getElementById('level_totalsop1').value=1;

					}
					document.getElementById('quality_sop_15').value=1;
				}
				else 
				{
					document.getElementById('level_totalsop1').value=level_total1;
				}
		}else{
				var tot= parseInt(level_total1) - parseInt(minus);
				document.getElementById('level_totalsop1').value=tot;
				document.getElementById('quality_sop_15').value=0;
			}
	
	getItemscoresop();
}

function sop_level21(val)
{
	//alert("hi");
	//alert('itemscore');
	var num = val.value;
	//var sop_12= document.getElementById('sop_12').value;
	var sop12=$("#sop_22").val();
	var sop13=$("#sop_23").val();
	var level_total2= document.getElementById('level_totalsop2').value;
	//alert(sop12);
	if(sop12 == 1 && sop13 == 1)
	{
			if(num == 1)
			{
				//alert('test');
				//var tot= parseInt(level_total2) + parseInt(num);
				document.getElementById('level_totalsop2').value=3;
	
				
			}
		else{
			//alert('test1');
			//var tot= parseInt(level_total2) + parseInt(num);
			document.getElementById('level_totalsop2').value=2;
			
		}
		
	}
	else if(sop12 == 1 || sop13 == 1)
		{
				if(num == 1)
				{
					//alert('test');
					//var tot= parseInt(level_total2) + parseInt(num);
					document.getElementById('level_totalsop2').value=2;
		
					
				}
			else{
				//alert('test1');
				//var tot= parseInt(level_total2) + parseInt(num);
				document.getElementById('level_totalsop2').value=1;
				
			}
			
		}else
		{
			if(num == 1)
			{
				//alert('test2');
				document.getElementById('level_totalsop2').value=1;
				
			}
			else{
				document.getElementById('level_totalsop2').value=0;
			}
	   }
	getItemscoresop();
}

function sop_level22(val)
{var num = val.value;
	var level_total2= document.getElementById('level_totalsop2').value;
	//alert(val);
	var sop13=$("#sop_23").val();
	var sop11=$("#sop_21").val();

		if(sop11 == 1 && sop13 == 1)
			{
					if(num == 1)
					{
						
						//var tot= parseInt(level_total2) + parseInt(val);
						document.getElementById('level_totalsop2').value=3;
				
						
					}
					else{
						
						//var tot= parseInt(level_total2) + parseInt(val);
						document.getElementById('level_totalsop2').value=2;
						
					}
			}else if(sop11 == 1 || sop13 == 1)
					{
				if(num == 1)
				{
					//alert('test');
					//var tot= parseInt(level_total2) + parseInt(val);
					document.getElementById('level_totalsop2').value=2;
		
					
				}
			else{
				//alert('test1');
				//var tot= parseInt(level_total2) + parseInt(num);
				document.getElementById('level_totalsop2').value=1;
				
			   }
		}
		else{
				if(num == 1)
				{
					//alert('test23');
					document.getElementById('level_totalsop2').value=1;
					
				}
				else{
					document.getElementById('level_totalsop2').value=0;
				}
			}
			getItemscoresop();
}
function sop_level23(val)
{
	//alert("hi");
	var level_total2= document.getElementById('level_totalsop2').value;
	//alert(val);
	var num = val.value;
	var sop12=$("#sop_22").val();
	var sop11=$("#sop_21").val();
	if(sop11 == 1 && sop12 == 1)
	{
				if(num == 1)
				{
					
					//var tot= parseInt(level_total2) + parseInt(val);
					document.getElementById('level_totalsop2').value=3;
			
					
				}
				else{
					
					//var tot= parseInt(level_total2) + parseInt(val);
					document.getElementById('level_totalsop2').value=2;
					
				}
	}else if(sop11 == 1 || sop12 == 1)
	{
		//alert("ji");
		if(num == 1)
		{
			//alert('test');
			//var tot= parseInt(level_total2) + parseInt(num);
			document.getElementById('level_totalsop2').value=2;

			
		}
	else{
		//alert('test1');
		//var tot= parseInt(level_total2) + parseInt(num);
		document.getElementById('level_totalsop2').value=1;
		
	   }
	}else{
		if(num == 1)
		{
			//alert('test23');
			document.getElementById('level_totalsop2').value=1;
			
		}
		else{
			document.getElementById('level_totalsop2').value=0;
		}
		}
	getItemscoresop();
}
function sop_level31(val)
{
	var num = val.value;
	var sop32=$("#sop_32").val();
	var level_total3= document.getElementById('level_totalsop3').value;
	var level_total2= document.getElementById('level_totalsop2').value;
	//alert(sop12);
	if(level_total2 == 3)
	{
			if(sop32 == 1)
			{
					if(num == 1)
				{
					//alert('test');
					//var tot= parseInt(level_total3) + parseInt(num);
					document.getElementById('level_totalsop3').value=2;

					
				}
				else{
					//alert('test1');
					//var tot= parseInt(level_total3) + parseInt(val);
					document.getElementById('level_totalsop3').value=1;
					
				}
				
			}
			else
			{
				if(num == 1)
				{
					//alert('test23');
					document.getElementById('level_totalsop3').value=1;
					
				}
				else{
					document.getElementById('level_totalsop3').value=0;
				}
			}
	}else
	{
		
	document.getElementById('level_totalsop3').value=0;	
		
	}
	getItemscoresop();
}

function sop_level32(val)
{
	var num = val.value;
	var level_total3= document.getElementById('level_totalsop3').value;
	//alert(val);
	var level_total2= document.getElementById('level_totalsop2').value;
	//alert(sop12);
	var sop31=$("#sop_31").val();

	if(level_total2 == 3)
	{
		if(sop31 == 1)
			{
				if(num == 1)
					{
						
						//var tot= parseInt(level_total3) + parseInt(val);
						document.getElementById('level_totalsop3').value=2;
		
						
					}
					else{
						
						//var tot= parseInt(level_total3) + parseInt(val);
						document.getElementById('level_totalsop3').value=1;
						
					}
		}else{
			if(num == 1)
			{
				
				//var tot= parseInt(level_total3) + parseInt(num);
				document.getElementById('level_totalsop3').value=1;

				
			}
			else{
				
				//var tot= parseInt(level_total3) + parseInt(num);
				document.getElementById('level_totalsop3').value=0;
				
			}
		}
	}else{	
				document.getElementById('level_totalsop3').value=0;
				
			}
	getItemscoresop();	
	
}
function sop_level41(val)
{
	var num = val.value;
	var sop42=$("#sop_42").val();
	var level_total3= document.getElementById('level_totalsop3').value;
	var level_total4= document.getElementById('level_totalsop4').value;
	//alert(sop12);
	if(level_total3 == 2)
	{
			if(sop42 == 1)
			{
					if(num == 1)
				{
					//alert('test');
					//var tot= parseInt(level_total4) + parseInt(num);
					document.getElementById('level_totalsop4').value=2;

					
				}
				else{
					//alert('test1');
					//var tot= parseInt(level_total4) + parseInt(val);
					document.getElementById('level_totalsop4').value=1;
					
				}
				
			}
			else
			{
				if(num == 1)
				{
					//alert('test23');
					document.getElementById('level_totalsop4').value=1;
					
				}
				else{
					document.getElementById('level_totalsop4').value=0;
				}
			}
	}else
	{
		
	document.getElementById('level_totalsop4').value=0;	
		
	}
	getItemscoresop();
}

function sop_level42(val)
{
	var num = val.value;
	var level_total3= document.getElementById('level_totalsop3').value;
	//alert(val);
	var level_total4= document.getElementById('level_totalsop4').value;
	//alert(sop12);
	var sop41=$("#sop_41").val();

	if(level_total3 == 2)
	{
		if(sop41 == 1)
			{
				if(num == 1)
					{
						
						//var tot= parseInt(level_total4) + parseInt(val);
						document.getElementById('level_totalsop4').value=2;
		
						
					}
					else{
						
						//var tot= parseInt(level_total4) + parseInt(val);
						document.getElementById('level_totalsop4').value=1;
						
					}
		}else{
			if(num == 1)
			{
				
				//var tot= parseInt(level_total4) + parseInt(val);
				document.getElementById('level_totalsop4').value=1;

				
			}
			else{
				
				//var tot= parseInt(level_total4) + parseInt(val);
				document.getElementById('level_totalsop4').value=0;
				
			}
		}
	}else{	
					document.getElementById('level_totalsop4').value=0;
					
				}
	getItemscoresop();	
	
}
function sop_level51(val)
{
	//alert('itemscore');
	var num = val.value;
	//var sop_12= document.getElementById('sop_12').value;
	//alert($("input[name='sop_12']:checked").val());
	var sop52=$("#sop_52").val();
	var level_total5= document.getElementById('level_totalsop5').value;
	var level_total4= document.getElementById('level_totalsop4').value;
	//alert(level_total4);
	if(level_total4 == 1)
	{
			if(sop52 == 1)
			{
					if(num == 1)
				{
					//alert('test');
					//var tot= parseInt(level_total5) + parseInt(val);
					document.getElementById('level_totalsop5').value=2;

					
				}
				else{
					//alert('test1');
					//var tot= parseInt(level_total5) + parseInt(val);
					document.getElementById('level_totalsop5').value=1;
					
				}
				
			}
			else
			{
				if(num == 1)
				{
					//alert('test23');
					document.getElementById('level_totalsop5').value=1;
					
				}
				else{
					document.getElementById('level_totalsop5').value=0;
				}
			}
	}
	else
	{
		//alert('');
	document.getElementById('level_totalsop5').value=0;	
		
	}
	getItemscoresop();
}

function sop_level52(val)
{
	var level_total5= document.getElementById('level_totalsop5').value;
	
	var level_total4= document.getElementById('level_totalsop4').value;
	var num = val.value;
	var sop51=$("#sop_51").val();
	if(level_total4 == 1)
	{ 
		if(sop51 == 1)
			{
					if(num == 1)
						{
							//alert('test');
							//var tot= parseInt(level_total5) + parseInt(val);
							document.getElementById('level_totalsop5').value=2;

							
						}
						else{
							//alert('test1');
							//var tot= parseInt(level_total5) + parseInt(val);
							document.getElementById('level_totalsop5').value=1;
							
						}
						
			}
			else{
				if(num == 1)
				{
					//alert('test23');
					document.getElementById('level_totalsop5').value=1;
					
				}
				else{
					document.getElementById('level_totalsop5').value=0;
				}
			}
	}
	else{	
			document.getElementById('level_totalsop5').value=0;
			
		}
	getItemscoresop();	
	
}

function getItemscoresop()
{
	//alert('itemscre');
	var level_total1= document.getElementById('level_totalsop1').value;
	var level_total2= document.getElementById('level_totalsop2').value;
	var level_total3= document.getElementById('level_totalsop3').value;
	var level_total4= document.getElementById('level_totalsop4').value;
	var level_total5= document.getElementById('level_totalsop5').value;
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
	
	//alert(level_total1);
	
	var sop11 =document.getElementById('sop_11').value;
	var sop12 =document.getElementById('sop_12').value;
	var sop13 =document.getElementById('sop_13').value;
	var sop14 =document.getElementById('sop_14').value;
	var sop15 =document.getElementById('sop_15').value;
	var sop21 =document.getElementById('sop_21').value;
	var sop22 =document.getElementById('sop_22').value;
	var sop23 =document.getElementById('sop_23').value;
	var sop31 =document.getElementById('sop_31').value;
	var sop32 =document.getElementById('sop_32').value;
	var sop41 =document.getElementById('sop_41').value;
	var sop42 =document.getElementById('sop_42').value;
	var sop51 =document.getElementById('sop_51').value;
	var sop52 =document.getElementById('sop_52').value;
	
	//alert(sop11);
	//alert(sop12);
	
	
	 level_total1 = parseInt(sop11) + parseInt(sop12) + parseInt(sop13) + parseInt(sop14) + parseInt(sop15);
	 level_total2 = parseInt(sop21) + parseInt(sop22) + parseInt(sop23);
	 level_total3 = parseInt(sop31) + parseInt(sop32);
	 level_total4 = parseInt(sop41) + parseInt(sop42);
	 level_total5 = parseInt(sop51) + parseInt(sop52);	
	
	//alert(level_total1);
	 
	 div_1= parseInt(level_total1) / parseInt(two_div);
	 div_2= parseInt(level_total2) / parseInt(two_div);
	 div_3= parseInt(level_total3) / parseInt(two_div);
	 div_4= parseInt(level_total4) / parseInt(two_div);
	 div_5= parseInt(level_total5) / parseInt(two_div);
	 
	 var total= parseFloat(div_1) + parseFloat(div_2) + parseFloat(div_3) + parseFloat(div_4)+ parseFloat(div_5);
	// alert(total);
	document.getElementById('itemscoresop').value=total;
	document.getElementById('total_itemsop').innerHTML=total;
	document.getElementById('hdaction').value=1;
}*/
/*----------------calculation for safety & environment------------------

function safty_level11(val)
{
	alert('itemscore');
	//var sop_12= document.getElementById('sop_12').value;
	//alert($("input[name='sop_12']:checked").val());
	var sop12=$("input[name='sfy_12']:checked").val();
	var level_total1= document.getElementById('level_totalsfy1').value;
	//alert(sop12);
	if(sop12 == '1')
	{
			if(val == '1')
		{
			//alert('test');
			var tot= parseInt(level_total1) + parseInt(val);
			document.getElementById('level_totalsfy1').value=2;

			
		}
		else{
			//alert('test1');
			var tot= parseInt(level_total1) + parseInt(val);
			document.getElementById('level_totalsfy1').value=1;
			
		}
		
	}
	else
	{
		if(val == '1')
		{
			//alert('test23');
			document.getElementById('level_totalsfy1').value=1;
			
		}
		else{
			document.getElementById('level_totalsfy1').value=0;
		}
	}
	getItemscoresfy();
}

function safty_level12(val)
{
	var level_total1= document.getElementById('level_totalsfy1').value;
	//alert(val);
	
	if(val == '1')
	{
		
		var tot= parseInt(level_total1) + parseInt(val);
		document.getElementById('level_totalsfy1').value=2;

		
	}
	else{
		
		var tot= parseInt(level_total1) + parseInt(val);
		document.getElementById('level_totalsfy1').value=1;
		
	}
	getItemscoresfy();
}


function safty_level21(val)
{
	//alert('itemscore');
	//var sop_12= document.getElementById('sop_12').value;
	//alert($("input[name='sop_12']:checked").val());
	var sop21=$("input[name='sfy_22']:checked").val();
	var level_total1= document.getElementById('level_totalsfy1').value;
	var level_total2= document.getElementById('level_totalsfy2').value;
	//alert(sop12);
	if(level_total1 == '2')
	{
		if(sop21 == '1')
			{
				if(val == '1')
				{
					//alert('test');
					var tot= parseInt(level_total2) + parseInt(val);
					document.getElementById('level_totalsfy2').value=2;
	
				}
				else
				{
					//alert('test1');
					var tot= parseInt(level_total2) + parseInt(val);
					document.getElementById('level_totalsfy2').value=1;
					
				}
				
			}
			else
			{
				if(val == '1')
				{
					//alert('test23');
					document.getElementById('level_totalsfy2').value=1;
					
				}
				else
				{
					document.getElementById('level_totalsfy2').value=0;
				}
			}
	}
	else
	{
		document.getElementById('level_totalsfy2').value=0;
	}


	getItemscoresfy();
}


function safty_level22(val)
{
	var level_total1= document.getElementById('level_totalsfy2').value;
	//alert(val);
	var level_total1= document.getElementById('level_totalsfy1').value;
	if(level_total1 == '2')
	{
		if(val == '1')
		{
			
			var tot= parseInt(level_total1) + parseInt(val);
			document.getElementById('level_totalsfy2').value=2;

			
		}
		else{
			
			var tot= parseInt(level_total1) + parseInt(val);
			document.getElementById('level_totalsfy2').value=1;
			
		}
	}
	else
	{
	document.getElementById('level_totalsfy2').value=0;	
	}
	getItemscoresfy();
}

function safty_level31(val)
{
	//alert('31');
	///var sop_12= document.getElementById('sop_12').value;
	//alert($("input[name='sop_12']:checked").val());
	
	var level_total2= document.getElementById('level_totalsfy2').value;
	var level_total3= document.getElementById('level_totalsfy3').value;
	//alert(sop12);
	if(level_total2 == '2')
	{
		if(val == '1')
			{
				//alert('test23');
				document.getElementById('level_totalsfy3').value=1;
					
			}
			else
			{
					document.getElementById('level_totalsfy3').value=0;
			}
			
	}
	else
	{
		document.getElementById('level_totalsfy3').value=0;
	}
	getItemscoresfy();
}
function safty_level32(val)
{
	var level_total3= document.getElementById('level_totalsfy3').value;
	//alert(val);
	var level_total2= document.getElementById('level_totalsfy2').value;
	//alert(sop12);
	if(level_total2 = '1')
	{
			if(val == '1')
			{
				
				var tot= parseInt(level_total1) + parseInt(val);
				document.getElementById('level_totalsfy3').value=2;

				
			}
			else{
				
				var tot= parseInt(level_total1) + parseInt(val);
				document.getElementById('level_totalsfy3').value=1;
				
			}
	}
		else{	
				document.getElementById('level_totalsfy3').value=0;
				
			}
	getItemscoresfy();	
	
}

function safty_level41(val)
{
	//alert('itemscore');
	//var sop_12= document.getElementById('sop_12').value;
	//alert($("input[name='sop_12']:checked").val());
	
	var level_total3= document.getElementById('level_totalsfy3').value;
	var level_total4= document.getElementById('level_totalsfy4').value;
	//alert(sop12);
	if(level_total3 == '1')
	{
		if(val == '1')
			{
				//alert('test23');
				document.getElementById('level_totalsfy4').value=1;
					
			}
			else
			{
					document.getElementById('level_totalsfy4').value=0;
			}
			
	}
	else
	{
		document.getElementById('level_totalsfy4').value=0;
	}
	getItemscoresfy();
}


function safty_level51(val)
{
	//alert('itemscore');
	//var sop_12= document.getElementById('sop_12').value;
	//alert($("input[name='sop_12']:checked").val());
	var sop52=$("input[name='sfy_52']:checked").val();
	var level_total5= document.getElementById('level_totalsfy5').value;
	var level_total4= document.getElementById('level_totalsfy4').value;
	//alert(sop12);
	if(level_total4 = '1')
	{
			if(sop52 == '1')
			{
					if(val == '1')
				{
					//alert('test');
					var tot= parseInt(level_total5) + parseInt(val);
					document.getElementById('level_totalsfy5').value=2;

					
				}
				else{
					//alert('test1');
					var tot= parseInt(level_total5) + parseInt(val);
					document.getElementById('level_totalsfy5').value=1;
					
				}
				
			}
			else
			{
				if(val == '1')
				{
					//alert('test23');
					document.getElementById('level_totalsfy5').value=1;
					
				}
				else{
					document.getElementById('level_totalsfy5').value=0;
				}
			}
	}
	else
	{
		
	document.getElementById('level_totalsfy5').value=0;	
		
	}
	getItemscoresfy();
}

function safty_level52(val)
{
	var level_total5= document.getElementById('level_totalsfy5').value;
	//alert(val);
	var level_total4= document.getElementById('level_totalsfy4').value;
	//alert(sop12);
	if(level_total4 = '1')
	{
			if(val == '1')
			{
				
				var tot= parseInt(level_total1) + parseInt(val);
				document.getElementById('level_totalsfy5').value=2;

				
			}
			else{
				
				var tot= parseInt(level_total1) + parseInt(val);
				document.getElementById('level_totalsfy5').value=1;
				
			}
	}
		else{	
				document.getElementById('level_totalsfy5').value=0;
				
			}
	getItemscoresfy();	
	
}

function getItemscoresfy()
{
	var level_total1= document.getElementById('level_totalsfy1').value;
	var level_total2= document.getElementById('level_totalsfy2').value;
	var level_total3= document.getElementById('level_totalsfy3').value;
	var level_total4= document.getElementById('level_totalsfy4').value;
	var level_total5= document.getElementById('level_totalsfy5').value;
	var two_div= 2;
	//alert(level_total2);
	if(level_total1 == '')
	{
		level_total1=0;
	}
	div_1= parseInt(level_total1) / parseInt(two_div);
	if(level_total2 == '')
	{
		level_total2=0;
	}
	div_2= parseInt(level_total2) / parseInt(two_div);
	//alert(div_2);
	if(level_total3 == '')
	{
		level_total3=0;
	}
	//alert(div_2);
	div_3= parseInt(level_total3) / parseInt(two_div);
	if(level_total4 == '')
	{
		level_total4=0;
	}
	div_4= parseInt(level_total4) / parseInt(two_div);
	if(level_total5 == '')
	{
		level_total5=0;
	}
	div_5= parseInt(level_total5) / parseInt(two_div);
	
	//alert( parseFloat(div_2));
	 var total= parseFloat(div_1) + parseFloat(div_2) + parseFloat(div_3) + parseFloat(div_4)+ parseFloat(div_5);
	 //alert(total);
	document.getElementById('itemscoresfy').value=total;
	document.getElementById('total_itemsfy').innerHTML=total;
}*/
