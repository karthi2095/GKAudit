
function checkyes()
{
	document.getElementById('une').innerHTML="";
	
	if(document.getElementById('tqm_11').value == "1" && document.getElementById('tqm_12').value == "1" && document.getElementById('tqm_21').value == "1" && document.getElementById('tqm_22').value == "1" && document.getElementById('tqm_31').value == "1"
	&& document.getElementById('tqm_41').value == "1" && document.getElementById('tqm_51').value == "1" && document.getElementById('tqm_52').value == "1" && document.getElementById('tm_11').value == "1" && document.getElementById('tm_12').value == "1" 
	&& document.getElementById('tm_13').value == "1" && document.getElementById('tm_21').value == "1" && document.getElementById('tm_31').value == "1" && document.getElementById('tm_41').value == "1"&& document.getElementById('tm_51').value == "1" 
	&& document.getElementById('tm_52').value == "1")
	{
		alert('Before going to Quality management all levels of tqm and teamwork will be completed');
		
		return false;
	}
}
