 
 
 
 
/*==============  Category Score for Facility Management  ===================*/
 
function level11fam()
 {

	 actualscorefam1();
}
 function level12fam()
 {
	
	 actualscorefam1();

}
 function level13fam()
 {
	
	
	 actualscorefam1();

}
 function level14fam()
 {
	
	 actualscorefam1();

}
 function level21fam()
 {

	 var fam11 = $("#fam_11").val();
	 var fam12 = $("#fam_12").val();
	 var fam13 = $("#fam_13").val();
	 var fam14 = $("#fam_14").val();
	
	 if(fam11 == 0 || fam12 == 0|| fam13 ==0 || fam14 ==0 )
	 {
		
	 alert("Please complete previous level");
	 document.getElementById("fam_21").value=0;
	 document.getElementById("fam_11").focus();
     }

	 actualscorefam2();
}

 function level31facility()
 {
	
	 var fam21 = $("#fam_21").val();
	 if(fam21 == 0)
	 {
	 alert("Please complete previous level");
	 document.getElementById("fam_31").value= 0;
	 document.getElementById("fam_21").focus();
     }
	 
	 actualscorefam3();

}
 function level32fam()
 {
	
	 var fam21 = $("#fam_21").val();
	 if(fam21 == 0)
	 {
	 alert("Please complete previous level");
	 document.getElementById("fam_32").value= 0;
	 document.getElementById("fam_21").focus();
     }
	 
	 actualscorefam3();

}
 function level33fam()
 {
	 var fam21 = $("#fam_21").val();

	
	 if(fam21 == 0)
	 {
	 alert("Please complete previous level");
	 document.getElementById("fam_33").value= 0;
	 document.getElementById("fam_21").focus();
     }

	 actualscorefam3();

}
 function level41facility()
 {
	
	 var fam31 = $("#fam_31").val();
	 var fam32 = $("#fam_32").val();
	 var fam33 = $("#fam_33").val();
	
	 if(fam31 == 0 || fam32 == 0|| fam33 ==0 )
	 {
	 alert("Please complete previous level");
	 document.getElementById("fam_41").value= 0;
	 document.getElementById("fam_31").focus();
     }
	 
	
	 actualscorefam4();

}
 function level42fam()
 {
	
	 
	 var fam31 = $("#fam_31").val();
	 var fam32 = $("#fam_32").val();
	 var fam33 = $("#fam_33").val();
	
	 if(fam31 == 0 || fam32 == 0|| fam33 ==0 )
	 {
	 alert("Please complete previous level");
	 document.getElementById("fam_42").value= 0;
	 document.getElementById("fam_31").focus();
     }
	 
	 
	 actualscorefam4();

}
 function level51facility()
 {

	 var fam41 = $("#fam_41").val();
	 var fam42 = $("#fam_42").val();
	
	
	 if(fam41 == 0 || fam42 == 0)
	 {
	 alert("Please complete previous level");
	 document.getElementById("fam_51").value= 0;
	 document.getElementById("fam_41").focus();
     }
	 
	 
	 actualscorefam5();

}
 function level52fam()
 {
	
	 
	 var fam41 = $("#fam_41").val();
	 var fam42 = $("#fam_42").val();
	
	
	 if(fam41 == 0 || fam42 == 0)
	 {
	 alert("Please complete previous level");
	 document.getElementById("fam_52").value= 0;
	 document.getElementById("fam_41").focus();
     }
	
	 actualscorefam5();

}
  


function actualscorefam1()
 {
	// alert("1");
	 var fam11 = $("#fam_11").val();
	 var fam12 = $("#fam_12").val();
	 var fam13 = $("#fam_13").val();
	 var fam14 = $("#fam_14").val();
	
	 var level_totalfam = parseInt(fam11) + parseInt(fam12) + parseInt(fam13) + parseInt(fam14);

	 if(level_totalfam < 4)
		{	 
			
			  document.getElementById("fam_21").value=0;
			  document.getElementById("fam_31").value=0;
			  document.getElementById("fam_32").value=0;
			  document.getElementById("fam_33").value=0;
			  document.getElementById("fam_41").value=0;
			  document.getElementById("fam_42").value=0;
			  document.getElementById("fam_51").value=0;
			  document.getElementById("fam_52").value=0;
			
			  
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
	 
	 document.getElementById("level1").innerHTML= level_totalfam;
	 document.getElementById("score1").value= level_totalfam;
	 
	 var percent = parseInt(level_totalfam) * 100 / 4;
	
	 document.getElementById("achieve1").value= percent.toFixed(1);
	 document.getElementById("achievement1").innerHTML= percent.toFixed(1)+"%";
	 CategoryRankfam();
 }
 function actualscorefam2()
 {

	 var fam21 = $("#fam_21").val();
	 
	
	 var level_totalfam = parseInt(fam21);
	 
	 if(level_totalfam < 4)
		{	 
			
		
			  document.getElementById("fam_31").value=0;
			  document.getElementById("fam_32").value=0;
			  document.getElementById("fam_33").value=0;
			  document.getElementById("fam_41").value=0;
			  document.getElementById("fam_42").value=0;
			  document.getElementById("fam_51").value=0;
			  document.getElementById("fam_52").value=0;
			
			  
			
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
		
	 document.getElementById("level2").innerHTML= level_totalfam;
	 document.getElementById("score2").value= level_totalfam;
	 
	 var percent = parseInt(level_totalfam) * 100 / 1;

	document.getElementById("achieve2").value= percent.toFixed(1);
	 document.getElementById("achievement2").innerHTML= percent.toFixed(1)+"%";
	 CategoryRankfam();
 }
 function actualscorefam3()
 {

	 var fam31 = $("#fam_31").val();
	 var fam32 = $("#fam_32").val();
	 var fam33 = $("#fam_33").val();
		 
	 var level_totalfam = parseInt(fam31)+ parseInt(fam32) + parseInt(fam33);
	 
	 if(level_totalfam < 4)
		{	 
			
		
			 
			  document.getElementById("fam_41").value=0;
			  document.getElementById("fam_42").value=0;
			  document.getElementById("fam_51").value=0;
			  document.getElementById("fam_52").value=0;
			
			  
			
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
	
	 document.getElementById("level3").innerHTML= level_totalfam;
	 document.getElementById("score3").value= level_totalfam;
	 
	 var percent = parseInt(level_totalfam) * 100 / 3;
	
	document.getElementById("achieve3").value= percent.toFixed(1);
	 document.getElementById("achievement3").innerHTML= percent.toFixed(1)+"%";
	 CategoryRankfam();
 }
 function actualscorefam4()
 {
	
	 var fam41 = $("#fam_41").val();
	 var fam42 = $("#fam_42").val();
		 
	 var level_totalfam = parseInt(fam41)+ parseInt(fam42);
	
	 if(level_totalfam < 4)
		{	 
			
			
			  document.getElementById("fam_51").value=0;
			  document.getElementById("fam_52").value=0;
			
			 
			  document.getElementById("level5").innerHTML= 0;
			  
			  document.getElementById("achievement5").innerHTML= 0.0+"%";


			  document.getElementById("score5").value=0;
			  


			  document.getElementById("achieve5").value=0;
			 // document.getElementById("category-rank").innerHTML=0.0;
		}
	
	 document.getElementById("level4").innerHTML= level_totalfam;
	 document.getElementById("score4").value= level_totalfam;
	 
	 var percent = parseInt(level_totalfam) * 100 / 2;
	
	document.getElementById("achieve4").value= percent.toFixed(1);
	 document.getElementById("achievement4").innerHTML= percent.toFixed(1)+"%";
	 CategoryRankfam();
 }
 function actualscorefam5()
 {

	 var fam51 = $("#fam_51").val();
	 var fam52 = $("#fam_52").val();
	
	 var level_totalfam = parseInt(fam51) + parseInt(fam52);
	 
	
	 document.getElementById("level5").innerHTML= level_totalfam;
	 document.getElementById("score5").value= level_totalfam;
	 
	 var percent = (parseInt(level_totalfam) * 100) / 2;

	 document.getElementById("achieve5").value= percent.toFixed(1);
	 document.getElementById("achievement5").innerHTML= percent.toFixed(1)+"%";
	 CategoryRankfam();
 }
 function CategoryRankfam()
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
		
		
		var rank = (parseFloat(val1) + parseFloat(val2) + parseFloat(val3) + parseFloat(val4) + parseFloat(val5)) / 100;
		document.getElementById("category").value = rank.toFixed(1);
		document.getElementById("category-rank").innerHTML = rank.toFixed(1);
		
	
		document.getElementById('hdaction').value=1;
 }
 
 
 