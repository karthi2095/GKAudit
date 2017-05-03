function getActualScore()
{
	var Costlevel1= document.getElementById('Costlevel1').value;
	var Costlevel2= document.getElementById('Costlevel2').value;
	var Costlevel3= document.getElementById('Costlevel3').value;
	var Costlevel4= document.getElementById('Costlevel4').value;
	var Costlevel5= document.getElementById('Costlevel5').value;
	if(Costlevel1 != '')
	{ 
		getAchievment(Costlevel1,'4','1');
		alert(Costlevel1);
		if(Costlevel1 == '4')
		{
			Costlevel1=Costlevel1;
			Costlevel2=Costlevel2;
			Costlevel3=Costlevel3;
			Costlevel4=Costlevel4;
			Costlevel5=Costlevel5;
		}
		else
		{
			Costlevel2=0;
			Costlevel3=0;
			Costlevel4=0;
			Costlevel5=0;
			
			document.getElementById("costlevel_21").value=0;
			document.getElementById("costlevel_22").value=0;
			document.getElementById("costlevel_23").value=0;
			document.getElementById("costlevel_24").value=0;
			document.getElementById("costlevel_31").value=0;
			document.getElementById("costlevel_41").value=0;
			document.getElementById("costlevel_51").value=0;
			document.getElementById("costlevel_52").value=0;
			document.getElementById("costlevel_53").value=0;
		}
	}
	else
	{
	Costlevel1=0;	
	}
	
	
	if(Costlevel2 != '')
	{
		getAchievment(Costlevel2,'4','2');
		if(Costlevel2 == '4')
			{
				Costlevel2=Costlevel2;
				Costlevel3=Costlevel3;
				Costlevel4=Costlevel4;
				Costlevel5=Costlevel5;
			}
			else
			{
				
			
				Costlevel3=0;
				Costlevel4=0;
				Costlevel5=0;
				
				
				document.getElementById("costlevel_31").value=0;
				document.getElementById("costlevel_41").value=0;
				document.getElementById("costlevel_51").value=0;
				document.getElementById("costlevel_52").value=0;
				document.getElementById("costlevel_53").value=0;
			
			}
		
	}
	else
	{
	Costlevel2=0;	
	}
	if(Costlevel3 != '')
	{
		getAchievment(Costlevel3,'1','3');
		if(Costlevel3 == '1')
			{
			Costlevel3=Costlevel3;
			Costlevel4=Costlevel4;
			Costlevel5=Costlevel5;
				
			}
			else
			{
				
				Costlevel4=0;
				Costlevel5=0;
				
				document.getElementById("costlevel_41").value=0;
				document.getElementById("costlevel_51").value=0;
				document.getElementById("costlevel_52").value=0;
				document.getElementById("costlevel_53").value=0;
			
			}
					
		
	}
	else
	{
	Costlevel3=0;	
	}
	if(Costlevel4 != '')
	{
		getAchievment(Costlevel4,'1','4');
		if(Costlevel4 == '1')
			{
			Costlevel4=Costlevel4;
			Costlevel5=Costlevel5;
				
			}
			else
			{
				
				Costlevel5=0;
				
				
				document.getElementById("costlevel_51").value=0;
				document.getElementById("costlevel_52").value=0;
				document.getElementById("costlevel_53").value=0;
			}
					
	}
	else
	{
	Costlevel4=0;	
	}
	if(Costlevel5 != '')
	{
		getAchievment(Costlevel5,'3','5');
		
		Costlevel5=Costlevel5;
		
	}
	else
	{
	Costlevel5=0;	
	}
	
	 document.getElementById('Costlevel1').value=Costlevel1;
	 document.getElementById('Costlevel2').value=Costlevel2;
	 document.getElementById('Costlevel3').value=Costlevel3;
	 document.getElementById('Costlevel4').value=Costlevel4;
	 document.getElementById('Costlevel5').value=Costlevel5;
	 document.getElementById('actual_score1').innerHTML=Costlevel1;
	 document.getElementById('actual_score2').innerHTML=Costlevel2;
	 document.getElementById('actual_score3').innerHTML=Costlevel3;
	 document.getElementById('actual_score4').innerHTML=Costlevel4;
	 document.getElementById('actual_score5').innerHTML=Costlevel5;
	 
	 document.getElementById('hdaction').value=1;

	
}




function costLevel1(val){
	//alert(val);
	var num = val.value;
	
	var cost2=$("#costlevel_12").val();
	var cost3=$("#costlevel_13").val();
	var cost4=$("#costlevel_14").val();
	var level_total1= document.getElementById('Costlevel1').value;
	alert(level_total1);
	var minus=1;
	//alert(val);
	if(num == 1)
	{
		//alert(num);
				if(cost2 == 1 || cost3== 1 || cost4 == 1 )
				{
				
			//alert('1');
			//alert('level');
			//alert(level_total1);
			
				var tot= parseInt(level_total1) + parseInt(minus);
				//alert(tot);
				document.getElementById('Costlevel1').value=tot;
				//alert(document.getElementById('Costlevel1').value);
				}
				else if(cost2 == 1 && cost3 == 1 && cost4== 1 )
				{
				//alert('2');
			
				var tot= parseInt(level_total1) + parseInt(minus);
				document.getElementById('Costlevel1').value=tot;
				}else{
					
			alert('3');
			 
				//var tot= parseInt(level_total1) + parseInt(val);
				document.getElementById('Costlevel1').value=1;
			
				}
	}
	else 
	{
		
		if(level_total1 != '0')
		{
			//alert('else');
		var tot= parseInt(level_total1) - parseInt(minus);
		document.getElementById('Costlevel1').value=tot;
		}
		else
		{
			//alert('else23');
		document.getElementById('Costlevel1').value=level_total1;	
		}
	}
	//alert(document.getElementById('Costlevel1').value);
	getActualScore();
	
	}



function costLevel2(val){
	var num = val.value;
	
	var cost1=$("#costlevel_11").val();
	var cost3=$("#costlevel_13").val();
	var cost4=$("#costlevel_14").val();
	var level_total1= document.getElementById('Costlevel1').value;
	//alert("yes");
	var minus=1;
	//alert(val);
	if(num == 1)
	{
		
				if(cost1 == 1 || cost3== 1 || cost4 == 1 )
				{
					
			
				var tot= parseInt(level_total1) + parseInt(minus);
				document.getElementById('Costlevel1').value=tot;
				}
				else if(cost1 == 1 && cost3 == 1 && cost4== 1 )
				{
					
			
				var tot= parseInt(level_total1) + parseInt(minus);
				document.getElementById('Costlevel1').value=tot;
				}else{
					
			
			 
				//var tot= parseInt(level_total1) + parseInt(val);
				document.getElementById('Costlevel1').value=1;
			
				}
	}
	else 
	{
	
		if(level_total1 != '0')
		{
		
		var tot= parseInt(level_total1) - parseInt(minus);
		document.getElementById('Costlevel1').value=tot;
		}
		else
		{
			
		document.getElementById('Costlevel1').value=level_total1;	
		}
	}
	getActualScore();
	}


function costLevel3(val){
	var num = val.value;
	
	var cost1=$("#costlevel_11").val();
	var cost2=$("#costlevel_12").val();
	var cost4=$("#costlevel_14").val();
	var level_total1= document.getElementById('Costlevel1').value;
	//alert("yes");
	var minus=1;
	//alert(val);
	if(num == 1)
	{
		
				if(cost1 == 1 || cost2== 1 || cost4 == 1 )
				{
					
			
				var tot= parseInt(level_total1) + parseInt(minus);
				document.getElementById('Costlevel1').value=tot;
				}
				else if(cost1 == 1 && cost2== 1 && cost4== 1 )
				{
					
			
				var tot= parseInt(level_total1) + parseInt(minus);
				document.getElementById('Costlevel1').value=tot;
				}else{
					
			
			 
				//var tot= parseInt(level_total1) + parseInt(val);
				document.getElementById('Costlevel1').value=1;
			
				}
	}
	else 
	{
		if(level_total1 != '0')
		{
			
		var tot= parseInt(level_total1) - parseInt(minus);
		document.getElementById('Costlevel1').value=tot;
		}
		else
		{
			
		document.getElementById('Costlevel1').value=level_total1;	
		}
	}
	getActualScore();
	}
function costLevel4(val){
	var num = val.value;
	
	var cost1=$("#costlevel_11").val();
	var cost3=$("#costlevel_13").val();
	var cost2=$("#costlevel_12").val();
	var level_total1= document.getElementById('Costlevel1').value;
	//alert("yes");
	var minus=1;
	//alert(val);
	if(num == 1)
	{
		
				if(cost1 == 1 || cost2== 1 || cost3 == 1 )
				{
					
			
				var tot= parseInt(level_total1) + parseInt(minus);
				document.getElementById('Costlevel1').value=tot;
				}
				else if(cost1 == 1 && cost2 == 1 && cost3== 1 )
				{
					
				var tot= parseInt(level_total1) + parseInt(minus);
				document.getElementById('Costlevel1').value=tot;
				}else{
					
			
			 
				//var tot= parseInt(level_total1) + parseInt(val);
				document.getElementById('Costlevel1').value=1;
			
				}
	}
	else 
	{
		if(level_total1 != '0')
		{
			
		var tot= parseInt(level_total1) - parseInt(minus);
		document.getElementById('Costlevel1').value=tot;
		}
		else
		{
			
		document.getElementById('Costlevel1').value=level_total1;	
		}
	}
	getActualScore();
	}




function costLeve21(val){
	var num = val.value;
	
	var cost22=$("#costlevel_22").val();
	var cost23=$("#costlevel_23").val();
	var cost24=$("#costlevel_24").val();
	var level_total1= document.getElementById('Costlevel2').value;
	//alert("yes");
	var minus=1;
	//alert(val);
	if(num == 1)
	{
		
				if(cost22 == 1 || cost23== 1 || cost24 == 1 )
				{
					
			
				var tot= parseInt(level_total1) + parseInt(minus);
				document.getElementById('Costlevel2').value=tot;
				}
				else if(cost22 == 1 && cost23 == 1 && cost24== 1 )
				{
					
			
				var tot= parseInt(level_total1) + parseInt(minus);
				document.getElementById('Costlevel2').value=tot;
				}else{
					
			
			 
				//var tot= parseInt(level_total1) + parseInt(val);
				document.getElementById('Costlevel2').value=1;
			
				}
	}
	else 
	{
		if(level_total1 != '0')
		{
			
		var tot= parseInt(level_total1) - parseInt(minus);
		document.getElementById('Costlevel2').value=tot;
		}
		else
		{
			
		document.getElementById('Costlevel2').value=level_total1;	
		}
	}
	getActualScore();
	}

function costLeve22(val){
	var num = val.value;
	
	var cost21=$("#costlevel_21").val();
	var cost23=$("#costlevel_23").val();
	var cost24=$("#costlevel_24").val();
	var level_total1= document.getElementById('Costlevel2').value;
	//alert("yes");
	var minus=1;
	//alert(val);
	if(num == 1)
	{
		
				if(cost21 == 1 || cost23== 1 || cost24 == 1 )
				{
					
			
				var tot= parseInt(level_total1) + parseInt(minus);
				document.getElementById('Costlevel2').value=tot;
				}
				else if(cost21 == 1 && cost23 == 1 && cost24== 1 )
				{
					
			
				var tot= parseInt(level_total1) + parseInt(minus);
				document.getElementById('Costlevel2').value=tot;
				}else{
					
			
			 
				//var tot= parseInt(level_total1) + parseInt(val);
				document.getElementById('Costlevel2').value=1;
			
				}
	}
	else 
	{
		if(level_total1 != '0')
		{
			
		var tot= parseInt(level_total1) - parseInt(minus);
		document.getElementById('Costlevel2').value=tot;
		}
		else
		{
			
		document.getElementById('Costlevel2').value=level_total1;	
		}
	}
	getActualScore();
	}
function costLeve23(val){
	var num = val.value;
	
	var cost21=$("#costlevel_21").val();
	var cost22=$("#costlevel_22").val();
	var cost24=$("#costlevel_24").val();
	var level_total1= document.getElementById('Costlevel2').value;
	//alert("yes");
	var minus=1;
	//alert(val);
	if(num == 1)
	{
	
				if(cost21 == 1 || cost22== 1 || cost24== 1 )
				{
					
			
				var tot= parseInt(level_total1) + parseInt(minus);
				document.getElementById('Costlevel2').value=tot;
				}
				else if(cost21 == 1 && cost22 == 1 && cost24== 1 )
				{
					
			
				var tot= parseInt(level_total1) + parseInt(minus);
				document.getElementById('Costlevel2').value=tot;
				}else{
					
			
			 
				//var tot= parseInt(level_total1) + parseInt(val);
				document.getElementById('Costlevel2').value=1;
			
				}
	}
	else 
	{
		if(level_total1 != '0')
		{
			
		var tot= parseInt(level_total1) - parseInt(minus);
		document.getElementById('Costlevel2').value=tot;
		}
		else
		{
		
		document.getElementById('Costlevel2').value=level_total1;	
		}
	}
	getActualScore();
	}


function costLeve24(val){
	var num = val.value;
	var cost21=$("#costlevel_21").val();
	var cost22=$("#costlevel_22").val();
	var cost23=$("#costlevel_23").val();
	var level_total1= document.getElementById('Costlevel2').value;
	//alert("yes");
	var minus=1;
	//alert(val);
	if(num == 1)
	{
		
				if(cost21 == 1 || cost22== 1 || cost23== 1 )
				{
					
			
				var tot= parseInt(level_total1) + parseInt(minus);
				document.getElementById('Costlevel2').value=tot;
				}
				else if(cost21 == 1 && cost22 == 1 && cost23== 1 )
				{
				
				var tot= parseInt(level_total1) + parseInt(minus);
				document.getElementById('Costlevel2').value=tot;
				}else{
					
			
			 
				//var tot= parseInt(level_total1) + parseInt(val);
				document.getElementById('Costlevel2').value=1;
			
				}
	}
	else 
	{
		if(level_total1 != '0')
		{
			
		var tot= parseInt(level_total1) - parseInt(minus);
		document.getElementById('Costlevel2').value=tot;
		}
		else
		{
		
		document.getElementById('Costlevel2').value=level_total1;	
		}
	}
	getActualScore();
	}

function costLeve31(val){
	var num = val.value;
	var cost31=$("#costlevel_31").val();

	var level_total1= document.getElementById('Costlevel3').value;
	//alert("yes");
	var minus=1;
	//alert(val);
	
				if(cost31 == 1 )
				{
					
				document.getElementById('Costlevel3').value=1;
				}
				else{
					
			
			 
				//var tot= parseInt(level_total1) + parseInt(val);
				document.getElementById('Costlevel3').value=0;
			
			
	
					}
				getActualScore();
}

function costLeve41(val){
	var num = val.value;
	var cost41=$("#costlevel_41").val();

	var level_total1= document.getElementById('Costlevel4').value;
	//alert("yes");
	var minus=1;
	//alert(val);
	
				if(cost41 == 1 )
				{
					
				document.getElementById('Costlevel4').value=1;
				}
				else{
					
			
			 
				//var tot= parseInt(level_total1) + parseInt(val);
				document.getElementById('Costlevel4').value=0;
			
			
	
					}
				getActualScore();
}


function costLeve51(val){
	var num = val.value;
	
	var cost52=$("#costlevel_52").val();
	var cost53=$("#costlevel_53").val();

	var level_total1= document.getElementById('Costlevel5').value;
	//alert("yes");
	var minus=1;
	//alert(val);
	if(num == 1)
	{
	
				if(cost52 == 1 || cost53== 1)
				{
					
			
				var tot= parseInt(level_total1) + parseInt(minus);
				document.getElementById('Costlevel5').value=tot;
				}
				else if(cost52 == 1 && cost53 == 1 ){
					
			
				var tot= parseInt(level_total1) + parseInt(minus);
				document.getElementById('Costlevel5').value=tot;
				}else{
				//var tot= parseInt(level_total1) + parseInt(val);
				document.getElementById('Costlevel5').value=1;
			
				}
	}
	else 
	{
		
		if(level_total1 != '0')
		{
			
		var tot= parseInt(level_total1) - parseInt(minus);
		document.getElementById('Costlevel5').value=tot;
		}
		else
		{
			
		document.getElementById('Costlevel5').value=level_total1;	
		}
	}
	getActualScore();
	}
	



function costLeve52(val){
	var num = val.value;
	
	var cost51=$("#costlevel_51").val();
	var cost53=$("#costlevel_53").val();
	
	var level_total1= document.getElementById('Costlevel5').value;
	//alert("yes");
	var minus=1;
	if(num == 1)
	{
				if(cost51 == 1 || cost53== 1 )
				{
					
				var tot= parseInt(level_total1) + parseInt(minus);
				document.getElementById('Costlevel5').value=tot;
				}
				else if(cost51 == 1 && cost53 == 1 )
				{
			
				var tot= parseInt(level_total1) + parseInt(minus);
				document.getElementById('Costlevel5').value=tot;
				}else{
			
			 
				//var tot= parseInt(level_total1) + parseInt(val);
				document.getElementById('Costlevel5').value=1;
			
				}
	}
	else 
	{
		
		if(level_total1 != '0')
		{
			
		var tot= parseInt(level_total1) - parseInt(minus);
		document.getElementById('Costlevel5').value=tot;
		}
		else
		{
			
		document.getElementById('Costlevel5').value=level_total1;	
		}
	}
	getActualScore();
	}


function costLeve53(val){
	var num = val.value;
	
	var cost51=$("#costlevel_51").val();
	var cost52=$("#costlevel_52").val();
	
	var level_total1= document.getElementById('Costlevel5').value;
	//alert("yes");
	var minus=1;
	//alert(val);
	if(num == 1)
	{
		
				if(cost51 == 1 || cost52== 1)
				{
					
			
				var tot= parseInt(level_total1) + parseInt(minus);
				document.getElementById('Costlevel5').value=tot;
				}
				else if(cost51 == 1 && cost52== 1 )
				{
					
			
				var tot= parseInt(level_total1) + parseInt(minus);
				document.getElementById('Costlevel5').value=tot;
				}else{
					
			
			 
				//var tot= parseInt(level_total1) + parseInt(val);
				document.getElementById('Costlevel5').value=1;
			
				}
	}
	else 
	{
		if(level_total1 != '0')
		{
		
		var tot= parseInt(level_total1) - parseInt(minus);
		document.getElementById('Costlevel5').value=tot;
		}
		else
		{
			
		document.getElementById('Costlevel5').value=level_total1;	
		}
	}
	getActualScore();
	
	}

function getAchievment(actual,avail,divId)
{
	//alert("1");
	if(actual == '')
	{
	//	alert("2");
		actual=0;	
	}
	alert(actual);
	var divactual=parseFloat(actual)/parseInt(avail);
	//alert(divactual);
	var category= parseFloat(divactual) * parseInt(100);
	//alert(avail);
	//alert(divId);
	document.getElementById('Achievelevel'+divId).value=category;
	
	document.getElementById('achieve_score'+divId).innerHTML=category+"%";
	CategoryRankwal();
}

function CategoryRankwal()
{
	  
		var val1 = document.getElementById("Achievelevel1").value;
		var val2 = document.getElementById("Achievelevel2").value;
		var val3 = document.getElementById("Achievelevel3").value;
	    var val4 = document.getElementById("Achievelevel4").value;
		var val5 = document.getElementById("Achievelevel5").value;
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
		var rank = (parseFloat(val1) + parseFloat(val2) + parseFloat(val3) + parseFloat(val4) + parseFloat(val5));
		var catrank=(parseFloat(rank)/parseInt(100));
		document.getElementById("category").value = catrank.toFixed(1);
		document.getElementById("category-rank").innerHTML = catrank.toFixed(1);
		
		//document.getElementById('hdaction1').value=1;
		//document.getElementById('hdaction2').value=1;
		document.getElementById('hdaction').value=1;
}











