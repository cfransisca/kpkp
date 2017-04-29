function GetXmlHttpObject(){
	var xmlHttp=null;
	
	try{
		xmlHttp=new XMLHttpRequest();
	}catch(e){
		xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	return xmlHttp;
}


function additemCart(id, quan){
	xmlHttp=GetXmlHttpObject();
	if(xmlHttp==null){
		alert("Browser anda tidak support");
		return;
	}

	var url="functions.php"

	url=url+"?q="+id+"&&qt="+quan;
	xmlHttp.onreadystatechange=stateChanged;
	xmlHttp.open("GET",url,true);
	xmlHttp.send(null);
	/*document.getElementById('id01').style.display='block'*/
}

function stateChanged(){
	if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){
		//document.getElementById("modalEdit").innerHTML=xmlHttp.responseText;
		//document.getElementById('modalEditt').style.display='block';
		console.log(xmlHttp.responseText);
	}
	
}