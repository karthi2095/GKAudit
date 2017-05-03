 function actualscore1()
 {
	// alert("1");
	 var level_totaltqm = document.getElementById("level_totaltqm1").value;
	 var level_totaltm = document.getElementById("level_totaltm1").value;
	 
		if(level_totaltqm == "")
		{
			level_totaltqm = 0;
		}	
		if(level_totaltm == "")
		{
			level_totaltm = 0;
		}
		
	 var total = parseInt(level_totaltqm) + parseInt(level_totaltm);
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
	 var level_totaltqm = document.getElementById("level_totaltqm2").value;
	 var level_totaltm = document.getElementById("level_totaltm2").value;
	 
		if(level_totaltqm == "")
		{
			level_totaltqm = 0;
		}	
		if(level_totaltm == "")
		{
			level_totaltm = 0;
		}
		
	 var total = parseInt(level_totaltqm) + parseInt(level_totaltm);
	 document.getElementById("level2").innerHTML= total;
	 document.getElementById("score2").value= total;
	 
	 var percent = parseInt(total) * 100 / 3;
	// alert(percent);
	document.getElementById("achieve2").value= percent.toFixed(1);
	 document.getElementById("achievement2").innerHTML= percent.toFixed(1)+"%";
	 CategoryRank();
 }
 function actualscore3()
 {
 //alert("3");
	 var level_totaltqm = document.getElementById("level_totaltqm3").value;
	 var level_totaltm = document.getElementById("level_totaltm3").value;
	 
		if(level_totaltqm == "")
		{
			level_totaltqm = 0;
		}	
		if(level_totaltm == "")
		{
			level_totaltm = 0;
		}
		
	 var total = parseInt(level_totaltqm) + parseInt(level_totaltm);
	 document.getElementById("level3").innerHTML= total;
	 document.getElementById("score3").value= total;
	 
	 var percent = parseInt(total) * 100 / 2;
	// alert(percent);
	document.getElementById("achieve3").value= percent.toFixed(1);
	 document.getElementById("achievement3").innerHTML= percent.toFixed(1)+"%";
	 CategoryRank();
 }
 function actualscore4()
 {
	// alert("4");
	 var level_totaltqm = document.getElementById("level_totaltqm4").value;
	 var level_totaltm = document.getElementById("level_totaltm4").value;
	 
		if(level_totaltqm == "")
		{
			level_totaltqm = 0;
		}	
		if(level_totaltm == "")
		{
			level_totaltm = 0;
		}
		
	 var total = parseInt(level_totaltqm) + parseInt(level_totaltm);
	 document.getElementById("level4").innerHTML= total;
	 document.getElementById("score4").value= total;
	 
	 var percent = parseInt(total) * 100 / 2;
	// alert(percent);
	document.getElementById("achieve4").value= percent.toFixed(1);
	 document.getElementById("achievement4").innerHTML= percent.toFixed(1)+"%";
	 CategoryRank();
 }
 function actualscore5()
 {
	// alert("5");
	 var level_totaltqm = document.getElementById("level_totaltqm5").value;
	 var level_totaltm = document.getElementById("level_totaltm5").value;
	 
		if(level_totaltqm == "")
		{
			level_totaltqm = 0;
		}	
		if(level_totaltm == "")
		{
			level_totaltm = 0;
		}
		
	 var total = parseInt(level_totaltqm) + parseInt(level_totaltm);
	 document.getElementById("level5").innerHTML= total;
	 document.getElementById("score5").value= total;
	// alert(total);
	 var percent = (parseInt(total) * 100) / 4;
	// alert(percent);
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
 
 
 /*==================    Calculation for Quality management Category score ===================*/
 
  function actualscorequality1()
 {
	 //alert("1");
	 var level_totaltqm = document.getElementById("level_totaldnp1").value;
	 var level_totaltm = document.getElementById("level_totaldnr1").value;
	 
		if(level_totaltqm == "")
		{
			level_totaltqm = 0;
		}	
		if(level_totaltm == "")
		{
			level_totaltm = 0;
		}
		
	 var total = parseInt(level_totaltqm) + parseInt(level_totaltm);
	 document.getElementById("level1").innerHTML= total;
	 document.getElementById("score1").value= total;
	 
	 var percent = parseInt(total) * 100 / 7;
	 //alert(percent);
	 document.getElementById("achieve1").value= percent.toFixed(1);
	 document.getElementById("achievement1").innerHTML= percent.toFixed(1)+"%";
	 CategoryRankquality();
 }
 function actualscorequality2()
 {
	 //alert("2");
	 var level_totaltqm = document.getElementById("level_totaldnp2").value;
	 var level_totaltm = document.getElementById("level_totaldnr2").value;
	 
		if(level_totaltqm == "")
		{
			level_totaltqm = 0;
		}	
		if(level_totaltm == "")
		{
			level_totaltm = 0;
		}
		
	 var total = parseInt(level_totaltqm) + parseInt(level_totaltm);
	 document.getElementById("level2").innerHTML= total;
	 document.getElementById("score2").value= total;
	 
	 var percent = parseInt(total) * 100 / 9;
	// alert(percent);
	document.getElementById("achieve2").value= percent.toFixed(1);
	 document.getElementById("achievement2").innerHTML= percent.toFixed(1)+"%";
	 CategoryRankquality();
 }
 function actualscorequality3()
 {
 //alert("3");
	 var level_totaltqm = document.getElementById("level_totaldnp3").value;
	 var level_totaltm = document.getElementById("level_totaldnr3").value;
	 
		if(level_totaltqm == "")
		{
			level_totaltqm = 0;
		}	
		if(level_totaltm == "")
		{
			level_totaltm = 0;
		}
		
	 var total = parseInt(level_totaltqm) + parseInt(level_totaltm);
	 document.getElementById("level3").innerHTML= total;
	 document.getElementById("score3").value= total;
	 
	 var percent = parseInt(total) * 100 / 6;
	// alert(percent);
	document.getElementById("achieve3").value= percent.toFixed(1);
	 document.getElementById("achievement3").innerHTML= percent.toFixed(1)+"%";
	 CategoryRankquality();
 }
 function actualscorequality4()
 {
	// alert("4");
	 var level_totaltqm = document.getElementById("level_totaldnp4").value;
	 var level_totaltm = document.getElementById("level_totaldnr4").value;
	 
		if(level_totaltqm == "")
		{
			level_totaltqm = 0;
		}	
		if(level_totaltm == "")
		{
			level_totaltm = 0;
		}
		
	 var total = parseInt(level_totaltqm) + parseInt(level_totaltm);
	 document.getElementById("level4").innerHTML= total;
	 document.getElementById("score4").value= total;
	 
	 var percent = parseInt(total) * 100 / 3;
	// alert(percent);
	document.getElementById("achieve4").value= percent.toFixed(1);
	 document.getElementById("achievement4").innerHTML= percent.toFixed(1)+"%";
	 CategoryRankquality();
 }
 function actualscorequality5()
 {
	// alert("5");
	 var level_totaltqm = document.getElementById("level_totaldnp5").value;
	 var level_totaltm = document.getElementById("level_totaldnr5").value;
	 
		if(level_totaltqm == "")
		{
			level_totaltqm = 0;
		}	
		if(level_totaltm == "")
		{
			level_totaltm = 0;
		}
		
	 var total = parseInt(level_totaltqm) + parseInt(level_totaltm);
	 document.getElementById("level5").innerHTML= total;
	 document.getElementById("score5").value= total;
	 
	 var percent = (parseInt(total) * 100) / 5;
	 //alert(percent);
	 document.getElementById("achieve5").value= percent.toFixed(1);
	 document.getElementById("achievement5").innerHTML= percent.toFixed(1)+"%";
	 CategoryRankquality();
 }
 function CategoryRankquality()
 {
	  //alert("cat");
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
		document.getElementById("categorydnp").value = rank.toFixed(1);
		document.getElementById("category-rankdnp").innerHTML = rank.toFixed(1);
		
		//document.getElementById('hdaction1').value=1;
		//document.getElementById('hdaction2').value=1;
 }
 
 /*==============  Category Score for Standard Operation  ===================*/
 
 
 
 
 function actualscoresop1()
 {
	
	 var sop11 = $("#sop_11").val();
	 var sop12 = $("#sop_12").val();
	 var sop13 = $("#sop_13").val();
	 var sop14 = $("#sop_14").val();
	 var sop15 = $("#sop_15").val();
	
	

	 //alert(sop11);
	 var level_totalsop = parseInt(sop11) + parseInt(sop12) + parseInt(sop13) + parseInt(sop14) + parseInt(sop15);
	 //var level_totaltm = document.getElementById("level_totaltm1").value;
	 
	
		if(level_totalsop < 5)
		{
			
			
			  document.getElementById("sop_21").value=0;
			  document.getElementById("sop_22").value=0;
			  document.getElementById("sop_23").value=0;
			  document.getElementById("sop_31").value=0;
			  document.getElementById("sop_32").value=0;
			  document.getElementById("sop_41").value=0;
			  document.getElementById("sop_42").value=0;
			  document.getElementById("sop_51").value=0;
			  document.getElementById("sop_52").value=0;
			  
			  document.getElementById("level2").innerHTML= 0;
			  document.getElementById("level3").innerHTML= 0;
			  document.getElementById("level4").innerHTML= 0;
			  document.getElementById("level5").innerHTML= 0;
			  
			  document.getElementById("achievement2").innerHTML= 0+"%";
			  document.getElementById("achievement3").innerHTML= 0+"%";
			  document.getElementById("achievement4").innerHTML= 0+"%";
			  document.getElementById("achievement5").innerHTML= 0+"%";
			  
			  document.getElementById("score2").value=0;
			  document.getElementById("score3").value=0;
			  document.getElementById("score4").value=0;
			  document.getElementById("score5").value=0;
			  
			  document.getElementById("achieve2").value=0;
			  document.getElementById("achieve3").value=0;
			  document.getElementById("achieve4").value=0;
			  document.getElementById("achieve5").value=0;
			 
	    }
		
	// var total = parseInt(level_totalsop);
	 document.getElementById("level1").innerHTML= level_totalsop;
	 document.getElementById("score1").value= level_totalsop;
	 
	 var percent = parseInt(level_totalsop) * 100 / 5;
	 //alert(percent);
	 document.getElementById("achieve1").value= percent.toFixed(1);
	 document.getElementById("achievement1").innerHTML= percent.toFixed(1)+"%";
	 CategoryRanksop();
 }
 function actualscoresop2()
 {
	// alert("2");
	 var sop21 = $("#sop_21").val();
	 var sop22 = $("#sop_22").val();
	 var sop23 = $("#sop_23").val();
	
	
	 var level_totalsop = parseInt(sop21) + parseInt(sop22) + parseInt(sop23);
	 
		if(level_totalsop < 3)
		{
			 
			  document.getElementById("sop_31").value=0;
			  document.getElementById("sop_32").value=0;
			  document.getElementById("sop_41").value=0;
			  document.getElementById("sop_42").value=0;
			  document.getElementById("sop_51").value=0;
			  document.getElementById("sop_52").value=0;
			  
			  document.getElementById("level3").innerHTML= 0;
			  document.getElementById("level4").innerHTML= 0;
			  document.getElementById("level5").innerHTML= 0;
		
			  document.getElementById("achievement3").innerHTML= 0+"%";
			  document.getElementById("achievement4").innerHTML= 0+"%";
			  document.getElementById("achievement5").innerHTML= 0+"%";
			 
			  document.getElementById("score3").value=0;
			  document.getElementById("score4").value=0;
			  document.getElementById("score5").value=0;
			  
			 
			  document.getElementById("achieve3").value=0;
			  document.getElementById("achieve4").value=0;
			  document.getElementById("achieve5").value=0;
			
			 
	    }
	 
		 //var total = parseInt(level_totalsop);
	 document.getElementById("level2").innerHTML= level_totalsop;
	 document.getElementById("score2").value= level_totalsop;
	 
	 var percent = parseInt(level_totalsop) * 100 / 3;
	// alert(percent);
	document.getElementById("achieve2").value= percent.toFixed(1);
	 document.getElementById("achievement2").innerHTML= percent.toFixed(1)+"%";
	 CategoryRanksop();
 }
 function actualscoresop3()
 {
 //alert("3");
	 var sop31 = $("#sop_31").val();
	 var sop32 = $("#sop_32").val();
		 

	 
	 var level_totalsop = parseInt(sop31) + parseInt(sop32);
	 
	 if(level_totalsop < 2)
		{
			 
		
			
			  document.getElementById("sop_41").value=0;
			  document.getElementById("sop_42").value=0;
			  document.getElementById("sop_51").value=0;
			  document.getElementById("sop_52").value=0;
			  
		
			  document.getElementById("level4").innerHTML= 0;
			  document.getElementById("level5").innerHTML= 0;
		
			 
			  document.getElementById("achievement4").innerHTML= 0+"%";
			  document.getElementById("achievement5").innerHTML= 0+"%";
			 
			
			  document.getElementById("score4").value=0;
			  document.getElementById("score5").value=0;
			  
			 
			
			  document.getElementById("achieve4").value=0;
			  document.getElementById("achieve5").value=0;
	    }	
	 
	 
	 //var total = parseInt(level_totalsop);
	 document.getElementById("level3").innerHTML= level_totalsop;
	 document.getElementById("score3").value= level_totalsop;
	 
	 var percent = parseInt(level_totalsop) * 100 / 2;
	// alert(percent);
	document.getElementById("achieve3").value= percent.toFixed(1);
	 document.getElementById("achievement3").innerHTML= percent.toFixed(1)+"%";
	 CategoryRanksop();
 }
 function actualscoresop4()
 {
	//alert("4");
	 var sop31 = $("#sop_41").val();
	 var sop32 = $("#sop_42").val();	
	 
	 
	 var level_totalsop = parseInt(sop31) + parseInt(sop32);
	 
	 if(level_totalsop < 2)
		{
			
			  document.getElementById("sop_51").value=0;
			  document.getElementById("sop_52").value=0;
			  
			  document.getElementById("level5").innerHTML= 0;
		
			  document.getElementById("achievement5").innerHTML= 0+"%";
			
			  document.getElementById("score5").value=0;
			
			  document.getElementById("achieve5").value=0;
			  
	    }
	 
	
				
	// var total = parseInt(level_totalsop);
	 document.getElementById("level4").innerHTML= level_totalsop;
	 document.getElementById("score4").value= level_totalsop;
	 
	 var percent = parseInt(level_totalsop) * 100 / 2;
	// alert(percent);
	document.getElementById("achieve4").value= percent.toFixed(1);
	 document.getElementById("achievement4").innerHTML= percent.toFixed(1)+"%";
	 CategoryRanksop();
 }
 function actualscoresop5()
 {
	// alert("5");
	 var sop31 = $("#sop_51").val();
	 var sop32 = $("#sop_52").val();
		 
	 var level_totalsop = parseInt(sop31) + parseInt(sop32);
	 
	 // var total = parseInt(level_totalsop);
	 document.getElementById("level5").innerHTML= level_totalsop;
	 document.getElementById("score5").value= level_totalsop;
	 
	 var percent = (parseInt(level_totalsop) * 100) / 2;
	 //alert(percent);
	 document.getElementById("achieve5").value= percent.toFixed(1);
	 document.getElementById("achievement5").innerHTML= percent.toFixed(1)+"%";
	 CategoryRanksop();
 }
 function CategoryRanksop()
 {
	  
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
		document.getElementById('hdaction').value=1;
 }
 
 /*==============  Category Score for Skill Management  ===================*/
 
 
 
 
 function actualscoreskm1()
 {
	// alert("1");
	 var skm11 = $("#skm_11").val();
	 var skm12 = $("#skm_12").val();
	 var skm13 = $("#skm_13").val();
	 var skm14 = $("#skm_14").val();
	 
	 //alert(skm11);
	 var level_totalskm = parseInt(skm11) + parseInt(skm12) + parseInt(skm13) + parseInt(skm14);
	 //var level_totaltm = document.getElementById("level_totaltm1").value;

	 if(level_totalskm < 4)
		{
			
			 
			
			  document.getElementById("skm_21").value=0;
			  document.getElementById("skm_22").value=0;
			  document.getElementById("skm_23").value=0;
			  document.getElementById("skm_24").value=0;
			  document.getElementById("skm_31").value=0;
			  document.getElementById("skm_32").value=0;
			  document.getElementById("skm_33").value=0;
			  document.getElementById("skm_41").value=0;
			  document.getElementById("skm_42").value=0;
			  document.getElementById("skm_51").value=0;
			  document.getElementById("skm_52").value=0;
			  document.getElementById("skm_53").value=0;
			  
			  document.getElementById("level2").innerHTML= 0;
			  document.getElementById("level3").innerHTML= 0;
			  document.getElementById("level4").innerHTML= 0;
			  document.getElementById("level5").innerHTML= 0;
			  document.getElementById("achievement2").innerHTML= 0+"%";
			  document.getElementById("achievement3").innerHTML= 0+"%";
			  document.getElementById("achievement4").innerHTML= 0+"%";
			  document.getElementById("achievement5").innerHTML= 0+"%";
			  document.getElementById("score2").value=0;
			  document.getElementById("score3").value=0;
			  document.getElementById("score4").value=0;
			  document.getElementById("score5").value=0;
			  document.getElementById("achieve2").value=0;
			  document.getElementById("achieve3").value=0;
			  document.getElementById("achieve4").value=0;
			  document.getElementById("achieve5").value=0;
			 // document.getElementById("category-rank").innerHTML=0.0;
			  
			 
			  
			  
			 
	    }
	 
	 
	 document.getElementById("level1").innerHTML= level_totalskm;
	 document.getElementById("score1").value= level_totalskm;
	 
	 var percent = parseInt(level_totalskm) * 100 / 4;
	 //alert(percent);
	 document.getElementById("achieve1").value= percent.toFixed(1);
	 document.getElementById("achievement1").innerHTML= percent.toFixed(1)+"%";
	 CategoryRankskm();
 }
 function actualscoreskm2()
 {
	// alert("2");
	 var skm21 = $("#skm_21").val();
	 var skm22 = $("#skm_22").val();
	 var skm23 = $("#skm_23").val();
	 var skm24 = $("#skm_24").val();
	
	 
	 var level_totalskm = parseInt(skm21) + parseInt(skm22) + parseInt(skm23) + parseInt(skm24);
	 
	 if(level_totalskm < 4)
		{
			
			
			 
			  document.getElementById("skm_31").value=0;
			  document.getElementById("skm_32").value=0;
			  document.getElementById("skm_33").value=0;
			  document.getElementById("skm_41").value=0;
			  document.getElementById("skm_42").value=0;
			  document.getElementById("skm_51").value=0;
			  document.getElementById("skm_52").value=0;
			  document.getElementById("skm_53").value=0;
			  
			  document.getElementById("level3").innerHTML= 0;
			  document.getElementById("level4").innerHTML= 0;
			  document.getElementById("level5").innerHTML= 0;
			  document.getElementById("achievement3").innerHTML= 0+"%";
			  document.getElementById("achievement4").innerHTML= 0+"%";
			  document.getElementById("achievement5").innerHTML= 0+"%";
			  document.getElementById("score3").value=0;
			  document.getElementById("score4").value=0;
			  document.getElementById("score5").value=0;
			 
			  document.getElementById("achieve3").value=0;
			  document.getElementById("achieve4").value=0;
			  document.getElementById("achieve5").value=0;
			 
	    }
	 
	 
	 
		 //var total = parseInt(level_totalskm);
	 document.getElementById("level2").innerHTML= level_totalskm;
	 document.getElementById("score2").value= level_totalskm;
	 
	 var percent = parseInt(level_totalskm) * 100 / 4;
	// alert(percent);
	document.getElementById("achieve2").value= percent.toFixed(1);
	 document.getElementById("achievement2").innerHTML= percent.toFixed(1)+"%";
	 CategoryRankskm();
 }
 function actualscoreskm3()
 {
 //alert("3");
	 var skm31 = $("#skm_31").val();
	 var skm32 = $("#skm_32").val();
	 var skm33 = $("#skm_33").val();
		 
	 var level_totalskm = parseInt(skm31) + parseInt(skm32) + parseInt(skm33);
	 
	 if(level_totalskm < 3)
		{
			
			
			 
			
			  document.getElementById("skm_41").value=0;
			  document.getElementById("skm_42").value=0;
			  document.getElementById("skm_51").value=0;
			  document.getElementById("skm_52").value=0;
			  document.getElementById("skm_53").value=0;
			  
			 
			  document.getElementById("level4").innerHTML= 0;
			  document.getElementById("level5").innerHTML= 0;
			
			  document.getElementById("achievement4").innerHTML= 0+"%";
			  document.getElementById("achievement5").innerHTML= 0+"%";
			
			  document.getElementById("score4").value=0;
			  document.getElementById("score5").value=0;
			 
			  document.getElementById("achieve4").value=0;
			  document.getElementById("achieve5").value=0;
			 
	    }
	 	
	 //var total = parseInt(level_totalskm);
	 document.getElementById("level3").innerHTML= level_totalskm;
	 document.getElementById("score3").value= level_totalskm;
	 
	 var percent = parseInt(level_totalskm) * 100 / 3;
	// alert(percent);
	document.getElementById("achieve3").value= percent.toFixed(1);
	 document.getElementById("achievement3").innerHTML= percent.toFixed(1)+"%";
	 CategoryRankskm();
 }
 function actualscoreskm4()
 {
	//alert("4");
	 var skm41 = $("#skm_41").val();
	 var skm42 = $("#skm_42").val();
		 
	 var level_totalskm = parseInt(skm41) + parseInt(skm42);
	 if(level_totalskm < 2)
		{
			
			
			 
			  document.getElementById("skm_51").value=0;
			  document.getElementById("skm_52").value=0;
			  document.getElementById("skm_53").value=0;
			 
			  document.getElementById("level5").innerHTML= 0;
			 
			  document.getElementById("achievement5").innerHTML= 0+"%";
			 
			  document.getElementById("score5").value=0;
			 
			
			  document.getElementById("achieve5").value=0;
			 
	    }
	
	// var total = parseInt(level_totalskm);
	 document.getElementById("level4").innerHTML= level_totalskm;
	 document.getElementById("score4").value= level_totalskm;
	 
	 var percent = parseInt(level_totalskm) * 100 / 2;
	// alert(percent);
	document.getElementById("achieve4").value= percent.toFixed(1);
	 document.getElementById("achievement4").innerHTML= percent.toFixed(1)+"%";
	 CategoryRankskm();
 }
 function actualscoreskm5()
 {
	// alert("5");
	 var skm51 = $("#skm_51").val();
	 var skm52 = $("#skm_52").val();
	 var skm53 = $("#skm_53").val();
		 
	 var level_totalskm = parseInt(skm51) + parseInt(skm52) + parseInt(skm53);
	 
	 // var total = parseInt(level_totalskm);
	 document.getElementById("level5").innerHTML= level_totalskm;
	 document.getElementById("score5").value= level_totalskm;
	 
	 var percent = (parseInt(level_totalskm) * 100) / 3;
	 //alert(percent);
	 document.getElementById("achieve5").value= percent.toFixed(1);
	 document.getElementById("achievement5").innerHTML= percent.toFixed(1)+"%";
	 CategoryRankskm();
 }
 function CategoryRankskm()
 {
	  
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
		document.getElementById('hdaction').value=1;
 }
 
/*==============  Category Score for Work Allocation  ===================*/
 
 
 
 function actualscorewal1()
 {
	// alert("1");
	 var wal11 = $("#wal_11").val();
	 var wal12 = $("#wal_12").val();
	if(wal11 == "")
		{
		wal11 ==0;
		}
	if(wal12 == "")
	{
	wal12 ==0;
	}
	 
	 //alert(wal11);
	 var level_totalwal = parseInt(wal11) + parseInt(wal12);
	 //var level_totaltm = document.getElementById("level_totaltm1").value;
	
	if(level_totalwal < 2)
		{	 
			
			  document.getElementById("wal_21").value=0;
			  document.getElementById("wal_22").value=0;
			  document.getElementById("wal_23").value=0;
			  document.getElementById("wal_24").value=0;
			  document.getElementById("wal_25").value=0;
			  document.getElementById("wal_31").value=0;
			  document.getElementById("wal_41").value=0;
			  document.getElementById("wal_51").value=0;
			  document.getElementById("wal_52").value=0;
			  document.getElementById("wal_53").value=0;
			  
			  document.getElementById("level2").innerHTML= 0;
			  document.getElementById("level3").innerHTML= 0;
			  document.getElementById("level4").innerHTML= 0;
			  document.getElementById("level5").innerHTML= 0;
			  
			  document.getElementById("achievement2").innerHTML= 0.0+"%";
			  document.getElementById("achievement3").innerHTML= 0.0+"%";
			  document.getElementById("achievement4").innerHTML= 0.0+"%";
			  document.getElementById("achievement5").innerHTML= 0.0+"%";
			  
			  document.getElementById("score2").value=0;
			  document.getElementById("score3").value=0;
			  document.getElementById("score4").value=0;
			  document.getElementById("score5").value=0;
			  
			  document.getElementById("achieve2").value=0;
			  document.getElementById("achieve3").value=0;
			  document.getElementById("achieve4").value=0;
			  document.getElementById("achieve5").value=0;
			 // document.getElementById("category-rank").innerHTML=0.0;
		}	  
	 document.getElementById("level1").innerHTML= level_totalwal;
	 document.getElementById("score1").value= level_totalwal;
	 
	 var percent = parseFloat(level_totalwal) * 100 / 2;
	 //alert(percent);
	 document.getElementById("achieve1").value= percent.toFixed(1);
	 document.getElementById("achievement1").innerHTML= percent.toFixed(1)+"%";
	 CategoryRankwal();
 }
 function actualscorewal2()
 {
	// alert("2");
	 var wal21 = $("#wal_21").val();
	 var wal22 = $("#wal_22").val();
	 var wal23 = $("#wal_23").val();
	 var wal24 = $("#wal_24").val();
	 var wal25 = $("#wal_25").val();
	if(wal21 == "")
		{
		wal21 =0;
		}
	if(wal22 == "")
	{
	wal22 =0;
	}
	if(wal23 == "")
	{
	wal23 =0;
	}
	if(wal24 == "")
	{
	wal24 =0;
	}
	if(wal25 == "")
	{
	wal25 =0;
	}
	 
	 var level_totalwal = parseInt(wal21) + parseInt(wal22) + parseInt(wal23) + parseInt(wal24) + parseInt(wal25);
	 
if(level_totalwal < 5)
		{	 
			
			  document.getElementById("wal_31").value=0;
			  document.getElementById("wal_41").value=0;
			  document.getElementById("wal_51").value=0;
			  document.getElementById("wal_52").value=0;
			  document.getElementById("wal_53").value=0;
			  
			  document.getElementById("level3").innerHTML= 0;
			  document.getElementById("level4").innerHTML= 0;
			  document.getElementById("level5").innerHTML= 0;
			  
			  document.getElementById("achievement3").innerHTML= 0.0+"%";
			  document.getElementById("achievement4").innerHTML= 0.0+"%";
			  document.getElementById("achievement5").innerHTML= 0.0+"%";
			  
			  document.getElementById("score3").value=0;
			  document.getElementById("score4").value=0;
			  document.getElementById("score5").value=0;
			  
			  document.getElementById("achieve3").value=0;
			  document.getElementById("achieve4").value=0;
			  document.getElementById("achieve5").value=0;
			 // document.getElementById("category-rank").innerHTML=0.0;
		}		
		//var total = parseInt(level_totalwal);
	 document.getElementById("level2").innerHTML= level_totalwal;
	 document.getElementById("score2").value= level_totalwal;
	 
	 var percent = parseFloat(level_totalwal) * 100 / 5;
	// alert(percent);
	document.getElementById("achieve2").value= percent.toFixed(1);
	 document.getElementById("achievement2").innerHTML= percent.toFixed(1)+"%";
	 CategoryRankwal();
 }
 function actualscorewal3()
 {
 //alert("3");
	 var wal31 = $("#wal_31").val();
	 
		 if(wal31 == "")
			 {
			 wal31 =0;
			 }
	 var level_totalwal = parseInt(wal31);
	 
		if(level_totalwal < 1)
		{	 
			
			 
			  document.getElementById("wal_41").value=0;
			  document.getElementById("wal_51").value=0;
			  document.getElementById("wal_52").value=0;
			  document.getElementById("wal_53").value=0;
			  
			 
			  document.getElementById("level4").innerHTML= 0;
			  document.getElementById("level5").innerHTML= 0;
			  
			  
			  document.getElementById("achievement4").innerHTML= 0.0+"%";
			  document.getElementById("achievement5").innerHTML= 0.0+"%";
			  
			
			  document.getElementById("score4").value=0;
			  document.getElementById("score5").value=0;
			  
			  
			  document.getElementById("achieve4").value=0;
			  document.getElementById("achieve5").value=0;
			 // document.getElementById("category-rank").innerHTML=0.0;
		}			
	 //var total = parseInt(level_totalwal);
	 document.getElementById("level3").innerHTML= level_totalwal;
	 document.getElementById("score3").value= level_totalwal;
	 
	 var percent = parseFloat(level_totalwal) * 100 / 1;
	// alert(percent);
	document.getElementById("achieve3").value= percent.toFixed(1);
	 document.getElementById("achievement3").innerHTML= percent.toFixed(1)+"%";
	 CategoryRankwal();
 }
 function actualscorewal4()
 {
	//alert("4");
	 var wal41 = $("#wal_41").val();
	
		 if(wal41 == "")
			 {
			 wal41=0;
			 }
	 var level_totalwal = parseInt(wal41);
		if(level_totalwal < 1)
		{	 
			
			  document.getElementById("wal_51").value=0;
			  document.getElementById("wal_52").value=0;
			  document.getElementById("wal_53").value=0;		 
			 
			  document.getElementById("level5").innerHTML= 0;			  
			 
			  document.getElementById("achievement5").innerHTML= 0.0+"%";			
			  
			  document.getElementById("score5").value=0;			  
			  
			  document.getElementById("achieve5").value=0;
			 // document.getElementById("category-rank").innerHTML=0.0;
		}	
	
	// var total = parseInt(level_totalwal);
	 document.getElementById("level4").innerHTML= level_totalwal;
	 document.getElementById("score4").value= level_totalwal;
	 
	 var percent = parseInt(level_totalwal) * 100 / 1;
	// alert(percent);
	document.getElementById("achieve4").value= percent.toFixed(1);
	 document.getElementById("achievement4").innerHTML= percent.toFixed(1)+"%";
	 CategoryRankwal();
 }
 function actualscorewal5()
 {
	// alert("5");
	 var wal51 = $("#wal_51").val();
	 var wal52 = $("#wal_52").val();
	 var wal53 = $("#wal_53").val();
		 if(wal51 == "")
			 {
			 wal51 =0;
			 }
		 if(wal52 == "")
		 {
		 wal52 =0;
		 }
		 if(wal53 == "")
		 {
		 wal53 =0;
		 }
	 var level_totalwal = parseInt(wal51) + parseInt(wal52) + parseInt(wal53);
	 
	 // var total = parseInt(level_totalwal);
	 document.getElementById("level5").innerHTML= level_totalwal;
	 document.getElementById("score5").value= level_totalwal;
	 
	 var percent = (parseFloat(level_totalwal) * 100) / 3;
	 //alert(percent);
	 document.getElementById("achieve5").value= percent.toFixed(1);
	 document.getElementById("achievement5").innerHTML= percent.toFixed(1)+"%";
	 CategoryRankwal();
 }
 function CategoryRankwal()
 {
	  
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
		//alert(rank);
		document.getElementById("category").value = rank.toFixed(1);
		document.getElementById("category-rank").innerHTML = rank.toFixed(1);
		
		//document.getElementById('hdaction1').value=1;
		//document.getElementById('hdaction2').value=1;
		document.getElementById('hdaction').value=1;
 }
 
 
 
/*==============  Category Score for Cost Management  ===================*/
 
 
 
 
 function actualscorecom1()
 {
	// alert("1");
	 var costlevel11 = $("#costlevel_11").val();
	 var costlevel12 = $("#costlevel_12").val();
	 var costlevel13 = $("#costlevel_13").val();
	 var costlevel14 = $("#costlevel_14").val();
	
	 
	 //alert(costlevel11);
	 var level_totalcostlevel = parseInt(costlevel11) + parseInt(costlevel12) + parseInt(costlevel13) + parseInt(costlevel14);
	 //var level_totaltm = document.getElementById("level_totaltm1").value;
		
		if(level_totalcostlevel < 4)
			{	 
				
				  document.getElementById("costlevel_21").value=0;
				  document.getElementById("costlevel_22").value=0;
				  document.getElementById("costlevel_23").value=0;
				  document.getElementById("costlevel_24").value=0;
				
				  document.getElementById("costlevel_31").value=0;
				  document.getElementById("costlevel_41").value=0;
				  document.getElementById("costlevel_51").value=0;
				  document.getElementById("costlevel_52").value=0;
				  document.getElementById("costlevel_53").value=0;
				  
				  document.getElementById("level2").innerHTML= 0;
				  document.getElementById("level3").innerHTML= 0;
				  document.getElementById("level4").innerHTML= 0;
				  document.getElementById("level5").innerHTML= 0;
				  
				  document.getElementById("achievement2").innerHTML= 0.0+"%";
				  document.getElementById("achievement3").innerHTML= 0.0+"%";
				  document.getElementById("achievement4").innerHTML= 0.0+"%";
				  document.getElementById("achievement5").innerHTML= 0.0+"%";
				  
				  document.getElementById("score2").value=0;
				  document.getElementById("score3").value=0;
				  document.getElementById("score4").value=0;
				  document.getElementById("score5").value=0;
				  
				  document.getElementById("achieve2").value=0;
				  document.getElementById("achieve3").value=0;
				  document.getElementById("achieve4").value=0;
				  document.getElementById("achieve5").value=0;
				 // document.getElementById("category-rank").innerHTML=0.0;
			}	
	 
	 document.getElementById("level1").innerHTML= level_totalcostlevel;
	 document.getElementById("score1").value= level_totalcostlevel;
	 
	 var percent = parseInt(level_totalcostlevel) * 100 / 4;
	 //alert(percent);
	 document.getElementById("achieve1").value= percent.toFixed(1);
	 document.getElementById("achievement1").innerHTML= percent.toFixed(1)+"%";
	 CategoryRankcostlevel();
 }
 function actualscorecom2()
 {
	// alert("2");
	 var costlevel21 = $("#costlevel_21").val();
	 var costlevel22 = $("#costlevel_22").val();
	 var costlevel23 = $("#costlevel_23").val();
	 var costlevel24 = $("#costlevel_24").val();
	
	 var level_totalcostlevel = parseInt(costlevel21) + parseInt(costlevel22) + parseInt(costlevel23) + parseInt(costlevel24);
	 
		if(level_totalcostlevel < 4)
		{	 
			
			  
			  document.getElementById("costlevel_31").value=0;
			  document.getElementById("costlevel_41").value=0;
			  document.getElementById("costlevel_51").value=0;
			  document.getElementById("costlevel_52").value=0;
			  document.getElementById("costlevel_53").value=0;
			  
			
			  document.getElementById("level3").innerHTML= 0;
			  document.getElementById("level4").innerHTML= 0;
			  document.getElementById("level5").innerHTML= 0;
			  
			 
			  document.getElementById("achievement3").innerHTML= 0.0+"%";
			  document.getElementById("achievement4").innerHTML= 0.0+"%";
			  document.getElementById("achievement5").innerHTML= 0.0+"%";
			  
			  
			  document.getElementById("score3").value=0;
			  document.getElementById("score4").value=0;
			  document.getElementById("score5").value=0;
			  
			  document.getElementById("achieve3").value=0;
			  document.getElementById("achieve4").value=0;
			  document.getElementById("achieve5").value=0;
			 // document.getElementById("category-rank").innerHTML=0.0;
		}	
	 
	 
		 //var total = parseInt(level_totalcostlevel);
	 document.getElementById("level2").innerHTML= level_totalcostlevel;
	 document.getElementById("score2").value= level_totalcostlevel;
	 
	 var percent = parseInt(level_totalcostlevel) * 100 / 4;
	// alert(percent);
	document.getElementById("achieve2").value= percent.toFixed(1);
	 document.getElementById("achievement2").innerHTML= percent.toFixed(1)+"%";
	 CategoryRankcostlevel();
 }
 function actualscorecom3()
 {
 //alert("3");
	 var costlevel31 = $("#costlevel_31").val();
	 
		 
	 var level_totalcostlevel = parseInt(costlevel31);
	 
		if(level_totalcostlevel < 1)
		{	 
			
			
			  document.getElementById("costlevel_41").value=0;
			  document.getElementById("costlevel_51").value=0;
			  document.getElementById("costlevel_52").value=0;
			  document.getElementById("costlevel_53").value=0;
			  
			
			  document.getElementById("level4").innerHTML= 0;
			  document.getElementById("level5").innerHTML= 0;
			  
			 
			  document.getElementById("achievement4").innerHTML= 0.0+"%";
			  document.getElementById("achievement5").innerHTML= 0.0+"%";
			  
			
			
			  document.getElementById("score4").value=0;
			  document.getElementById("score5").value=0;
			  
			
			  document.getElementById("achieve4").value=0;
			  document.getElementById("achieve5").value=0;
			 // document.getElementById("category-rank").innerHTML=0.0;
		}		
	 //var total = parseInt(level_totalcostlevel);
	 document.getElementById("level3").innerHTML= level_totalcostlevel;
	 document.getElementById("score3").value= level_totalcostlevel;
	 
	 var percent = parseInt(level_totalcostlevel) * 100 / 1;
	// alert(percent);
	document.getElementById("achieve3").value= percent.toFixed(1);
	 document.getElementById("achievement3").innerHTML= percent.toFixed(1)+"%";
	 CategoryRankcostlevel();
 }
 function actualscorecom4()
 {
	//alert("4");
	 var costlevel41 = $("#costlevel_41").val();
	
		 
	 var level_totalcostlevel = parseInt(costlevel41);
		if(level_totalcostlevel < 1)
		{	
			  document.getElementById("costlevel_51").value=0;
			  document.getElementById("costlevel_52").value=0;
			  document.getElementById("costlevel_53").value=0;
			  
			  document.getElementById("level5").innerHTML= 0;
			  
			  document.getElementById("achievement5").innerHTML= 0.0+"%";
			  
			  document.getElementById("score5").value=0;
			
			  document.getElementById("achieve5").value=0;
			 // document.getElementById("category-rank").innerHTML=0.0;
		}		
	
	// var total = parseInt(level_totalcostlevel);
	 document.getElementById("level4").innerHTML= level_totalcostlevel;
	 document.getElementById("score4").value= level_totalcostlevel;
	 
	 var percent = parseInt(level_totalcostlevel) * 100 / 1;
	// alert(percent);
	document.getElementById("achieve4").value= percent.toFixed(1);
	 document.getElementById("achievement4").innerHTML= percent.toFixed(1)+"%";
	 CategoryRankcostlevel();
 }
 function actualscorecom5()
 {
	// alert("5");
	 var costlevel51 = $("#costlevel_51").val();
	 var costlevel52 = $("#costlevel_52").val();
	 var costlevel53 = $("#costlevel_53").val();
		 
	 var level_totalcostlevel = parseInt(costlevel51) + parseInt(costlevel52) + parseInt(costlevel53);
	 
	 // var total = parseInt(level_totalcostlevel);
	 document.getElementById("level5").innerHTML= level_totalcostlevel;
	 document.getElementById("score5").value= level_totalcostlevel;
	 
	 var percent = (parseInt(level_totalcostlevel) * 100) / 3;
	 //alert(percent);
	 document.getElementById("achieve5").value= percent.toFixed(1);
	 document.getElementById("achievement5").innerHTML= percent.toFixed(1)+"%";
	 CategoryRankcostlevel();
 }
 function CategoryRankcostlevel()
 {
	 //alert("cat");
	  
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
		document.getElementById('hdaction').value=1;
 }